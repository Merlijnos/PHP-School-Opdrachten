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
  <li><a href="paniek.php">Er heerst paniek...</a></li>
  <li><a class="active" href="onkunde.php">Onkunde</a></li>
</ul>
</nav>	
</div>
<div class="page3">

<h2>Onkunde</h2>

<form method = "post" action = "onkunde-results.php">
<p>Wat zou je graag willen kunnen? <input type="text" name="kunnen"></p>

<p>Met welk persoon kun je goed opschieten? <input type="text" name="opschieten"></p>

<p>Wat is je favoriete getal? <input type="text" name="getal"></p>

<p>Wat heb je altijd bij je als je op vakantie gaat? <input type="text" name="vakantie"></p>

<p>Wat is je beste persoonlijke eigenschap? <input type="text" name="beste"></p>

<p>Wat is je slechtste persoonlijke eigenschap? <input type="text" name="slechtste"></p>

<p>Wat is het ergste dat je kan overkomen? <input type="text" name="overkomen"></p>

<input class="button" type ="submit" value="Verzenden">

<div class="footer">
	<a>© 2023 - Merlijn de Groot</a>
</div>
</form>
</div>

</body>
</html>