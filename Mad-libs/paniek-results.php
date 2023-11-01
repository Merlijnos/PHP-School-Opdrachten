<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Mad Libs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Er heerst paniek...</h1>

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

	
<p>Er heerst paniek in het koninkrijk <?php echo $_POST["land"]; ?>. Koning <?php echo$_POST["docent"]; ?> is ten einde raad en als koning <?php echo $_POST["docent"]; ?> ten einde raad is, dan roept hij zijn ten-einde-raadsheer <?php echo $_POST["persoon"]; ?>.</p>

<p>"<?php echo $_POST["persoon"]; ?>! Het is een ramp! Het is een schande!" </p>

<p>"Sire, Majesteit, Uwe Luidruchtigheid, wat is er aan de hand?"</p>

<p>"Mijn <?php echo $_POST["dier"]; ?> is verdwenen! Zo maar, zonder waarschuwing. En ik had net <?php echo $_POST["speelgoed"]; ?> voor hem gekocht!"</p>

<p>"Majesteit, uw <?php echo $_POST["dier"]; ?> komt vast vanzelf weer terug?"<p>

<p>"Ja, da's leuk en aardig, maar  hoe moet ik  in de  tussentijd <?php echo $_POST["bezigheid"]; ?> leren?"</p>

<p>"Maar Sire, daar kunt u toch uw <?php echo $_POST["geld"]; ?> voor gebruiken." </p>

<p>"<?php echo $_POST["persoon"]; ?>, je hebt helemaal gelijk! wat zou ik doen als ik jou niet had."</p>

<p>"<?php echo $_POST["verveel"]; ?>, Sire."</p>

<div class="footer">
	<a>© 2023 - Merlijn de Groot</a>
</div>
<div>

</body>
</html>