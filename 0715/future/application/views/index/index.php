<!-- 加载页头 -->
<?php $this->load->view('common/header'); ?>

<div class="container theme-showcase" role="main">

    <p>

        <a href="<?php echo site_url('Home/index/'.$cid);?>" class="btn btn-sm btn-default <?php echo $ccid == 0 ? 'active' : '' ;?>" type="button">全部</a>
        <?php foreach ($sub_nav as $item){ ?>
            <a href="<?php echo site_url('Home/index/'.$cid.'/'.$item['cid']);?>" class="btn btn-sm btn-default <?php echo $ccid == $item['cid'] ? 'active' : '' ;?>" type="button"><?php echo $item['cname'];?></a>
        <?php } ?>

    </p>

    <div class="row all-event-list mt20">


        <?php foreach ($article as $item){ ?>
        <div class="col-md-3 col-sm-4 col-xs-12">
            <div class="widget-event">
                <a href="<?php echo site_url('Article/index/').$cid.'/'.$item['aid']; ?>"><img class="widget-event__banner lazy"
                                           src="<?php echo base_url('static/home/images/').$item['a_img']; ?>"></a>
                <div class="widget-event__info">
                    <h2 class="h4 title"><a href="<?php echo site_url('Article/index/').$cid.'/'.$item['aid']; ?>"><?php echo $item['title'];?></a></h2>
                    <ul class="widget-event__meta">
                        <li>时间：<?php echo date('Y-m-d',$item['pubtime']);?></li>
                    </ul>
                    <a class="btn btn-default btn-sm" href="<?php echo site_url('Article/index/').$cid.'/'.$item['aid']; ?>">查看</a>
                </div>
            </div>
        </div>
        <?php } ?>

    </div>


    <div class="text-center">
            <?php echo $page;?>
    </div>


</div>


<!-- 加载页脚 -->
<?php $this->load->view('common/footer'); ?>