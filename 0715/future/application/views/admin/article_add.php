<?php $this->load->view('admin/header'); ?>

<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
            <li class="active">添加文章</li>
        </ol>
    </div>
    <div class="container">

        <div class="row">
            <div class="col-md-10 col-lg-11 center-column">
                <form action="" method="post" class="cmxform" enctype="multipart/form-data">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">添加文章</div>
                            <div class="panel-btns pull-right margin-left">
                                <a href="<?php echo site_url('admin/Article/article_add');?>" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicon glyphicon-chevron-left"></span></a>
                            </div>
                        </div>
                        <div class="panel-body">
                            <div class="col-md-7">
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">文章分类</span>
                                        <select name="cid" class="form-control">
                                            <?php foreach ($nav as $item){ ?>
                                                <optgroup label="<?php echo $item['cname']; ?>">
                                                    <?php if (isset($item['sub'])){ ?>
                                                        <?php foreach ($item['sub'] as $v){?>
                                                            <option value="<?php echo $v['cid'];?>"><?php echo $v['cname'];?></option>
                                                        <?php }?>
                                                    <?php }?>
                                                </optgroup>
                                            <?php }?>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">文章标题</span>
                                        <input type="text" name="title" value="<?php echo set_value('title');?>" class="form-control">
                                    </div>
                                    <?php echo form_error('title'); ?>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">作&emsp;&emsp;者</span>
                                        <input type="text" name="author" value="" class="form-control">
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"> <span class="input-group-addon">是否展示</span>
                                        <select class="form-control" name="isshow" id="">
                                            <option value="1" selected>是</option>
                                            <option value="0">否</option>
                                        </select>
                                    </div>
                                </div>
                                <div class="form-group">
                                    <div class="input-group"><span class="input-group-addon">上传图片</span>
<!--                                        --><?php //echo $error;?>
                                        <?php echo form_open_multipart(site_url('admin/Article/article_add'));?>
                                        <input type="file" name="img">
                                    </div>
                                </div>
                            </div>
                            <div class="form-group col-md-12">
                                <textarea name="content" value="<?php echo set_value('content');?>" style="width:100%;height:150px;"></textarea>
                                <?php echo form_error('content'); ?>
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