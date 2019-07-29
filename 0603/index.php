<?php
    //设置时区
    date_default_timezone_set('Asia/Shanghai');
    // 设置默认路径
    if(!empty($_GET['path'])){
        $path = $_GET['path'];
    }else{
        $path = './files_dir';
    }

    //转码
    $path = iconv('utf-8','gbk',$path);

    // 获取目录列表
    $dirList = scandir($path);
    //var_dump($dirList);
    foreach ($dirList as $item) {
        $dirInfoList[] = getFileDetails($path.'/'.$item);
    }
//    var_dump($dirInfoList);


    /**
     * 获取文件大小,进行相应处理
     * @param $filename [string] 文件名称(路径)
     */
    function getFileSize($filename){
        $size = filesize($filename);
        if($size > pow(1024,4)){ // TB 级
            $size = round($size/pow(1024,4),2);
            $suffix = "TB";
        }elseif ($size > pow(1024,3)){ // GB
            $size = round($size/pow(1024,3),2);
            $suffix = "GB";
        }elseif ($size > pow(1024,2)){ // MB
            $size = round($size/pow(1024,2),2);
            $suffix = "MB";
        }elseif ($size > 1024){ // MB
            $size = round($size/1024,2);
            $suffix = "KB";
        }else{
            $suffix = "Byte";
        }
        return $size.' '.$suffix;
    }


    /**
     * 获取文件名，文件修改日期，文件类型，文件大小
     * @param $filename string 文件名(路径)
     */
    function getFileDetails($filename){
        $arr = array();
        $arr['basename'] = iconv('gbk','utf-8',basename($filename));//转码并获取文件名称
        $arr['mtime'] = date('Y-m-d H:i:s',filemtime($filename)); // 获取修改事件
        //判断文件或目录
        if(is_file($filename)){ //判断的是否是文件
            $suffix = pathinfo($filename); //返回文件路径名信息数组
            $arr['filetype'] = $suffix['extension' ]; //获取文件扩展名
            $arr['filesize'] = getFileSize($filename);
        }elseif(is_dir($filename)){ // 判断是否是目录
            $arr['filetype'] = '文件夹';
        }
        return $arr;
    }



    //var_dump($_SERVER);

    // 创建目录
    if(isset($_POST) && !empty($_POST['create_dir'])){
        $dirPath = $path.'/'.iconv("utf-8",'gbk',$_POST['create_dir']); //转码
//        var_dump($dirPath);
        if(!is_dir($dirPath)){ //如果目录不存在
            mkdir($dirPath); //创建目录
            echo "<script>alert('创建目录成功！');window.location.href='".$_SERVER['HTTP_REFERER']."';</script>";
        }else{
            echo "<script>alert('目录已存在！');window.location.href='".$_SERVER['HTTP_REFERER']."';</script>";
        }
    }


    //创建文件
//    var_dump($_POST['create_file']);
    if (isset($_POST) && !empty($_POST['create_file'])){
        $filePath = $path.'/'.iconv("utf-8",'gbk',$_POST['create_file']);   //转码
//        var_dump($filePath);
        if (!is_file($filePath)){   //如果文件不存在
            fopen($filePath,"x+");   //创建文件
            echo "<script>alert('创建文件成功！');window.location.href='".$_SERVER['HTTP_REFERER']."';</script>";
        }else{
            echo "<script>alert('文件已存在！');window.location.href='".$_SERVER['HTTP_REFERER']."';</script>";
        }
    }



    //删除目录或文件
    if(isset($_GET['del']) && !empty($_GET['del'])){
        $delPath = iconv('utf-8','gbk',$_GET['del']);
        if(is_file($delPath)){// 如果是文件
            $res = unlink($delPath);
            if($res){
                echo "<script>alert('删除文件成功！');window.location.href='".$_SERVER['HTTP_REFERER']."';</script>";
            }else{
                echo "<script>alert('删除文件失败！');window.location.href='".$_SERVER['HTTP_REFERER']."';</script>";
            }
        }elseif(is_dir($delPath)){
            $res = rmdir($delPath);
            if($res){
                echo "<script>alert('删除目录成功！');window.location.href='".$_SERVER['HTTP_REFERER']."';</script>";
            }else{
                echo "<script>alert('删除目录失败！');window.location.href='".$_SERVER['HTTP_REFERER']."';</script>";
            }
        }
    }


?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="css/bootstrap.css">
    <link rel="stylesheet" href="css/index.css">
</head>
<body>

    <section>
        <div class="container">
            <div class="row">
                <div class="col-lg-12 tab-title">
                    <div class="col-lg-4 pull-left title">
                        <h3>文件上传管理系统</h3>
                    </div>

<!--                    创建文件-->
                    <form action="" method="post" class="form-inline">
                        <div class="col-lg-4  text-right search">
                            <input type="text" name="create_file" class="form-control">
                            <input type="submit" class="btn btn-success" value="创建文件">
                        </div>
                    </form>

<!--                    创建文件夹-->
                    <form action="" method="post" class="form-inline">
                    <div class="col-lg-4 pull-right text-right search">
                        <input type="text" name="create_dir" class="form-control">
                        <input type="submit" class="btn btn-success" value="创建文件夹">
                    </div>
                    </form>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <table class="table table-hover table-bordered">
                        <tr class="info">
                            <th>名称</th>
                            <th>修改日期</th>
                            <th>类型</th>
                            <th>大小</th>
                            <th>操作</th>
                        </tr>
                        <?php foreach ($dirInfoList as $value) {
                            if($value['basename'] == '.'){//当前目录
                                $link = $path;
                            }elseif($value['basename'] == '..') {//上一次目录
                                //$link =substr($path, 0, strpos($path, '/',2));
                                $link =substr($path, 0, strrpos($path, '/'));
                            }else{ //进入下一层目录
                                $link = $path.'/'.$value['basename'];
                            }
                        ?>
                            <tr>
                                <td>
                                    <a href="?path=<?php echo $link; ?>">
                                        <?php echo $value['basename']; ?>
                                    </a>
                                </td>
                                <td><?php echo $value['mtime'] ?></td>
                                <td><?php echo $value['filetype'] ?></td>
                                <td><?php if (isset($value['filesize'])){echo $value['filesize'];} ?></td>
                                <td align="center">
                                    <a href="?del=<?php echo $path.'/'.$value['basename']; ?>" class="text-danger" >
                                        <?php /*if($value['basename'] == '.' || $value['basename'] == '..'){
                                                echo '';
                                            }else{
                                              echo '删除';
                                            }*/
                                        ?>
                                        <?php echo ($value['basename'] == '.' || $value['basename'] == '..')?'': '删除';?>
                                    </a>
                                </td>
                            </tr>
                        <?php } ?>
                    </table>
                </div>
            </div>
        </div>
    </section>

</body>
</html>
