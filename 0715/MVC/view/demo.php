<?php
?>

<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h1>Demo模板</h1>

    <table border="1" cellpadding="4" cellspacing="0" width="300" style="text-align: center;">
        <tr>
            <th>学号</th>
            <th>姓名</th>
            <th>性别</th>
            <th>年龄</th>
        </tr>
        <?php foreach ($stu_info as $item){ ?>
            <tr>
                <td><?php echo $item['number']?></td>
                <td><?php echo $item['name']?></td>
                <td><?php echo $item['sex']?></td>
                <td><?php echo $item['age']?></td>
            </tr>
        <?php } ?>
    </table>
</body>
</html>
