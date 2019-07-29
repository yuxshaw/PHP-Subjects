<?php

    include ('api.class.php');
    // 素材管理

    class material extends api {
        // 添加临时素材
        public function add_mate(){
            // 因为这个接口是post请求，所以一般都需要数据
            $access_token = $this->get_access_token();
            $url = "https://api.weixin.qq.com/cgi-bin/media/upload?access_token={$access_token}&type=image";
            $img = realpath('./images/image6.jpg');
            $data = array('media' => new CURLFile($img));
            $status = $this->http_request($url,$data);
            var_dump($status);
        }

        // 获取临时素材
        public function get_mate($media_id){
            $url = "https://api.weixin.qq.com/cgi-bin/media/get?access_token={$this->get_access_token()}&media_id={$media_id}";
            return $this->http_request($url);
        }

        // 添加永久素材
        public function add_material(){
            // 因为这个接口是post请求，所以一般都需要数据
            $access_token = $this->get_access_token();
            $url = "https://api.weixin.qq.com/cgi-bin/material/add_material?access_token={$access_token}&type=image";
            $img = realpath('./images/image1.jpg');
            $data = array('media' => new CURLFile($img));
            $status = $this->http_request($url,$data);
            var_dump($status);
        }
    }

    $mate = new material('wx564aae92c16fb771','b036332bbdb6bb837b36481440c5d066');

//    $mate->add_mate();  // 添加素材

//    $media_id = '_mmTV0xl0roPXRQhK9XNcQkzfnchAQ6R-hVWdjNa4wlLkRAUXnKzGxLuHJUqPPQA';
//    header('content-type:image/jpeg');
//    echo $mate->get_mate($media_id);    // 获取素材

    $mate->add_material();


//    echo $mate->get_access_token();     // 测试获取access_token








    // image1.jpg   _mmTV0xl0roPXRQhK9XNcQkzfnchAQ6R-hVWdjNa4wlLkRAUXnKzGxLuHJUqPPQA
    // image2.jpg   7eEun-j-QW_Uxvk_iexPuyVSnv44sspr8B4Nwq1KUOna4HESg3P8HJsFkiqlHvJ8
    // image3.jpg   R7U3FsnWb7quLY3NOLmcRldx_QYpcQlfXnVTO0BUarISvzyoKY9HOfM0zkellsiF
    // image4.jpg   2O9DhCxocK-_1ZwyzHSzDxI5jcoKFTjUbtVMNxIyMvuWjITo7uYgmOeQT-CV5wLq
    // image5.jpg   oDjTxZojOs-iNS4zQsNhYbfa16ZpEiOge161mFIwQoRVXTwKOlh8sa1uS94XmK9w
    // image6.jpg   EuG6xsuhKNhYRGzXbuL6SV-BkBQFCzaUOydtX-oi_lPm3SbnTLP-ig_KwECkuPC3

?>