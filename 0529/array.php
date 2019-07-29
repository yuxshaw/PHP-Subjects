<?php
	$members = array(
		array(
			'name' => '祝蜜',
			'age' => 19,
			'hair' => 'black',
            'gender' => 'girl'
		),
		array(
			'name' => '裕兴',
			'age' => 40,
			'hair' => 'black',
			'gender' => 'boy',
			'height' => 180,
		),
		array(
			'name' => '新鹏',
			'age' => 20,
			'hair' => 'brown',
			'gender' => 'boy',
			'height' => 180
		),
	);
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
	<table border="1">
		<tr>
			<td>姓名</td>
			<td>年龄</td>
			<td>发色</td>
			<td>性别</td>
			<td>身高</td>
		</tr>
		<?php foreach($members as $member){ ?>
            <tr>
                <?php foreach ($member as $item){ ?>
                    <td><?php echo $item  ?></td>
	            <?php }?>
            </tr>
		<?php }?>
	</table>
</body>
</html>
