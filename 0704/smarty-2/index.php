<?php
    require_once('init.php');
    $file = $_SERVER['REQUEST_URI'];
    if (!$smarty->isCached('index.tpl',$file)) {
        require_once './includes/Pages.class.php';

        $current = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 10;
        $n = ($current - 1) * $limit;
        $count = $db->get_one("SELECT COUNT(number) AS c FROM student");
        $size = 5;

        $page = new Pages($current, $count['c'], $limit, $size);

        $stu = $db->select_all('student', "1 LIMIT {$n},{$limit}");

        $smarty->assign('stu', $stu);
        $smarty->assign('page', $page->pg());
    }

    $smarty->display('index.tpl', $file);
