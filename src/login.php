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

	<form action="http://localhost/assignment4/cs290-assignment4-part1/src/content1.php" method="post"> 
	<?php
	$_SESSION["validLogin"] = true;
	?>
		Enter your name: <br>
		<input type="text" name="username">
		<input type="submit">
	</form>

</body>
</html>