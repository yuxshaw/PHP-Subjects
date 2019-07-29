<?php
    /*
        正则表达式的构成

        1. 模式

     */
    /*
        2. 元字符

        *           匹配前面的字符零次或多次     等同于{0,}
        +		    匹配前面的字符一次或多次 	等同于 ｛1，｝
        ?		    匹配前面的字符零次或一次	等同于 ｛0，1｝
        |		    匹配两个或多个选择
        ^ 		    匹配字符串的开始位置
        $ 		    匹配字符串结束位置
        \b		    匹配单词的边界(如空格、横杠，但不包括下划线)
        \B		    匹配除单词边界以外的部分
        []		    匹配方括号中的任一字符
        [^]		    匹配除方括号中的字符外的任何字符
        {m}		    m 是一个非负整数。匹配确定的 m 次
        {m,}	    m 是一个非负整数。至少匹配m 次
        {m,n}	    最少匹配 m次且最多匹配 n次
        ()		    表示一个整体
        .		    匹配除换行之外的任何一个字符

        3. 预定义元字符

        \d		    匹配一个数字；等价于[0-9]
        \D		    匹配除数字以外任何一个字符；等价于[^0-9] ^取反
        \w		    匹配一个英文字母、数字或下划线；等价于[0-9a-zA-Z_]
        \W		    匹配除英文字母、数字和下划线以外任何一个字符；等价于[^0-9a-zA-Z_]
        \s		    匹配一个空白字符；等价于[\f\n\r\t\v]
        \S		    匹配除空白字符以外任何一个字符；等价于[^\f\n\r\t\v]


        4. 模式修正符    对前面的正则进行补充或修正
        模式修正符在正则表达式定界符之外使用。

        i		    在和模式进行匹配时不区分大小写
        m		    将字符串视为多行
        s		    模式中的圆点元字符 “ . “将匹配所有的字符，包括换行符
        x	    	模式中的空白忽略不计，除非已经转义
        U		    取消贪婪匹配



     */


    function match($reg,$str){
        if (preg_match($reg,$str,$arr)){
            echo "{$str} 和规则 {$reg} 匹配成功 <pre>";
            print_r($arr);
        }else{
            echo '匹配失败！';
        }
    }

    function match_all($reg,$str){
        if (preg_match_all($reg,$str,$arr)){
            echo "{$str} 和规则 {$reg} 匹配成功 <pre>";
            print_r($arr);
        }else{
            echo '匹配失败！';
        }
    }

    $reg = '/go*gle/';  //  * 匹配前面的字符0次或多次  {1,}
    $str = 'google';
    match($reg,$str);

    $str = 'abc3bnk4b23nknk';
    $reg = '/\d+/';    //  + 匹配前面的字符1次或多次   {1,}
    match($reg,$str);

    $str = 'google';
    $reg = '/o?/';      // ? 匹配前面的字符0次或1次   {0,1}
    match($reg,$str);

    $url_a = 'http://www.baidu.com';
    $url_b = 'https://www.baidu.com';
    $url_c = 'https://www.yuxshaw.blog.cn';
    $url_d = 'https://www.yuxshaw.blog.cn/images';
    // $reg = '/^(https?):\/\/[a-z]+\.[a-zA-Z0-9]+\.(com|cn|net|asp|org|edu|io|top)+$/';
    $reg = '/^(https?):\/\/[a-z]+\.[a-zA-Z0-9]+\.[a-z]{2,}(\.[a-z]{2,})?(\/[\w\d]+)?$/';
    match($reg,$url_a);
    match($reg,$url_c);
    match($reg,$url_d);

    //  \b匹配单词的边界（横杠、空格，）不包括下划线
    $str = 'You are a Silly Dog';
    $reg = '/\bare\b/';
    match($reg,$str);

    //  \B匹配除单词边界以外的部分
    $reg = '/\Bare/';
//    match($reg,$str);
    echo '<hr/>';

    // 模式修正符
    // i    在和模式进行匹配时不区分大小写
    $str = 'I like cheery';
    $reg = '/ChEery/i';     //模式修政符写在定界符外面
    match($reg,$str);


    // s	模式中的圆点元字符 “ . “将匹配所有的字符，包括换行符
    $str = 'Che
    ery';
    $reg = '/Che.*/s';
    match($reg,$str);


    //
    $str = 'Apple is a kind of fruit which I like
apple
apple
apple';
    $reg = '/^apple/im';
    match_all($reg,$str);


    $str = "I don't like slieeping";
    $reg = "/li\nke/x";
    match($reg,$str);

    $str = "<span>傻狗</span><span>二狗</span>";
    $reg = "/\<span\>(.*?)\<\/span\>/";
    match($reg,$str);