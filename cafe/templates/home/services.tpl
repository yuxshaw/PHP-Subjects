<{include file="./header.tpl"}>
	</header>

	<!--==============================content================================-->
	<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - Mrach 03, 2012!</div>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<article class="grid_8">
						<h3>What We Offer</h3>
						<{foreach $brief as $item}>
							<p class="p2"><{$item['b_content']}></p>
						<{/foreach}>
						<{*h6 class="prev-indent-bot">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </h6>
						<p class="p2">At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. </p*}>
						<p class="p3"><a class="link-1" href="#">阅读更多</a></p>
						<h3 class="prev-indent-bot">Special Events</h3>
						<{foreach $news as $item}>
							<div class="wrapper p3">
								<figure class="img-indent"><img src="<{$item['news_img']}>" alt=""></figure>
								<div class="extra-wrap">
									<h6 class="p1"><{$item['news_name']}></h6>
									<p class="p1"><{$item['news_content']}></p>
									<a class="link-1" href="#"> 阅读更多</a>
								</div>
							</div>
						<{/foreach}>
						<{*div class="wrapper p3">
							<figure class="img-indent"><img src="static/home/images/page3-img1.jpg" alt=""></figure>
							<div class="extra-wrap">
								<h6 class="p1">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt</h6>
								<p class="p1">Labore et dolore magna aliquyam erat, sed diam voluptua at vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren.</p>
								<a class="link-1" href="#"> Read More</a>
							</div>
						</div>
						<div class="wrapper">
							<figure class="img-indent"><img src="static/home/images/page3-img2.jpg" alt=""></figure>
							<div class="extra-wrap">
								<h6 class="p1">Rem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor</h6>
								<p class="p1">Jnvidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum no sea takimata sanctus est.</p>
								<a class="link-1" href="#"> Read More</a>
							</div>
						</div*}>
					</article>
					<article class="grid_4">
						<div class="indent-left">
							<h3 class="prev-indent-bot">New Service</h3>
							<figure class="p2"><img src="static/home/images/page3-img3.jpg" alt=""></figure>
							<p class="prev-indent-bot">Vel eum iriure dolor in hendrerit tumzril delenit augue duis dolore.</p>
							<p class="margin-bot"><a class="link-1" href="#">View More</a></p>
							<h3 class="p1">Our Services</h3>
							<ul class="list-1">
								<{foreach $ser as $item}>
									<li><a href="#"><{$item['ser_content']}></a></li>
								<{/foreach}>
								<{*li><a href="#">Consetetur sadipscing elitr, sed diam nonumy eirmod tempor</a></li>
								<li><a href="#">Invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </a></li>
								<li><a href="#">At vero eos et accusam et justo duo dolores et ea rebum.</a></li>
								<li><a href="#">Stet clita kasd gubergren, no sea</a></li>
								<li><a href="#">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</a></li>
								<li><a href="#">Nonumy eirmod tempor invidunt ut labore et dolore magna.</a></li*}>
							</ul>
							<a class="link-1 margin-left" href="#">阅读更多</a>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

<{include file="./footer.tpl"}>