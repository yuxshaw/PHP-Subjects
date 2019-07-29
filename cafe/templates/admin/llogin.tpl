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
        <div class="pull-left"> <a class="navbar-brand" href="#">
                <div class="navbar-logo"><img src="images/logo.png" alt="logo"></div>
            </a> </div>
        <div class="pull-right header-btns">
            <a class="user"><span class="glyphicons glyphicon-user"></span> admin</a>
            <a href="login.html" class="btn btn-default btn-gradient" type="button"><span
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
                        <a href="index.html"><span class="glyphicons glyphicon-home"></span><span
                                class="sidebar-title">后台首页</span></a>
                    </li>

                    <li> <a href="#sideEight" class="accordion-toggle"><span
                                class="glyphicons glyphicon-list"></span><span class="sidebar-title">文章管理</span><span
                                class="caret"></span></a>
                        <ul class="nav sub-nav" id="sideEight" style="">
                            <li><a href="#sideEight-sub" class="accordion-toggle menu-open"><span
                                        class="glyphicons glyphicon-record"></span>科技<span class="caret"></span></a>
                                <ul class="nav sub-nav" id="sideEight-sub" style="">
                                    <li><a href="article_list.html"><span class="glyphicons glyphicon-minus"></span>
                                            互联网</a></li>
                                    <li><a href="#"><span class="glyphicons glyphicon-minus"></span> 数码</a></li>
                                    <li><a href="#"><span class="glyphicons glyphicon-minus"></span> IT</a></li>
                                    <li><a href="#"><span class="glyphicons glyphicon-minus"></span> 电信</a></li>
                                </ul>
                            </li>
                            <li><a href="#"><span class="glyphicons glyphicon-record"></span> 文化</a></li>
                            <li><a href="#"><span class="glyphicons glyphicon-record"></span> 生活</a></li>
                        </ul>
                    </li>
                    <li>
                        <a href="cate_list.html"><span class="glyphicons glyphicon-list"></span><span
                                class="sidebar-title">文章分类管理</span></a>
                    </li>
                    <li>
                        <a href="user_list.html"><span class="glyphicons glyphicon-list"></span><span
                                class="sidebar-title">系统管理员</span></a>
                    </li>
                </ul>
            </div>
        </aside>
        <!-- End: Sidebar -->

        <section id="content">
            <div id="topbar" class="affix">
                <ol class="breadcrumb">
                    <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
                    <li class="active">系统管理员</li>
                </ol>
            </div>
            <div class="container">

                <div class="row">
                    <div class="col-md-10 col-lg-8 center-column">
                        <form action="" method="post" class="cmxform">
                            <div class="panel">
                                <div class="panel-heading">
                                    <div class="panel-title">添加管理员</div>
                                    <div class="panel-btns pull-right margin-left">
                                        <a href="admin_list.php" class="btn btn-default btn-gradient dropdown-toggle">
                                            <span class="glyphicon glyphicon-chevron-left"></span>
                                        </a>
                                    </div>
                                </div>
                                <div class="panel-body">
                                    <div class="col-md-8 col-md-offset-2">
                                        <div class="form-group">
                                            <div class="input-group"><span class="input-group-addon">管理员</span>
                                                <input type="text" name="admin_name" value="" class="form-control">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group"><span class="input-group-addon">密码</span>
                                                <input style="position: relative" type="text" name="pwd" value=""
                                                    class="form-control">
                                                <img class="pwd_msg"
                                                    style="position: absolute; right: -155px; width: 150px; height: 30px; top: 2px;"
                                                    src="images/pwd_msg.png" alt="">
                                                <img class="pwd_err1"
                                                    style="position: absolute; right: -155px; width: 150px; height: 30px; top: 2px; display: none;"
                                                    src="images/pwd_err1.png" alt="">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <div class="input-group"><span class="input-group-addon">确认密码</span>
                                                <input style="position: relative" type="text" name="conf_pwd" value=""
                                                    class="form-control">
                                                <img class="pwd_err2"
                                                    style="position: absolute; right: -155px; width: 150px; height: 30px; top: 2px; display: none"
                                                    src="images/pwd_err2.png" alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-8 col-md-offset-2 text-center">
                                    <div class="form-group">
                                        <input type="submit" value="提交" name="commit" class="submit btn btn-green">
                                        <input type="reset" value="重置" class="submit btn btn-blue">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </section>
        <!-- End: Content -->
    </div>
    <!-- End: Main -->
    <link type="text/css" rel="stylesheet" href="umeditor/themes/default/_css/umeditor.css">
    <script src="umeditor/umeditor.config.js" type="text/javascript"></script>
    <script src="umeditor/editor_api.js" type="text/javascript"></script>
    <script src="umeditor/lang/zh-cn/zh-cn.js" type="text/javascript"></script>
    <script type="text/javascript">
        var ue = UM.getEditor('myEditor', {
            autoClearinitialContent: true,
            wordCount: false,
            elementPathEnabled: false,
            initialFrameHeight: 300
        });

        var pwd = document.getElementsByName('pwd');
        var conf_pwd = document.getElementsByName('conf_pwd');
        var commit = document.getElementsByName('commit');
        var msg = document.getElementsByClassName('pwd_msg');
        var err1 = document.getElementsByClassName('pwd_err1');
        var err2 = document.getElementsByClassName('pwd_err2');

        pwd.onfocus = function(){
            this.nextSibling.style.display = 'none';
        }





    </script>
</body>

</html>