<!-- 加载页头 -->
<?php $this->load->view('common/header'); ?>

<div class="warp">
    <div class="blog-header">
        <div class="container">
            <nav class="about-nav">
                <?php foreach ($about as $item){ ?>
                    <a href="<?php echo site_url('About/index/'.$item['about_id']);?>" class="<?php if ($a_id == $item['about_id']){echo 'active';} ?>"><?php echo $item['about_classify'];?></a>
                <?php }?>
            </nav>
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div class="blog-main">
                <div class="blog-post">
                    <p><?php echo $content['about_content'];?></p>
                </div>
            </div>
        </div><!-- /.row -->
    </div><!-- /.container -->

</div>


<!-- 加载页脚 -->
<?php $this->load->view('common/footer'); ?>