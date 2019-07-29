<{include file="./header.tpl" title=foo}>

<div class="content">
	<div class="w475_l">
    	<div class="title">
        	<h2 class="cBlue fB">公司简介<b class="cGrey fn">About us</b></h2>
        </div>
        <div class="intro">
            <{$com['page_desc']}><a href="about_us.php" class="cBlue"> 更多...</a>
            <div class="hackbox"></div>
        </div>
        <div class="blank10"></div>
        <div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2><span class="more"><a href="product_list.php" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_l">
            <{foreach $pro as $item}>
        	<li>
                <span class="listimg">
                    <img src="static/images/tran.gif" class="blank" /><a href="product_info.php"><img src="<{$item['pro_img']}>" alt="产品1" /></a>
                </span>
                <span class="listtxt"><a href="product_info.php"><{$item['pro_name']}></a></span>
            </li>
        	<{/foreach}>
        </ul>
    </div>
    <div class="w370_r">
    	<div class="title">
        	<h2 class="cBlue fB">最新公告<b class="cGrey fn">News</b></h2>
        </div>
        <ul class="list_r">
            <{foreach $news as $item}>
                <li><a href="article.php"><{$item['art_title']}></a><span class="time1"><{date('Y-m-d',$item['art_time'])}></span></li>
            <{/foreach}>
        </ul>
        <div class="blank29"></div>
        <div class="title">
        	<h2 class="cBlue fB">行业资讯<b class="cGrey fn">Information</b></h2><span class="more"><a href="info.php" class="cBlue"> 更多...</a></span>
        </div>
        <ul class="list_r">
            <li><a href="article.php">全国建材库存继续增加 广州市场...</a><span class="time1">2009-07-10</span></li>
            <li><a href="article.php">禁止保温材料现场调配 保证节能建材真正... </a><span class="time1">2009-07-10</span></li>
            <li><a href="article.php">节能65%烧结页岩空心砖面世 </a><span class="time1">2009-07-10</span></li>
            <li><a href="article.php">节能减排推动建筑陶瓷企业科技创新  </a><span class="time1">2009-07-10</span></li>
            <li><a href="article.php">新型墙体材料合格率仅为85.1%    </a><span class="time1">2009-07-10</span></li>
        </ul>
    </div>
    <div class="hackbox"></div>
    
	<div class="title">
        	<h2 class="cBlue fB">友情链接<b class="cGrey fn">Links</b></h2>
    </div>
    <p class="links"><a href="#">卓越网上购物</a> | <a href="#">京东网上商城</a> | <a href="#">携程旅行网</a> | <a href="#">太平洋电脑网</a> | <a href="#">中国移动</a> | <a href="#">中国政府网</a> | <a href="#">凤 凰 网</a></p>
</div>

<{include file='./footer.tpl' title=foo}>