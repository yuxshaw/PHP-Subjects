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
    function pageBoot($current, $count, $limit, $size){
        $str = '';
        if ($count > $limit){   //如果总数大于每页显示条数，则分页
            $url = get_url();   //获取地址

            $pages = ceil($count/$limit);   //向上取整算出页码总数

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
                $start = $pages -$size + 1 < 0 ? 1 : $pages -$size + 1;     //避免出现负数
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


//    function get_url(){
//        $url = $_SERVER['PHP_SELF'].'?';
//        if ($_GET){
//            foreach ($_GET as $k => $v){
//                if ($k != 'page'){
//                    $url .= "$k = $v&";
//                }
//            }
//        }
//        return $url;
//    }
//
//
//    function page($current, $count, $limit, $size, $class='Sabros.us'){
//        $str = '';
//        if ($count > $limit){  // 如果记录总数大于每页显示条数，则进行分页
//            $url = get_url();   // 获取地址
//            $pages = ceil($count/$limit);  // 计算页码总数
//            $str .= "<div class='$class'>";
//            if (1 == $current){ // 首页
//                $str .= "<span class='disabled'>首页</span>";
//            }else{
//                $str .= "<a href='".$url."page=1'>首页</a>";
//                $str .= "<a href='".$url."page=".($current-1)."'>上一页</a>";
//            }
//
//            if ($current <= floor($size/2)){
//                $start = 1;
//                $end = $pages > $size ? $size : $pages;
//            }elseif ($current > floor($size/2)){
//                $start = $current - floor($size/2);
//                $end = $current + floor($size/2);
//            }
//
//            for ($i=$start; $i<=$end; $i++){
//                if ($current == $i){
//                    $str .= "<span class='current'>$i</span>";
//                }else{
//                    $str .= "<a href='".$url."page=".$i."'></a>";
//                }
//            }
//
//            // 尾页
//            if ($current == $pages){
//                $str .= "<sapn class='disabled'>尾页</sapn>";
//            }else{
//                $str .= "<a href='".$url."page=".($current+1)."'>下一页</a>";
//                $str .= "<a href='".$url."page=".$pages."'>尾页</a>";
//            }
//        }
//
//        return $str;
//    }