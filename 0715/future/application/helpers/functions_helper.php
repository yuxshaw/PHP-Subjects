<?php

    function pre($arr){
        echo '<pre>';
        print_r($arr);
        echo '</pre>';
        exit;
    }

    /**
     * @param $url
     * @param $total
     * @param $limit
     * @param int $segment
     * @param int $num_links
     * @return mixed
     */
    function page($url,$total,$limit,$segment = 3,$num_links = 1){
        $CI = & get_instance();
        $CI->load->library('pagination');

        $config['base_url'] = $url;
        $config['total_rows'] = $total;
        $config['per_page'] = $limit;
        $config['uri_segment'] = $segment;
        $config['num_links'] = $num_links;
        $config['full_tag_open'] = '<ul class="pagination">';
        $config['full_tag_close'] = '</ul>';
        $config['first_link'] = '首页';
        $config['last_link'] = '尾页';
        $config['first_tag_open'] = '<li>';
        $config['first_tag_close'] = '</li>';
        $config['last_tag_open'] = '<li>';
        $config['last_tag_close'] = '</li>';
        $config['next_link'] = '下一页';
        $config['prev_link'] = '上一页';
        $config['next_tag_open'] = '<li>';
        $config['next_tag_close'] = '</li>';
        $config['prev_tag_open'] = '<li>';
        $config['prev_tag_close'] = '</li>';
        $config['cur_tag_open'] = '<li class="active"><a href="javascript:;">';
        $config['cur_tag_close'] = '</a></li>';
        $config['num_tag_open'] = '<li>';
        $config['num_tag_close'] = '</li>';
        $CI->pagination->initialize($config);
        return $CI->pagination->create_links();
    }


    /**
     *
     * 字符截取
     * @param string $string
     * @param int $start
     * @param int $length
     * @param string $charset
     * @param string $dot
     *
     * @return string
     */
    function str_cut(&$string, $start, $length, $charset = "utf-8", $dot = '...')
    {
        if (function_exists('mb_substr')) {
            if (mb_strlen($string, $charset) > $length) {
                return mb_substr($string, $start, $length, $charset) . $dot;
            }
            return mb_substr($string, $start, $length, $charset);

        } else if (function_exists('iconv_substr')) {
            if (iconv_strlen($string, $charset) > $length) {
                return iconv_substr($string, $start, $length, $charset) . $dot;
            }
            return iconv_substr($string, $start, $length, $charset);
        }

        $charset = strtolower($charset);
        switch ($charset) {
            case "utf-8" :
                preg_match_all("/[\x01-\x7f]|[\xc2-\xdf][\x80-\xbf]|\xe0[\xa0-\xbf][\x80-\xbf]|[\xe1-\xef][\x80-\xbf][\x80-\xbf]|\xf0[\x90-\xbf][\x80-\xbf][\x80-\xbf]|[\xf1-\xf7][\x80-\xbf][\x80-\xbf][\x80-\xbf]/", $string, $ar);
                if (func_num_args() >= 3) {
                    if (count($ar[0]) > $length) {
                        return join("", array_slice($ar[0], $start, $length)) . $dot;
                    }
                    return join("", array_slice($ar[0], $start, $length));
                } else {
                    return join("", array_slice($ar[0], $start));
                }
                break;
            default:
                $start = $start * 2;
                $length = $length * 2;
                $strlen = strlen($string);
                for ($i = 0; $i < $strlen; $i++) {
                    if ($i >= $start && $i < ($start + $length)) {
                        if (ord(substr($string, $i, 1)) > 129) $tmpstr .= substr($string, $i, 2);
                        else $tmpstr .= substr($string, $i, 1);
                    }
                    if (ord(substr($string, $i, 1)) > 129) $i++;
                }
                if (strlen($tmpstr) < $strlen) $tmpstr .= $dot;

                return $tmpstr;
        }
    }