<?php
    require_once ('./include/config.php');

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
    $count_sql = "SELECT COUNT(gbook_id) AS count FROM jl_guestbook";
    $count = get_one($count_sql);
    $count = $count['count'];

    if (isset($_GET['search']) && !empty($_GET['keywords'])){
        $keywords = $_GET['keywords'];

        // 查询留言总数
        $count_sql = "SELECT COUNT(gbook_id) AS count FROM jl_guestbook WHERE user_name LIKE '%$keywords%' OR gbook_content LIKE '%$keywords%'";
        $count = get_one($count_sql);
        $count = $count['count'];

        $sql = "SELECT * FROM jl_guestbook WHERE user_name LIKE '%$keywords%' OR gbook_content LIKE '%$keywords%' LIMIT $n,$limit";
        $gbook_arr = get_all($sql);

    }else {

        // 查询所有留言信息
        $sql = "SELECT * FROM jl_guestbook LIMIT $n,$limit";
        $gbook_arr = get_all($sql);
    }

    // 单个删除
    if (isset($_GET['del'])){
        $del_id = $_GET['del'];
        $condition = "gbook_id = $del_id";
        // 删除数据
        $res = del('jl_guestbook',$condition);
        if ($res){
            msg_jump('删除成功！','gbook_list.php');
        }else{
            msg_jump('删除失败！');
        }
    }


    // 多个删除
    if (isset($_POST['delall'])){
        $idarr = $_POST['idarr'];
        $ids_arr = implode(',',$idarr);
        $condition = "gbook_id IN($ids_arr)";
        $del_res = del('jl_guestbook',$condition);
        if ($del_res){
            msg_jump('删除多条成功！','gbook_list.php');
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
            <li class="active">留言管理</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title"><a href="gbook_list.php">留言列表</a></div>
                        <form class="form-inline pull-left" style="margin-left: 30px;" method="">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                <div class="input-group" style="width: 250px; border-radius: 5px;">
                                    <input style="border-radius: 8px;" type="text" name="keywords" class="form-control" id="exampleInputAmount" placeholder="search">
                                </div>
                            </div>
                            <button type="submit" name="search" class="btn btn-success">搜索</button>
                        </form>
<!--                        <a href="nav_add.php" class="btn btn-info btn-gradient pull-right">-->
<!--                            <span class="glyphicons glyphicon-plus"></span> 添加留言-->
<!--                        </a>-->
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <h2 class="panel-body-title">留言信息</h2>
                            <table class="table table-striped table-bordered table-hover dataTable">
                                <tr class="active">
                                    <th class="text-center" width="100"><input type="checkbox" value="" id="checkall"class=""> 全选</th>
                                    <th>用户名称</th>
                                    <th>留言内容</th>
                                    <th>留言时间</th>
                                    <th width="200">操作</th>
                                </tr>
                                <?php foreach ($gbook_arr as $item) {?>
                                <tr class="success">
                                    <td class="text-center"><input type="checkbox" value="<?php echo $item['gbook_id'];?>" name="idarr[]" class="cbox"></td>
                                    <td><?php echo $item['user_name'];?></td>
                                    <td><?php echo $item['gbook_content'] ;?></td>
                                    <td><?php echo date('Y-m-d H:i:s',$item['gbook_time']);?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="nav_edit.php?edit=<?php echo $item['gbook_id'];?>" class="btn btn-default btn-gradient">
                                                <span class="glyphicons glyphicon-pencil"></span>
                                            </a>
                                            <a onclick="return confirm('确定要删除吗？');" href="?del=<?php echo $item['gbook_id'];?>" class="btn btn-default btn-gradient dropdown-toggle">
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