<?php
    require_once ('./include/config.php');

    if (isset($_GET['edit'])){
        $id = $_GET['edit'];
        $condition = "nav_id = $id";
        $sql = "SELECT * FROM jl_nav WHERE $condition";
        $nav_info = get_one($sql);
    }

    // 添加学生
    if (isset($_POST['commit'])){
        $id = $_POST['nav_id'];
        $data = array(
            'nav_name' => $_POST['nav_name'],
            'nav_url' => $_POST['nav_url']
        );

        $condition = "nav_id = $id";
        // 添加
        $res = update('jl_nav',$data,$condition);
        if ($res){
            msg_jump('修改成功！','nav_list.php');
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
            <li class="active">导航管理</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-8 center-column">
                <form action="" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">修改导航信息</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="nav_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">

                            <!--   隐藏域     -->
                            <input type="hidden" name="nav_id" value="<?php echo $nav_info['nav_id']; ?>" >

                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">导航名称</span>
                                        <input type="text" name="nav_name" value="<?php echo $nav_info['nav_name']; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">导航地址</span>
                                        <input type="text" name="nav_url" value="<?php echo $nav_info['nav_url']; ?>" class="form-control">
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