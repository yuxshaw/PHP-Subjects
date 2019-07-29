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
    class api{

//    appID         wx564aae92c16fb771
//    appsecret     b036332bbdb6bb837b36481440c5d066

        public $appID;
        public $appsecret;

        public function __construct($appID,$appsecret){
            $this->appID = $appID;
            $this->appsecret = $appsecret;
        }

        public function get_url(){
            return $_SERVER['REQUEST_SCHEME'].'://'.rtrim($_SERVER['HTTP_HOST'],'/');
        }

        // 创建自定义菜单
        public function create_menu(){
            $url = "https://api.weixin.qq.com/cgi-bin/menu/create?access_token=".$this->get_access_token();
            $data = '{
                 "button":[
                 {
                        "type":"click",
                        "name":"打游戏",
                        "key":"GAME"
                 },
                 {    
                      "name":"资讯",
                       "sub_button":[
                       {    
                           "type":"click",
                           "name":"音乐",
                           "key":"MUSIC"
                        },
                        {
                           "type":"click",
                           "name":"段子",
                           "key":"JOKE"
                        },
                        {
                           "type":"click",
                           "name":"新闻",
                           "key":"NEWS"
                        }]
                  },
                  {
                       "name":"菜单",
                       "sub_button":[
                       {    
                           "type":"view",
                           "name":"搜索",
                           "url":"http://www.baidu.com/"
                        },
                        {
                           "type":"view",
                           "name":"test",
                           "url":"'.$this->get_url().'/jssdk.php"
                        },
                        {
                           "type":"click",
                           "name":"赞一下",
                           "key":"ZAN"
                        }]
                  }]
             }';
            $status = $this->http_request($url,$data);
            var_dump($status);
        }


        // 获取笑话接口
        public function get_joke(){
            $key = 'd30755de00a31a96b657b3e71b363aa8';
            $url = "http://v.juhe.cn/joke/randJoke.php?key={$key}";
            $data = $this->http_request($url);
            $data = json_decode($data,1);
            $joke = $data['result'];
            foreach ($joke as $item){
                $joke_arr = $item['content'];
            }
            return $joke_arr;
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
    }

?>