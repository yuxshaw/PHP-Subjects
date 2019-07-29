<?php
    require_once ('./include/config.php');

    // 查询文章分类
    $sql = "SELECT * FROM wd_product_cate";
    $procate = get_all($sql);

    // 获取文章id
    if (isset($_GET['edit'])){
        $pro_id = $_GET['edit'];
        $sql = "SELECT * FROM wd_product WHERE pro_id = $pro_id";
        $pro_info = get_one($sql);
    }

    if (isset($_POST['commit']) && !empty($_POST)){
        // 如果有图片上传
        if ($_FILES['pro_img']['error'] == 0){
            //上传大图
            $result = upload('pro_img','../uploads');
            //生成缩略图
            $thumb_path = img_thumb($result['path'],'120','80','../thumb',$result['name']);

            $img_path = ltrim($result['path'],"\.\.\/");
            $thumb_path = ltrim($thumb_path,"\.\.\/");

            $data = array(
                'pro_name' => $_POST['pro_name'],
                'pro_size' => $_POST['pro_size'],
                'pro_price' => $_POST['pro_price'],
                'pro_show' => $_POST['pro_show'],
                'pro_img' => $img_path,
                'pro_thumb1' => $thumb_path,
                'pro_time' => time(),
                'pro_desc' => $_POST['pro_desc'],
                'procate_id' => $_POST['procate_id']
            );

            $pro_id = $_POST['pro_id'];
            $condition = "pro_id = $pro_id";

            //删除旧图
            if(file_exists("../".$pro_info['pro_img'])){
                unlink("../".$pro_info['pro_img']);
            }
            if(file_exists("../".$pro_info['pro_thumb1'])){
                unlink("../".$pro_info['pro_thumb1']);
            }

            $res = update('wd_product',$data,$condition);
            if ($res){
//                msg_jump('修改成功！','product_list.php');
                echo '...';
            }else{
                msg_jump('修改失败！');
            }
        }
        if($_FILES['pro_img']['error']>0){
            $data = array(
                'pro_name' => $_POST['pro_name'],
                'pro_size' => $_POST['pro_size'],
                'pro_price' => $_POST['pro_price'],
                'pro_show' => $_POST['pro_show'],
                'pro_time' => time(),
                'pro_desc' => $_POST['pro_desc'],
                'procate_id' => $_POST['procate_id']
            );

            $pro_id = $_POST['pro_id'];
            $condition = "pro_id = $pro_id";

            //更新
            $res = update('wd_product',$data,$condition);
            if($res){
                msg_jump('修改产品成功！','product_list.php');
            }else{
                msg_jump('修改产品失败！');
            }
        }

    }

?>
<link href="css/bootstrap-fileinput.css" rel="stylesheet">
<?php require_once('header.php'); ?>
<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">编辑文章</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="product_edit.php" method="post" class="cmxform" enctype="multipart/form-data">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加产品</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="product_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span
                                            class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-8 col-md-offset-2">

                                <!--   隐藏域，保存记录主键artcate_id    -->
                                <input type="hidden" name="pro_id" value="<?php echo $pro_info['pro_id']; ?>">

                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">产品名称</span>
                                        <input type="text" name="pro_name" value="<?php echo $pro_info['pro_name'];?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">产品大小</span>
                                        <input type="text" name="pro_size" value="<?php echo $pro_info['pro_size'];?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">产品价格</span>
                                        <input type="text" name="pro_price" value="<?php echo $pro_info['pro_price'];?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">是否显示</span>
                                        <select class="form-control" name="pro_show">
                                            <option value="1" <?php echo $pro_info['pro_show'] == 1 ? 'selected' : '';?>>是</option>
                                            <option value="0" <?php echo $pro_info['pro_show'] == 0 ? 'selected' : '';?>>否</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">产品价格</span>
                                        <input type="text" name="pro_order" value="<?php echo $pro_info['pro_order'];?>" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                        <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                            <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="../<?php echo $pro_info['pro_img'];?>" alt="" />
                                        </div>
                                        <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                            <span class="btn btn-primary btn-file">
                                                <span class="fileinput-new">选择文件</span>
                                                <span class="fileinput-exists">换一张</span>
                                                <input type="file" name="pro_img" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                            </span>
                                            <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                        </div>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">产品描述</span>
                                        <textarea name="pro_desc" class="form-control" rows="3"><?php echo $pro_info['pro_desc'];?></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">产品类型</span>
                                        <select class="form-control" name="procate_id">
                                            <?php foreach ($procate as $item){ ?>
                                                <option value="<?php echo $item['procate_id'];?>" <?php echo $pro_info['procate_id'] == $item['procate_id'] ? 'selected' : '';?>><?php echo $item['procate_name'];?></option>
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
</section>
<!-- End: Content -->
</div>
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap-fileinput.js"></script>

</body>

</html>