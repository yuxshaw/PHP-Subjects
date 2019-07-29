<?php

    include ('api.class.php');

    class wechat{

        public $postObj;
        public $fromUsername;
        public $toUsername;
        public $msgtype;
        public $content;
        public $time;
        public $MediaId;
        public $Event;
        public $EventKey;

        public function get_url(){
            return $_SERVER['REQUEST_SCHEME'].'://'.rtrim($_SERVER['HTTP_HOST'],'/');
        }


        public function valid(){
            $echostr = $_GET['echostr'];        // 随机字符串
            if ($this->checkSignature()){
                echo $echostr;
            }else{
                echo 'error';
                exit;
            }
        }

        public function  checkSignature(){
            $signature = $_GET['signature'];    // 微信加密签名
            $timestamp = $_GET['timestamp'];    // 时间戳
            $nonce = $_GET['nonce'];            // 随机数


            $tmpArr = array(_TOKEN_,$timestamp,$nonce);
            sort($tmpArr, SORT_STRING);
            $tmpStr = implode( $tmpArr );
            $tmpStr = sha1( $tmpStr );      // 我们自己生成的加密签名

            if ($signature == $tmpStr){
                return true;
            }else{
                return false;
            }
        }


        public function responseMsg(){  // 响应消息
            // 接收消息
            $postStr = $GLOBALS["HTTP_RAW_POST_DATA"];      //  php7 以下接收原生post的方式
            // $postStr = file_get_contents('php://input');   //  php7 以上接收原生post的方式


            if (empty($postStr)){
                exit;
            }

            // 把XML数据转换成为PHP的对象类型
            $this->postObj = simplexml_load_string($postStr, 'SimpleXMLElement', LIBXML_NOCDATA);
            $this->fromUsername = $this->postObj->FromUserName;     // 用户
            $this->toUsername = $this->postObj->ToUserName;     // 开发者
            $this->msgtype = $this->postObj->MsgType;       // 消息类型
            $this->content = $this->postObj->Content;       // 消息内容
            $this->MediaId = $this->postObj->MediaId;       // 消息内容
            $this->time = time();
            $this->Event = $this->postObj->Event;
            $this->EventKey = $this->postObj->EventKey;

            if ($this->msgtype == 'text') {  //处理文本消息
                $this->receiveText();
            }elseif ($this->msgtype == 'image'){ // 处理图片信息
                $this->receiveImage();
            }elseif ($this->msgtype == 'voice'){ // 处理语音信息
                $media_id = $this->MediaId;
                file_put_contents('log.txt',$media_id);
                $this->receiveVoice();
            }elseif ($this->msgtype == 'event'){ // 处理事件类型
                $this->receiveEvent();
            }
        }

//      ================处理消息 开始================
            public function receiveText(){
                // 处理文本消息
                if ($this->content == '打游戏'){
                    $txt = '不来，辣鸡';
                    $this->replayText($txt); // 回复文本信息
                }elseif ($this->content == '语音'){
                    $media_id = 'ep048V61KRqxpK5EPQJnlq8z0HPmqpB_PpErc-xfKLVtHDyE1GmxCo04gzPTPHeD';
                    $this->replayVoice($media_id); // 回复文本信息
                }elseif ($this->content == '音乐'){
                    $Title = '心如止水';
                    $Description = 'Ice Paper - 心如止水';
                    $MusicUrl = $this->get_url().'/music/Ice Paper - 心如止水.mp3';
                    $HQMusicUrl = $this->get_url().'/music/Ice Paper - 心如止水.mp3';
                    $this->replayMusic($Title,$Description,$MusicUrl,$HQMusicUrl);
                }elseif ($this->content == '新闻'){
                    $article = array(
                        array(
                            'title' => '标题一',
                            'description' => '描述一',
                            'picurl' => $this->get_url().'/images/image1.jpg',
                            'url' => $this->get_url().'/index.html'
                        ),
                        array(
                            'title' => '标题二',
                            'description' => '描述二',
                            'picurl' => $this->get_url().'/images/image2.jpg',
                            'url' => $this->get_url().'/index.html'
                        ),
                        array(
                            'title' => '标题三',
                            'description' => '描述三',
                            'picurl' => $this->get_url().'/images/image3.jpg',
                            'url' => $this->get_url().'/index.html'
                        ),
                        array(
                            'title' => '标题四',
                            'description' => '描述四',
                            'picurl' => $this->get_url().'/images/image4.jpg',
                            'url' => $this->get_url().'/index.html'
                        ),
                    );
                    $this->replayNews($article);
                }elseif ($this->content == '图片'){
                    $arr = array(
                        "_mmTV0xl0roPXRQhK9XNcQkzfnchAQ6R-hVWdjNa4wlLkRAUXnKzGxLuHJUqPPQA",
                        "7eEun-j-QW_Uxvk_iexPuyVSnv44sspr8B4Nwq1KUOna4HESg3P8HJsFkiqlHvJ8",
                        "R7U3FsnWb7quLY3NOLmcRldx_QYpcQlfXnVTO0BUarISvzyoKY9HOfM0zkellsiF",
                        "2O9DhCxocK-_1ZwyzHSzDxI5jcoKFTjUbtVMNxIyMvuWjITo7uYgmOeQT-CV5wLq",
                        "oDjTxZojOs-iNS4zQsNhYbfa16ZpEiOge161mFIwQoRVXTwKOlh8sa1uS94XmK9w",
                        "EuG6xsuhKNhYRGzXbuL6SV-BkBQFCzaUOydtX-oi_lPm3SbnTLP-ig_KwECkuPC3"
                    );
                    $media_id = $arr[rand(0,5)];
                    $this->replayImage($media_id);
                }
            }

            public function receiveImage(){
                $media_id = $this->MediaId;
                $this->replayImage($media_id);   // 回复图片信息
            }

            public function receiveVoice(){
                $media_id = $this->MediaId;
                $this->replayVoice($media_id);   // 回复语音信息
            }

            public function receiveEvent(){
                if ($this->Event == subscribe){     //  关注事件
                    $txt = "感谢关注秋醴！";
                    $this->replayText($txt);
                }elseif ($this->Event == 'unsubscribe'){    // 取消关注事件
                    // 可以把已经关注的用户进行解绑

                }elseif ($this->Event == 'CLICK'){    // 点击事件
                    if ($this->EventKey == 'ZAN'){
                        $txt = "小伙子，你的路走的很宽啊！";
                        $this->replayText($txt);
                    }if ($this->EventKey == 'GAME'){
                        $txt = "不打，辣鸡！";
                        $this->replayText($txt);
                    }if ($this->EventKey == 'MUSIC'){
                        $Title = '心如止水';
                        $Description = 'Ice Paper - 心如止水';
                        $MusicUrl = $this->get_url().'/music/Ice Paper - 心如止水.mp3';
                        $HQMusicUrl = $this->get_url().'/music/Ice Paper - 心如止水.mp3';
                        $this->replayMusic($Title,$Description,$MusicUrl,$HQMusicUrl);
                    }if ($this->EventKey == 'JOKE'){
                        $api = new api('wx564aae92c16fb771','b036332bbdb6bb837b36481440c5d066');
                        $txt = $api->get_joke();
                        $this->replayText($txt);
                    }if ($this->EventKey == 'NEWS'){
                        $article = array(
                            array(
                                'title' => '标题一',
                                'description' => '描述一',
                                'picurl' => $this->get_url().'/images/image1.jpg',
                                'url' => $this->get_url().'/index.html'
                            ),
                            array(
                                'title' => '标题二',
                                'description' => '描述二',
                                'picurl' => $this->get_url().'/images/image2.jpg',
                                'url' => $this->get_url().'/index.html'
                            ),
                            array(
                                'title' => '标题三',
                                'description' => '描述三',
                                'picurl' => $this->get_url().'/images/image3.jpg',
                                'url' => $this->get_url().'/index.html'
                            ),
                            array(
                                'title' => '标题四',
                                'description' => '描述四',
                                'picurl' => $this->get_url().'/images/image4.jpg',
                                'url' => $this->get_url().'/index.html'
                            ),
                        );
                        $this->replayNews($article);
                    }
                }
            }

//      ================处理消息 结束================



//      ================回复消息 开始================
            // 回复文本消息
            public function replayText($txt){
                $xml = "<xml>
                          <ToUserName><![CDATA[%s]]></ToUserName>
                          <FromUserName><![CDATA[%s]]></FromUserName>
                          <CreateTime>%s</CreateTime>
                          <MsgType><![CDATA[text]]></MsgType>
                          <Content><![CDATA[%s]]></Content>
                        </xml>";
                printf($xml,$this->fromUsername,$this->toUsername,$this->time,$txt);
            }


            // 回复图片信息
            public function replayImage($media_id){
                $xml = "<xml>
                          <ToUserName><![CDATA[%s]]></ToUserName>
                          <FromUserName><![CDATA[%s]]></FromUserName>
                          <CreateTime>%s</CreateTime>
                          <MsgType><![CDATA[image]]></MsgType>
                          <Image>
                            <MediaId><![CDATA[%s]]></MediaId>
                          </Image>
                        </xml>";
                printf($xml,$this->fromUsername,$this->toUsername,$this->time,$media_id);
            }


            // 回复语音信息
            public function replayVoice($media_id){
                $xml = "<xml>
                           <ToUserName><![CDATA[%s]]></ToUserName>
                           <FromUserName><![CDATA[%s]]></FromUserName>
                           <CreateTime>%s</CreateTime>
                           <MsgType><![CDATA[voice]]></MsgType>
                           <Voice>
                             <MediaId><![CDATA[%s]]></MediaId>
                           </Voice>
                         </xml>";
                printf($xml,$this->fromUsername,$this->toUsername,$this->time,$media_id);
            }


            // 回复音乐信息
            public function replayMusic($Title,$Description,$MusicUrl,$HQMusicUrl){
                $xml = "<xml>
                          <ToUserName><![CDATA[%s]]></ToUserName>
                          <FromUserName><![CDATA[%s]]></FromUserName>
                          <CreateTime>%s</CreateTime>
                          <MsgType><![CDATA[music]]></MsgType>
                          <Music>
                            <Title><![CDATA[%s]]></Title>
                            <Description><![CDATA[%s]]></Description>
                            <MusicUrl><![CDATA[%s]]></MusicUrl>
                            <HQMusicUrl><![CDATA[%s]]></HQMusicUrl>
                          </Music>
                        </xml>";
                printf($xml,$this->fromUsername,$this->toUsername,$this->time,$Title,$Description,$MusicUrl,$HQMusicUrl);
            }


            // 回复图文信息
            public function replayNews($article){

            $list ="";

            foreach ($article as $v){
                $list .= "<item>
                              <Title><![CDATA[$v[title]]]></Title>
                              <Description><![CDATA[$v[description]]]></Description>
                              <PicUrl><![CDATA[$v[picurl]]]></PicUrl>
                              <Url><![CDATA[$v[url]]]></Url>
                            </item>";
            }

                $xml = "<xml>
                          <ToUserName><![CDATA[%s]]></ToUserName>
                          <FromUserName><![CDATA[%s]]></FromUserName>
                          <CreateTime>%s</CreateTime>
                          <MsgType><![CDATA[news]]></MsgType>
                          <ArticleCount>".count($article)."</ArticleCount>
                          <Articles>
                            ".$list."
                          </Articles>
                        </xml>";
                printf($xml,$this->fromUsername,$this->toUsername,$this->time);
            }

//        ================回复消息 结束================

    }

?>