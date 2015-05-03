<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
?>
<?php
session_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Content1</title>
</head>
<body>
<?php
	if (!(isset($_SESSION['validLogin'])) || $_SESSION['validLogin'] = '') {
		header('Location: http://localhost/assignment4/cs290-assignment4-part1/src/login.php');
	} else {
		echo "You passed the test!";
		//header('Location: http://localhost/assignment4/cs290-assignment4-part1/src/login.php');
	}
?>
</body>
</html>