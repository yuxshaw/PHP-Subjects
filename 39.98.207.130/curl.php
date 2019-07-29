<?php
    // curl 模拟提交
    /**
     * 1. 需要先开启PHP的curl扩展   phpinfo()
     * 2. curl 初始化
     * 3. curl 设置（配置项）
     * 4. curl 执行（执行curl）
     * 5. curl 关闭（关闭curl）
     *
     */

    $url = 'http://39.98.207.130/data.php';
    $data = array('a'=>'bbb','b'=>'bbb');

//    echo http_request('http://www.baidu,com');
    echo http_request($url,$data);

    function http_request($url,$data=''){

        // 2. curl 初始化
        $ch = curl_init();

        // 3. curl 设置（配置项）
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);

        if (!empty($data)){
            curl_setopt($ch, CURLOPT_POST, 1);
            curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
        }

        curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, false);

        // 4. curl 执行（执行curl）
        $result = curl_exec($ch);

        // 5. curl 关闭（关闭curl）
        curl_close($ch);


        return $result;

    }





