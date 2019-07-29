<{include file="./header.tpl"}>
	</header>
	<!--==============================content================================-->
	<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - Mrach 03, 2012!</div>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<article class="grid_8">
						<div class="margin-bot">
							<h3 class="prev-indent-bot">Perspective Development</h3>
							<div class="wrapper">
								<figure class="img-indent"><img src="static/home/images/page4-img1.jpg" alt=""></figure>
								<div class="extra-wrap">
									<{foreach $brief as $item}>
										<h6><{$item['b_content']}></h6>
									<{/foreach}>
								</div>
							</div>
							<ul class="list-1">
								<{foreach $ser as $item}>
									<li><a href="#"><{$item['ser_content']}></a></li>
								<{/foreach}>
								<{*li><a href="#">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod</a></li>
								<li><a href="#">Tempor invidunt ut labore et dolore magna aliquyam erat</a></li>
								<li><a href="#">At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd gubergren, no sea</a></li>
								<li><a href="#">Takimata sanctus est Lorem ipsum dolor sit amet orem ipsum dolor sit amet</a></li*}>
							</ul>
							<a class="link-1" href="services.php">查看更多</a>
						</div>
						<h3 class="p1">Career Opportunities</h3>
						<div class="wrapper">
							<{foreach $jobs as $item}>
								<div class="grid_4 alpha">
								<h6 class="prev-indent-bot"><{$item['job_title']}></h6>
								<p class="prev-indent-bot"><{$item['job_desc']}></p>
								<a class="link-1" href="#">查看更多</a>
							</div>
							<{/foreach}>
							<{*div class="grid_4 alpha">
								<h6 class="prev-indent-bot">Lorem ipsum dolor sit amet, consetetur sadip scing elitr, sed diam nonumy</h6>
								<p class="prev-indent-bot">Eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor.</p>
								<a class="link-1" href="#">View More</a>
							</div>
							<div class="grid_4 alpha">
								<h6 class="prev-indent-bot">At vero eos et accusam et justo duo dolores et ea rebum stet clita kasd gubergren</h6>
								<p class="prev-indent-bot">No sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. </p>
								<a class="link-1" href="#">View More</a>
							</div*}>
						</div>
					</article>
					<article class="grid_4">
						<div class="indent-left">
							<h3>Our Vacations</h3>
							<ul class="list-1 img-indent-bot">
								<li><a href="#">Consetetur sadipscing elitr sed</a></li>
								<li><a href="#">Diam nonumy eirmod tempor invidunt </a></li>
								<li><a href="#">Labore et dolore magna aliquyam</a></li>
								<li><a href="#">At vero eos et accusam et justo duo </a></li>
								<li><a href="#">Dolores et ea rebum</a></li>
							</ul>
							<h3 class="prev-indent-bot">Interview Process</h3>
							<figure class="indent-bot"><img src="static/home/images/page4-img2.jpg" alt=""></figure>
							<{foreach $new_jobs as $item}>
								<p class="prev-indent-bot"><{$item['job_desc']}></p>
								<h6 class="prev-indent-bot"><{$item['job_title']}></h6>
							<{/foreach}>
							<{*p class="prev-indent-bot">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod magna aliquyam erat.</p>
							<h6 class="prev-indent-bot">At vero eos et accusam et justo dolores et ea rebum.</h6>
							<p class="prev-indent-bot">Stet clita kasd gubergren, no sea tamata lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam.</p>
							<h6>Nonumy eirmod tempor invidunt</h6*}>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

<{include file="./footer.tpl"}>