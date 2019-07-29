<?php
    require_once ('./include/config.php');

    // 查询所有院系信息
    $sql = "SELECT * FROM department";
    $dep_arr = get_all($sql);

    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $sql = "SELECT * FROM class WHERE class_id = $id";
        $class_info = get_one($sql);
    }

    // 修改班级信息
    if (isset($_POST['commit'])){
        $id = $_POST['class_id'];
        $data = array(
            'class_name' => $_POST['class_name'],
            'd_id' => $_POST['d_id']
        );
        $condition = "class_id = $id";
        // 添加
        $res = update('class',$data,$condition);
        if ($res){
            msg_jump('修改成功！','class_list.php');
        }else{
            msg_jump('修改失败！');
        }

    }
?>
<?php require_once('header.php'); ?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">班级管理</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-8 center-column">
                <form action="class_edit.php" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加班级</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="class_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">

                            <!--   隐藏域     -->
                            <input type="hidden" name="class_id" value="<?php echo $class_info['class_id']; ?>" >

                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">班级名称</span>
                                        <input type="text" name="class_name" value="<?php echo $class_info['class_name']; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">所属院系</span>
                                        <select class="form-control" name="d_id">
                                            <?php foreach ($dep_arr as $item){ ?>
                                                <option value="<?php echo $item['d_id'];?>" <?php echo $class_info['d_id'] == $item['d_id'] ? 'selected' : '';?>><?php echo $item['d_name'];?></option>
                                            <?php } ?>
                                        </select>
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