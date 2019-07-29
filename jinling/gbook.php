<?php
    require_once ('./include/config.php');

    // 获取当前页码
    if (isset($_GET['page'])){
        $current = $_GET['page'];
    }else{
        $current = 1;
    }

    // 每页显示记录数量
    $limit = 4;

    // 记录的起始位置
    $n = ($current - 1)*$limit;

    // 最后一页页码数
    $size = 5;

    // 查询留言的总数
    $count_sql = "SELECT COUNT(gbook_id) AS count FROM jl_guestbook";
    $count = get_one($count_sql);
    $count = $count['count'];

    if (isset($_GET['search']) && !empty($_GET['keywords'])){
        $keywords = $_GET['keywords'];

        $count_sql = "SELECT COUNT(gbook_id) AS count FROM jl_guestbook WHERE user_name LIKE '%$keywords%' OR gbook_content LIKE '%$keywords%' OR gbook_time LIKE '%$keywords%'";
        $count = get_one($count_sql);
        $count = $count['count'];

        // 查询所有留言
        $sql = "SELECT * FROM jl_guestbook WHERE user_name LIKE '%$keywords%' OR gbook_content LIKE '%$keywords%' OR gbook_time LIKE '%$keywords%' ORDER BY gbook_time DESC LIMIT $n,$limit";
        $guestbooks = get_all($sql);
    }else{
        // 查询所有留言
        $sql = "SELECT * FROM jl_guestbook ORDER BY gbook_time DESC LIMIT $n,$limit";
        $guestbooks = get_all($sql);
    }


    if (isset($_POST['sub'])){
        $data = array(
            'user_name' => $_POST['name'],
            'gbook_content' => $_POST['content'],
            'gbook_time' => time()
        );
        $res = add('jl_guestbook',$data);
        if ($res){
            msg_jump('留言成功！','gbook.php');
        }else{
            msg_jump('留言失败！');
        }
    }

?>
<link rel="stylesheet" href="css/gbook.css">
<link rel="stylesheet" href="./include/page/css.css">
<title>客户留言</title>
<?php require_once ('header.php');?>

        <!-- content -->
        <div class="content">
            <!-- 文章 -->
            <article class="fl">
                <div class="hd">
                    <h2><a href="gbook.php">客户留言</a><span> Guestbook</span></h2>
                </div>

                <ul class="message">
                    <li>
                        <form action="">
                            搜索内容：
                            <input type="text" name="keywords">
                            <input type="submit" class="search" name="search" value="搜索" />
                        </form>
                    </li>
                    <?php foreach ($guestbooks as $item){ ?>
                    <li>
                        <div class="users">
                            <span class="fl"><?php echo $item['user_name'];?></span>
                            <span class="fr"><?php echo date('Y-m-d H:i:s',$item['gbook_time']); ?></span>
                            <div class="clear"></div>
                        </div>
                        <div class="msg"><?php echo $item['gbook_content'];?></div>
                    </li>
                    <?php } ?>
                </ul>

                <!-- 分页 -->
                <div style="padding: 20px 0;"><?php echo page($current,$count,$limit,$size,'manu');?></div>

                <form action="" method="post">
                    <table>
                        <tr>
                            <td>昵 称：&nbsp;</td>
                            <td>
                                <input type="text" name="name" >
                            </td>
                        </tr>
                        <tr>
                            <td>内 容：&nbsp;</td>
                            <td>
                                <textarea class="area" name="content" id="" cols="30" rows="10"></textarea>
                            </td>
                        </tr>
                        <tr>
                            <td></td>
                            <td>
                                <input class="sub" name="sub" type="submit" value="提 交">
                            </td>
                        </tr>
                    </table>
                </form>
            </article>

    <?php
        require_once ('aside.php');
        require_once ('footer.php');
    ?>