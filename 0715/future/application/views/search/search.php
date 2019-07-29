<?php $this->load->view('common/header');?>

<div class="warp">
    <div class="post-topheader">
        <div class="container">
            <form class="row" action="<?php echo site_url('Search/index');?>" method="post">
                <div class="col-md-9">
                    <input type="text" placeholder="输入关键字搜索" value="" name="query" class="input-lg form-control">
                </div>
                <div class="col-md-2">
                    <button class="btn btn-primary btn-lg btn-block" type="submit">搜索</button>
                </div>
            </form>
        </div>
    </div>


    <div class="container mt20">

        <div class="row">
            <div class="col-md-9 main search-result">
                <h3 class="h5 mt0">找到约 <strong><?php echo $total;?></strong> 条结果</h3>

                <?php foreach ($article as $item){ ?>
                    <section>
                        <h2 class="h4">
                            <a href="<?php echo site_url('Article/index/'.$item['pid'].'/'.$item['aid']);?>"><?php echo $item['title'];?></a>
                            <span class="text-muted"></span>
                        </h2>
                        <div style="height: 80px; overflow: hidden;" class="excerpt"><?php echo $item['content']; ?></div>
                    </section>
                <?php }?>


                <div class="text-center">
                    <?php echo $page; ?>
                </div>
            </div>
            <div class="col-md-3 side">

            </div>
        </div>
    </div>

</div>


<?php $this->load->view('common/footer');?>
