<!DOCTYPE html>
<html>
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8">
    <!-- Meta, title, CSS, favicons, etc. -->
    <meta charset="utf-8">
    <title>CMS内容管理系统</title>
    <meta name="keywords" content="Admin">
    <meta name="description" content="Admin">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <!-- Core CSS  -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/css/')?>bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/css/')?>glyphicons.min.css">

    <!-- Theme CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/css/')?>theme.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/css/')?>pages.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/css/')?>plugins.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/css/')?>responsive.css">

    <!-- Boxed-Layout CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/css/')?>boxed.css">

    <!-- Demonstration CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/css/')?>demo.css">

    <!-- Your Custom CSS -->
    <link rel="stylesheet" type="text/css" href="<?php echo base_url('static/admin/css/')?>custom.css">

    <!-- Core Javascript - via CDN -->
    <script type="text/javascript" src="<?php echo base_url('static/admin/js/')?>jquery.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin/js/')?>jquery-ui.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin/js/')?>bootstrap.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin/js/')?>uniform.min.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin/js/')?>main.js"></script>
    <script type="text/javascript" src="<?php echo base_url('static/admin/js/')?>custom.js"></script>
</head>

<body>
<!-- Start: Header -->
<header class="navbar navbar-fixed-top" style="background-image: none; background-color: rgb(240, 240, 240);">
    <div class="pull-left"> <a class="navbar-brand" href="<?php echo site_url('admin/Home/index');?>">
            <div class="navbar-logo"><img src="<?php echo base_url('static/admin/images/')?>logo.png" alt="logo"></div>
        </a> </div>
    <div class="pull-right header-btns">
        <a class="user"><span class="glyphicons glyphicon-user"></span> <?php echo $this->session->userdata('name');?></a>
        <a href="<?php echo site_url('admin/User/logout');?>" class="btn btn-default btn-gradient" type="button"><span class="glyphicons glyphicon-log-out"></span> 退出</a>
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
                    <a href="<?php echo site_url('admin/Home/index');?>"><span class="glyphicons glyphicon-home"></span><span class="sidebar-title">后台首页</span></a>
                </li>

                <li> <a href="#sideEight" class="accordion-toggle"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">文章管理</span><span class="caret"></span></a>
                    <ul class="nav sub-nav" id="sideEight" style="">

                        <?php foreach ($nav as $item){ ?>
                            <li><a href="#sideEight-sub" class="accordion-toggle menu-open"><span class="glyphicons glyphicon-record"></span><?php echo $item['cname'];?><span class="caret"></span></a>
                                <?php if (isset($item['sub'])){ ?>
                                    <ul class="nav sub-nav" id="sideEight-sub" style="">
                                        <?php foreach ($item['sub'] as $v){ ?>
                                            <li><a href="<?php echo site_url('admin/Article/article_list/'.$v['cid']);?>"><span class="glyphicons glyphicon-minus"></span> <?php echo $v['cname'];?></a></li>
                                        <?php } ?>
                                    </ul>
                                <?php }?>
                        <?php } ?>

                    </ul>
                </li>
                <li>
                    <a href="<?php echo site_url('admin/Article/cate_list')?>"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">文章分类管理</span></a>
                </li>
                <li>
                    <a href="user_list.php"><span class="glyphicons glyphicon-list"></span><span class="sidebar-title">系统管理员</span></a>
                </li>
            </ul>
        </div>
    </aside>
    <!-- End: Sidebar -->