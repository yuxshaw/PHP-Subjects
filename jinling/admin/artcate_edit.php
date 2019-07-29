<?php
    require_once ('./include/config.php');

    if (isset($_GET['edit'])){
        $edit_id = $_GET['edit'];
        $sql = "SELECT * FROM jl_article_cate WHERE artcate_id = $edit_id";
        $cate_info = get_one($sql);
    }


    // 添加学生
    if (isset($_POST['commit'])){
        $cate_id = $_POST['cate_id'];
        $data = array(
            'artcate_name' => $_POST['artcate_name'],
            'artcate_time' => time()
        );

        // 添加
        $condition = "artcate_id = $cate_id";
        $res = update('jl_article_cate',$data,$condition);
        if ($res){
            msg_jump('修改成功！','artcate_list.php');
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
            <li class="active">文章管理</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-8 center-column">
                <form action="" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加分类</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="artcate_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <!--   隐藏域   -->
                            <input type="hidden" name="cate_id" value="<?php echo $cate_info['artcate_id'];?>">

                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">分类名称</span>
                                        <input type="text" name="artcate_name" value="<?php echo $cate_info['artcate_name'];?>" class="form-control">
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