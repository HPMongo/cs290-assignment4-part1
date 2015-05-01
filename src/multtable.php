<DOC! <!DOCTYPE html>
<html>
<head>
	<title>Multtable</title>
	<link rel="stylesheet" href="style.css">
</head>
<body>
<?php
$validInput = 1;
$var1; $var2; $var3; $var4;
/*
	Verify that inputs are available and is numeric
*/
if(isset($_GET['min-multiplicand'])) {
	$var1 = ($_GET['min-multiplicand']);
	if(!is_numeric($var1)) {		//parameter is not an integer
		echo "'min-multiplicand' is not an integer<br>";
		$validInput = 0;			//set input to invalid
	}
} else {
	echo "Missing 'min-multiplicand' parameter<br>";
	$validInput = 0;				//set input to invalid
}

if(isset($_GET['max-multiplicand'])) {
	$var2 = $_GET['max-multiplicand'];
	if(!is_numeric($var2)) {		//parameter is not an integer		
		echo "'max-multiplicand' is not an integer<br>";
		$validInput = 0;			//set input to invalid
	}
} else {
	echo "Missing 'max-multiplicand' parameter<br>";
	$validInput = 0;				//set input to invalid
}

if(isset($_GET['min-multiplier'])) {
	$var3 = $_GET['min-multiplier'];
	if(!is_numeric($var3)) {			//parameter is not an integer
		echo "'min-multiplier' is not an integer<br>";
		$validInput = 0;			//set input to invalid
	}
} else {
	echo "Missing 'min-multiplier' parameter<br>";
	$validInput = 0;				//set input to invalid
}

if(isset($_GET['max-multiplier'])) {
	$var4 = $_GET['max-multiplier'];
	if(!is_numeric($var4)) {			//parameter is not an integer
		echo "'max-multiplier' is not an integer<br>";
		$validInput = 0;			//set input to invalid
	}
} else {
	echo "Missing 'max-multiplier' parameter<br>";
	$validInput = 0;				//set input to invalid
}	
/*
	Validate that max numbers are greater or equal to min numbers
*/
if($validInput && ($var1 > $var2)) {
	echo "Minimum multiplicand larger than maximum. <br>";
	$validInput = 0;
}
if($validInput && ($var3 > $var4)) {
	echo "Minimum multiplier larger than maximum. <br>";
	$validInput = 0;
}
/*
	If inputs are valid, proceed with the calculation and populate result table.
	The table should have (max-multiplicand - min-multiplicand + 2) rows and 
	(max-multiplier - min-multiplier + 2) columns. The left column will display integers 
	running from min-multiplicand through max-multiplicand inclusive. The top row will
	 have integers running from min-multiplier to max-multiplier inclusive. Every 
	 cell within the table is the product of the corresponding multiplicand and multiplier.
*/
if($validInput) {
	$rows = $var2 - $var1 + 2;
	$cols = $var4 - $var3 + 2;
	//Populate tilte array, from min-mult to max-mult. Initilize the first element
	//with 1 for calculation purpose.
	$colsArr = array(1);
	for($i = $var3; $i<=$var4; $i++) {
		$colsArr[] = $i;
	}
	//populate row array, from min-cand to max-cand
	$rowsArr = array();
	for($i = $var1; $i <=$var2; $i++) {
		$rowsArr[] = $i;
	}
	//populate result array
	$resultsArr = array();
	for($j = 0; $j<count($rowsArr); $j++) {
		for($k = 0; $k<count($colsArr); $k++) {
			$resultsArr[$j][$k] = $rowsArr[$j]*$colsArr[$k];
		}
	}
	//override the first element in the tilte array with space for display purpose
	$colsArr[0] = " ";

	//populate final table
	echo ("<table> <tr>");
	for($i = 0; $i<count($colsArr); $i++) {
		echo "<th>".$colsArr[$i]."</th>";	
	}
	echo ("</tr>");
	for($j = 0; $j<count($rowsArr); $j++) {
	 	echo "<tr>";
		for($k = 0; $k<count($colsArr); $k++) {
			echo "<td>".$resultsArr[$j][$k]."</td>";
		}
		echo "</tr>";
	}
	echo "</table>";
}

	
?>
</body>
</html>
