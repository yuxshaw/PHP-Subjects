<?php

class Fun {
    
    /**
     * 获得数据目录的路径
     *
     * @param int $sid
     *
     * @return string 路径
     */
    function data_dir($sid = 0)
    {
        if (empty($sid))
        {
            $s = 'data';
        }
        else
        {
            $s = 'user_files/';
            $s .= ceil($sid / 3000) . '/';
            $s .= $sid % 3000;
        }
        return $s;
    }
    
    /**
     * 取得当前的域名
     *
     * @access  public
     *
     * @return  string      当前的域名
     */
    function get_domain()
    {
        /* 协议 */
        $protocol = $this->http();

        /* 域名或IP地址 */
        if (isset($_SERVER['HTTP_X_FORWARDED_HOST']))
        {
            $host = $_SERVER['HTTP_X_FORWARDED_HOST'];
        }
        elseif (isset($_SERVER['HTTP_HOST']))
        {
            $host = $_SERVER['HTTP_HOST'];
        }
        else
        {
            /* 端口 */
            if (isset($_SERVER['SERVER_PORT']))
            {
                $port = ':' . $_SERVER['SERVER_PORT'];

                if ((':80' == $port && 'http://' == $protocol) || (':443' == $port && 'https://' == $protocol))
                {
                    $port = '';
                }
            }
            else
            {
                $port = '';
            }

            if (isset($_SERVER['SERVER_NAME']))
            {
                $host = $_SERVER['SERVER_NAME'] . $port;
            }
            elseif (isset($_SERVER['SERVER_ADDR']))
            {
                $host = $_SERVER['SERVER_ADDR'] . $port;
            }
        }

        return $protocol . $host;
    }
    
    /**
     * 获得 ECSHOP 当前环境的 HTTP 协议方式
     *
     * @access  public
     *
     * @return  void
     */
    function http()
    {
        return (isset($_SERVER['HTTPS']) && (strtolower($_SERVER['HTTPS']) != 'off')) ? 'https://' : 'http://';
    }
    
    
    
    
    /**
     * 截取UTF-8编码下字符串的函数
     *
     * @param   string      $str        被截取的字符串
     * @param   int         $length     截取的长度
     * @param   bool        $append     是否附加省略号
     *
     * @return  string
     */
    function sub_str($str, $length = 0, $append = true)
    {
        if (!defined('CHARSET'))
        {
            define('CHARSET', 'utf-8');
        }
        
        $str = trim($str);
        $strlength = strlen($str);

        if ($length == 0 || $length >= $strlength)
        {
            return $str;
        }
        elseif ($length < 0)
        {
            $length = $strlength + $length;
            if ($length < 0)
            {
                $length = $strlength;
            }
        }

        if (function_exists('mb_substr'))
        {
            $newstr = mb_substr($str, 0, $length, CHARSET);
        }
        elseif (function_exists('iconv_substr'))
        {
            $newstr = iconv_substr($str, 0, $length, CHARSET);
        }
        else
        {
            //$newstr = trim_right(substr($str, 0, $length));
            $newstr = substr($str, 0, $length);
        }

        if ($append && $str != $newstr)
        {
            $newstr .= '...';
        }

        return $newstr;
    }
    
    
    /**
     *  将一个字串中含有全角的数字字符、字母、空格或'%+-()'字符转换为相应半角字符
     *
     * @access  public
     * @param   string       $str         待转换字串
     *
     * @return  string       $str         处理后字串
     */
    function make_semiangle($str)
    {
        $arr = array('０' => '0', '１' => '1', '２' => '2', '３' => '3', '４' => '4',
                     '５' => '5', '６' => '6', '７' => '7', '８' => '8', '９' => '9',
                     'Ａ' => 'A', 'Ｂ' => 'B', 'Ｃ' => 'C', 'Ｄ' => 'D', 'Ｅ' => 'E',
                     'Ｆ' => 'F', 'Ｇ' => 'G', 'Ｈ' => 'H', 'Ｉ' => 'I', 'Ｊ' => 'J',
                     'Ｋ' => 'K', 'Ｌ' => 'L', 'Ｍ' => 'M', 'Ｎ' => 'N', 'Ｏ' => 'O',
                     'Ｐ' => 'P', 'Ｑ' => 'Q', 'Ｒ' => 'R', 'Ｓ' => 'S', 'Ｔ' => 'T',
                     'Ｕ' => 'U', 'Ｖ' => 'V', 'Ｗ' => 'W', 'Ｘ' => 'X', 'Ｙ' => 'Y',
                     'Ｚ' => 'Z', 'ａ' => 'a', 'ｂ' => 'b', 'ｃ' => 'c', 'ｄ' => 'd',
                     'ｅ' => 'e', 'ｆ' => 'f', 'ｇ' => 'g', 'ｈ' => 'h', 'ｉ' => 'i',
                     'ｊ' => 'j', 'ｋ' => 'k', 'ｌ' => 'l', 'ｍ' => 'm', 'ｎ' => 'n',
                     'ｏ' => 'o', 'ｐ' => 'p', 'ｑ' => 'q', 'ｒ' => 'r', 'ｓ' => 's',
                     'ｔ' => 't', 'ｕ' => 'u', 'ｖ' => 'v', 'ｗ' => 'w', 'ｘ' => 'x',
                     'ｙ' => 'y', 'ｚ' => 'z',
                     '（' => '(', '）' => ')', '〔' => '[', '〕' => ']', '【' => '[',
                     '】' => ']', '〖' => '[', '〗' => ']', '“' => '[', '”' => ']',
                     '‘' => '[', '’' => ']', '｛' => '{', '｝' => '}', '《' => '<',
                     '》' => '>',
                     '％' => '%', '＋' => '+', '—' => '-', '－' => '-', '～' => '-',
                     '：' => ':', '。' => '.', '、' => ',', '，' => '.', '、' => '.',
                     '；' => ',', '？' => '?', '！' => '!', '…' => '-', '‖' => '|',
                     '”' => '"', '’' => '`', '‘' => '`', '｜' => '|', '〃' => '"',
                     '　' => ' ');

        return strtr($str, $arr);
    }
    
    
    
