<div class="footer">
    <{*p>地址：广东省广州市广州大道北  联系人：乐可   移动电话：13619829982 固定电话：020-1234567 传 真：020-1234567</p>
    <p>Copyright @ 2009 金陵贸易有限公司 版权所有</p>
    <p><a href="#">粤ICP备08108790号</a></p*}>

    <{foreach from=$conf item=val}>
        <span><{$val['conf_name']}>: <{$val['conf_value']}></span>&ensp;
    <{/foreach}>

</div>
<script type="text/javascript" src="static/common/js.js"></script>
</body>
</html>