<!DOCTYPE html>
<html>
<head>

	<title>Your Music-Decision</title>

	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<script type="text/javascript">
		





	</script>

<link rel="stylesheet" type="text/css" href="logstyle.css">
</head>
<body style="background-image: url(background.jpg)">


<div id="header">
<h1>Angemeldet auf Party :



<?php 

require 'connection.php';

$dbname;











if (isset($_POST["inbutt"])||isset($_POST["logout"])) {
	$dbname = $_GET["var"];	
	echo $dbname."<hr>"."</h1>";
}


else{
$dbname = $_POST["logtext"];

echo $dbname."<hr>"."</h2>";
}






echo "</div>";







echo "<div id='rest'";



if (isset($_POST["inbutt"])) {
	$dbname = $_GET["var"];	
	$wunsch = $_POST["intext"];
	$interpret = $_POST["ininterpret"];

	$datum = date("Y-m-d H:i:s");
	//$dbname = $_GET["var"];
	
	echo $wunsch." wurde in ".$dbname." gespeichert"."<br>";
	$sql = "INSERT INTO $dbname(Wunsch, Datum,Interpret) VALUES (:wunsch, :datum, :interpret)";
  	$stmt = $dbh->prepare($sql);




  	$stmt-> bindValue(':wunsch',$wunsch);
	$stmt-> bindValue(':interpret',$interpret);
	$stmt->bindValue(':datum',$datum);
	$stmt->execute();

}


	echo "<h2>Your Music Choice</h2>";  

	echo "Trage hier deine Musikwünsche ein : <br><br>";


  echo "<form action='logandtest.php?var=$dbname' method='post'>
	<input type='text' name='intext' value='Wunsch'class= 'inpdes' >
	<input type='text' name='ininterpret' value='Interpret' class='inpdes'>
	<input type='submit' name='inbutt' class='inbutt'>
</form>";


  ?>



<br>


<b>oder</b> schau dir auf  "Votesite" die Wünsche an und bewerte sie :
<br>	<br>






 <?php

if (isset($_POST["inbutt"])||isset($_POST["logout"])) {
	$dbname = $_GET["var"];	
	//echo $dbname."<hr>"."</h1>";
}


else{
$dbname = $_POST["logtext"];
 }

 echo "  


 	<form action='vote.php?var=$dbname' method='post'>
 		<input type='submit' name='votebutt' value='votesite' class='inbutt'>
 	</form>
	";

 
 	?>
</div>

<br>
<b>oder</b> bist du der DJ und willst die Wünsche deiner Gäste geordnet sehen ? :<br> <br>	

<form action="djlog.php" method="post">
	<input type="submit" name="djbutt" class="inbutt" value="DJ Button">
</form>

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