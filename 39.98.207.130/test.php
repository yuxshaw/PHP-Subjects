<?php

    $appkey = 'd30755de00a31a96b657b3e71b363aa8';

    //************4.最新趣图************
    $url = "http://japi.juhe.cn/joke/img/text.from";
    $params = array(
        "page" => "",//当前页数,默认1
        "pagesize" => "",//每次返回条数,默认1,最大20
        "key" => $appkey,//您申请的key
    );
    $paramstring = http_build_query($params);
    $content = juhecurl($url, $paramstring);
    $result = json_decode($content, true);
    if ($result) {
        if ($result['error_code'] == '0') {
            print_r($result);
//            $data = json_decode($result,1);
//            $joke = $data['content'];
//            print_r($joke);
        } else {
            echo $result['error_code'] . ":" . $result['reason'];
        }
    } else {
        echo "请求失败";
    }
    //**************************************************


    /**
     * 请求接口返回内容
     * @param string $url [请求的URL地址]
     * @param string $params [请求的参数]
     * @param int $ipost [是否采用POST形式]
     * @return  string
     */
    function juhecurl($url, $params = false, $ispost = 0)
    {
        $httpInfo = array();
        $ch = curl_init();

        curl_setopt($ch, CURLOPT_HTTP_VERSION, CURL_HTTP_VERSION_1_1);
        curl_setopt($ch, CURLOPT_USERAGENT, 'JuheData');
        curl_setopt($ch, CURLOPT_CONNECTTIMEOUT, 60);
        curl_setopt($ch, CURLOPT_TIMEOUT, 60);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLOPT_FOLLOWLOCATION, true);
        if ($ispost) {
            curl_setopt($ch, CURLOPT_POST, true);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $params);
            curl_setopt($ch, CURLOPT_URL, $url);
        } else {
            if ($params) {
                curl_setopt($ch, CURLOPT_URL, $url . '?' . $params);
            } else {
                curl_setopt($ch, CURLOPT_URL, $url);
            }
        }
        $response = curl_exec($ch);
        if ($response === FALSE) {
            //echo "cURL Error: " . curl_error($ch);
            return false;
        }
        $httpCode = curl_getinfo($ch, CURLINFO_HTTP_CODE);
        $httpInfo = array_merge($httpInfo, curl_getinfo($ch));
        curl_close($ch);
        return $response;
    }