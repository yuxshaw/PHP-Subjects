<?php
    $data = file_get_contents("http://www.youku.com");
//    var_dump($data);
    file_put_contents('./pages/youku.html',$data);
