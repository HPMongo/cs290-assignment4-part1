<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
?>
<?php
session_start();
ob_start();
?>
<!DOCTYPE html>
<html>
<head>
	<title>Content2</title>
</head>
<body>
<?php
	if (!empty($_SESSION['validLogin'])) {
		if ($_SESSION['validLogin'] === 'Yes') {
			echo "Your lucky number is: ";
			echo rand(0, 999)."<br>";
			echo "Click <a href='content1.php'>here</a> to go back to previous page";
			echo " or click <a href='logout.php'>here</a> to log out.";
		} else {
		//ob_start() and ob_end_clean() are used in order to allow header change even when 
		//the header information has already been sent.
		//This was referenced from http://stackoverflow.com/questions/11823130/how-to-redirect-with-header-location-in-php-when-using-ob-start
		//on 5/3/15.
			ob_end_clean();
			header('Location: login.php');
		}
	} else {
		ob_end_clean();
		header('Location: login.php');
	}
?>
</body>
</html>