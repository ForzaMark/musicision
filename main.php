<!DOCTYPE html>
<html>
<head>
	<link rel="stylesheet" type="text/css" href="mainstyle.css">
	<title>Your Music-Decision</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<script type="text/javascript">
		
		function buttonChange() {
				document.getElementById('logbutton').style.background = "white";
				document.getElementById('logbutton').style.color = "black";
				document.getElementById("logbutton").style.cursor = 'crosshair';
			}

			function buttonBack() {
				document.getElementById("logbutton").style.background='transparent';
				document.getElementById("logbutton").style.color="white";
				document.getElementById("logbutton").style.cursor='default';

			}

				function djbuttonChange() {
				document.getElementById('regbutton').style.background = "white";
				document.getElementById('regbutton').style.color = "black";
				document.getElementById("regbutton").style.cursor = 'crosshair';
			}

			function djbuttonBack() {
				document.getElementById("regbutton").style.background='transparent';
				document.getElementById("regbutton").style.color="white";
				document.getElementById("regbutton").style.cursor='default';

			}

	

	</script>
</head>
<body style="background-image: url(background.jpg)">




<div id="mainpart">

	<h1>Musicision - Your Music Decisison </h1>
		Ist deine Party bereits registriert, dann melde dich hier an <br><br>
	<form action="logandtest.php" method="post">
		<input type="text" name="logtext" class="inpdes" value="Partyname">
		<input type="submit" name="logbutt" class="inbutt" value="Anmelden" id="logbutton" onmouseover="buttonChange()" onmouseleave="buttonBack()">
	</form>

	<br>
	<hr>
	<br>

	Oder erstelle hier deine Musicion-List <br><br>
	<form action="reg.php " method="post">
		<input type="submit" name="regbutton" class="inbutt" value="Registrieren" id="regbutton" onmouseover="djbuttonChange()" onmouseleave="djbuttonBack()">
	</form>

</div>



</body>
</html>