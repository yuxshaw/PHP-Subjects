<?php
    require_once('./include/config.php');

    // 获取当前页码
    $current = isset($_GET['page']) ? $_GET['page'] : 1;

    // 每页显示条数
    $limit = 4;

    // 每页的起始位置
    $n = ($current - 1) * $limit;

    // 显示的页码数
    $size = 5;

    //获取管理员总数
    $count_sql = "SELECT COUNT(admin_id) AS count FROM jl_admin";
    $count = get_one($count_sql);
    $count = $count['count'];

    // 查询所有管理员
    $sql = "SELECT * FROM jl_admin LIMIT $n,$limit";
    $admin = get_all($sql);

    // 删除一条数据
    if (isset($_GET['del'])){
        $del_id = $_GET['del'];
        $condition = "admin_id = $del_id";
        $res = del('jl_admin',$condition);
        if ($res){
            msg_jump('删除成功！','admin_list.php');
        }else{
            msg_jump('删除失败！');
        }
    }


    // 删除多条数据
    if (isset($_POST['delall'])){
        $idarr = $_POST['idarr'];

        $idarr = implode(',',$idarr);
        $condition = "admin_id IN($idarr)";
        $res = del('jl_admin',$condition);
        if ($res){
            msg_jump('删除多条成功！','admin_list.php');
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
            <li class="active">系统管理员</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-12">
                <div class="panel">
                    <div class="panel-heading">
                        <div class="panel-title">系统管理员</div>
                        <a href="admin_add.php" class="btn btn-info btn-gradient pull-right"><span
                                    class="glyphicons glyphicon-plus"></span> 添加管理员</a>
                    </div>
                    <form action="" method="post">
                        <div class="panel-body">
                            <table class="table table-striped table-bordered table-hover dataTable">
                                <tr class="active">
                                    <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选
                                    </th>
                                    <th>账号</th>
                                    <th>添加时间</th>
                                    <th width="200">操作</th>
                                </tr>
                                <?php foreach ($admin as $item){ ?>
                                <tr class="success"><td class="text-center"><input type="checkbox" value="<?php echo $item['admin_id'];?>" name="idarr[]" class="cbox"></td>
                                    <td><?php echo $item['admin_name'];?></td>
                                    <td><?php echo date('Y-m-d',$item['add_time']);?></td>
                                    <td>
                                        <div class="btn-group">
                                            <a href="admin_edit.php" class="btn btn-default btn-gradient">
                                                <span class="glyphicons glyphicon-pencil"></span>
                                            </a>
                                            <a onclick="return confirm('确定要删除吗？');" href="?del=<?php echo $item['admin_id'];?>" name="del" class="btn btn-default btn-gradient dropdown-toggle">
                                                <span class="glyphicons glyphicon-trash"></span>
                                            </a>
                                        </div>

                                    </td>
                                </tr>
                                <?php } ?>
                            </table>

                            <div class="pull-left">
                                <button name="delall" type="submit" class="btn btn-default btn-gradient pull-right delall">
                                    <span class="glyphicons glyphicon-trash"></span>
                                </button>
                            </div>

                            <div class="pull-right">

                                <!--    分页    -->
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