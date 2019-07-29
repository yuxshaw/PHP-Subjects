<?php
    require_once ('./include/config.php');

    // 获取当前页码
    if (isset($_GET['page'])){
        $current = $_GET['page'];
    }else{
        $current = 1;
    }
    // echo isset($_GET['page']) ? $current = $_GET['page'] : 1 ;
    // 每页显示的记录数量
    $limit = 5;
    // 记录的起始位置
    $n = ($current -1) * $limit;
    // 最后一条页码数
    $size = 5;
    // 查询留言总数
    $count_sql = "SELECT COUNT(art_id) AS count FROM jl_article";
    $count = get_one($count_sql);
    $count = $count['count'];


    if (isset($_GET['search']) && !empty($_GET['keywords'])){
        $keywords = $_GET['keywords'];

        // 查询留言总数
        $count_sql = "SELECT COUNT(art_id) AS count FROM jl_article AS art JOIN jl_article_cate AS cate ON art.artcate_id = cate.artcate_id WHERE art_title LIKE '%$keywords%' OR art_content LIKE '%$keywords%' OR art_time LIKE '%$keywords%' OR art_author LIKE '%$keywords%' OR artcate_name LIKE '%$keywords%'";
        $count = get_one($count_sql);
        $count = $count['count'];

        $sql = "SELECT * FROM jl_article AS art JOIN jl_article_cate AS cate ON art.artcate_id = cate.artcate_id WHERE art_title LIKE '%$keywords%' OR art_content LIKE '%$keywords%' OR art_time LIKE '%$keywords%' OR art_author LIKE '%$keywords%' OR artcate_name LIKE '%$keywords%' LIMIT $n,$limit";
        $art_arr = get_all($sql);

    }else{
        // 查询所有文章信息
        $sql = "SELECT * FROM jl_article AS art LEFT JOIN jl_article_cate AS cate ON art.artcate_id = cate.artcate_id ORDER BY art_id DESC LIMIT $n,$limit";
        $art_arr = get_all($sql);
    }

    // 单个删除
    if (isset($_GET['del'])){
        $del_id = $_GET['del'];
        $condition = "art_id = $del_id";

        // 查询需要删除的数据的信息
        $sql = "SELECT * FROM student WHERE $condition";
        $img_del = get_one($sql);
        // 删除数据
        $res = del('jl_article',$condition);
        if ($res){
            msg_jump('删除成功！','article_list.php');
        }else{
            msg_jump('删除失败！');
        }
    }


    // 多个删除
    if (isset($_POST['delall'])){
        $idarr = $_POST['idarr'];
        $ids_arr = implode(',',$idarr);
        $condition = "art_id IN($ids_arr)";
        $del_res = del('jl_article',$condition);
        if ($del_res){
            msg_jump('删除多条成功！','article_list.php');
        }else{
            msg_jump('删除失败！');
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
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title"><a href="article_list.php">文章列表</a></div>
                        <form class="form-inline pull-left" style="margin-left: 30px;" method="">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                <div class="input-group" style="width: 250px; border-radius: 5px;">
                                    <input style="border-radius: 8px;" type="text" name="keywords" class="form-control" id="exampleInputAmount" placeholder="search">
                                </div>
                            </div>
                            <button type="submit" name="search" class="btn btn-success">搜索</button>
                        </form>
                        <a href="article_add.php" class="btn btn-info btn-gradient pull-right">
                            <span class="glyphicons glyphicon-plus"></span> 添加文章
                        </a>
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <h2 class="panel-body-title">文章信息</h2>
                            <table class="table table-striped table-bordered table-hover dataTable text-center">
                                <tr class="active" >
                                    <th class="text-center" width="100"><input type="checkbox" value="" id="checkall"class=""> 全选</th>
                                    <th class="text-center">文章标题</th>
                                    <th class="text-center">发表时间</th>
                                    <th class="text-center">作者</th>
                                    <th class="text-center">文章分类</th>
                                    <th class="text-center" width="200">操作</th>
                                </tr>
                                <?php foreach ($art_arr as $item) {?>
                                <tr class="success">
                                    <td class="text-center"><input type="checkbox" value="<?php echo $item['art_id'];?>" name="idarr[]" class="cbox"></td>
                                    <td><?php echo $item['art_title'];?></td>
                                    <td><?php echo date("Y-m-d H:i:s",$item['art_time']);?></td>
                                    <td><?php echo $item['art_author'];?></td>
                                    <td><?php echo $item['artcate_name'];?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="article_edit.php?edit=<?php echo $item['art_id'];?>" class="btn btn-default btn-gradient">
                                                <span class="glyphicons glyphicon-pencil"></span>
                                            </a>
                                            <a onclick="return confirm('确定要删除吗？');" href="?del=<?php echo $item['art_id'];?>" class="btn btn-default btn-gradient dropdown-toggle">
                                                <span class="glyphicons glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php } ?>
                            </table>

                            <div class="pull-left">
                                <button type="submit" name="delall" class="btn btn-default btn-gradient pull-right delall">
                                    <span class="glyphicons glyphicon-trash"></span>
                                </button>
                            </div>

                            <div class="pull-right">
<!--                                分页-->
                                <?php echo pageBoot($current,$count,$limit,$size);?>

                            </div>

                        </div>
                    </form>
                </div>
            </div>
        </div>


    </div>
</section>
<!-- End: Content -->
</div>
<!-- End: Main -->
</body>
</html>