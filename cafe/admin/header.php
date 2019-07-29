<?php
require_once('../init.php');

    $admin_name = $_SESSION['admin_name'];
    $smarty->assign('admin_name',$admin_name);