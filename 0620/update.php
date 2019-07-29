<?php

    require_once ("./include/config.php");

	// 通过get方式传过来的id查询记录
	if(isset($_GET) && !empty($_GET)){
		$id = $_GET['id'];
		$sql = "SELECT * FROM student WHERE number = $id";
		$data = get_one($conn,$sql);
//        echo '<pre>';
//        var_dump($data);die;

	}

    // 查询所有的系
    $sql_dep = "SELECT d_id, d_name FROM department";
    $dep_data = get_all($conn, $sql_dep);
    // 查询所有班级
    $sql_cls = "SELECT * FROM class";
    $cls_data = get_all($conn, $sql_cls);

	//通过post提交的信息修改记录
	if(!empty($_POST) && $_POST['sub']=='修改'){
	    $number = $_POST['number'];
        $data = array(
            'name' => $_POST['name'],
            'sex' => $_POST['sex'],
            'age' => $_POST['age'],
            'd_id' => $_POST['d_id'],
            'class' => $_POST['class']
        );
        $res = update($conn,"student", $data,"number = $number");
        if($res){
            msg_jump('修改成功！', 'index.php');
        }else{
            msg_jump('修改失败！');
        }

	}
?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./css/bootstrap.min.css" />
    <link rel="stylesheet" href="./css/animate.css" />
    <link rel="icon" href="./img/logo.png" type="image/x-icon">
	<title>修改</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <h3 class="text-center">修改</h3>
            <div class="form-box">
                <form action="" method="post" class="form-horizontal">
                    <!--隐藏域-->
                    <input type="hidden" name="number" value="<?php echo $data['number']; ?>">
                    <div class="form-group">
                        <label for="name" class="col-sm-2 control-label">姓名</label>
                        <div class="col-sm-9">
                            <input type="text" name="name" class="form-control" id="name" required  value="<?php echo $data['name']; ?>">
                        </div>                       
                    </div>
                    <div class="form-group">
                        <label class="col-sm-2 control-label">性别</label>
                        <div class="col-sm-9">
                            <label class="radio-inline">
                                <input type="radio" name="sex" id="" value="1" <?php if($data['sex']==1){echo 'checked';} ?>> 男
                            </label>
                            <label class="radio-inline">
                                <input type="radio" name="sex" id="" value="0" <?php if($data['sex']==0){echo 'checked';} ?>> 女
                            </label>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="age" class="col-sm-2 control-label">年龄</label>
                        <div class="col-sm-9">
                            <input type="text" name="age" class="form-control" id="age" required value="<?php echo $data['age']; ?>">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="d_id" class="col-sm-2 control-label">院系</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="d_id">
                                <?php foreach ($dep_data as $v){ ?>
                                    <option value="<?php echo $v['d_id']; ?>" <?php if($data['d_id']==$v['d_id']){echo 'selected';}?>><?php echo $v['d_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="class" class="col-sm-2 control-label">班级</label>
                        <div class="col-sm-9">
                            <select class="form-control" name="class">
                                <?php foreach ($cls_data as $v){ ?>
                                    <option value="<?php echo $v['class_id']; ?>" <?php if ($data['class']==$v['class_id']){echo 'selected';} ?>><?php echo $v['class_name']; ?></option>
                                <?php } ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <a type="button" class="btn btn-default" data-dismiss="modal" href="index.php">返回</a>
                        <input type="submit" name="sub" class="btn btn-primary" value="修改">
                    </div>
                </form>
            </div>
        </div>
    </div>
</body>
</html>
