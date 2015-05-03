<?php
error_reporting(E_ALL);
ini_set('display_errors','On');
?>
<?php
session_start();
session_destroy();
header('Location: http://localhost/assignment4/cs290-assignment4-part1/src/login.php');
?>