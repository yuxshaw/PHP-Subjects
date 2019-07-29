<?php require_once ('header.php');?>
  <!-- Start: Content -->
  <section id="content">
    <div id="topbar" class="affix">
      <ol class="breadcrumb">
        <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        <li class="active">网站配置</li>
      </ol>
    </div>
    <div class="container">

	 <div class="row">
        <div class="col-md-10 col-lg-11 center-column">
        <form action="#" method="post" class="cmxform">
        	<div class="panel">
            <div class="panel-heading">
              <div class="panel-title">网站配置</div>
              <div class="panel-btns pull-right margin-left">

            	  </div>
            </div>
            <div class="panel-body">
            	  <div class="col-md-7">
                <div class="form-group">
                  <div class="input-group"> <span class="input-group-addon">名称</span>
                    <input type="text" name="title" value="" class="form-control" placeholder="请输入网站的名称">
                  </div>
                </div>

                <div class="form-group">
                    <div class="input-group"> <span class="input-group-addon">关键字</span>
                        <input type="text" name="keyword" value="" class="form-control" placeholder="请输入网站的关键字">
                    </div>
                </div>

                </div>
                <div class="form-group col-md-12">
                  <textarea style="width:100%;height:150px;" placeholder="请输入网站的描述" name="description"></textarea>
                </div>
                <div class="col-md-7">
	                <div class="form-group">
	                  <input type="submit" value="提交" class="submit btn btn-blue">
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

</body>

</html>