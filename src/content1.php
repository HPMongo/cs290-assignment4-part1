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
	$redirectLink = 'login.php';
	$numVisit;
	//check for valid log in and set session value
	if(isset($_POST['loginrequest'])) {
		$pRequest = $_POST['loginrequest'];
		if($pRequest === 'yes') {
			$_SESSION['validLogin'] = 'Yes';
		}
	}	

	if($_SESSION['validLogin'] === 'Yes') {				
	//User has logged on previously either via a current post request or prior log on.
	//Validate if the user has provided a username via the post request. If not, check
	//to see if the username was stored under previous session. 
		if(isset($_POST['username'])) {					
			$inName = $_POST['username'];				
		} else {										
			if(!empty($_SESSION['currentUser'])) {
				$inName = $_SESSION['currentUser'];
			}
		}
	//If the username is invalid - i.e. can't retrieve from the past session information or from the
	//post request. Display an error message and provide a link to the log in page.
		if(empty($inName)) {							
			echo "A username must be entered. ";		
			echo "Click <a href='$redirectLink'> here</a> to return to the login screen.";
		} else {
	//store username to session value for future usage
	 		$_SESSION['currentUser'] = $inName;
	//set the page view value for the current user
			if(empty($_SESSION[$inName])) {
				$numVisit = 0;
			} else {
				$numVisit = $_SESSION[$inName];
			}
	//display the greeting message along with page count and link to the next page
			echo "Hello $inName! You have visted this page $numVisit times.<br>";
			$numVisit += 1;
			$_SESSION[$inName] = $numVisit;
			echo "Click <a href='content2.php'> here</a> to see your lucky number.<br>";
			echo "Click <a href='logout.php'>here</a> to log out.";
		}
	} else {										
	//There is no log in information for the user, redirect the use to login page
		header('Location: login.php');
	}
?>
</body>
</html>