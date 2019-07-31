<?php

//    require_once ("./include/config.php");
    function __autoload($classname){
        require_once ("include/{$classname}.class.php");
    }
//    require_once ('./include/DB.class.php');
//    require_once ('./include/Fenye.class.php');

    $db = new DB('localhost','root','123456','student');



    // 获取当前页码
    if (isset($_GET['page'])){
        $current = $_GET['page'];
    }else{
        $current = 1;
    }

    // 显示每页的记录数量
    $limit = 5;

    // 数据的起始位置
    $n = ($current - 1) * $limit;

    // 最后一条页码数
    $size = 5;

    // 查询学生总数
    $sql = "SELECT COUNT(number) AS num FROM student";
    $count = $db->get_one($sql);
    $count = $count['num'];


    $page = new Fenye($current,$count,$limit,$size);

    // 查询所有学生信息
//    $sql = "SELECT * FROM student AS stu JOIN department AS dep ON stu.d_id = dep.d_id ORDER BY number ASC";
    $sql = "SELECT * FROM department AS dep RIGHT JOIN student AS stu ON stu.d_id = dep.d_id LEFT JOIN class ON stu.class = class.class_id ORDER BY number ASC LIMIT $n,$limit";
    $data = $db->get_all( $sql);


    // 添加学生信息
    // 查询所有的系
    $sql_dep = "SELECT d_id, d_name FROM department";
    $dep_data = $db->get_all( $sql_dep);
    // 查询所有班级
    $sql_cls = "SELECT * FROM class";
    $cls_data = $db->get_all( $sql_cls);
//    var_dump($cls_data);die;
    if (isset($_POST) && !empty($_POST)) {
        $res = $db->add( 'student', $_POST);
        if ($res){
            msg_jump("添加成功！", "index.php");
        }else{
            msg_jump("添加失败!");
        }
    }

    //删除记录
    if (!empty($_GET) && isset($_GET['id'])) {
        $num = $_GET['id'];
        $res = $db->del( 'student', "number=$num");
        if ($res) {
            msg_jump('删除成功！', 'index.php');
        } else {
            msg_jump('删除失败！');
        }
    }



    //关闭数据库
//    mysqli_close($conn);
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.css" />
    <link rel="icon" href="./img/logo.png" type="image/x-icon">
    <title>学生管理系统</title>
    <style>
        .titles>th{text-align: center;}
        table td{vertical-align: middle!important;}
    </style>
</head>

<body>
    <div class="container">
        <div class="row">
            <h2 class="text-center text-primary">学生管理系统</h2>
            <table class="table table-bordered table-striped table-hover">
                <tr>
                    <td colspan="7">
                        <h4>
                            <a id="add" class="btn btn-success pull-right" data-toggle="modal" data-target=".add-model">
                                添加学生
                            </a>
                        </h4>
                    </td>
                </tr>
                <tr class="titles">
                    <th>id</th>
                    <th>姓名</th>
                    <th>性别</th>
                    <th>年龄</th>
                    <th>院系</th>
                    <th>班级</th>
                    <th>操作</th>
                </tr>
                <?php foreach ($data as $value) { ?>
                    <tr align="center">
                        <td><?php echo $value['number']; ?></td>
                        <td><?php echo $value['name']; ?></td>
                        <td><?php echo ($value['sex'] == 1) ? '男' : '女'; ?></td>
                        <td><?php echo $value['age']; ?></td>
                        <td><?php echo $value['d_name']; ?></td>
                        <td><?php echo $value['class_name']; ?></td>
                        <td>
                            <a class="btn btn-sm btn-primary" href="update.php?id=<?php echo $value['number']; ?>">修改</a>
                            <a class="btn btn-sm btn-danger del" onclick="return confirm('确定删除吗？');" href="index.php?id=<?php echo $value['number']; ?>" >删除</a>
                        </td>
                    </tr>
                <?php } ?>
            </table>

            <nav class="text-center" aria-label="...">
                    <?php //echo page($current, $count, $limit, $size);?>

                    <?php echo $page->pg();?>

            </nav>
        </div>        
    </div>
    


    <!-- 添加学生模态框 -->
    <div class="modal fade add-model"  tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" data-backdrop="static"  data-keyboard="false">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title">添加学生</h4>
                </div>             
                <form action="" method="post" class="form-horizontal" style="margin-top:20px;">                   
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">姓名</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="name" required>
                        </div>                       
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">性别</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <input type="radio" name="sex" id="" value="1" checked> 男
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="sex" id="" value="0"> 女
                            </label>
                        </div>                        
                    </div>
                    <div class="form-group">
                        <label for="age" class="col-sm-2 control-label">年龄</label>
                        <div class="col-sm-9">
                            <input type="text" name="age" class="form-control" id="age" required>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="d_id" class="col-sm-2 control-label">院系</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="d_id">
                                <?php foreach ($dep_data as $v){ ?>
                                    <option value="<?php echo $v['d_id']?> "><?php echo $v['d_name'];?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="class" class="col-sm-2 control-label">班级</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="class">
                                <?php foreach ($cls_data as $v){ ?>
                                    <option value="<?php echo $v['class_id']; ?>"><?php echo $v['class_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-default" data-dismiss="modal">关闭</button>
                        <input type="submit" class="btn btn-primary">
                    </div>
                </form>
            </div>
        </div>
    </div>
    
    <script src="./js/jquery-3.1.1.min.js"></script>
    <script src="./js/bootstrap.min.js"></script>
</body>
</html>