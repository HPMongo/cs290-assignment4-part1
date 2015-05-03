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
	<title>Login Page</title>
</head>
<body>
	<form action="content1.php" method="post"> 
		Enter your name: <br>
		<input type="text" name="username">
		<input type="hidden" name="loginrequest" value="yes">
		<input type="submit">
	</form>
</body>
</html>