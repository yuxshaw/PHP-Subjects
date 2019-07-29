<?php

    /**
     * 数据库类
     * Class DB
     */
    class DB
    {
        private $conn;

        /**
         * 初始化连接数据库
         * DB constructor.
         * @param $host     主机
         * @param $user     用户名
         * @param $pwd      密码
         * @param $dbname   数据库名
         */
        public function __construct($host,$user,$pwd,$dbname)
        {

            // 连接数据库
            $conn = @mysqli_connect($host, $user, $pwd, $dbname);       //  @ 符号，忽略错误和警告
            if(!$conn){
                die('数据库错误：'.mysqli_connect_errno().','.mysqli_connect_error());
            }
            // 设置编码
            mysqli_query($conn,"SET NAMES UTF8");
            // 设置时区
            date_default_timezone_set('Asia/shanghai');
            $this->conn = $conn;
        }


        /**
         * 查询一条数据
         * @param $sql  string  SQL语句
         * @return array|null
         */
        public function get_one($sql){
            $res = mysqli_query($this->conn,$sql);
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
            $res = mysqli_query($this->conn, $sql); // 参数1：链接名；参数2：sql语句
            $data = [];
            if ($res && mysqli_num_rows($res) > 0) {
                while ($row = mysqli_fetch_assoc($res)) {
                    $data[] = $row;
                }
            }
            return $data;
        }

        public function select_all($table, $condition = '1', $filed = '*'){
            $sql = "SELECT {$filed} FROM {$table} WHERE $condition";
            $data = $this->get_all($sql);
            return $data;
        }


        /**
         * 修改数据记录
         * @param $table  string  数据表名
         * @param $data  array  修改的数据
         * @param $condition string  SQL条件语句
         * @return int
         */
        function update($table, $data, $condition){
            $str = '';
            foreach ($data as $k => $v){
                $str .= "`$k` = '$v',";
            }
            $str = rtrim($str, ',');
            $sql = "UPDATE $table SET $str WHERE $condition";
            $res = mysqli_query($this->conn, $sql);
            if($res){
                return 1;
            }else{
                return 0;
            }
        }



        /**
         * 添加信息记录
         * @param $table  string  数据表名
         * @param $data  array  添加的数据
         * @return int
         */
        function add( $table, $data){
            // 拼接SQL语句
            $sql = "INSERT INTO $table ";
            $sql .= "(`".implode("`,`", array_keys($data))."`) ";   // 拼接字段
            $sql .= "VALUES ('".implode("','",$data)."')";      // 拼接值

            $res = mysqli_query($this->conn, $sql);
            if ($res && mysqli_insert_id($this->conn) > 0){
//            return 1;
                return mysqli_insert_id($this->conn);
            }else{
                return 0;
            }
        }



        /**
         * 删除一条记录
         * @param $table  string  数据表名
         * @param $condition  string  SQL条件语句
         * @return int
         */
        function del($table, $condition){
            $sql = "DELETE FROM $table WHERE $condition";
            $res = mysqli_query($this->conn, $sql);
            if($res && mysqli_affected_rows($this->conn) > 0){
                return 1;
            }else{
                return 0;
            }
        }

    }


