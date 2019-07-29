<?php
    require_once ('./include/config.php');

    // 查询产品分类
    $sql = "SELECT * FROM wd_product_cate";
    $procate = get_all($sql);


    if (isset($_POST['commit'])){

        // 上传大图
        $result = upload('pro_img','../uploads');
        if ($result['error'] == 1){
            return msg_jump('文件太大！');
        }

        $img_path = ltrim($result['path'],"\.\./");

        // 生成缩略图
        $thumb_path = img_thumb($result['path'],'120','80','../thumb',$result['name']);
        $thumb_path = ltrim($thumb_path,"\.\./");
//        $thumb_path = _HOST_.ltrim($thumb_url,"\.\./");


        $data = array(
            'pro_name' => $_POST['name'],
            'pro_size' => $_POST['size'],
            'pro_price' => $_POST['price'],
            'pro_show' => $_POST['isshow'],
            'pro_order' => $_POST['order'],
            'pro_img' => $img_path,
            'pro_thumb1' => $thumb_path,
            'pro_time' => time(),
            'pro_desc' => $_POST['desc'],
            'procate_id' => $_POST['procate']
        );
         //添加
        $res = add('wd_product',$data);
        if ($res){
            msg_jump('添加成功！','product_list.php');
        }else{
            msg_jump('添加失败！');
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
            <li class="active">添加产品</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="product_add.php" method="post" class="cmxform" enctype="multipart/form-data">
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
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">产品名称</span>
                                        <input type="text" name="name" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">产品大小</span>
                                        <input type="text" name="size" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">产品价格</span>
                                        <input type="text" name="price" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">是否显示</span>
                                        <select class="form-control" name="isshow">
                                            <option value="1">是</option>
                                            <option value="0">否</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">产品编号</span>
                                        <input type="text" name="order" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group" id="uploadForm">
<!--                                    <span class="input-group-addon">上传图片</span>-->
                                    <div class="input-group" id="uploadForm">
                                        <div class="fileinput fileinput-new" data-provides="fileinput"  id="exampleInputUpload">
                                            <div class="fileinput-new thumbnail" style="width: 200px;height: auto;max-height:150px;">
                                                <img id='picImg' style="width: 100%;height: auto;max-height: 140px;" src="images/noimage.png" alt="" />
                                            </div>
                                            <div class="fileinput-preview fileinput-exists thumbnail" style="max-width: 200px; max-height: 150px;"></div>
                                            <div>
                                                <span class="btn btn-primary btn-file">
                                                    <span class="fileinput-new">上传产品图片</span>
                                                    <span class="fileinput-exists">换一张</span>
                                                    <input type="file" name="pro_img" id="picID" accept="image/gif,image/jpeg,image/x-png"/>
                                                </span>
                                                <a href="javascript:;" class="btn btn-warning fileinput-exists" data-dismiss="fileinput">移除</a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
<!--                                <div class="form-group">-->
<!--                                    <div class="input-group"><span class="input-group-addon">缩略图1</span>-->
<!--                                        <input type="text" name="thumb1" value="" class="form-control">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form-group">-->
<!--                                    <div class="input-group"><span class="input-group-addon">缩略图2</span>-->
<!--                                        <input type="text" name="thumb2" value="" class="form-control">-->
<!--                                    </div>-->
<!--                                </div>-->
<!--                                <div class="form-group">-->
<!--                                    <div class="input-group"><span class="input-group-addon">缩略图3</span>-->
<!--                                        <input type="text" name="thumb3" value="" class="form-control">-->
<!--                                    </div>-->
<!--                                </div>-->
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">产品描述</span>
                                        <textarea name="desc" class="form-control" rows="3"></textarea>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">产品类型</span>
                                        <select class="form-control" name="procate">
                                            <?php foreach ($procate as $item){ ?>
                                                <option value="<?php echo $item['procate_id'];?>"><?php echo $item['procate_name'];?></option>
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
    </div>
</section>
<!-- End: Content -->
</div>
<script src="./js/jquery.min.js"></script>
<script src="./js/bootstrap-fileinput.js"></script>

</body>

</html>
