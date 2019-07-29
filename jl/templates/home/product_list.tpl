<{include file="./header.tpl"}>

<div class="content">
	<div class="lefter">
    	<div class="title">
        	<h2 class="cBlue fB">产品展示<b class="cGrey fn">Products</b></h2>
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
        <div class="blank10"></div>
                <{$page}>
        <div class="blank6"></div>
    </div>

    <{include file="./righter.tpl"}>
    
    
</div>

<{include file="./footer.tpl"}>