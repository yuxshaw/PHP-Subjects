<{include file="./header.tpl" title=foo}>
<{config_load file="./sys.conf" title=foo}>

    <{*注释内容*}>

    <{*变量修饰符*}>
    <{$a|capitalize}>总共<{$a|count_characters}>字符<br/>
    大写：<{$a|upper}><br/>
    <{$time|date_format:"%Y-%m-%d"}><br/>
    <{$b}><br/>

    <{*图片路径相对于php文件去查找，而不是相对模板文件*}>
    <img src="./static/images/aaa.jpg" alt="">

    <{* if  elseif  else *}>
    <{if $age >= 25}>
        <div>大叔你好！</div>
    <{elseif $age > 18}>
        <div>小哥哥你好！</div>
    <{else}>
        <div>小屁孩你好！</div>
    <{/if}>

    name:<{$stu[0]}><br/>
    age:<{$stu[1]}><br/>
    sex:<{$stu[2]}><br/>

    <{* foreach *}>
    <{foreach from=$stu item=val}>
        <{$val}>&emsp;
    <{/foreach}>

<{include file="./footer.tpl" title=foo}>
