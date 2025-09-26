<?php

$url = $_POST['url'];
$name = $_POST['name'];

$proto = "http://";
$protos = "https://";

if(str_starts_with($url, $proto) or str_starts_with($url, $protos)){
	$data = "<a href='$url' target='_BLANK'>$name</a> <br>";

	file_put_contents("save/save.html", $data, FILE_APPEND);
	echo "Save succesfully!";

}else{
	echo "Error, request http://";
}


?>