<?php
	header("Content-Type:text/html;charset=utf-8");

	// 用 XMLRader 解析 xml

	$xml = new  XMLReader();
	$xml->open('stu.xml');
	$i=0;
	$arr = array();
	while ($xml->read()){
		if($xml->name == 'name'){
			$xml->read();
			$arr[$i]['name'] = $xml->value;
			$xml->read();
		}
		if($xml->name == 'author'){
			$xml->read();
			$arr[$i]['author'] = $xml->value;
			$xml->read();
		}
		if($xml->name == 'date'){
			$xml->read();
			$arr[$i]['date'] = $xml->value;
			$xml->read();
			$i++;
		}
	}
	var_dump($arr);


	echo  '<hr />';

	//利用SimpleXMLElement解析xml,成为数组
	$xml = simplexml_load_file('stu.xml');
	//var_dump($xml); //object

	$j=0;
	$arr1 = array();
	foreach ($xml->book as $item) {
		$arr1[$j]['name'] = (string)$item->name;
		$arr1[$j]['author'] = (string)$item->author;
		$arr1[$j]['date'] = (string)$item->date;
		$j++;
	}
	echo '<pre>';
	print_r($arr1);