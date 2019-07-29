<?php
    //初始化配置文件
    define('ROOT',str_replace('\\','/',dirname(__FILE__)));

//    function __autoload($classname){
//        require_once (ROOT.'/includes/'.$classname.'.class.php');
//    }

    require_once ROOT.'/includes/libs/Smarty.class.php';
    $smarty = new Smarty;

    // 设置模板目录
    $smarty->setTemplateDir(ROOT.'/templates');
    // 设置混合文件目录
    $smarty->setCompileDir(ROOT.'/templates_c');

    // 设置插件目录
    $smarty->addPluginsDir(ROOT.'/my_plugins');

    // 缓存目录文件
    $smarty->setCacheDir(ROOT.'/cache');

    // 配置文件目录
    $smarty->setConfigDir(ROOT.'/configs/');

    // 是否开启缓存,生产环境下开启，开发环境下不建议开启
    // $smarty->caching = false;
    $smarty->setCaching(true);

    // 设置缓存时间
    $smarty->setCacheLifetime(30);  // 以秒为单位


    // 配置定界符
    // $smarty->left_delimiter = "<{";
    // $smarty->right_delimiter = "}>";
    $smarty->setLeftDelimiter("<{");
    $smarty->setRightDelimiter("}>");

    // 引入数据库类
    require_once ROOT.'/includes/db/DB.class.php';
    $db = new DB('localhost','root','123456','jlpro');
    // 引入分页类
    require_once ROOT.'/includes/db/Pages.class.php';