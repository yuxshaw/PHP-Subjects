    <?php
        require_once ('./include/config.php');


        // 查询文章分类
        $sql = "SELECT artcate_id, artcate_name FROM wd_article_cate";
        $art_cate = get_all($sql);

        // 获取当前页码
//        if (isset($_GET['page'])){
//            $current = $_GET['page'];
//        }else{
//            $current = 1;
//        }
        $current = isset($_GET['page']) ? $_GET['page'] : 1;

        // 每页显示的记录数量
        $limit = 3;

        // 记录的起始位置
        $n = ($current -1) * $limit;

        // 最后一条页码数
        $size = 3;

        // 查询文章总数
        $count_sql = "SELECT COUNT(art_id) AS count FROM wd_article";
        $count = get_one($count_sql);
        $count = $count['count'];



        if (!empty($_GET) && isset($_GET['cate'])){
            $id = $_GET['cate'];
            $condition = "artcate_id = $id";

            // 查询子分类文章总数
            $count_sql = "SELECT COUNT(art_id) AS count FROM wd_article WHERE $condition";
            $count = get_one($count_sql);
            $count = $count['count'];

//            if ($count > 6){
//                $size = 3;
//            }elseif ($count > 3){
//                $size = 2;
//            }elseif ($count > 0){
//                $size = 1;
//            }

            $sql = "SELECT * FROM wd_article WHERE $condition LIMIT $n,$limit";
            $art_list = get_all($sql);
        }else{
            // 查询所有文章信息
            $sql = "SELECT * FROM wd_article LIMIT $n,$limit";
            $art_list = get_all($sql);
        }



    ?>

    <link rel="stylesheet" href="css/news_list.css">
    <link rel="stylesheet" href="./include/page/css.css">
    <?php require_once ('header.php');?>
    <!-- 内容部分 -->
    <div class="content">
        <!-- 广告图 -->
        <div class="banner">
            <img src="images/banner04.png" alt="">
            <img class="rope" src="images/rope.png" alt="">
        </div>
        <!-- 侧边栏 -->
        <aside class="fl">
            <p>News Center</p>
            <h2>新闻中心</h2>
            <ul>
<!--                <li><a href="news_list.php">公司新闻</a></li>-->
<!--                <li><a href="">通知公告</a></li>-->
<!--                <li><a href="">科技咨询</a></li>-->
                <?php foreach ($art_cate as$item){ ?>
                    <li><a class="<?php if ($_GET['cate'] == $item['artcate_id']){echo 'active';} ?>" href="?cate=<?php echo $item['artcate_id']; ?>"><?php echo $item['artcate_name'];?></a></li>
                <?php } ?>
            </ul>
        </aside>
        <!-- 文字内容 -->
        <article class="fl">
            <div class="top">
                <h2 class="fl">新闻中心</h2>
                <span class="fr">首页 > 新闻中心 > 公司新闻</span>
                <div class="clearfix"></div>
            </div>
            <div class="center">
                <div class="left fl">
                    <ul>
                        <li>
                            <h2>Asaweb</h2>
                            <h3>NOTICE</h3>
                        </li>
                        <li>
                            <img src="images/mic.png" alt="">
                        </li>
                    </ul>
                </div>
                <div class="right fl">
                    <p>
                        “ <span>web</span>最近的消息告诉你。<br>
                        多种多样的消息迅速转达给您。 ”
                    </p>
                </div>
                <div class="clearfix"></div>
            </div>
            <div class="bottom">
                <table width="100%" align="center">
                    <tr>
                        <th>编号</th>
                        <th>标题</th>
                        <th>作者</th>
                        <th>日期</th>
                        <th>点击数</th>
                    </tr>
                    <?php foreach ($art_list as $item){  ?>
                        <tr align="center">
                            <td><?php echo $item['art_id'];?></td>
                            <td class="lks"><a href="news.php?id=<?php echo $item['art_id'];?>"><?php echo $item['art_title'];?></a></td>
                            <td><?php echo $item['art_author'];?></td>
                            <td><?php echo date("Y-m-d H:i:s",$item['art_time']) ;?></td>
                            <td><?php echo $item['art_show'];?></td>
                        </tr>
                    <?php } ?>
                </table>

                <!-- 分页 -->
                <div class="btn-links">
                    <?php echo page($current,$count,$limit,$size,'Digg');?>
<!--                    <ul>-->
<!--                        <li><a href="">上一页</a></li>-->
<!--                        <li><a href="">1</a></li>-->
<!--                        <li><a href="">2</a></li>-->
<!--                        <li><a href="">3</a></li>-->
<!--                        <li><a href="">4</a></li>-->
<!--                        <li><a href="">5</a></li>-->
<!--                        <li><a href="">下一页</a></li>-->
<!--                    </ul>-->

                </div>
            </div>
            <div class="search">
                <select name="types" id="">
                    <option value="0">主题</option>
                    <option value="0">作者</option>
                    <option value="0">日期</option>
                    <option value="0">标题</option>
                </select>
                <input class="text" type="text" name="art">
                <input class="submit" type="submit" value="搜索">
            </div>
        </article>
        <div class="clearfix"></div>
    </div>


    <?php require_once ('footer.php');?>