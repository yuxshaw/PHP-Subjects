<!-- 加载页头 -->
<?php $this->load->view('common/header'); ?>

<div class="warp">
    <div class="blog-header">
        <div class="container">
            <h1 class="blog-title"><?php echo $art['title']; ?></h1>
            <p class="blog-post-meta"><?php echo date('m月d日 H:i', $art['pubtime']); ?> by <a
                        href="#"><?php echo $art['author']; ?></a></p>
        </div>
    </div>

    <div class="container">

        <div class="row">
            <div class="col-sm-8 blog-main">
                <div class="blog-post">
                    <img src="<?php echo base_url('static/home/images/'); ?><?php echo $art['a_img']; ?>" alt=""/>
                    <hr>
                    <p><?php echo $art['content']; ?></p>
                </div><!-- /.blog-post -->
                <nav>
                    <ul class="pager">
                        <ul class="pager">
                            <?php if($prev_id){?>
                                <li>
                                    <a href="<?php echo site_url('Article/index/'.$cid.'/'.$prev_id) ?>">上一篇</a>
                                </li>
                            <?php }?>

                            <?php if($next_id){?>
                                <li>
                                    <a href="<?php echo site_url('Article/index/'.$cid.'/'.$next_id) ?>">下一篇</a>
                                </li>
                            <?php }?>
                    </ul>
                </nav>
            </div><!-- /.blog-main -->

            <div class="col-sm-3 col-sm-offset-1 blog-sidebar">
                <div class="sidebar-module">
                    <h4>推荐文章</h4>
                    <ol class="list-unstyled">
                        <li><a href="#">网络专车能这么管吗？</a></li>
                        <li><a href="#">有些事情，罗永浩没有在发布会上告诉你</a></li>
                        <li><a href="#">离开索尼的 VAIO 要用什么产品走出日本</a></li>
                    </ol>
                </div>
            </div><!-- /.blog-sidebar -->
        </div><!-- /.row -->
    </div><!-- /.container -->
</div>


<!-- 加载页脚 -->
<?php $this->load->view('common/footer'); ?>