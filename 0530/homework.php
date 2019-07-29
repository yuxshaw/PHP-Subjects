<?php

    $fh = fopen("./images/count.txt","a+");
    $count = 0;
    $count = fgets($fh);
    $count++;

//    if ($count<10){
//        echo '<img src="images/'.$count.'.jpg" />';
//    }elseif ($count>=10 && $count<100){
//        $sw = (int)($count/10);
//        $gw = (int)($count%10);
//        echo '<img src="images/'.$sw.'.jpg" />';
//        echo '<img src="images/'.$gw.'.jpg" />';
//    }elseif ($count>=100){
//        $bw = (int)($count/100);
//        $sw = (int)(($count/10)%10);
//        $gw = (int)($count%10);
//        echo '<img src="images/'.$bw.'.jpg" />';
//        echo '<img src="images/'.$sw.'.jpg" />';
//        echo '<img src="images/'.$gw.'.jpg" />';
//    }
    file_put_contents("./images/count.txt",$count);
    $arr = str_split($count);

    fclose($fh)

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>

    <div class="img">
        <?php foreach ($arr as $item){ ?>
            <img src="images/<?php echo $item ?>.jpg" alt="">
        <?php } ?>
    </div>

</body>
</html>