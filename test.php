<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>

<form action="test.php" method="post">
	<input type="text" name="asd">
	<input type="submit" name="we">
</form>


<?php

require 'connection.php';


$dbname = $_POST["asd"];

$sql= "SELECT * FROM `reg_data` WHERE 'partyname' = $dbname";
$stmt=$dbh->prepare($sql);
$stmt->execute();

foreach ($stmt as $daten ) {
	
	$compname= $daten["partyname"];

}

?>

</body>
</html>