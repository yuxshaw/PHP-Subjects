<?php
    require_once('./include/config.php');

    // 获取当前页码
    if (isset($_GET['page'])){
        $current = $_GET['page'];
    }else{
        $current = 1;
    }

    // 每页显示的记录数量
    $limit = 5;

    // 记录的起始位置
    $n = ($current -1) * $limit;

    // 最后一条页码数
    $size = 5;

    // 查询留言总数
    $count_sql = "SELECT COUNT(pro_id) AS count FROM wd_product";
    $count = get_one($count_sql);
    $count = $count['count'];

    if (isset($_GET['search']) && !empty($_GET['keywords'])){
        $keywords = $_GET['keywords'];

        // 查询留言总数
        $count_sql = "SELECT COUNT(pro_id) AS count FROM wd_product AS pro LEFT JOIN wd_product_cate AS pcate ON pro.procate_id = pcate.procate_id WHERE pro_name LIKE '%$keywords%' OR pro_price LIKE '%$keywords%' OR pro_time LIKE '%$keywords%' OR procate_name LIKE '%$keywords%'";
        $count = get_one($count_sql);
        $count = $count['count'];

        // 查询所有产品
        $sql = "SELECT * FROM wd_product AS pro LEFT JOIN wd_product_cate AS pcate ON pro.procate_id = pcate.procate_id WHERE pro_name LIKE '%$keywords%' OR pro_price LIKE '%$keywords%' OR pro_time LIKE '%$keywords%' OR procate_name LIKE '%$keywords%' ORDER BY pro.pro_time DESC LIMIT $n,$limit";
        $product = get_all($sql);

    }else {
        // 查询所有产品
        $sql = "SELECT * FROM wd_product AS pro LEFT JOIN wd_product_cate AS pcate ON pro.procate_id = pcate.procate_id ORDER BY pro.pro_time DESC LIMIT $n,$limit";
        $product = get_all($sql);
    }
    // 单个删除
    if (isset($_GET['del'])){
        $del_id = $_GET['del'];
        $condition = "pro_id = $del_id";

        // 查询需要删除的数据的信息
        $sql = "SELECT * FROM wd_product WHERE $condition";
        $img_del = get_one($sql);
        // 删除产品图
        del_img('../'.$img_del['pro_img']);
        // 删除缩略图
        del_img('../'.$img_del['pro_thumb1']);

        // 删除数据
        $res = del('wd_product',$condition);
        if ($res){
            msg_jump('删除成功！','product_list.php');
        }else{
            msg_jump('删除失败！');
        }
    }


    // 多个删除
    if (isset($_POST['delall'])){
        $idarr = $_POST['idarr'];

        // 循环查出所有要删除的数据
        for ($i=0; $i<count($idarr); $i++){
            $sql = "SELECT * FROM wd_product WHERE pro_id = $idarr[$i]";
            $img_del = get_one($sql);
            // 删除产品图
            del_img('../'.$img_del['pro_img']);
            // 删除缩略图
            del_img('../'.$img_del['pro_thumb1']);

        }

        $ids_arr = implode(',',$idarr);
        $condition = "pro_id IN($ids_arr)";
        $del_res = del('wd_product',$condition);
        if ($del_res){
            msg_jump('删除多条成功！','product_list.php');
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
            <li class="active">产品管理</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title"><a href="product_list.php">产品列表</a></div>
                        <form class="form-inline pull-left" style="margin-left: 30px;" method="">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                <div class="input-group" style="width: 250px; border-radius: 5px;">
                                    <input style="border-radius: 8px;" type="text" name="keywords" class="form-control" id="exampleInputAmount" placeholder="search">
                                </div>
                            </div>
                            <button type="submit" name="search" class="btn btn-success">搜索</button>
                        </form>
                        <a href="product_add.php" class="btn btn-info btn-gradient pull-right"><span
                                    class="glyphicons glyphicon-plus"></span>添加产品</a>
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover dataTable">
                                <tr class="active">
                                    <th class="text-center"><a class="btn btn-gray btn-sm" id="selectAll">全选</a></th>
                                    <th>产品名称</th>
                                    <th>产品价格</th>
                                    <th>是否展示</th>
                                    <th>发行时间</th>
                                    <th>缩略图</th>
                                    <th>产品类型</th>
                                    <th width="200">操作</th>
                                </tr>
                                <?php foreach ($product as $item){ ?>
                                <tr class="success">
                                    <td class="text-center"><input type="checkbox" value="<?php echo $item['pro_id'];?>" name="idarr[]" class="cbox"></td>
                                    <td><?php echo $item['pro_name'];?></td>
                                    <td><?php echo $item['pro_price'];?></td>
                                    <td><?php echo $item['pro_show'] == 1 ? '是' : '否';?></td>
                                    <td><?php echo date('Y-m-d H:i:s', $item['pro_time']);?></td>
                                    <td>
                                        <div class="thumbnail">
                                            <img class="img-responsive" src="../<?php echo $item['pro_thumb1'];?>" alt="">
                                        </div>
                                    </td>
                                    <td><?php echo $item['procate_name'];?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="product_edit.php?edit=<?php echo $item['pro_id'];?>" class="btn btn-default btn-gradient">
                                                <span class="glyphicons glyphicon-pencil"></span>
                                            </a>
                                            <a onclick="return confirm('确定要删除吗？');" href="?del=<?php echo $item['pro_id'];?>" class="btn btn-default btn-gradient dropdown-toggle">
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

<script src="./js/common.js"></script>