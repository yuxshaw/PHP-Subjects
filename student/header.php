<?php
?>

<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <link rel="icon" href="./images/stu.png" type="image/x-icon">
    <title>CMS内容管理系统</title>
    <meta name="keywords" content="Admin">
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Core CSS  -->
    <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/glyphicons.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="css/theme.css">
    <link rel="stylesheet" type="text/css" href="css/pages.css">
    <link rel="stylesheet" type="text/css" href="css/plugins.css">
    <link rel="stylesheet" type="text/css" href="css/responsive.css">

    <!-- Boxed-Layout CSS -->
    <link rel="stylesheet" type="text/css" href="css/boxed.css">

    <!-- Demonstration CSS -->
    <link rel="stylesheet" type="text/css" href="css/demo.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" type="text/css" href="css/custom.css">

    <!-- Core Javascript - via CDN -->
    <script type="text/javascript" src="js/jquery.min.js"></script>
    <script type="text/javascript" src="js/jquery-ui.min.js"></script>
    <script type="text/javascript" src="js/bootstrap.min.js"></script>
    <script type="text/javascript" src="js/uniform.min.js"></script>
    <script type="text/javascript" src="js/main.js"></script>
    <script type="text/javascript" src="js/custom.js"></script>
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
    <div class="pull-left"><a class="navbar-brand" href="#">
            <div class="navbar-logo"><img src="images/logo.png" alt="logo"></div>
        </a></div>
    <div class="pull-right header-btns">
        <a class="user"><span class="glyphicons glyphicon-user"></span> admin</a>
        <a href="login.php" class="btn btn-default btn-gradient" type="button"><span
                class="glyphicons glyphicon-log-out"></span> 退出</a>
    </div>
</header>
<!-- End: Header -->

<!-- Start: Main -->
<div id="main">
    <!-- Start: Sidebar -->
    <aside id="sidebar" class="affix">
        <div id="sidebar-search">
            <div class="sidebar-toggle"><span class="glyphicon glyphicon-resize-horizontal"></span></div>
        </div>
        <div id="sidebar-menu">
            <ul class="nav sidebar-nav">
                <li>
                    <a href="index.php"><span class="glyphicons glyphicon-home"></span><span
                            class="sidebar-title">后台首页</span></a>
                </li>

                <li><a href="#sideEight" class="accordion-toggle"><span class="glyphicons glyphicon-list"></span><span
                            class="sidebar-title">学院管理</span><span class="caret"></span></a>
                    <ul class="nav sub-nav" id="sideEight" style="">
                        <li>
                            <a href="#sideEight-sub" class="accordion-toggle menu-open">
                                <span class="glyphicons glyphicon-record"></span>学生管理<span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav" id="sideEight-sub" style="">
                                <li><a href="stu_list.php"><span class="glyphicons glyphicon-minus"></span> 学生信息</a>
                                </li>
                                <li><a href="#"><span class="glyphicons glyphicon-minus"></span> 学生成绩</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#sideEight-sub" class="accordion-toggle menu-open">
                                <span class="glyphicons glyphicon-record"></span>院系管理<span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav" id="sideEight-sub" style="">
                                <li><a href="dep_list.php"><span class="glyphicons glyphicon-minus"></span> 院系信息</a></li>
                            </ul>
                        </li>
                        <li>
                            <a href="#sideEight-sub" class="accordion-toggle menu-open">
                                <span class="glyphicons glyphicon-record"></span>班级管理<span class="caret"></span>
                            </a>
                            <ul class="nav sub-nav" id="sideEight-sub" style="">
                                <li><a href="class_list.php"><span class="glyphicons glyphicon-minus"></span> 班级信息</a></li>
                            </ul>
                        </li>
<!--                        <li><a href="#"><span class="glyphicons glyphicon-record"></span> 文化</a></li>-->
<!--                        <li><a href="#"><span class="glyphicons glyphicon-record"></span> 生活</a></li>-->
                    </ul>
                </li>
                <li>
                    <a href="cate_list.php"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">文章分类管理</span></a>
                </li>
                <li>
                    <a href="user_list.php"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">系统管理员</span></a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- End: Sidebar -->
