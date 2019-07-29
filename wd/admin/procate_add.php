<?php
    require_once ('./include/config.php');

    // 添加
    if (isset($_POST['commit'])){
        $data = array(
            'procate_name' => $_POST['cate_name'],
            'procate_time' => time()
        );

        $res = add('wd_product_cate',$data);
        if ($res){
            msg_jump('添加成功！','procate_list.php');
        }else{
            msg_jump('添加失败！');
        }
    }

?>
<?php require_once('header.php'); ?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">添加分类</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="procate_add.php" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加分类</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="procate_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">分类名称</span>
                                        <input type="text" name="cate_name" value="" class="form-control">
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
</section>
<!-- End: Content -->
</div>

</body>

</html>