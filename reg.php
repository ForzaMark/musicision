<!DOCTYPE html>
<html>
<head>
	<title>Your Music-Decision</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">

	<link rel="stylesheet" type="text/css" href="regstyle.css">


	<script type="text/javascript">
		function best() {
			window.alert('Deine Party wurde registriert')
		}

	</script>

</head>
<body style="background-image: url(background.jpg)"	>


<h1>Create a Party</h1><hr><br>

Gib hier den Namen deiner Party und das Passwort welches der Dj später benötigt ein :

<div id="main">

<form action="reg.php" method="post">
	<input type="text" name="regpartyname" class="inpdes" value="Partyname">
	<input type="text" name="regdjlog" class="inpdes" value="DJ Passwort">
	<input type="submit" name="regbutt" class="inbutt" value="Registrieren" onclick="best()" >
</form>

</div>


<?php

require 'connection.php';


	
if(isset($_POST["regbutt"])){




	$partyname = $_POST["regpartyname"];
	$djlog= $_POST["regdjlog"];
	$sql = 'INSERT INTO `reg_data`( `partyname`, `djlogin`) VALUES (:partyname, :djlog)';
	$stmt = $dbh->prepare($sql);
  	$stmt->bindValue(':partyname',$partyname);
	$stmt->bindValue(':djlog',$djlog);
	$stmt->execute();


	$partyname = $_POST["regpartyname"];
	$xsql = "CREATE TABLE `db_369761_1`.`".$partyname."` ( `N_ID` INT(50) NOT NULL AUTO_INCREMENT , `Wunsch` VARCHAR(50) NOT NULL , `Interpret` VARCHAR(50) NOT NULL , `Datum` DATETIME NOT NULL, `upvote` INT(50) NOT NULL , PRIMARY KEY (`N_ID`)) ENGINE = InnoDB";
	$xstmt = $dbh->prepare($xsql);
	$xstmt->execute();

 	


	}


  ?>



<br>
<br>
<hr>
<div class="footer">

<p><b>oder</b> zurück zur vorherigen Seite : <br></p>

<form action='main.php' method='post'>
 	<input type='submit' name='logout' value='Back' id="backbutt" class="inbutt">
 </form> 

 </div>


</body>
</html>