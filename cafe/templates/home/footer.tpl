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
                        <{foreach $config as $item}>
                            <span><{$item['conf_name']}></span><span><{$item['conf_value']}></span>
                        <{/foreach}>
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


</script>