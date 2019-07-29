<?
    include ('jssdk.class.php');

    $jssdk = new jssdk('wx564aae92c16fb771','b036332bbdb6bb837b36481440c5d066');

    $info = $jssdk->signature();

?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>demo jssdk</title>
    <script src="js/jquery-1.11.3.min.js"></script>
    <script src="js/jweixin-1.4.0.js"></script>
    <style>
        input{
            margin-top: 20px;
            width: 100%;
            height: 50px;
            background-color: skyblue;
        }
    </style>
    <script>
        wx.config({
            debug: true, // 开启调试模式,调用的所有api的返回值会在客户端alert出来，若要查看传入的参数，可以在pc端打开，参数信息会通过log打出，仅在pc端时才会打印。
            appId: '<?php echo $info["appId"];?>', // 必填，公众号的唯一标识
            timestamp: <?php echo $info["timestamp"];?>, // 必填，生成签名的时间戳
            nonceStr: '<?php echo $info["nonceStr"];?>', // 必填，生成签名的随机串
            signature: '<?php echo $info["signature"];?>',// 必填，签名
            jsApiList: [
                'chooseImage',
                'onMenuShareTimeline'
            ] // 必填，需要使用的JS接口列表
        });
    </script>
</head>
<body>
    <input type="button" value="戳一下拍照" id="btn"/>
    <img width="100%" id="img" src="" alt="等待选择图片" />
</body>
</html>
<script>
    $(function () {
        $('#btn').click(function () {
            wx.chooseImage({
                count: 1, // 默认9
                sizeType: ['original', 'compressed'], // 可以指定是原图还是压缩图，默认二者都有
                sourceType: ['album', 'camera'], // 可以指定来源是相册还是相机，默认二者都有
                success: function (res) {
                    var localIds = res.localIds; // 返回选定照片的本地ID列表，localId可以作为img标签的src属性显示图片
                    $('#img').attr('src',localIds);
                }
            })
        });
    })

</script>