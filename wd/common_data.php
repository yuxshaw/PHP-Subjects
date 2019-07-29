<?php
//require_once ('./include/config.php');

// 查询导航信息
$sql = "SELECT * FROM wd_nav WHERE nav_show = 1";
$nav = get_all($sql);

// 数组重组
$nav_list = array();    // 准备一个空数组，用来存放导航信息
foreach ($nav as $k => $item){
    // 如果 parent_id 为0，则为一级导航
    if (0 == $item['parent_id']){
        $nav_list[$k] = $item;
    }
    // 如果parent_id 和某一个一级导航id相等，则为二级导航
    foreach ($nav as $key => $v){
        if ($v['parent_id'] == $item['nav_id']){
            $nav_list[$k]['son'][] = $v;
        }
    }
}
?>
