<?php 

    header("Content-type:text/html;charset=utf8");

    $conn = @mysqli_connect('localhost','root','123456','jlpro');
    mysqli_query($conn,'SET NAMES UTF8');

    $sql = "SELECT * FROM jl_article";
    $res = mysqli_query($conn, $sql); // 参数1：链接名；参数2：sql语句
        if ($res && mysqli_num_rows($res) > 0) {
            while ($row = mysqli_fetch_assoc($res)) {
                $data[] = $row;
            }
        }

    header("Content-type: application/vnd.ms-excel; charset=utf-8");
    Header("Content-Disposition: attachment; filename=goods_list.csv");    

    // echo "ID,标题,描述,内容,时间,是否显示,作者,分类\n";
    
    foreach ($data as $item) {
        echo implode(',',$item)."\n";
    }
    
?>
