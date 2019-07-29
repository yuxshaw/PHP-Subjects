<?php
require_once ('./include/config.php');

    // 查询所有的文章分类
    $sql = "SELECT * FROM jl_article_cate";
    $cate = get_all($sql);

    // 获取文章id,查询一条信息
    if (isset($_GET['edit'])){
        $edit_id = $_GET['edit'];
        $condition = "art_id = $edit_id";
        $sql = "SELECT * FROM jl_article WHERE $condition";
        $art_info = get_one($sql);
    }


    if (isset($_POST['commit'])){
        $id = $_POST['art_id'];
        $data = array(
            'art_title' => $_POST['title'],
            'art_content' => $_POST['editorValue'],
            'art_time' => time(),
            'art_author' => $_POST['author'],
            'artcate_id' => $_POST['artcate']
        );
        $condition = "art_id = $id";
        $res = update('jl_article',$data,$condition);
        if ($res){
            msg_jump('修改成功！','article_list.php');
        }else{
            msg_jump('修改失败！');
        }
}

require_once ('header.php');
?>
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
                            <div class="panel-title">修改文章</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="article_list.php" class="btn btn-default btn-gradient dropdown-toggle">
                                    <span class="glyphicon glyphicon-chevron-left"></span>
                                </a>
                            </div>
                        </div>
                        <div class="panel-body">

                            <!--    隐藏域    -->
                            <input type="hidden" name="art_id" value="<?php echo $art_info['art_id']; ?>">

                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">文章类型</span>
                                        <select name="artcate" id="standard-list1" class="form-control">
                                            <option>请选择</option>
                                            <?php foreach ($cate as $item){ ?>
                                                <option value="<?php echo $item['artcate_id']; ?>" <?php echo $art_info['artcate_id'] == $item['artcate_id'] ? 'selected' : ''; ?>><?php echo $item['artcate_name']; ?></option>
                                            <?php } ?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">文章标题</span>
                                        <input type="text" name="title" class="form-control" value="<?php echo $art_info['art_title'];?>">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">作者</span>
                                        <input type="text" name="author" class="form-control" value="<?php echo $art_info['art_author'];?>">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <script type="text/plain" id="myEditor" style="width:100%;height:200px;">
									<?php echo $art_info['art_content'];?>
                              	</script>
                            </div>
                            <div class="col-md-7">
                                <div class="form-group">
                                    <input type="submit" name="commit" value="提交" class="submit btn btn-blue">
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
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