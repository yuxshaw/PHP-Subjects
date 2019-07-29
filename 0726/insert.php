<?php

    $conn = @mysqli_connect('localhost','root','123456','jlpro');
    $res = file_get_contents('goods_list.csv');
    $res = explode("\n",$res);

    mysqli_query($conn,'SET NAMES UTF8');
    // var_dump($res);
    foreach($res as $item){
        $arr[] = explode(',',$item);
    }

    for($i=0; $i<COUNT($arr); $i++){
        // $res = implode(',',$arr[$i]);
        $sql = '"","'.implode('","',$arr[$i]).'"';      // 拼数据值
        // echo $sql; die;
        // var_dump($res);die;
        $sql = "INSERT INTO jl_article VALUES ($sql)";
        // echo $sql;die;
        $res = mysqli_query($conn,$sql);
        if($res && mysqli_insert_id($conn) > 0){
            echo '添加成功！<br/>';
        }else{
            echo '添加失败！<br/>';
        }
    }
    
    
?>