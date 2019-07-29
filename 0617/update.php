<?php
    //连接数据库
    $conn = mysqli_connect("localhost", "root", "123456","student");
    if (!$conn){
        die('数据库连接错误：'.mysqli_connect_errno().','.mysqli_connect_error());
    }
    //设置编码
    mysqli_query($conn,'SET NAMES "UTF8"');

    // 通过get方式传过来的id查找信息
    if (isset($_GET) && !empty($_GET)){
        $id = $_GET['id'];
        $sql = "SELECT * FROM student WHERE number = $id";
        $res = mysqli_query($conn,$sql);
        $data = mysqli_fetch_assoc($res);
    }

    //通过post方式提交的信息修改记录
    if (!empty($_POST) && $_POST['sub'] == '修改'){
        $number = $_POST['number'];
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $age = $_POST['age'];
        $d_id = $_POST['d_id'];
        $class = $_POST['class'];
        $sql = "UPDATE student SET `name` = '$name', `sex` = $sex, `age` = $age, `d_id` = $d_id, `class` = $class WHERE `number` = $number";
//        echo $sql;
//        die();
        $res =  mysqli_query($conn,$sql);
        if ($res){
            echo '<script>alert("修改成功！"); location.replace("student.php");</script>';
        }else{
            echo "<script>alert('修改失败！'); </script>";
        }
    }

    mysqli_close($conn);

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
        .table{
            position: absolute;
            width: 400px;
            height: auto;
            top: 10px;
            left: 50%;
            margin-left: -200px;
        }
        .table td, .table th{
            vertical-align: middle;
        }
        pre{
            background-color: #ffffff!important;
            border: none!important;
            border-radius: 0!important;
        }
    </style>
</head>
<body>
    <form action="" method="post">
        <table class="table">
            <tr>
                <td colspan="2"><input type="hidden" name="number" value="<?php echo $data['number']; ?>"></td>
            </tr>
            <tr>
                <td>姓名：</td>
                <td><input type="text" name="name" value="<?php echo $data['name']; ?>"></td>
            </tr>
            <tr>
                <td>性别：</td>
                <td>
                    <input type="radio" value="1" name="sex" <?php if ($data['sex'] == 1){ echo 'checked';} ?>>男
                    <input type="radio" value="0" name="sex" <?php if ($data['sex'] == 0){ echo 'checked';} ?>>女
                </td>
            </tr>
            <tr>
                <td>年龄：</td>
                <td><input type="text" name="age" value="<?php echo $data['age']; ?>" /></td>
            </tr>
            <tr>
                <td>d_id：</td>
                <td><input type="text" name="d_id" value="<?php echo $data['d_id']; ?>" /></td>
            </tr>
            <tr>
                <td>班级：</td>
                <td><input type="text" name="class" value="<?php echo $data['class']; ?>" /></td>
            </tr>
            <tr>
                <td><input type="submit" class="btn btn-info" value="修改" name="sub"></td>
                <td><a href="student.php" class="btn btn-danger">取消</a></td>
            </tr>
        </table>
    </form>


</body>
</html>
