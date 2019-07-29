<{include file="./header.tpl"}>
	</header>
	<!--==============================content================================-->
	<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - Mrach 03, 2012!</div>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<article class="grid_8">
						<h3>Everything You Want to Know</h3>
						<{foreach $brief as $item}>
							<p class="indent-bot"><{$item['b_content']}></p>
						<{/foreach}>
						<{*h6 class="prev-indent-bot">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. </h6>
						<p class="indent-bot">Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy.</p*}>

						<div class="wrapper p2">
							<figure class="img-indent"><img src="static/home/images/page2-img1.jpg" alt=""></figure>
							<div class="extra-wrap">
								<ul class="list-1">
									<{foreach $ser as $item}>
										<li><a href="#"><{$item['ser_content']}></a></li>
									<{/foreach}>

									<{*li><a href="#">Eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </a></li>
									<li><a href="#">At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd gubergren, no sea takimata.</a></li>
									<li><a href="#">Sanctus est Lorem ipsum dolor sit amet lorem ipsum dolor sit amet, consetetur sadipscing elitr.</a></li*}>
								</ul>
							</div>
						</div>
						<h3 class="prev-indent-bot">Special Events</h3>
						<div class="wrapper">
							<{foreach $news_arr as $item}>
							<div class="grid_4 alpha">
								<figure class="p2"><img src="<{$item['news_img']}>" alt=""></figure>
								<h6 class="prev-indent-bot"><{$item['news_name']}></h6>
								<p class="p2"><{$item['news_content']}></p>
								<a class="link-1" href="#">阅读更多</a>
							</div>
							<{/foreach}>
							<{*div class="grid_4 alpha">
								<figure class="p2"><img src="static/home/images/page2-img2.jpg" alt=""></figure>
								<h6 class="prev-indent-bot">Stet clita kasd gubergren, no sea takimata sanctus est lorem ipsum dolor</h6>
								<p class="p2">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
								<a class="link-1" href="#">Read More</a>
							</div>
							<div class="grid_4 alpha">
								<figure class="p2"><img src="static/home/images/page2-img3.jpg" alt=""></figure>
								<h6 class="prev-indent-bot">At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd gubergren</h6>
								<p class="p2">No sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, At accusam aliquyam diam diam dolore dolores.</p>
								<a class="link-1" href="#">Read More</a>
							</div*}>
						</div>
						<div style="margin: 20px auto;">
							<ul class="pagination">
								<{*$page*}>
							</ul>
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
								<time class="tdate-1 p2" datetime=""><{$item['news_time']|date_format:"%Y-%m-%d"}></time>
								<p class="prev-indent-bot"><{$item['news_content']}></p>
								<p><a class="link-1" href="#">阅读更多</a></p>
							<{/foreach}>

							<{*time class="tdate-1 p2" datetime="2012-02-21">21 February, 2012</time>
							<p class="prev-indent-bot">Duis autem vel eum iriure dolor in hendrerit tum zzril delenit augue duis dolore velit esse molestie consequat vel illum augue duis dolore.</p>
							<p><a class="link-1" href="#">Read More</a></p>
							<time class="tdate-1 p2" datetime="2012-02-13">13 February, 2012</time>
							<p class="prev-indent-bot">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor nostrud exercitation ullamco laboris nisi ut aliquip ex ea</p>
							<p><a class="link-1" href="#">Read More</a></p>
							<time class="tdate-1 p2" datetime="2012-02-13">21 February, 2012</time>
							<p class="prev-indent-bot">Duis autem vel eum iriure dolor  duis dolore velit esse molestie consequat vel illum augue duis dolore.</p>
							<p><a class="link-1" href="#">Read More</a></p*}>

						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

<{include file="./footer.tpl"}>