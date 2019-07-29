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
            return 1;
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