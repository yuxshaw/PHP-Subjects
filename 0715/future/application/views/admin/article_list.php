<?php $this->load->view('admin/header'); ?>

<!-- Start: Content -->
<section id="content">
    <div id="topbar" class="affix">
        <ol class="breadcrumb">
            <li class="active"><a href="#"><span class="glyphicon glyphicon-home"></span></a></li>
        </ol>
    </div>
    <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="panel">
                        <div class="panel-heading">
                            <div class="panel-title">文章列表</div>
                            <a href="<?php echo site_url('admin/Article/article_add');?>" class="btn btn-info btn-gradient pull-right"><span class="glyphicons glyphicon-plus"></span> 添加文章</a>
                        </div>
                        <form action="" method="post">
                            <div class="panel-body">
                                <h2 class="panel-body-title"><?php echo $cname['cname'];?></h2>
                                <table class="table table-striped table-bordered table-hover dataTable">

                                    <tr class="active text-center" >
                                        <th class="text-center" width="100"><input type="checkbox" value="" id="checkall" class=""> 全选</th>
                                        <th>文章图片</th>
                                        <th>标题</th>
                                        <th>作者</th>
                                        <th>发表时间</th>
                                        <th>是否显示</th>
                                        <th width="200">操作</th>
                                    </tr>

                                    <?php foreach ($article as $item){ ?>
                                        <tr class="success">
                                            <td class="text-center"><input type="checkbox" value="<?php echo $item['aid']; ?>" name="idarr[]" class="cbox"></td>
                                            <td><img style="width: 80px; height: 60px;" class="img-responsive" src="<?php echo base_url('static/home/images/').$item['a_img']; ?>" alt=""></td>
                                            <td><?php echo $item['title']; ?></td>
                                            <td><?php echo $item['author']; ?></td>
                                            <td><?php echo date('Y-m-d H:i',$item['pubtime']); ?></td>
                                            <td><?php echo $item['isshow'] == 1 ? '是' : '否'; ?></td>
                                            <td>
                                                <div class="btn-group">
                                                    <a href="article_edit.html" class="btn btn-default btn-gradient"><span class="glyphicons glyphicon-pencil"></span></a>
                                                    <a onclick="return confirm('确定要删除吗？');" href="<?php echo site_url('admin/Article/delete/'.$item['aid']);?>" name="del" class="btn btn-default btn-gradient dropdown-toggle"><span class="glyphicons glyphicon-trash"></span></a>
                                                </div>

                                            </td>
                                        </tr>
                                    <?php } ?>

                                </table>
                                <div class="pull-left">
                                    <button type="submit" class="btn btn-default btn-gradient pull-right delall"><span class="glyphicons glyphicon-trash"></span></button>
                                </div>
                                <div class="pull-right">
                                    <?php echo $page;?>
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
<!-- End: Main --></body>

</html>