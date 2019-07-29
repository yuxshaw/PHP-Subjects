<?php
    $phones = array(
        array(
            'name' => 'iphone xs',
            'size' => '6英寸',
            'color' => '白色',
            'price' => '10000元（国行）'
            ),
        array(
            'name' => '魅族MX3',
            'size' => '5英寸',
            'color' => '黑色',
            'price' => '2499元（联通版）'
        ),
        array(
            'name' => '三星GALAXY Note 3',
            'size' => '5英寸',
            'color' => '酷炫黑',
            'price' => '3399元（港版3G）'
        ),
        array(
            'name' => '三星Lumia 920',
            'size' => '4英寸',
            'color' => '黄色',
            'price' => '2180元（移动版）'
        ),
        array(
            'name' => '华为P30 Pro',
            'size' => '6英寸',
            'color' => '天空之境',
            'price' => '5999元（国行）'
        )
    );

    $str = 'I believe, For every drop of rain that falls, A flower grows.';
    echo '原句：'.$str.'<br>';
    echo '转换大小写：';
    for ($i = 0; $i<strlen($str); $i++){
//        echo $str[$i];
        if ($str[$i] == strtoupper($str[$i])){
            echo strtolower($str[$i]);
        }else{
            echo strtoupper($str[$i]);
        }
    }

//    $arr = explode(' ',$str);
////    print_r($arr);
//    foreach ($arr as $key => $item){
////        $str1 = $arr[2];
////        if ($str1 == strtoupper($str1)){
////            echo strtolower($str1);
////        }else{
////            echo strtoupper($str1);
////        }
//        if ($arr[$key] == strtoupper($arr[$key])){
//            echo strtolower($arr[$key]).'&nbsp;';
//        }else{
//            echo strtoupper($arr[$key]).'&nbsp;';
//        }
//    }
//    $change = implode(' ',$arr);
////    echo $change;
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        table{
            /*width: 800px!important;*/
            margin: 50px auto;
        }
        table th{
            text-align: center;
        }
        table td{
            text-align: center;
        }

    </style>
</head>

<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <table class="table table-striped table-hover" align="center">
                        <tr>
                            <th>名称(name)</th>
                            <th>手机屏幕大小(size)</th>
                            <th>颜色(color)</th>
                            <th>价格(price)</th>
                        </tr>
                        <?php foreach ($phones as $phone) {?>
                            <tr>
                                <?php foreach ($phone as $item) { ?>
                                    <td> <?php echo $item?></td>
                                <?php } ?>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
