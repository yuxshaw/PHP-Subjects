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
    $limit = 4;
    // 记录的起始位置
    $n = ($current -1) * $limit;
    // 最后一条页码数
    $size = 5;
    // 查询留言总数
    $count_sql = "SELECT COUNT(artcate_id) AS count FROM jl_article_cate";
    $count = get_one($count_sql);
    $count = $count['count'];

    // 查询所有班级信息
    $sql = "SELECT * FROM jl_article_cate LIMIT $n,$limit";
    $cate_arr = get_all($sql);

    // 单个删除
    if (isset($_GET['del'])){
        $del_id = $_GET['del'];
        $condition = "artcate_id = $del_id";

        // 删除数据
        $res = del('jl_article_cate',$condition);
        if ($res){
            msg_jump('删除成功！','artcate_list.php');
        }else{
            msg_jump('删除失败！');
        }
    }


    // 多个删除
    if (isset($_POST['delall'])){
        $idarr = $_POST['idarr'];

        $ids_arr = implode(',',$idarr);
        $condition = "artcate_id IN($ids_arr)";
        $del_res = del('jl_article_cate',$condition);
        if ($del_res){
            msg_jump('删除多条成功！','artcate_list.php');
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
                        <div class="panel-title">分类列表</div>
                        <a href="artcate_add.php" class="btn btn-info btn-gradient pull-right">
                            <span class="glyphicons glyphicon-plus"></span> 添加分类
                        </a>
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <h2 class="panel-body-title">分类信息</h2>
                            <table class="table table-striped table-bordered table-hover dataTable">
                                <tr class="active">
                                    <th class="text-center" width="100"><input type="checkbox" value="" id="checkall"class=""> 全选</th>
                                    <th>分类名称</th>
                                    <th>添加时间</th>
                                    <th width="200">操作</th>
                                </tr>
                                <?php foreach ($cate_arr as $item) {?>
                                <tr class="success">
                                    <td class="text-center"><input type="checkbox" value="<?php echo $item['artcate_id'];?>" name="idarr[]" class="cbox"></td>
                                    <td><?php echo $item['artcate_name'];?></td>
                                    <td><?php echo date('Y-m-d H:i:s',$item['artcate_time']);?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="artcate_edit.php?edit=<?php echo $item['artcate_id'];?>" class="btn btn-default btn-gradient">
                                                <span class="glyphicons glyphicon-pencil"></span>
                                            </a>
                                            <a onclick="return confirm('确定要删除吗？');" href="?del=<?php echo $item['artcate_id'];?>" class="btn btn-default btn-gradient dropdown-toggle">
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