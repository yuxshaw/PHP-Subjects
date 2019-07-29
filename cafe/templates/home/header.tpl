<!DOCTYPE html>
<html lang="en">
<head>
    <title>InternetCafe</title>
    <meta charset="utf-8">
    <link rel="stylesheet" href="static/home/css/reset.css" type="text/css" media="screen">
    <link rel="stylesheet" href="static/home/css/style.css" type="text/css" media="screen">
    <link rel="stylesheet" href="static/home/css/grid.css" type="text/css" media="screen">
    <script src="static/home/js/jquery-1.7.1.min.js" type="text/javascript"></script>
    <script src="static/home/js/cufon-yui.js" type="text/javascript"></script>
    <script src="static/home/js/cufon-replace.js" type="text/javascript"></script>
    <script src="static/home/js/Vegur_500.font.js" type="text/javascript"></script>
    <script src="static/home/js/Ropa_Sans_400.font.js" type="text/javascript"></script>
    <script src="static/home/js/FF-cash.js" type="text/javascript"></script>
    <script src="static/home/js/script.js" type="text/javascript"></script>
    <!--[if lt IE 8]>
    <div style=' clear: both; text-align:center; position: relative;'>
        <a href="http://windows.microsoft.com/en-US/internet-explorer/products/ie/home?ocid=ie6_countdown_bannercode">
            <img src="http://storage.ie6countdown.com/assets/100/images/banners/warning_bar_0000_us.jpg" border="0" height="42" width="820" alt="You are using an outdated browser. For a faster, safer browsing experience, upgrade for free today." />
        </a>
    </div>
    <![endif]-->
    <!--[if lt IE 9]>
    <script type="text/javascript" src="static/home/js/html5.js"></script>
    <link rel="stylesheet" href="static/home/css/ie.css" type="text/css" media="screen">
    <link rel="stylesheet" href="includes/bootstrap.css">
    <![endif]-->
</head>
<body id="page1">
<!--==============================header=================================-->
<header>
    <div class="border-bot">
        <div class="main">
            <h1><a href="index.php">InternetCafe</a></h1>
            <nav>
                <ul class="menu" id="menu">
                    <{foreach $nav as $item}>
                        <li><a href="<{$item['nav_url']}>"><{$item['nav_name']}></a></li>
                    <{/foreach}>
                </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </div>