<?php

require_once('init.php');
require_once('header.php');
require_once('footer.php');

// 查询所有的配置信息
$conf = $db->select_all('c_config');
$smarty->assign('conf', $conf);

// 查询所有留言
$gbook = $db->select_all('c_guestbook','1 ORDER BY gbook_time DESC LIMIT 3');
$smarty->assign('gbook',$gbook);

if (isset($_POST['commit']) && !empty($_POST)) {
    $data = array(
        'user_name' => $_POST['name'],
        'phone' => $_POST['phone'],
        'email' => $_POST['email'],
        'gbook_content' => $_POST['content'],
        'gbook_time' => time()
    );

    $res = $db->add('c_guestbook', $data);
    if ($res) {
        echo '<script>alert("留言成功！");location.href="contacts.php";</script>';
    } else {
        echo '<script>alert("留言失败");history.back(-1);</script>';
    }
}

$smarty->display('home/contacts.tpl');
