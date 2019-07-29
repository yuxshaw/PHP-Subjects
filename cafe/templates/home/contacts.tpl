<{include file="./header.tpl"}>
	</header>
	<!--==============================content================================-->
	<section id="content"><div class="ic">More Website Templates @ TemplateMonster.com - Mrach 03, 2012!</div>
		<div class="main">
			<div class="container_12">
				<div class="wrapper">
					<article class="grid_8">
						<h3>Contact Form</h3>
						<ul>
							<{foreach $gbook as $item}>								
							<li>
								<div>
									<h4><{$item['user_name']}> :<span>&emsp; <{$item['email']}></span></h4>
									<{$item['gbook_content']}>
									<br />
									<span style='display:block; float:right; margin-right: 20px;'><{$item['gbook_time']|date_format:"%Y-%m-%d"}></span>
								</div>
								<div style="clear:both;"></div>
								<hr />
							</li>
							<{/foreach}>
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
											<{* <a href="javascript:;" name='commit' onClick="document.getElementById('contact-form').submit()">提交</a> *}>
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
							<{foreach $conf as $item}>
								<p class="prev-indent-bot"><{$item['conf_name']}></p>
								<p class="prev-indent-bot"><{$item['conf_value']}></p>
							<{/foreach}>
						</div>
					</article>
				</div>
			</div>
		</div>
	</section>

<{include file="./footer.tpl"}>