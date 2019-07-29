<{include file="./header.tpl"}>
		<div class="row-bot">
			<div class="slider-wrapper">
				<div class="slider">
					<ul class="items">
						<li>
							<img src="static/home/images/slider-img1.jpg" alt="" />
						</li>
						<li>
							<img src="static/home/images/slider-img2.jpg" alt="" />
						</li>
						<li>
							<img src="static/home/images/slider-img3.jpg" alt="" />
						</li>
					</ul>
				</div>
			</div>
		</div>
	</header>
	<!--==============================content================================-->
	<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - Mrach 03, 2012!</div>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<article class="grid_8">
						<h2>Welcome!</h2>

						<{foreach $brief as $item}>
							<p class="p2"><{$item['b_content']}></p>
						<{/foreach}>

						<{*p class="p2">Internet Cafe is one of <a class="link" href="http://blog.templatemonster.com/free-website-templates/" target="_blank">free website templates</a> created by TemplateMonster.com team. This web template is optimized for 1280X1024 screen resolution. It is also XHTML &amp; CSS valid.</p>
						<p class="p3">This <a class="link" href="http://blog.templatemonster.com/2012/03/05/free-website-template-jquery-slider-internet-cafe/" target="_blank">Internet Cafe Template</a> goes with two packages – with PSD source files and without them. PSD source files are available for free for the registered members of TemplateMonster.com. The basic package (without PSD source) is available for anyone without registration.</p*}>
						<h3 class="p1">Here you can find all services in one place:</h3>

						<div class="wrapper">
							<div class="grid_4 alpha">
								<ul class="list-1">
									<{foreach $ser1 as $item}>
										<li><a href="#"><{$item['ser_content']}></a></li>
									<{/foreach}>

									<{*li><a href="#">Broadband Internet PCs with modern LCD Flat-screens, Printers, Scanners, Webcam</a></li>
									<li><a href="#">CD-RW/DVD-burner, Multi-card-reader, USB-Connectors</a></li>
									<li><a href="#">Laptop/Notebook stations with LAN and/or wireless access (10mbps speed)</a></li>
									<li><a href="#">Rentable Laptop/Notebook cabins. (Daily rent, locked and secured overnight)</a></li>
									<li><a href="#">Stabilized UPS with world-power outlets, 220V &amp; 110V.</a></li*}>

								</ul>
							</div>
							<div class="grid_4 omega">
								<ul class="list-1 indent-bot">
									<{foreach $ser2 as $item}>
									<li><a href="#"><{$item['ser_content']}></a></li>
									<{/foreach}>
									<{*li><a href="#">Outdoor wireless connection available 24/7 (100m radius)</a></li>
									<li><a href="#">Digital Photo Printer - connect your SD-card, SmartMedia, XD-picture Card, CompactFlash, MemoryStick or mobile phone and print the picture direct at our photo-lab-station (Printpix).<br>
Of course you can also “unload” your camers and burn CD...</a></li*}>
								</ul>
								<a class="link-1 margin-left" href="services.php">所有服务</a>
							</div>
						</div>
					</article>
					<article class="grid_4">
						<div class="indent-top indent-left">
							<div class="wrapper margin-bot">
								<figure class="img-indent-r"><a href="#"><img src="static/home/images/page1-img1.png" alt=""></a></figure>
								<div class="extra-wrap">
									<strong class="title-1">Tell Your<strong>Friends</strong><em>About</em><em>Our Cafe</em></strong>
								</div>
							</div>
							<h3>Latest News</h3>
							<{foreach $news as $item}>
							<time class="tdate-1" datetime="2012-02-21"><{$item['news_time']|date_format:"%Y-%m-%d"}></time>
							<p class="prev-indent-bot"><{$item['news_content']}></p>
							<p><a href="#"><{$item['news_name']}></a></p>
							<{/foreach}>
							<a class="link-1" href="events.php">所有新闻</a>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

<{include file="./footer.tpl"}>

<script src="static/home/js/tms-0.3.js" type="text/javascript"></script>
<script src="static/home/js/tms_presets.js" type="text/javascript"></script>
<script src="static/home/js/jquery.easing.1.3.js" type="text/javascript"></script>
<script type="text/javascript">
	$(window).load(function() {
		$('.slider')._TMS({
			duration:1000,
			easing:'easeOutQuint',
			preset:'diagonalFade',
			slideshow:7000,
			banners:false,
			pauseOnHover:true,
			pagination:true,
			pagNums:false
		});
	});
</script>