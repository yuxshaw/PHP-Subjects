<?php
    require_once ('include/config.php');

    //查询所有导航
    $sql = "SELECT * FROM nnd_nav";
    $nav_data = get_all($sql);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>首页</title>
    <link rel="stylesheet" href="css/index.css">
    <link rel="stylesheet" href="css/reset.css">
    <link rel="stylesheet" href="css/common.css">
</head>
<body>
<div class="wrapper">

    <!-- header -->
    <header>
        <img src="images/logo.png">
        <nav>
            <ul id="navRight">
                <?php foreach ($nav_data as $item){ ?>
                    <li><a href="<?php echo $item['nav_link'];?>"><?php echo $item['nav_name'];?></a></li>
                <?php } ?>
<!--                <li class="active"><a href="index.php">首  页</a></li>-->
<!--                <li><a href="solution.php">解决方案</a></li>-->
<!--                <li><a href="inform.php">资讯中心</a></li>-->
<!--                <li><a href="cases.php">案例展示</a></li>-->
<!--                <li><a href="about.php">了解牛牛豆</a></li>-->
            </ul>
        </nav>
    </header>
    <div class="clear"></div>
