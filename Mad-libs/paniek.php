<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Mad Libs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Mad Libs</h1>

<div class="main">
<nav>
<ul>
  <li><a href="index.php">Mad Libs</a></li>
  <li><a class="active" href="paniek.php">Er heerst paniek...</a></li>
  <li><a href="onkunde.php">Onkunde</a></li>
</ul>
</nav>	
</div>
<div class="page2">

<h2>Er heerst paniek...</h2>

<form method = "post" action = "paniek-results.php">
<p>Welk dier zou je nooit als huisdier willen hebben? <input type="text" name="dier"></p>

<p>Wie is de belangrijkste persoon in je leven? <input type="text" name="persoon"></p>

<p>In welk land zou je graag willen wonen? <input type="text" name="land"></p>

<p>Wat doe je als je je verveelt? <input type="text" name="verveel"></p>

<p>Met welk speelgoed speelde je als kind het meest? <input type="text" name="speelgoed"></p>

<p>Bij welke docent spijbel je het liefst? <input type="text" name="docent"></p>

<p>Als je € 100.000,- had, wat zou je dan kopen? <input type="text" name="geld"></p>

<p>Wat is je favoriete bezigheid? <input type="text" name="bezigheid"></p>

<input class="button" type ="submit" value="Verzenden">

<div class="footer">
	<a>© 2023 - Merlijn de Groot</a>
</div>
</form>
</div>

</body>
</html>