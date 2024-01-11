<!DOCTYPE html>
<html>
<head>
    <title>Mijn Pagina</title>
</head>
<body>
    <?php
    for ($i = 0; $i < 10; $i++) {
        echo "<h1>Content van content.php (Keer $i)</h1>";
        include('content.php');
    }
    ?>
</body>
</html>
