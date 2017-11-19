
<!DOCTYPE html>
<html>
<head>
	<title>Your Music-Decision</title>
	<meta charset="utf-8">
	<link rel="stylesheet" type="text/css" href="djadminstyle.css">
<body style="background-image: url(background.jpg)">



<?php
require 'connection.php';




$partyname = $_POST["partyname"];
//$idsen = $_GET["anyon"];



function printlist($dbname)
{
	require 'connection.php';
	$sqli = "SELECT * FROM $dbname ORDER BY upvote DESC";
	$result=$dbh->query($sqli);
	$statement= $dbh->prepare("SELECT Datum FROM $dbname");
	$statement->execute(array());
	$upvoteding='';

	foreach ($result as $daten ) {

		$idsen = $daten["N_ID"];
		$partyname = $dbname;

		/*$idtwo = "up".$daten["N_ID"];
		$upvoteding = $daten["upvote"];
		
		/*
		$upvote = "SELECT upvote FROM tbl_tbl_music WHERE N_ID = $idsen";
		$res = $dbh->query($upvote);

		foreach ($res as $dat) {
			$upvoteding = $dat["upvote"];
			
		}*/

		// Ausgeben der Datenbank

		echo "<hr>".$daten["Wunsch"]. " von  ".$daten["Interpret"] ."<br>"."Upvotes : ".$daten["upvote"]."<br>"." gewünscht am : ";
		
		$row = $statement->fetch();
		$date = new DateTime($row['Datum']);
		echo $date->format('d.m.Y H:i');

		echo"<form action='djresulti.php?anyon=$idsen&partyname=$partyname' method='post'>
		<input type='submit' name='$idsen' value='bereits gespielt' id='delbutt' class='inbutt' >
		</form>";




	}
}



$sql = "SELECT * FROM `reg_data` WHERE `partyname` = '$partyname'";
$stmt = $dbh->prepare($sql);
$stmt->execute(array());


foreach ($stmt as $daten ) {
	
	

	if ($daten["djlogin"]==$_POST["djname"]) {
		echo "Login succesfull";

		

		printlist($partyname);

	}


	else {
		echo "LoginError";
	}


}
	

if (isset($_POST["backbutt"])) {
	
	$partyname = $_GET["partyname"];
	echo "<h1>"."Angemeldet für Party :".$partyname."</h1> ";
	printlist($partyname);
}


?>

<br>
<br>
<hr>
<div class="footer">

<p><b>oder</b> du meldest dich ab : <br></p>

<form action='main.php' method='post'>
 	<input type='submit' name='logout' value='logout' id="backbutt" class="inbutt">
 </form> 

 </div>

</body>
</html>