<?php
    //连接数据库
    $conn = mysqli_connect("localhost", "root", "123456","student");
    if (!$conn){
        die('数据库连接错误：'.mysqli_connect_errno().','.mysqli_connect_error());
    }

    //设置编码
    mysqli_query($conn,'SET NAMES "UTF8"');

    //选择数据库
    //mysqli_select_db($conn,"student");  // 参数1：连接名      参数2：数据库名

    //s编写ql语句
    $sql = 'SELECT * FROM student';

    //查询
    $res = mysqli_query($conn,$sql);    // 参数1 ： 连接名    参数2 ： sql语句

//    $data1 = mysqli_fetch_row($res);
    echo "<pre>";
    if (mysqli_num_rows($res)>0){
        while ($row = mysqli_fetch_object($res)){
            $data[] = $row;
        }
    }
//    var_dump($data);

    // 释放结果集
    mysqli_free_result($res);


    if (isset($_POST) && !empty($_POST)){
//        var_dump($_POST);
        $name = $_POST['name'];
        $sex = $_POST['sex'];
        $age = $_POST['age'];
        $d_id = $_POST['d_id'];
        $class = $_POST['class'];

        $sql = "INSERT INTO `student`(`name`, `sex`, `age`, `d_id`, `class`) VALUES ('$name', $sex, $age, $d_id, $class)";
        $result = mysqli_query($conn,$sql);
        if ($result){
            echo '<script>alert("添加成功！"); location.replace("student.php");</script>';
        }else{
            echo '<script>alert("添加失败！");</script>';
        }
    }

    // 删除数据
    if (isset($_GET) && !empty($_GET)){
        $id = $_GET['id'];  // 获取id
        $sql = "DELETE FROM student WHERE number = $id";    //删除语句
        $res = mysqli_query($conn,$sql);
        if ($res){
            echo '<script>alert("删除成功！"); location.replace("student.php");</script>';
        }else{
            echo '<script>alert("删除失败！");</script>';
        }
    }

    // 删除数据
//    if (!empty($_GET)){
//        $id = $_GET['id'];  // 获取id
//        $sql = "DELETE FROM student WHERE number = $id";    //删除语句
//        $res = mysqli_query($conn,$sql);
//        if ($res){
//            echo '<script>alert("删除成功！"); location.replace("student.php");</script>';
//        }else{
//            echo '<script>alert("删除失败！");</script>';
//        }
//    }



    // 关闭数据库
    $conn -> close();

    ?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/animate.css">
    <link rel="stylesheet" href="css/bootstrap.css">
    <style>
        /*body{position: relative;}*/
        #add_box{
            position: absolute;
            width: 500px;
            height: 360px;
            background-color:#f3f3f3;
            left: 50%;
            top: 20px;
            margin-left: -250px;
            border: 1px solid #7ab5d3;
            border-radius: 20px;
        }
        #close_btn{
            position: absolute;
            top: 10px;
            left: 90%;
        }
        .tab1{
            position: absolute;
            width: 800px;
            height: auto;
            top: 10px;
            left: 50%;
            margin-left: -400px;
        }
        .tab1 td, .tab1 th{
            text-align: center;
        }
        .tab2{
            width: 300px;
            margin: auto;
        }
        .tab2 td{
            text-align: center;
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
    <table class="tab1 table table-bordered table-striped table-hover">
        <tr align="center">
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td></td>
            <td><a href="javascript:;" id="add" class="btn btn-success">添加</a></td>
        </tr>
        <tr align="center">
            <th>number</th>
            <th>name</th>
            <th>sex</th>
            <th>age</th>
            <th>d_id</th>
            <th>class</th>
            <th>操作</th>
        </tr>
        <?php foreach ($data as $value){?>
            <tr align="center">
                <td><?php echo $value -> number; ?></td>
                <td><?php echo $value -> name; ?></td>
                <!--                <td>--><?php //echo $value -> sex; ?><!--</td>-->
                <td><?php echo ($value -> sex ==1 ? '男' : '女'); ?></td>
                <td><?php echo $value -> age; ?></td>
                <td><?php echo $value -> d_id; ?></td>
                <td><?php echo $value -> class; ?></td>
                <td><a href=" update.php?id=<?php echo $value -> number;?>">修改</a>/<a href="?id=<?php echo $value -> number;?>" onclick="return del_confirm()">删除</a></td>
<!--                <td><a href=" update.php?id=--><?php //echo $value -> number;?><!--">修改</a>/<a href="" id="del">删除</a></td>-->
            </tr>
        <?php }?>
    </table>
    <div id="add_box" class="animated slideInDown" style="display: none;" >
        <form action="" method="post">
            <table class="tab2 table">
                <tr>
                    <td>姓名：</td>
                    <td><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>性别: </td>
                    <td><input type="radio" value="1" name="sex">男<input type="radio" value="0" name="sex">女</td>
                </tr>
                <tr>
                    <td>年龄：</td>
                    <td><input type="text" name="age" /></td>
                </tr>
                <tr>
                    <td>d_id：</td>
                    <td><input type="text" name="d_id" /></td>
                </tr>
                <tr>
                    <td>班级：</td>
                    <td><input type="text" name="class" /></td>
                </tr>
                <tr>
                    <td colspan="2"><input type="submit" class="btn btn-success"></td>
                </tr>
            </table>
        </form>
        <button class="btn btn-danger" id="close_btn">X</button>
    </div>

    <script>
        var add_btn= document.getElementById('add');
        var add_box = document.getElementById('add_box');
        add_btn.onclick = function () {
            add_box.style.display = 'block';
        }

        var close_btn = document.getElementById('close_btn');
        close_btn.onclick = function () {
            add_box.style.display = 'none';
        }
        
        function del_confirm() {
            var res=confirm("确定删除这条记录吗？");
            if (res == true){
                return true;
            }else{
                return false;
            }
        }

        // var del_btn = document.getElementById("del");
        // for (var i=0; i < del_btn.length; i++){
        //     del_btn[i].onclick = function () {
        //         var num = this.getAttribute(value);
        //         alert(num);
        //         var res = this.confirm("确定删除这条记录吗？");
        //         if (res == true){
        //             location.href("student.php?id="+num);
        //         }
        //     }
        // }

    </script>

</body>
</html>
