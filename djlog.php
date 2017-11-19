<!DOCTYPE html>
<html>
<head>
	<title>Your Music-Decision</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<link rel="stylesheet" type="text/css" href="djlogstyle.css">
</head>
<body style="background-image: url(background.jpg)">

<h1>DJ - Login</h1><hr>
<br>
Gib hier deinen Partyname und das Passwort ein.<br><br>
Dass wir sichergehen können das du der DJ bist.<br> 


<div id="main">

<form action="djadmin.php" method="post">
	<input type="text" name="partyname" value="Partyname" class="inpdes">
	<input type="text" name="djname" value="DJ-Passwort" class="inpdes">
	<input type="submit" name="djconfirmbutt" value="bestätigen" class="inbutt">
</form>

</div>

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