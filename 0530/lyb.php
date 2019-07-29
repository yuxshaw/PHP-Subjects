<?php
	$file = fopen("./msg.txt","r+");
	/*while(!feof($file)){
        $arr[] = fgets($file);
	}*/
	//var_dump($arr);

    if(isset($_POST) &&! empty($_POST)){
        $info = array_reverse($_POST);
        // var_dump($info);
        $str = implode('|',$info);
        file_put_contents("msg.txt",$str."\n",FILE_APPEND);
            echo "<script>location.replace('lyb.php');</script>";
    }

	$arr = file("./msg.txt",FILE_SKIP_EMPTY_LINES | FILE_IGNORE_NEW_LINES);
	// var_dump($arr);
	foreach ($arr as $key => $item) {
		$arr1[] = explode('|',$item);
	}

	//var_dump($arr1);


?>
<!doctype html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta name="viewport"
	      content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="css/bootstrap.css">
	<title>Document</title>
	<style>
		table td{
            text-align: center;
            vertical-align: middle!important;
        }
        table th{
            text-align: center;
        }
	</style>
</head>
<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <form action="" method="post">
                        <table class="table table-striped table-hover">
                            <tr>
                                <th>作者</th>
                                <th>留言内容</th>
                            </tr>
                            <?php foreach ($arr1 as $item) { ?>
                                <tr>
                                    <td><?php echo $item[0]; ?></td>
                                    <td><?php echo $item[1]; ?></td>
                                </tr>
                            <?php }?>

                            <tr>
                                <td valign="middle"><label for="exampleInputEmail1">留言内容</label></td>
                                <td><textarea class="form-control" name="msg" id="" cols="15" rows="5" required></textarea></td>
                            </tr>
                            <tr>
                                <td align="center" valign="middle"><label for="exampleInputEmail1">作者</label></td>
                                <td><input class="form-control" type="text" name="author" required></td>
                            </tr>
                            <tr>
                                <td colspan="2"><input class="btn btn-primary" type="submit" /></td>
                            </tr>
                        </table>
                    </form>
                </div>
            </div>
        </div>
    </section>
<!--	<div class="msgbox">-->
<!--        --><?php //foreach ($arr1 as $item) { ?>
<!--		<div class="infolist">-->
<!--			留言：<div class="info">--><?php //echo $item[1]; ?><!--</div>-->
<!--			作者：<span class="author">--><?php //echo $item[0]; ?><!--</span>-->
<!--		</div>-->
<!--		--><?php //}?>
<!--        <form action="lyb.php" method="post">-->
<!--            留言：<br />-->
<!--            <textarea name="msg" id="" cols="30" rows="10" required></textarea>-->
<!--            <br />-->
<!--            作者：<br />-->
<!--            <input type="text" name="author" required><br />-->
<!--            <input type="submit" />-->
<!--        </form>-->
<!--	</div>-->
</body>
</html>
