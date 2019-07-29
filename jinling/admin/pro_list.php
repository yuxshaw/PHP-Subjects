<?php
    require_once ('include/config.php');

    $current = isset($_GET['page']) ? $_GET['page'] : 1;
    $limit = 3;
    $n = ($current-1)*$limit; //偏移量
    $size = 5;

    //计算总数
    $count_sql = "SELECT COUNT(pro_id) AS `count` FROM jl_product";
    $count_arr = get_one($count_sql);
    $count = $count_arr['count'];


    if (isset($_GET['search']) && !empty($_GET['keywords'])){
        $keywords = $_GET['keywords'];

        // 查询留言总数
        $count_sql = "SELECT COUNT(pro_id) AS count FROM jl_product WHERE pro_name LIKE '%$keywords%'";
        $count = get_one($count_sql);
        $count = $count['count'];

        $sql = "SELECT * FROM jl_product WHERE pro_name LIKE '%$keywords%' LIMIT $n,$limit";
        $pro_arr = get_all($sql);

    }else{
        //查询所有产品
        $pro_sql = "SELECT * FROM jl_product ORDER BY pro_time DESC LIMIT $n,$limit";
        $pro_arr = get_all($pro_sql);
    }

     // 删除一条记录
    if (isset($_GET['del'])){
        $del_id = $_GET['del'];
        // 删除图片
        $sql = "SELECT pro_img, pro_thumb FROM jl_product WHERE pro_id = $del_id";
        $img_del = get_one($sql);
        if ($img_del){
            if (file_exists("../".$img_del['pro_img'])){
                unlink("../".$img_del['pro_img']);
            }
            if (file_exists("../".$img_del['pro_thumb'])){
                unlink("../".$img_del['pro_thumb']);
            }
        }
        $condition = "pro_id = $del_id";
        $res = del('jl_product',$condition);
        if ($res){
            msg_jump('删除一条成功！','pro_list.php');
        }else{
            msg_jump('删除失败！');
        }
    }



    //删除多条
    if(isset($_POST['idarr'])){
        //获取多条id
        $id_arr = $_POST['idarr'];
        $id_str = implode(',',$id_arr);

        $img_sql = "SELECT pro_img, pro_thumb FROM jl_product WHERE pro_id IN ($id_str)";
        $img_arr = get_all($img_sql);

	    foreach ($img_arr as $item) {
            if(file_exists("../".$item['pro_img'])){
                unlink("../".$item['pro_img']);
            }if(file_exists("../".$item['pro_thumb'])){
                unlink("../".$item['pro_thumb']);
            }
        }

        $pro_condition = "pro_id IN ($id_str)";
        $res = del('jl_product',$pro_condition);
        if($res){
            msg_jump('批量删除成功','pro_list.php');
        }else{
            msg_jump('删除失败！');
        }
    }


?>
<?php require_once ('header.php');?>
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
                  <div class="panel-title"><a href="pro_list.php">产品列表</a></div>
                    <form class="form-inline pull-left" style="margin-left: 30px;" method="">
                        <div class="form-group">
                            <label class="sr-only" for="exampleInputAmount">Amount (in dollars)</label>
                            <div class="input-group" style="width: 250px; border-radius: 5px;">
                                <input style="border-radius: 8px;" type="text" name="keywords" class="form-control" id="exampleInputAmount" placeholder="search">
                            </div>
                        </div>
                        <button type="submit" name="search" class="btn btn-success">搜索</button>
                    </form>
                  <a href="pro_add.php" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加产品</a>
                </div>
                <form action="" method="post">
                <div class="panel-body">
                  <table class="table table-striped table-bordered table-hover dataTable">
                      <tr class="active">
                          <th class="text-center" width="100"><input type="checkbox" value="" id="checkall"class=""> 全选</th>
                        <th>产品名称</th>
                        <th>产品图片</th>
                        <th>上市时间</th>
                        <th width="200">操作</th>
                      </tr>
                      <?php foreach($pro_arr as $item){ ?>
                      <tr class="success">
                        <td class="text-center">
                            <input type="checkbox" value="<?php echo $item['pro_id']; ?>" name="idarr[]" class="cbox">
                        </td>
                        <td><?php echo $item['pro_name']; ?></td>
                        <td>
                            <div class="thumbnail">
<!--                                <img src="../--><?php //echo $item['pro_thumb'];?><!--" alt="">-->
                                <img src="<?php echo file_exists('../'.$item['pro_thumb']) ? '../'.$item['pro_thumb'] : '../images/noimage.png'; ?>" alt="">
<!--                                <img src="--><?php //if (!file_exists('../'.$item['pro_thumb'])){echo 'images/noimage.png';}else{echo '../'.$item['pro_thumb'];}?><!--" alt="">-->
                            </div>
                        </td>
                          <td><?php echo date('Y-m-d H:i:s',$item['pro_time']);?></td>
                        <td>
                            <div class="btn-group">
		                        <a href="pro_edit.php?edit=<?php echo $item['pro_id'];?>" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
		                        <a onclick="return confirm('确定要删除吗？');" href="?del=<?php echo $item['pro_id'];?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                            </div>
                        </td>
                      </tr>
	                  <?php }?>
                  </table>
                  
                  <div class="pull-left">

                    <button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>



                  </div>
                  
                  <div class="pull-right">
                    <?php echo pageBoot($current,$count,$limit,$size); ?>
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
<script>
    var sel_all = document.getElementById('selectAll');
    var check_boxes = document.getElementsByClassName('cbox');
    sel_all.onclick = function () {
        for (var i=0;i<check_boxes.length;i++){
            if(check_boxes[i].checked == true){
                check_boxes[i].checked = false;
            }else{
                check_boxes[i].checked = true;
            }
        }
    }
</script>