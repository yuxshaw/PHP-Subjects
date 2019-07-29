<?php
    // 通用函数库

    // 查询语句
    /**
     * 查询一条数据
     * @param $sql  string  SQL语句
     * @return array|null
     */
    function get_one($sql){
        global $conn;
        $res = mysqli_query($conn,$sql);
        if ($res && mysqli_num_rows($res) > 0){
            $data = mysqli_fetch_assoc($res);
        }
        return $data;
    }

    /**
     * 查询多条语句
     * @param $sql string sql语句
     * @return array
     */
    function get_all($sql){
        // 查询
        global $conn;
        $res = mysqli_query($conn, $sql); // 参数1：链接名；参数2：sql语句
        $data = [];
        if ($res && mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $data[] = $row;
            }
        }
        return $data;
//        return object_array($data);
    }


    // 修改语句

    /**
     * 修改数据记录
     * @param $table  string  数据表名
     * @param $data  array  修改的数据
     * @param $condition string  SQL条件语句
     * @return int
     */
    function update($table, $data, $condition){
        global $conn;
        $str = '';
        foreach ($data as $k => $v){
            $str .= "`$k` = '$v',";
        }
        $str = rtrim($str, ',');
        $sql = "UPDATE $table SET $str WHERE $condition";
        $res = mysqli_query($conn, $sql);
        if($res){
            return 1;
        }else{
            return 0;
        }
    }


    // 添加语句

    /**
     * 添加信息记录
     * @param $table  string  数据表名
     * @param $data  array  添加的数据
     * @return int
     */
    function add( $table, $data){
        global $conn;
        // 拼接SQL语句
        $sql = "INSERT INTO $table ";
        $sql .= "(`".implode("`,`", array_keys($data))."`) ";   // 拼接字段
        $sql .= "VALUES ('".implode("','",$data)."')";      // 拼接值

        $res = mysqli_query($conn, $sql);
        if ($res && mysqli_insert_id($conn) > 0){
//            return 1;
            return mysqli_insert_id($conn);
        }else{
            return 0;
        }
    }

    // 删除语句
    /**
     * 删除一条记录
     * @param $table  string  数据表名
     * @param $condition  string  SQL条件语句
     * @return int
     */
    function del($table, $condition){
        global $conn;
        $sql = "DELETE FROM $table WHERE $condition";
        $res = mysqli_query($conn, $sql);
        if($res && mysqli_affected_rows($conn) > 0){
            return 1;
        }else{
            return 0;
        }
    }


    /**
     * 提示跳转
     * @param $msg string 提示信息
     * @param string $url  要跳转的地址
     */
    function msg_jump($msg, $url=''){
        if ($url != '') {
            echo "<script>alert('$msg');location.href='$url';</script>";
        } else {
            echo "<script>alert('$msg');history.back(-1);</script>";
        }
    }


    //stdClass Object对象 转为 array数组
    /**
     * @param $array array 数组
     * @return array
     */
    function object_array($array) {
        if(is_object($array)) {     // 判断是否为对象
            $array = (array)$array;     // 将对象转换为数组
        } if(is_array($array)) {    // 判断是否为数组
            foreach($array as $key=>$value) {
                $array[$key] = object_array($value);
            }
        }
        return $array;
    }


    /**
     * @param $data array  要打印的数组
     */
    function p($data){
        echo '<pre>';
        print_r($data);
        echo '</pre>';
    }



    function get_url(){
        $url = $_SERVER['PHP_SELF'].'?';
        if($_GET){
            foreach ($_GET as $k => $v){
                if($k != 'page'){
                    $url .= "$k=$v&";
                }
            }
        }
        return $url;
    }

    /*
        []表示当前页
        如果一共有10页,每次只显示5页
        [1]  2  3  4  5
         1  [2] 3  4  5
         1   2 [3] 4  5
         2   3 [4] 5  6
         3   4 [5] 6  7
         4   5 [6] 7  8
         5   6 [7] 8  9
         6   7 [8] 9  10
         6   7  8 [9] 10
         6   7  8  9 [10]
    */

    /**
     * @param $current          当前页
     * @param $count            数据总数
     * @param $limit            每页显示条数
     * @param $size             分页按钮的最大个数
     * @param string $class     分页css样式
     * @return string           拼接好的分页html代码
     */
    function page($current,$count,$limit,$size,$class='Sabros.us'){
        $str = '';
        if($count > $limit){ //如果总数大于每页显示条数，则分页

            $url = get_url(); //获取地址

            $pages = ceil($count/$limit);//向上取整算出页码总数
            //echo $pages;

            $str .= "<div class='".$class."'>";
            //首页
            if(1==$current){
                $str .= "<span class='disabled'>首页</span>";
            }else{
                $str .= "<a href='".$url."page=1'>首页</a>";
                $str .= "<a href='".$url."page=".($current-1)."'>上一页</a>";
            }
            //当前页小于 ($size/2) 向下取整（页码在size一半之前）
            if($current <= floor($size/2)){
                $start = 1;
                $end = $pages > $size ? $size : $pages;
            }else if ($current > $pages - floor($size/2)){
                $start = $pages - $size + 1 <= 0 ? 1 : $pages - $size + 1; //避免负数出现
                $end = $pages;
            }else{
                $start = $current - floor($size/2);
                $end = $current + floor($size/2);
            }

            for($i=$start;$i<=$end;$i++){
                if($current == $i){
                    $str .= "<span class='current'>{$i}</span>";
                }else{
                    $str .= "<a href='".$url."page=".$i."'>{$i}</a>";
                }
            }

            //尾页
            if($current == $pages){ //当前页是最后一页
                $str .= "<span class='disabled'>尾页</span>";
            }else{
                $str .= "<a href='".$url."page=".($current+1)."'>下一页</a>";
                $str .= "<a href='".$url."page=".$pages."'>尾页</a>";
            }
        }
        return $str;
    }


    // bootstrap 样式
    function pageBoot($current, $count, $limit, $size,$class='pagination'){
        $str = '';
        if ($count > $limit){   //如果总数大于每页显示条数，则分页
            $url = get_url();   //获取地址

            $pages = ceil($count/$limit);   //向上取整算出页码总数

            $str .= "<ul class='".$class."'>";
            // 首页
            if ($current == 1){
                $str .= "<li class='disabled'><a href='#'>首页</a></li>";
            }else{
                $str .= "<li><a href='".$url."page=1'>首页</a></li>";
                $str .= "<li><a href='".$url."page=".($current-1)."'>上一页</a></li>";
            }

            // 当前页码小于（$size/2）向下取整（页码再size的一半之前）
            if ($current <= floor($size/2)){
                $start = 1;
                $end = $pages > $size ? $size :$pages;
            }elseif ($current > $pages - floor($size/2)){
                $start = $pages -$size + 1 <= 0 ? 1 : $pages -$size + 1;     //避免出现负数
                $end = $pages;
            }else{
                $start = $current - floor($size/2);
                $end = $current + floor($size/2);
            }

            for ($i=$start; $i<=$end; $i++){
                if ($current == $i){
                    $str .= "<li class='active'><a href=''>{$i}</a></li>";
                }else{
                    $str .= "<li><a href='".$url."page=".$i."'>{$i}</a></li>";
                }
            }

            // 尾页
            if ($current == $pages){
                $str .= "<li class='disabled'><a href='#'>尾页</a></li>";
            }else{
                $str .= "<li><a href='".$url."page=".($current+1)."'>下一页</a></li>";
                $str .= "<li><a href='".$url."page=".$pages."'>尾页</a></li>";
            }

        }
        return $str;
    }


    /**
     * 文件上传
     * @param $name 文件名
     * @param string $path  路径
     * @param string $size  文件大小
     * @param array $type   文件类型
     * @return mixed
     */
    function upload($name,$path='./uploads',$size='1048576',$type=array('jpg','png','gif','jpeg')){
        $error = $_FILES[$name]['error'];
        if ($error > 0){
            switch ($error){
                case 1:
                    $res['msg'] = '文件超过2M，请重新上传！';
                    break;
                case 2:
                    $res['msg'] = '文件超过指定，请重新上传！';
                    break;
                case 3:
                    $res['msg'] = '上传失败！';
                    break;
                case 4:
                    $res['msg'] = '没有上传文件！';
                    break;
                default:
                    $res['msg'] = '其他错误！';
            }
            $res['error'] = 1;  // 规定为错误代码为1
            return $res;
        }
        // 文件大小不能超过$size大小
        if ($_FILES[$name]['size']>$size){
            $res['msg'] = '文件超过规定大小，请重新上传！';
            $res['error'] = 1;
            return $res;
        }

        // 文件类型
        $path_arr = pathinfo($_FILES[$name]['name']);    //文件路径
        $ext = $path_arr['extension'];    //获取文件的后缀
        if (!in_array($ext,$type)){
            $res['msg'] = '文件类型错误，请重新上传！';
            $res['error'] = 1;
            return $res;
        }

        // 创建目录
        $tmpdir = date('Y-m-d',time());
        $dir = rtrim($path,'/').'/'.$tmpdir;   //拼接好的路径

        // 如果目录不存在，则创建
        if (!is_dir($dir)){
            mkdir($dir,0777,true);
        }

        // 文件名
        $file_name = time().mt_rand(0,99999);   // 时间戳拼接随机数作为文件名
        $file = $file_name.'.'.$ext;    // 文件名拼接后缀（完整文件名）

        // 保存文件到目录
        $upload = move_uploaded_file($_FILES[$name]['tmp_name'],$dir.'/'.$file);
        if ($upload){
            $res['msg'] = '上传成功！';
            $res['error'] = 2;  // 规定上传成功的代码为2
            $res['path'] = $dir.'/'.$file;
            $res['name'] = $file;
            return $res;
        }
    }


    /**
     * @param $src_addr
     * @param $des_w
     * @param $des_h
     * @param $path
     * @param $thumb_name
     * @return string
     */
    function img_thumb($src_addr, $des_w, $des_h, $path, $thumb_name){
        // 1. 获取大图片信息
        $src_info = getimagesize($src_addr);
        $src_w = $src_info[0]; //原图宽
        $src_h = $src_info[1]; //原图宽

        // 2. 创建一张新的图片，参数（图片路径）作为等下的缩略图
        if ($src_info[2] == 1){
            $des_img = imagecreatefromgif($src_addr);
        }elseif ($src_info[2] == 2){
            $des_img = imagecreatefromjpeg($src_addr);
        }elseif ($src_info[2] == 3){
            $des_img = imagecreatefrompng($src_addr);
        }

        // 3. 创建一个真彩色图像，参数（缩略图的宽、高）
        $img_new = imagecreatetruecolor($des_w,$des_h);

        // 4. 拷贝部分图像，并调整大小
        imagecopyresized($img_new,$des_img,0,0,0,0,$des_w,$des_h,$src_w,$src_h);

        // 5. 获取后缀
        // $ext = pathinfo($src_addr,PATHINFO_EXTENSION);

        // 6. 创建缩略图文件存放目录
        $tmpdir = date('Y-m-d',time());
        $dir = rtrim($path,'/').'/'.$tmpdir;   //拼接好的路径

        if (!is_dir($dir)){
            mkdir($dir,0777,true);
        }

        // 7. 保存图片
        $thumb_path = $dir.'/thumb_'.$thumb_name;
        imagejpeg($img_new,$thumb_path,100);

        // 6. 释放内存
        imagedestroy($img_new);

        return $thumb_path;
    }


    /**
     * 删除文件
     * @param $img_url  string  需要删除的文件的地址
     */
    function del_img($img_url){
        if (is_file($img_url)){
            unlink($img_url);
        }
    }