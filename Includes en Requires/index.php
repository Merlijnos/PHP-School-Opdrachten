<?php
require('variables.php');
?>

<!DOCTYPE html>
<html>
<head>
    <title>Voor en Achternaam</title>
</head>
<body>
    <h1>Mijn naam is: <?php echo $naam; ?></h1>
    <?php
        foreach ($fruits as $fruit) {
            echo "<li>$fruit</li>";
        }
        ?>
</body>
</html>
