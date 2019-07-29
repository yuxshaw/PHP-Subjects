<?php
    //连接数据库
    $conn = mysqli_connect("localhost", "root", "123456");
    if (!$conn){
        die('数据库连接错误：'.mysqli_connect_errno().','.mysqli_connect_error());
    }

    //设置编码
    mysqli_query($conn,'SET NAMES "UTF8"');

    //选择数据库
    mysqli_select_db($conn,"student");  // 参数1：连接名      参数2：数据库名
//    mysqli_select_db($conn,"b1902");

    //s编写ql语句
    $sql = 'SELECT * FROM student';
    $res = mysqli_query($conn,$sql);

//    $data1 = mysqli_fetch_row($res);
    echo "<pre>";
    if (mysqli_num_rows($res)>0){
        while ($row = mysqli_fetch_assoc($res)){
            $data[] = $row;
        }
    }
//    var_dump($data);



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
        <table border="1" cellspacing="0" align="center">
            <tr>
                <td>id</td>
                <td>name</td>
                <td>sex</td>
                <td>age</td>
                <td>d_id</td>
                <td>class</td>
            </tr>
            <?php foreach ($data as $value){?>
            <tr align="center">
                <?php foreach ($value as $item){ ?>
                    <td><?php echo $item; ?></td>
                <?php } ?>
            </tr>
            <?php }?>
        </table>
</body>
</html>
