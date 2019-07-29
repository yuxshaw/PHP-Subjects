<?php
    require_once ('init.php');
    require_once ('header.php');
    require_once ('footer.php');

    $file = $_SERVER['REQUEST_URI'];
    if (!$smarty->isCached('index.tpl',$file)) {
        $current = isset($_GET['page']) ? $_GET['page'] : 1;
        $limit = 12;
        $n = ($current - 1) * $limit;
        $size = 5;
        $count = $db->get_one("SELECT COUNT(pro_id) AS c FROM jl_product");
        $page = new Pages($current, $count['c'], $limit, $size,'digg');

        // 查询所有的产品信息
        $pro_arr = $db->select_all('jl_product', "1 LIMIT {$n},{$limit}");
        $smarty->assign('pro', $pro_arr);
        $smarty->assign('page', $page->pg());
    }
    $smarty->display('home/product_list.tpl', $file);