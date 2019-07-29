<?php
    require_once ('include/config.php');

    if(isset($_POST['commit'])){

        //上传大图
        $result = upload('pro_img','../uploads');

        if($result['error']==1){
            return msg_jump('图片太大');
        }
        //生成缩略图
        $thumb_path = img_thumb($result['path'],'120','80','../thumb',$result['name']);

        $img_path = ltrim($result['path'],"\.\.\/");
	    $thumb_path = ltrim($thumb_path,"\.\.\/");

        $data = array(
	        'pro_name' => $_POST['pro_name'],
	        'pro_img' => $img_path,
	        'pro_thumb' => $thumb_path,
	        'pro_time' => time()
        );
        //添加
        $res = add('jl_product',$data);
	    if($res){
		    msg_jump('添加产品成功！','pro_list.php');
	    }else{
		    msg_jump('添加产品失败！');
	    }

    }
?>
<?php require_once ('header.php');?>
<link rel="stylesheet" href="./css/bootstrap-fileinput.css"/>
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
        <div class="col-md-10 col-lg-11 center-column">
            <form action="" method="post" class="cmxform" enctype="multipart/form-data">
        	<div class="panel">
            <div class="panel-heading">
              <div class="panel-title">添加产品</div>
              <div class="panel-btns pull-right margin-left">
              <a href="pro_list.php" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
            	  </div>
            </div>

            <div class="panel-body">
                <div class="col-md-7">
                    <div class="form-group">
                      <div class="input-group"> <span class="input-group-addon">名称</span>
                        <input type="text" name="pro_name" value="" class="form-control" required>
                      </div>
                    </div>
                    <div class="form-group" id="uploadForm">
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
                <div class="col-md-7">
	                <div class="form-group">
	                  <input type="submit" name="commit" value="提交" class="submit btn btn-blue">
	                </div>
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