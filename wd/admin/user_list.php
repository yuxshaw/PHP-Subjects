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

    // 查询会员总数
    $count_sql = "SELECT COUNT(user_id) AS count FROM wd_user";
    $count = get_one($count_sql);
    $count = $count['count'];

    if (isset($_GET['search']) && !empty($_GET['keywords'])){
        $keywords = $_GET['keywords'];

        // 查询会员总数
        $count_sql = "SELECT COUNT(user_id) AS count FROM wd_user WHERE user_name LIKE '%$keywords%' OR user_sex LIKE '%$keywords%' OR user_email LIKE '%$keywords%' OR user_phone LIKE '%$keywords%'";
        $count = get_one($count_sql);
        $count = $count['count'];

        $sql = "SELECT * FROM wd_user WHERE user_name LIKE '%$keywords%' OR user_sex LIKE '%$keywords%' OR user_email LIKE '%$keywords%' OR user_phone LIKE '%$keywords%' LIMIT $n,$limit";
        $users = get_all($sql);
    }else{
        // 查询所有会员
        $sql = "SELECT * FROM wd_user LIMIT $n,$limit";
        $users = get_all($sql);
    }


    // 单个删除
    if (isset($_GET['del'])){
        $del_id = $_GET['del'];
        $condition = "user_id = $del_id";
        $res = del('wd_user',$condition);
        if ($res){
            msg_jump('删除成功！','user_list.php');
        }else{
            msg_jump('删除失败！');
        }
    }


    // 多个删除
    if (isset($_POST['delall'])){
        $idarr = $_POST['idarr'];
        $ids_arr = implode(',',$idarr);
        $condition = "user_id IN($ids_arr)";
        $del_res = del('wd_user',$condition);
        if ($del_res){
            msg_jump('删除多条成功！','user_list.php');
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
            <li class="active">会员管理</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title"><a href="article_list.php">会员列表</a></div>
                        <form class="form-inline pull-left" style="margin-left: 30px;" method="">
                            <div class="form-group">
                                <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                                <div class="input-group" style="width: 250px; border-radius: 5px;">
                                    <input style="border-radius: 8px;" type="text" name="keywords" class="form-control" id="exampleInputAmount" placeholder="search">
                                </div>
                            </div>
                            <button type="submit" name="search" class="btn btn-success">搜索</button>
                        </form>
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover dataTable">
                                <tr class="active">
                                    <th class="text-center"><a class="btn btn-gray btn-sm" id="selectAll">全选</a></th>
                                    <th>姓名</th>
                                    <th>性别</th>
                                    <th>邮箱</th>
                                    <th>号码</th>
                                    <th>简介</th>
                                    <th width="200">操作</th>
                                </tr>
                                <?php foreach ($users as $item){ ?>
                                <tr class="success">
                                    <td class="text-center"><input type="checkbox" value="<?php echo $item['user_id'];?>" name="idarr[]" class="cbox"></td>
                                    <td><?php echo $item['user_name'];?></td>
                                    <td><?php echo $item['user_sex'] == 1 ? '男' : '女';?></td>
                                    <td><?php echo $item['user_email'];?></td>
                                    <td><?php echo $item['user_phone'];?></td>
                                    <td><?php echo $item['user_desc'];?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="article_edit.php?edit=<?php echo $item['user_id'];?>" class="btn btn-default btn-gradient">
                                                <span class="glyphicons glyphicon-pencil"></span>
                                            </a>
                                            <a onclick="return confirm('确定要删除吗？');" href="?del=<?php echo $item['user_id'];?>" class="btn btn-default btn-gradient dropdown-toggle">
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