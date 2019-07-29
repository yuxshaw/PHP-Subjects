<?php
    require_once ('./includes/DB.class.php');
    require_once ('./includes/Pages.class.php');

    $db = new DB('localhost','root','123456','student');

    $current = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 6;
    $n = ($current - 1) * $limit;
    $size = 5;
    $count = $db->get_one("SELECT COUNT(number) AS c FROM student");

    $page = new Pages($current,$count['c'],$limit,$size);

    $stu = $db->select_all('student',"1 LIMIT {$n},{$limit}");


?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./includes/bootstrap.css">
    <title>Document</title>
    <style>
        table{
            /*margin-top: 50px;*/
        }
        th,td{
            text-align: center;
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-md-offset-1 text-center">
<!--                <h2>学生列表</h2>-->
                <table align="center" width="800px" class="table-bordered table-hover table table-striped">
                    <tr>
                        <th>序号</th>
                        <th>学号</th>
                        <th>姓名</th>
                        <th>性别</th>
                        <th>年龄</th>
                        <th>院系</th>
                        <th>班级</th>
                    </tr>
                    <?php foreach ($stu as $item){ ?>
                        <tr>
                            <td><?php echo ++$n; ?></td>
                            <td><?php echo $item['number'];?></td>
                            <td><?php echo $item['name'];?></td>
                            <td><?php echo $item['sex'] == 1 ? '男' : '女';?></td>
                            <td><?php echo $item['age'];?></td>
                            <td><?php echo $item['d_id'];?></td>
                            <td><?php echo $item['class'];?></td>
                        </tr>
                    <?php }?>
                </table>
                <ul class="pagination">
                    <?php echo $page->pg();?>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
