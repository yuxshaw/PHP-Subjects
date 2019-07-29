<?php
    require_once ('./include/config.php');

    // 获取文章id
    if (isset($_GET['edit'])){
        $gbook_id = $_GET['edit'];
        $condition = "gbook_id = $gbook_id";
        $sql = "SELECT * FROM wd_guestbook AS gb JOIN wd_user AS usr ON gb.user_id = usr.user_id WHERE $condition";
        $gbook_info = get_one($sql);
    }

    // 修改文章信息
    if (isset($_POST['commit'])){
        $gbook_id = $_POST['gbook_id'];
        $data = array(
            'gbook_show' => $_POST['gbook_show']
        );
        $condition = "gbook_id = $gbook_id";
        // 修改
        $res = update('wd_guestbook',$data,$condition);
        if ($res){
            msg_jump('修改成功！','gbook_list.php');
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
            <li class="active">留言管理</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">留言详情</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="gbook_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-8 col-md-offset-2">

                                <!--   隐藏域，保存记录主键nav_id    -->
                                <input type="hidden" name="gbook_id" value="<?php echo $gbook_info['gbook_id']; ?>">


                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">用户名称</span>
                                        <input type="text" name="user_name" readonly value="<?php echo $gbook_info['user_name']; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">用户邮箱</span>
                                        <input type="text" name="user_email" readonly value="<?php echo $gbook_info['user_email']; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">留言标题</span>
                                        <input type="text" name="gbook_name" readonly value="<?php echo $gbook_info['gbook_name']; ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">留言内容</span>
                                        <textarea name="gbook_content" readonly class="form-control" rows="3"><?php echo $gbook_info['gbook_content']; ?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">留言时间</span>
                                        <input type="text" name="time" readonly value="<?php echo date('Y-m-d H:i:s',$gbook_info['gbook_time']); ?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">是否显示</span>
                                        <select class="form-control" name="gbook_show">
                                            <option value="1" <?php echo $gbook_info['gbook_show'] == 1 ? 'selected' : ''; ?>>是</option>
                                            <option value="0" <?php echo $gbook_info['gbook_show'] == 0 ? 'selected' : ''; ?>>否</option>
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
</section>
<!-- End: Content -->
</div>

</body>

</html>