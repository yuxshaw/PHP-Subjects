<?php
	if(isset($_POST['check'])){
		var_dump($_POST);
	}

	if(!empty($_GET)){
		/*echo '<pre>';
		print_r($_GET);*/
		$arr = $_GET;
		foreach ($arr as $k => $item){
			echo "{$k} => {$item}<br />";
		}
	}