    /**
     * 获得用户的真实IP地址
     *
     * @access  public
     * @return  string
     */
    function real_ip()
    {
        static $realip = NULL;

        if ($realip !== NULL)
        {
            return $realip;
        }

        if(isset($_COOKIE['real_ipd']) && !empty($_COOKIE['real_ipd'])){

            $realip = $_COOKIE['real_ipd'];  

            return $realip;

        }

        if (isset($_SERVER))
        {
            if (isset($_SERVER['HTTP_X_FORWARDED_FOR']))
            {
                $arr = explode(',', $_SERVER['HTTP_X_FORWARDED_FOR']);

                /* 取X-Forwarded-For中第一个非unknown的有效IP字符串 */
                foreach ($arr AS $ip)
                {
                    $ip = trim($ip);

                    if ($ip != 'unknown')
                    {
                        $realip = $ip;

                        break;
                    }
                }
            }
            elseif (isset($_SERVER['HTTP_CLIENT_IP']))
            {
                $realip = $_SERVER['HTTP_CLIENT_IP'];
            }
            else
            {
                if (isset($_SERVER['REMOTE_ADDR']))
                {
                    $realip = $_SERVER['REMOTE_ADDR'];
                }
                else
                {
                    $realip = '0.0.0.0';
                }
            }
        }
        else
        {
            if (getenv('HTTP_X_FORWARDED_FOR'))
            {
                $realip = getenv('HTTP_X_FORWARDED_FOR');
            }
            elseif (getenv('HTTP_CLIENT_IP'))
            {
                $realip = getenv('HTTP_CLIENT_IP');
            }
            else
            {
                $realip = getenv('REMOTE_ADDR');
            }
        }

        preg_match("/[\d\.]{7,15}/", $realip, $onlineip);
        $realip = !empty($onlineip[0]) ? $onlineip[0] : '0.0.0.0';
        setcookie("real_ipd", $realip, time()+36000, "/");  
        return $realip;
    }

    
    /**
     * 计算字符串的长度（汉字按照两个字符计算）
     *
     * @param   string      $str        字符串
     *
     * @return  int
     */
    function str_len($str)
    {
        $length = strlen(preg_replace('/[\x00-\x7F]/', '', $str));

        if ($length)
        {
            return strlen($str) - $length + intval($length / 3) * 2;
        }
        else
        {
            return strlen($str);
        }
    }
    
    
    /**
     * 获得用户操作系统的换行符
     *
     * @access  public
     * @return  string
     */
    function get_crlf()
    {
    /* LF (Line Feed, 0x0A, \N) 和 CR(Carriage Return, 0x0D, \R) */
        if (stristr($_SERVER['HTTP_USER_AGENT'], 'Win'))
        {
            $the_crlf = '\r\n';
        }
        elseif (stristr($_SERVER['HTTP_USER_AGENT'], 'Mac'))
        {
            $the_crlf = '\r'; // for old MAC OS
        }
        else
        {
            $the_crlf = '\n';
        }

        return $the_crlf;
    }
    
    
    
    /**
     * 检查目标文件夹是否存在，如果不存在则自动创建该目录
     *
     * @access      public
     * @param       string      folder     目录路径。不能使用相对于网站根目录的URL
     *
     * @return      bool
     */
    function make_dir($folder)
    {
        $reval = false;

        if (!file_exists($folder))
        {
            /* 如果目录不存在则尝试创建该目录 */
            @umask(0);

            /* 将目录路径拆分成数组 */
            preg_match_all('/([^\/]*)\/?/i', $folder, $atmp);

            /* 如果第一个字符为/则当作物理路径处理 */
            $base = ($atmp[0][0] == '/') ? '/' : '';

            /* 遍历包含路径信息的数组 */
            foreach ($atmp[1] AS $val)
            {
                if ('' != $val)
                {
                    $base .= $val;

                    if ('..' == $val || '.' == $val)
                    {
                        /* 如果目录为.或者..则直接补/继续下一个循环 */
                        $base .= '/';

                        continue;
                    }
                }
                else
                {
                    continue;
                }

                $base .= '/';

                if (!file_exists($base))
                {
                    /* 尝试创建目录，如果创建失败则继续循环 */
                    if (@mkdir(rtrim($base, '/'), 0777))
                    {
                        @chmod($base, 0777);
                        $reval = true;
                    }
                }
            }
        }
        else
        {
            /* 路径已经存在。返回该路径是不是一个目录 */
            $reval = is_dir($folder);
        }

        clearstatcache();

        return $reval;
    }
    
    /**
     * 递归方式的对变量中的特殊字符进行转义
     *
     * @access  public
     * @param   mix     $value
     *
     * @return  mix
     */
    function addslashes_deep($value)
    {
        if (empty($value))
        {
            return $value;
        }
        else
        {
            return is_array($value) ? array_map('addslashes_deep', $value) : addslashes($value);
        }
    }
    
}