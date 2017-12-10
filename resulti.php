
<!DOCTYPE html>
<html>
<head>
	<title>Your Music-Decision</title>
	<link rel="stylesheet" type="text/css" href="resultistyle.css">
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body style="background-image: url(background.jpg);">

<script type="text/javascript">
function buttonChange() {
				document.getElementById('backbutt').style.background = "white";
				document.getElementById('backbutt').style.color = "black";
				document.getElementById("backbutt").style.cursor = 'crosshair';
			}

function buttonBack() {
				document.getElementById("backbutt").style.background='transparent';
				document.getElementById("backbutt").style.color="white";
				document.getElementById("backbutt").style.cursor='default';
</script>

<div id="main">


<?php  

require 'connection.php';

	//der Variable anyon wird der aus der URL ausgelesene Wert zugewiesen
	$anyon=$_GET["anyon"];

	$upzahl=$_GET["upsen"];
	$andereID = $_GET["anyo"];
	$dbname = $_GET["var"];
	

// jenachdem welcher Button gedrückt unterschiedlicher Wert welcher hier angesprochen wird


if (isset($_POST[$andereID]))

{

	$upzahl=$upzahl+1;
	
	
	$sql = "UPDATE `$dbname` SET `upvote` = '$upzahl' WHERE `$dbname`.`N_ID` = $anyon";
	$stmt = $dbh->prepare($sql);
	$stmt->bindValue(':upzahl',$upzahl);

	$stmt->execute();
	
	echo "<p>Deine Eingabe ist eingegangen</p>";
}
	


		


echo "<form action='vote.php?var=$dbname' method='post'>
	<input type='submit' name='backbutt' id='backbutt' class ='inbutt' onmouseover='buttonChange()' onmouseleave='buttonBack()' value='Zurück '>
</form>
"




?>
</div>
</body>
</html>

