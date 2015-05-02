<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
?>
<!DOCTYPE html>
<html>
<head>
	<title>Loopback</title>
</head>
<body>
<?php
	$json;
	echo $_SERVER['SERVER_NAME']."<br>";
	echo $actual_link = "http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]"."<br>";
	echo "$_SERVER[REQUEST_URI]"."<br>";
	if($_SERVER['REQUEST_METHOD']  === 'POST') {
		echo "POST here!"."<br>";
		$json = file_get_contents("$_SERVER[REQUEST_URI]");
		$obj = $json_decode($json);
		echo $ojb;
	} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
		echo "GET here!"."<br>";
		$json = file_get_contents("http://$_SERVER[HTTP_HOST]$_SERVER[REQUEST_URI]");
		$obj = json_decode($json);
		echo $obj;
	} else {
		echo "WHAT???";
	}

?>
</body>
</html>