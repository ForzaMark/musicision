<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="votestyle.css">
	<title>Your Music-Decision</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-image: url(background.jpg)">

<h1> Angemeldet auf 

<?php

$dbname = $_GET["var"];

echo $dbname;

echo "</h1>";

require 'connection.php';

echo "<div id='main'>";

if (isset($_POST["votebutt"])||isset($_POST["backbutt"])) {
		
	
	$sqli = "SELECT * FROM $dbname ORDER BY upvote DESC";
	$result=$dbh->query($sqli);
	$statement= $dbh->prepare("SELECT Datum FROM $dbname ");
	$statement->execute(array());
	$upvoteding='';


	foreach ($result as $daten ) {

		$idsen = $daten["N_ID"];
		$idtwo = "up".$daten["N_ID"];
		$upvoteding=$daten["upvote"];
		
		/*$upvote = "SELECT upvote FROM tbl_tbl_music WHERE N_ID = $idsen";
		$res = $dbh->query($upvote);

		foreach ($res as $dat) {
			$upvoteding = $dat["upvote"];
			
		}*/
		//echo "<hr>";
		// Ausgeben der Datenbank

		echo "<div id='font'>";

		echo $daten["Wunsch"]. " von  ".$daten["Interpret"] ." gewünscht am : ";
		
		$row = $statement->fetch();
		$date = new DateTime($row['Datum']);
		echo $date->format('d.m.Y H:i');

		echo "<br>"."<br>"." Gefällt  ".$daten["upvote"]." Personen"."   "."<form action='resulti.php?anyo=$idtwo&upsen=$upvoteding&anyon=$idsen&var=$dbname' method='post'>
		<input type='submit' name='$idtwo' value='Gefällt mir' id='upbutt' class='inbutt' >
		</form>"."<hr>";

		echo "</div>";

		/*echo "<div id=butt>";

		echo "<form action='resulti.php?anyo=$idtwo&upsen=$upvoteding&anyon=$idsen&var=$dbname' method='post'>
		<input type='submit' name='$idtwo' value='upvote' id='upbutt' class='inbutt' >
		</form>"."<hr>";

		echo "</div>";
		*/



;
		
	}}


echo "</div>";





		echo "<br>
<br>
<hr>
<div class='footer'>

<p><b>Zurück</b> zur Hauptseite : <br></p>

<form action='logandtest.php?var=$dbname' method='post'>
 	<input type='submit' name='logout' value='logout' id='backbutt' class='inbutt'>
 </form> 

 </div>"
?>
<!--
<br>
<br>
<hr>
<div class="footer">

<p><b>oder</b> zur Hauptseite : <br></p>

<form action='logandtest.php?' method='post'>
 	<input type='submit' name='logout' value='logout' id="backbutt" class="inbutt">
 </form> 

 </div>


-->

</body>
</html>
