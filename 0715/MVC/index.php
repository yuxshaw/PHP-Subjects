<?php
    //入口文件

    //自动加载class
    class Autoload
    {
        public function __construct()
        {
            spl_autoload_register([$this,'auto']);
        }
        public function auto($className)
        {
            require_once ('controller/'.$className.'.php');
        }
    }
    $obj = new Autoload();
    //获取控制器
    $c = isset($_GET['c']) ? $_GET['c'] : 'Index';
    //获取方法
    $a = isset($_GET['a']) ? $_GET['a'] : 'Index';
    $className = ucfirst(strtolower($c))."Controller";
    $obj = new $className();
    call_user_func([$obj,$a]);

    //获取控制器
    //$c = isset($_GET['c']) ? $_GET['c'] : 'Index';
    ////获取方法
    //$a = isset($_GET['a']) ? $_GET['a'] : 'Index';
    //$con = ucfirst(strtolower($c));
    //require_once ('controller/'.$con.'Controller.php');
    //$className = $con."Controller";
    //$obj = new $className();
    //$obj->$a();