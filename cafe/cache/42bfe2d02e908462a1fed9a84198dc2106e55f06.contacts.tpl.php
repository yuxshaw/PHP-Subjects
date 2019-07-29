<?php
/* Smarty version 3.1.33, created on 2019-07-20 20:27:53
  from 'D:\phpStudy\PHPTutorial\WWW\cafe\templates\home\contacts.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.33',
  'unifunc' => 'content_5d3308c9bc0ec0_04728512',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '75b5b001573a15bed263a10f557b5714c5811628' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\templates\\home\\contacts.tpl',
      1 => 1563625372,
      2 => 'file',
    ),
    'd7bd8a297cd0f3f366191707d8e3b97d79d01a95' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\templates\\home\\header.tpl',
      1 => 1563091654,
      2 => 'file',
    ),
    'be2b9186f3f283c319ffdd0f5449d4e0f1e83dac' => 
    array (
      0 => 'D:\\phpStudy\\PHPTutorial\\WWW\\cafe\\templates\\home\\footer.tpl',
      1 => 1563607957,
      2 => 'file',
    ),
  ),
  'cache_lifetime' => 30,
),true)) {
function content_5d3308c9bc0ec0_04728512 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
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
                                            <li><a href="index.php">HOME</a></li>
                                            <li><a href="events.php">EVENTS</a></li>
                                            <li><a href="services.php">SERVICES</a></li>
                                            <li><a href="jobs.php">JOBS</a></li>
                                            <li><a href="contacts.php">CONTACTS</a></li>
                                    </ul>
            </nav>
            <div class="clear"></div>
        </div>
    </div>	</header>
	<!--==============================content================================-->
	<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - Mrach 03, 2012!</div>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<article class="grid_8">
						<h3>Contact Form</h3>
						<ul>
															
							<li>
								<div>
									<h4>Frack :<span>&emsp; 222222222@qq.com</span></h4>
									不好啊
									<br />
									<span style='display:block; float:right; margin-right: 20px;'>2019-07-20</span>
								</div>
								<div style="clear:both;"></div>
								<hr />
							</li>
															
							<li>
								<div>
									<h4>Rose :<span>&emsp; 444@qq.com</span></h4>
									你好啊
									<br />
									<span style='display:block; float:right; margin-right: 20px;'>2019-07-20</span>
								</div>
								<div style="clear:both;"></div>
								<hr />
							</li>
															
							<li>
								<div>
									<h4>Jack :<span>&emsp; 222@qq.com</span></h4>
									wwwwwwwsssssssssssss
									<br />
									<span style='display:block; float:right; margin-right: 20px;'>2019-07-20</span>
								</div>
								<div style="clear:both;"></div>
								<hr />
							</li>
													</ul>
						<form id="contact-form" method="post" enctype="multipart/form-data">					
							<fieldset>
								  <label><span class="text-form">姓名:</span><input required name="name" type="text" /></label>							  
								  <label><span class="text-form">手机:</span><input required name="phone" type="text" /></label>
								  <label><span class="text-form">邮箱:</span><input required name="email" type="email" /></label>							  
								  <div class="wrapper">
									<div class="text-form">内容:</div>
									<div class="extra-wrap">
										<textarea required name='content'></textarea>
										<div class="clear"></div>
										<div class="buttons">
											<a href="javascript:;" onClick="document.getElementById('contact-form').reset()">重置</a>
																						<input class='link-1' type='submit' name='commit' value='提交' />	
										</div> 
									</div>
								  </div>							
							</fieldset>						
						</form>
					</article>
					<article class="grid_4">
						<div class="indent-top indent-left">
							<div class="wrapper p3">
								<figure class="img-indent-r"><a href="#"><img src="static/home/images/page1-img1.png" alt=""></a></figure>
								<div class="extra-wrap">
									<strong class="title-1">Tell Your<strong>Friends</strong><em>About</em><em>Our Cafe</em></strong>
								</div>
							</div>
							<h3 class="p1">Latest News</h3>
															<p class="prev-indent-bot">营业时间：</p>
								<p class="prev-indent-bot">周一至周五：上午7:30至下午6:00
<br/>星期六：早上7:30 - 中午</p>
															<p class="prev-indent-bot">电话：</p>
								<p class="prev-indent-bot">+1 959 552 5963</p>
															<p class="prev-indent-bot">传真：</p>
								<p class="prev-indent-bot">+1 959 552 5963</p>
															<p class="prev-indent-bot">电子邮件：</p>
								<p class="prev-indent-bot">mail@demolink.org&emsp;</p>
															<p class="prev-indent-bot"></p>
								<p class="prev-indent-bot">&copy; 2012 Interior Website Template by TemplateM</p>
													</div>
					</article>
				</div>
			</div>
		</div>
	</section>

<!--==============================footer=================================-->
<footer>
    <div class="main">
        <div class="container_12">
            <div class="wrapper">
                <div class="grid_3">
                    <div class="spacer-1">
                        <a href="index.html"><img src="static/home/images/footer-logo.png" alt=""></a>
                    </div>
                </div>
                <div class="grid_5">
                    <div class="indent-top2">
                                                    <span>电话：</span><span>+1 959 552 5963</span>
                                                    <span>电子邮件：</span><span>mail@demolink.org&emsp;</span>
                                                    <span></span><span>&copy; 2012 Interior Website Template by TemplateM</span>
                                            </div>
                </div>
                <div class="grid_4">
                    <ul class="list-services">
                        <li><a class="item-1" href="#"></a></li>
                        <li><a class="item-2" href="#"></a></li>
                        <li><a class="item-3" href="#"></a></li>
                        <li><a class="item-4" href="#"></a></li>
                    </ul>
                    <span class="footer-text">&copy; 2012 <a class="link color-2" href="#">Privacy Policy</a></span>
                </div>
            </div>
        </div>
    </div>
</footer>
<script type="text/javascript"> Cufon.now(); </script>
</body>
</html>
<script type="text/javascript">
        var menu = document.getElementById('menu');
        console.log(menu.children.length);
        for (var i = 0; i < menu.children.length; i++) {
            var li_index = menu.children[i].children[0];//获取当前li
            console.log(li_index);
            if (li_index.href == String(window.location)) {
                li_index.setAttribute("class", "active");
            }
        }


</script><?php }
}
