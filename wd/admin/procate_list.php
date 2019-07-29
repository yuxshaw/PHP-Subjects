<?php
    require_once('./include/config.php');

    // 获取当前页码
    if (isset($_GET['page'])){
        $current = $_GET['page'];
    }else{
        $current = 1;
    }

    // 每页显示的记录数量
    $limit = 3;

    // 记录的起始位置
    $n = ($current -1) * $limit;

    // 最后一条页码数
    $size = 5;

    // 查询留言总数
    $count_sql = "SELECT COUNT(procate_id) AS count FROM wd_product_cate";
    $count = get_one($count_sql);
    $count = $count['count'];

    // 查询所有分类
    $sql = "SELECT * FROM wd_product_cate LIMIT $n,$limit";
    $procate = get_all($sql);

    // 单个删除
    if (isset($_GET['del'])){
        $del_id = $_GET['del'];
        $condition = "procate_id = $del_id";
        $res = del('wd_product_cate',$condition);
        if ($res){
            msg_jump('删除成功！','procate_list.php');
        }else{
            msg_jump('删除失败！');
        }
    }


    // 多个删除
    if (isset($_POST['delall'])){
        $idarr = $_POST['idarr'];
        $ids_arr = implode(',',$idarr);
        $condition = "procate_id IN($ids_arr)";
        $del_res = del('wd_product_cate',$condition);
        if ($del_res){
            msg_jump('删除多条成功！','procate_list.php');
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
            <li class="active">产品分类</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">分类列表</div>
                        <a href="procate_add.php" class="btn btn-info btn-gradient pull-right"><span
                                    class="glyphicons glyphicon-plus"></span> 添加分类</a>
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover dataTable">
                                <tr class="active">
                                    <th class="text-center"><a class="btn btn-gray btn-sm" id="selectAll">全选</a></th>
                                    <th>分类名称</th>
                                    <th width="200">操作</th>
                                </tr>
                                <?php foreach ($procate as $item){ ?>
                                <tr class="success">
                                    <td class="text-center"><input type="checkbox" value="<?php echo $item['procate_id'];?>" name="idarr[]" class="cbox"></td>
                                    <td><?php echo $item['procate_name'];?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="procate_edit.php?edit=<?php echo $item['procate_id'];?>" class="btn btn-default btn-gradient">
                                                <span class="glyphicons glyphicon-pencil"></span>
                                            </a>
                                            <a onclick="return confirm('确定要删除吗？');" href="?del=<?php echo $item['procate_id'];?>" class="btn btn-default btn-gradient dropdown-toggle">
                                                <span class="glyphicons glyphicon-trash"></span>
                                            </a>
                                        </div>
                                    </td>
                                </tr>
                                <?php }?>
                            </table>

                            <div class="pull-left">
                                <button onclick="return confirm('确定要删除吗？');" type="submit" name="delall" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
                            </div>

                            <div class="pull-right">
                                <ul class="pagination" id="paginator-example">
                                    <?php echo pageBoot($current,$count,$limit,$size);?>
                                </ul>
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

<script src="./js/common.js"></script>