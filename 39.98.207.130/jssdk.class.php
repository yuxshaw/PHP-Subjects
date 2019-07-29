<?php

    class jssdk{
        public $appID;
        public $appsecret;

        public function __construct($appID,$appsecret){
            $this->appID = $appID;
            $this->appsecret = $appsecret;
        }

        public function get_access_token(){     // 获取access_token

            /*<------------------------------------------------------------>*/
            // 构造access_token缓存文件名
            $path = './cache/'.md5($this->appID.$this->appsecret).'_assecc_token.txt';
            $time = time();

            if (file_exists($path) && is_file($path)){
                // 文件已存在    判断文件是否过期
                if (filectime($path)+7000 < $time){ //acess_token过期了
                    // 重新获取access_token 写到文件里
                    $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$this->appID}&secret={$this->appsecret}";
                    $data =  $this->http_request($url);
                    $data = json_decode($data,1);
                    $access_token = $data['access_token'];
                    file_put_contents($path,$access_token);
                    return $access_token;
                }else{
                    // 文件存在并且没有过期   直接读取文件
                    return file_get_contents($path);
                }
            }else{
                // 文件不存在    重新获取access_token 写到文件里
                $url = "https://api.weixin.qq.com/cgi-bin/token?grant_type=client_credential&appid={$this->appID}&secret={$this->appsecret}";
                $data =  $this->http_request($url);
                $data = json_decode($data,1);
                $access_token = $data['access_token'];
                file_put_contents($path,$access_token);
                return $access_token;
            }
            /*<------------------------------------------------------------>*/
        }




        public function get_jsapi_ticket(){     // 获取jsapi_ticket

            /*<------------------------------------------------------------>*/
            // 构造jsapi_ticket缓存文件名
            $path = './cache/'.md5($this->appID.$this->appsecret).'_jsapi_ticket.txt';
            $time = time();

            if (file_exists($path) && is_file($path)){
                // 文件已存在    判断文件是否过期
                if (filectime($path)+7000 < $time){ //jsapi_ticket过期了
                    // 重新获取jsapi_ticket 写到文件里
                    $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token={$this->get_access_token()}&type=jsapi";
                    $data =  $this->http_request($url);
                    $data = json_decode($data,1);
                    $jsapi_ticket = $data['ticket'];
                    file_put_contents($path,$jsapi_ticket);
                    return $jsapi_ticket;
                }else{
                    // 文件存在并且没有过期   直接读取文件
                    return file_get_contents($path);
                }
            }else{
                // 文件不存在    重新获取jsapi_ticket 写到文件里
                $url = "https://api.weixin.qq.com/cgi-bin/ticket/getticket?access_token={$this->get_access_token()}&type=jsapi";
                $data =  $this->http_request($url);
                $data = json_decode($data,1);
                $jsapi_ticket = $data['ticket'];
                file_put_contents($path,$jsapi_ticket);
                return $jsapi_ticket;
            }
            /*<------------------------------------------------------------>*/
        }


        public function http_request($url,$data=''){    // 模拟提交方法

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
            $result =  curl_exec($ch);

            // 5. curl 关闭（关闭curl）
            curl_close($ch);
            return $result;
        }


        public function get_noncestr(){
            $str = "1qazxsw23edcvfr45tgbnhy67ujmki89olp0";
            $nonc = '';
            for ($i=0; $i<15; $i++){
                $nonc .= $str[rand(0,strlen($str))];
            }
            return $nonc;
        }

        // 获取当前url
        public function current_url(){
            return $_SERVER['REQUEST_SCHEME'].'://'.rtrim($_SERVER['HTTP_HOST'],'/').$_SERVER['SCRIPT_NAME'];
        }

        // 计算签名
        public function signature(){
            $noncestr = $this->get_noncestr();
            $jsapi_ticket = $this->get_jsapi_ticket();
            $timestamp = time();
            $url = $this->current_url();

            $tmpArr = array(
                '$noncestr='.$noncestr,
                '$jsapi_ticket='.$jsapi_ticket,
                '$timestamp='.$timestamp,
                '$url='.$url
            );

            sort($tmpArr, SORT_STRING);
            $tmpStr = implode($tmpArr,'&');
            $sign = sha1( $tmpStr );      // 我们自己生成的jssdk加密签名

            return array(
                'appId' => $this->appID,
                'timestamp' => $timestamp,
                'nonceStr' => $noncestr,
                'signature' => $sign
            );
        }


    }

?>