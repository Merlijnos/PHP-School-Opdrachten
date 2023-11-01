<!-- welcome.php -->
<!DOCTYPE html>
<html>
<body>

<h1>De ingevulde gegevens zijn:</h1>
<p>Naam: <?php echo isset($_POST["fname"]) ? $_POST["fname"] : 'Niet opgegeven'; ?></p>
<p>Emailadres: <?php echo isset($_POST["email"]) ? $_POST["email"] : 'Niet opgegeven'; ?></p>

</body>
</html>