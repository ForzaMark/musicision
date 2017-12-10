<!DOCTYPE html>
<html>
<head>
	<title>Your Music-Decision</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="djresultistyle.css">
</head>
<body style="background-image: url(background.jpg)">

<?php  

$idsen = $_GET["anyon"];
$dbname = $_GET["partyname"];
require 'connection.php';


if (isset($_POST[$idsen])) {


	$sql = "DELETE FROM `$dbname` WHERE `$dbname`.`N_ID` = $idsen";
	$stmt = $dbh->prepare($sql);
	$stmt->execute();



	echo "<h1>Als bereits gespielt markiert</h1>";
	
	echo "<form action='djadmin.php?partyname=$dbname' method='post'>
		<input type='submit' name='backbutt' value='zurück' id='delbutt' class='inbutt' >
		</form>";

}
?>



</body>
</html>