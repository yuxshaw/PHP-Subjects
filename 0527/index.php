<?php
    header('Content-Type:text/html;charset=utf-8');     //设置编码

    $a = 10;
    echo $a++.'<br />';
    echo $a.'<br />';

    $sex = 1;

    $score = 85;

    if($score >= 80){
        echo '优秀 <br/>';
    }else if($score >=70){
        echo '良好 <br/>';
    }else if($score >=60){
        echo '及格 <br/>';
    }else{
        echo '不及格 <br/>';
    }

    switch ($score){
        case $score == 100:
            echo '满分 <br/>';
            break;
        case $score >= 80:
            echo '优秀 <br/>';
            break;
        case $score >=70:
            echo '良好 <br/>';
            break;
        case $score >= 60:
            echo '及格 <br/>';
            break;
        default:
            echo '不及格 <br/>';
    }

    $a = 1;
    $b = 2;
    if($a > $b):
        echo 'a>b <br/>';
    else:
        echo 'b>a <br/>';
    endif;



    exit();
?>

<!--<!doctype html>-->
<!--<html lang="en">-->
<!--<head>-->
<!--    <meta charset="UTF-8">-->
<!--    <meta name="viewport"-->
<!--          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">-->
<!--    <meta http-equiv="X-UA-Compatible" content="ie=edge">-->
<!--    <title>Document</title>-->
<!--</head>-->
<!--<body>-->
<!---->
<!--    <input type="radio" name="sex" value="--><?php //echo $sex; ?><!--" id="male">-->
<!--    <label for="">--><?php //if($sex ==1 ){echo '男';}else{echo '女';} ?><!--</label>-->
<!---->
<!--    <input type="radio" name="sex" value="--><?php //echo $sex ;?><!--" id="male">-->
<!--    <label for="">--><?php //echo $sex ==1 ?  '男' : '女' ; ?><!--</label>-->
<!---->
<!--</body>-->
<!--</html>-->
