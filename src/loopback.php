<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
?>
<DOC <!DOCTYPE html>
<html>
<head>
	<title>Loopback</title>
</head>
<body>
<?php
	$jsonArr = array();
	if($_SERVER['REQUEST_METHOD']  === 'POST') {
		$jsonArr['Type']= $_SERVER['REQUEST_METHOD'];
		foreach ($_POST as $key => $value) {
			if(!empty($value)) {
				$jsonArr[$key] = $value;
			} else {
				$jsonArr[$key] = null;
			}
		}
		echo json_encode($jsonArr);
	} elseif ($_SERVER['REQUEST_METHOD'] === 'GET') {
		$jsonArr['Type']= $_SERVER['REQUEST_METHOD'];
		foreach ($_GET as $key => $value) {
			if(!empty($value)) {
				$jsonArr[$key] = $value;
			} else {
				$jsonArr[$key] = null;
			}
		}
		echo json_encode($jsonArr);
	} else {
		echo "Missing a valid request method (GET or POST)";
	}
?>
</body>
</html>