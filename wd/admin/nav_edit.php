<?php
    require_once('./include/config.php');

    // 获取id
    if (isset($_GET['edit'])) {
        $nav_id = $_GET['edit'];
        $condition = "nav_id = $nav_id";
        $sql = "SELECT * FROM wd_nav WHERE $condition";

        $nav_info = get_one($sql);
//            p($nav_info);die;
    }

    // 查询一级导航
    $sql = "SELECT * FROM wd_nav WHERE parent_id = 0";
    $parent_nav = get_all($sql);

    // 修改信息
    if (isset($_POST['commit'])){
        $nav_id = $_POST['nav_id'];
        $data = array(
            'nav_name' => $_POST['name'],
            'nav_url' => $_POST['url'],
            'nav_show' => $_POST['isshow'],
            'parent_id' => $_POST['subnav']
        );
        $condition = "nav_id = $nav_id";

        $res = update('wd_nav',$data,$condition);
        if ($res){
            msg_jump('修改成功！','nav_manage.php');
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
            <li class="active">编辑导航</li>
        </ol>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="nav_edit.php" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">编辑导航</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="nav_manage.php" class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-8 col-md-offset-2">
                                <!--   隐藏域，保存记录主键nav_id    -->
                                <input type="hidden" name="nav_id" value="<?php echo $nav_info['nav_id'];?>">

                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">导航名称</span>
                                        <input type="text" name="name" value="<?php echo $nav_info['nav_name']; ?>"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">导航链接</span>
                                        <input type="text" name="url" value="<?php echo $nav_info['nav_url']; ?>"
                                               class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">是否显示</span>
                                        <select class="form-control" name="isshow">
                                            <option value="1" <?php echo $nav_info['nav_show'] == 1 ? 'selected' : ''; ?>>
                                                是
                                            </option>
                                            <option value="0" <?php echo $nav_info['nav_show'] == 0 ? 'selected' : ''; ?>>
                                                否
                                            </option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">导航类型</span>
                                        <select class="form-control" name="subnav">
                                            <optgroup label="一级导航">
                                                <option value="0" <?php echo $nav_info['parent_id'] == 0 ? 'selected' : ''; ?>>
                                                    一级导航
                                                </option>
                                            </optgroup>
                                            <optgroup label="二级导航">
                                                <?php foreach ($parent_nav as $item) { ?>
                                                    <option value="<?php echo $item['nav_id']; ?>" <?php echo $nav_info['parent_id'] == $item['nav_id'] ? 'selected' : ''; ?> ><?php echo $item['nav_name']; ?></option>
                                                <?php } ?>
                                            </optgroup>
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

</body>

</html>