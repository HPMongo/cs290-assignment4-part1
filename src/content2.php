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
	<title>Content2</title>
</head>
<body>
<?php
	if ($_SESSION['validLogin'] === 'Yes') {
		echo "Your lucky number is: ";
		echo rand(0, 999)."<br>";
		echo "Click <a href='content1.php'>here</a> to go back to previous page";
		echo " or click <a href='logout.php'>here</a> to log out.";
	} else {
		header('Location: login.php');
	}
?>
</body>
</html>