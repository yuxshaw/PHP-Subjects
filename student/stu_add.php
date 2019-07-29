<?php
    require_once ('./include/config.php');

    // 查询所有院系
    $sql = "SELECT * FROM department";
    $dep = get_all($sql);

    // 查询所有班级
    $sql = "SELECT * FROM class";
    $cls = get_all($sql);

    // 添加学生
    if (isset($_POST['commit'])){

        // 上传大图
        $result = upload('stu_img','./uploads');
        if ($result['error'] == 1){
            return msg_jump('文件太大！');
        }

        $img_path = ltrim($result['path'],"\./");

        // 生成缩略图
        $thumb_path = img_thumb($result['path'],'100','100','./thumb',$result['name']);
        $thumb_path = ltrim($thumb_path,"\./");

        $data = array(
            'name' => $_POST['name'],
            'sex' => $_POST['sex'],
            'age' => $_POST['age'],
            'd_id' => $_POST['dep'],
            'class' => $_POST['cls'],
            'stu_img' => $img_path,
            'stu_thumb' => $thumb_path
        );

        // 添加
        $res = add('student',$data);
        if ($res){
            msg_jump('添加成功！','stu_list.php');
        }else{
            msg_jump('添加失败！');
        }

    }

?>
<link rel="stylesheet" href="css/bootstrap-fileinput.css">
<?php require_once('header.php'); ?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">学生管理</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-8 center-column">
                <form action="stu_add.php" method="post" class="cmxform" enctype="multipart/form-data">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加学生</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="stu_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">姓名</span>
                                        <input type="text" name="name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">性别</span>
                                        <select class="form-control" name="sex">
                                            <option value="1">男</option>
                                            <option value="0">女</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">年龄</span>
                                        <input type="text" name="age" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">院系</span>
                                        <select class="form-control" name="dep">
                                            <?php foreach ($dep as $item){ ?>
                                            <option value="<?php echo $item['d_id'];?>"><?php echo $item['d_name'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">班级</span>
                                        <select class="form-control" name="cls">
                                            <?php foreach ($cls as $item){ ?>
                                                <option value="<?php echo $item['class_id'];?>"><?php echo $item['class_name'];?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="images/noimage.png" alt="" />
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">选择文件</span>
                                                <span class="fileinput-exists">换一张</span>
                                                <input type="file" name="stu_img" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                            </span>
                                            <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                        <div class="col-md-8 col-md-offset-2 text-center">
                            <div class="form-group">
                                <input type="submit" value="提交" name="commit" class="submit btn btn-green">
                                <input type="reset" value="重置" class="submit btn btn-blue">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</section>
<!-- End: Content -->
</div>
<!-- End: Main -->
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap-fileinput.js"></script>
<link type="text/css" rel="stylesheet" href="umeditor/themes/default/_css/umeditor.css">
<script src="umeditor/umeditor.config.js" type="text/javascript"></script>
<script src="umeditor/editor_api.js" type="text/javascript"></script>
<script src="umeditor/lang/zh-cn/zh-cn.js" type="text/javascript"></script>
<script type="text/javascript">
    var ue = UM.getEditor('myEditor', {
        autoClearinitialContent: true,
        wordCount: false,
        elementPathEnabled: false,
        initialFrameHeight: 300
    });
</script>
</body>

</html>