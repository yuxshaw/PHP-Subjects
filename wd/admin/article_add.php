<?php
    require_once ('./include/config.php');

    // 查询文章分类
    $sql = "SELECT * FROM wd_article_cate";
    $artcate = get_all($sql);

    if (isset($_POST['commit'])){
        $data = array(
            'art_title' => $_POST['title'],
            'art_desc' => $_POST['desc'],
            'art_content' => $_POST['content'],
            'art_time' => time(),
            'art_show' => $_POST['isshow'],
            'art_author' => $_POST['author'],
            'artcate_id' => $_POST['artcate']
        );
         //添加
        $res = add('wd_article',$data);
        if ($res){
            msg_jump('添加成功！','article_list.php');
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
            <li class="active">添加文章</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="article_add.php" method="post" class="cmxform">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加文章</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="article_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-8 col-md-offset-2">
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">文章标题</span>
                                        <input type="text" name="title" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">文章描述</span>
                                        <input type="text" name="desc" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">文章内容</span>
                                        <textarea name="content" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">是否显示</span>
                                        <select class="form-control" name="isshow">
                                            <option value="1">是</option>
                                            <option value="0">否</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">作&emsp;&emsp;者</span>
                                        <input type="text" name="author" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">文章类型</span>
                                        <select class="form-control" name="artcate">
                                            <?php foreach ($artcate as $item){ ?>
                                                <option value="<?php echo $item['artcate_id'];?>"><?php echo $item['artcate_name'];?></option>
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

</body>

</html>