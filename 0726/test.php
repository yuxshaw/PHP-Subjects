<?php
    $conn = @mysqli_connect('localhost', 'root', '123456', 'jlpro');
    mysqli_query($conn, 'SET NAMES UTF8');

//    echo '<pre>';

    // 下载
    if (isset($_POST['down'])){
        download($conn);
    }

    // 上传
    if (isset($_POST['commit'])) {
//        var_dump($_FILES['up']);die;
        $file = $_FILES['up']['tmp_name'];      // 选择文件
        upload($conn,$file);
    }

    function download($conn)
    {
        $sql = "SELECT art_title,art_desc,art_content,art_time,art_show,art_author,artcate_id FROM jl_article";
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
            echo implode(',', $item) . "\n";
        }
        die;
    }

    function upload($conn,$file){
        $res = file_get_contents($file);
        $res = explode("\n",$res);
        foreach($res as $item){
            $arr[] = explode(',',$item);
        }
//        var_dump($arr);die;
        for($i=0; $i<COUNT($arr)-1; $i++){
            // $res = implode(',',$arr[$i]);
            $sql = '"","'.implode('","',$arr[$i]).'"';      // 拼数据值
            // echo $sql; die;
            // var_dump($res);die;
            $sql = "INSERT INTO jl_article VALUES ($sql)";
//             echo $sql;
            $res = mysqli_query($conn,$sql);
            if($res && mysqli_insert_id($conn) >= 0){
                echo '上传成功！<br/>';
            }else{
                echo '上传失败！<br/>';
            }
        }
        die;
    }

?>


<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    </style>
</head>

<body>
    <form action="" method="post" enctype="multipart/form-data">
        <button name="down">点击下载</button>&emsp;<br/><br/>
        <input type="file" name="up">
        <input type="submit" name="commit" value="上传">
    </form>

</body>

</html>
<script>
</script>