<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="./includes/bootstrap.css">
    <style>
        table{
            margin-top: 50px;
        }
        th,td{
            height: 30px;
            text-align: center;
        }
    </style>
    <title>Document</title>
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <table class="table-bordered table-striped table-hover" align="center" width="800px">
                    <caption>
                        <{nocache}>
                            <{* 部分缓存 *}>
                            <{*$time*}>
                        <{/nocache}>
                    </caption>
                    <tr>
                        <th>学号</th>
                        <th>姓名</th>
                        <th>性别</th>
                        <th>年龄</th>
                        <th>院系</th>
                        <th>班级</th>
                    </tr>
                    <{foreach $stu as $item}>
                    <tr align="center">
                        <td><{$item.number}></td>
                        <td><{$item.name|fontstyle:'16px':'skyblue'}></td>
                        <td>
                            <{if $item.sex == 1}>
                                男
                            <{else}>
                                女
                            <{/if}>
                        </td>
                        <td><{$item.age}></td>
                        <td><{$item.d_id}></td>
                        <td><{$item.class}></td>
                    </tr>
                    <{foreachelse}>
                    <tr>
                        <td>没有数据</td>
                    </tr>
                    <{/foreach}>
                </table>
            </div>
            <div class="col-md-12 text-center">
                <ul class="pagination">
                    <{$page}>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>

