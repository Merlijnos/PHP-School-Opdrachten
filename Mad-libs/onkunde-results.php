<!DOCTYPE html>
<html lang="nl">
<head>
	<meta charset="UTF-8">
	<title>Mad Libs</title>
	<link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>

<h1>Onkunde</h1>

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

<p>Er zijn veel mensen die niet kunnen <?php echo $_POST["kunnen"]?>.

Neem nou <?php echo $_POST["opschieten"]?>.

Zelfs met de hulp van een <?php echo $_POST["vakantie"]?> of zelfs <?php echo $_POST["getal"]?> kan <?php echo $_POST["opschieten"]?> niet <?php echo $_POST["kunnen"]?>.

Dat heeft niet te maken met een gebrek aan <?php echo $_POST["beste"]?>, maar met een te veel aan <?php echo $_POST["slechtste"]?>. 

Te veel <?php echo $_POST["slechtste"]?> leidt tot verveling en dat is niet goed als je wilt <?php echo $_POST["kunnen"]?>.
 
Helaas voor <?php echo $_POST["opschieten"]?>.</p>

<div class="footer">
	<a>© 2023 - Merlijn de Groot</a>
</div>

</div>

</body>
</html>