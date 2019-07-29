<?php
    //正则表达式就是一套专门用于处理文本的强大工具
    //可以对进行文本查找，匹配，替换
    //正则表达式常用于验证表单提交的内容，比如验证电话号码，Email地址，身份证号码等是否有效;

    //定界符(分隔符)
    $reg1 = "/apple/";
    $reg2 = '#[0-9]+#';
    $reg3 = '+^abc+';
    $reg4 = "%[a-z]*%";

    $str1 = 'I like apple apple';
    $res = preg_match($reg1,$str1,$arr1);
    //	echo $res; //1
    //	echo '<pre>';
    //	print_r($arr1);

    function email($email){
        return preg_match("/^[a-zA-Z0-9]+@[a-zA-Z]+\.[a-zA-Z]+$/",$email);
    }
    $email = "towns@qq.com";
    echo email($email).'<hr />';

    $email = '12345@qq.com';
    echo email($email).'<hr />';


    // 常用的 prel兼容正则表达式函数
    // 1. preg_match()
    $reg1 = '/apple/';
    $str1 = 'I like apple';
    $res = preg_match($reg1,$str1,$arr1);
    echo $res; //1

    // 2. preg_match_all()
    $reg2 = '/apple/';
    $str2 = 'I like appleapple';
    $res = preg_match_all($reg2,$str2,$arr);
    echo $res; //2
    echo '<pre>';
    print_r($arr);

    // 3. preg_replace(正则,用来替换的字符串,匹配的字符串，规定匹配次数，匹配到的次数)
    // 规定的匹配次数在数组无效，在字符串有效
    $str3 = 'I like appleapple';
    $reg  = '/apple/';
    $res = preg_replace($reg,'Android',$str3,-1,$count);
    echo $count.'  ';
    echo $res;

    $fruits = array('apple','orange','melon','peach','orange');
    $reg = '/orange/';
    $res = preg_replace($reg,'jvzi',$fruits,-1,$count);
    print_r($res);

    // 4. preg_split(正则,输入字符串) 返回一个使用 pattern 边界分隔 subject 后得到的子串组成的数组
    $str = '祝蜜|girl|18|170';
    $reg = '/\|/'; //   \ 表示转义字符
    $info = preg_split($reg,$str,-1);
    echo '<pre>';
    print_r($info);

    //5. preg_grep(正则,输入数组，未匹配的元素组成的数组) 返回匹配模式的数组条目
    $arr = [2313.12312,'abc',236,23.44,'apple','123124'];
    $fl_array  =  preg_grep ( "/^(\d+)?\.\d+$/",$arr );
    print_r($fl_array); // 返回匹配条目

    $fl_array  =  preg_grep ( "/^(\d+)?\.\d+$/",$arr,PREG_GREP_INVERT );
    print_r($fl_array); //返回不匹配的条目



