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
	$redirectLink = 'http://localhost/assignment4/cs290-assignment4-part1/src/login.php';
	$numVisit;
	if($_SESSION["validLogin"] === true) {
		if(isset($_POST['username'])) {
			$inName = $_POST['username'];
			if(empty($inName)) {
				echo "A username must be entered. ";
				echo "Click <a href='$redirectLink'> here</a> to return to the login screen.";
			} else {
				//set the initial value
				if(empty($_SESSION[$inName])) {
					$numVisit = 0;
				} else {
					$numVisit = $_SESSION[$inName];
				}
				echo "Hello $inName! You have visted this page $numVisit times.<br>";
				$numVisit += 1;
				$_SESSION[$inName] = $numVisit;
				echo "Click <a href='logout.php'>here</a> to log out.";
			}
		}
	} else {
		header('Location: http://localhost/assignment4/cs290-assignment4-part1/src/login.php');
	}
?>
</body>
</html>