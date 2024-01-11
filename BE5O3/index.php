<?php
include 'db.php';
$stmt = $pdo->query('SELECT COUNT(*) FROM characters');
$count = $stmt->fetchColumn();
$stmt = $pdo->query('SELECT * FROM characters ORDER BY name');
?>
<!DOCTYPE html>
<html>
<head>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>All Characters</title>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.2/css/all.css" integrity="sha384-fnmOCqbTlWIlj8LyTjo7mOUStjsKC4pOpQbqyi7RrhN7udi9RwhKkMHpvLbHG9Sr" crossorigin="anonymous">
    <link href="resources/css/style.css" rel="stylesheet"/>
    </head>
<body>
    <header><h1>Alle <?php echo $count; ?> characters uit de database</h1></header>
    <div id="container">
        <?php
        while ($row = $stmt->fetch())
        {
            echo "<a class='item' href='character.php?id=" . $row['id'] . "'>";
            echo "<div class='left'>";
            echo "<img class='avatar' src='resources/images/" . $row['avatar'] . "'>";
            echo "</div>";
            echo "<div class='right'>";
            echo "<h2>" . $row['name'] . "</h2>";
            echo "<div class='stats'>";
            echo "<ul class='fa-ul'>";
            echo "<li><span class='fa-li'><i class='fas fa-heart'></i></span> " . $row['health'] . "</li>";
            echo "<li><span class='fa-li'><i class='fas fa-fist-raised'></i></span> " . $row['attack'] . "</li>";
            echo "<li><span class='fa-li'><i class='fas fa-shield-alt'></i></span> " . $row['defense'] . "</li>";
            echo "</ul>";
            echo "</div>";
            echo "</div>";
            echo "<div class='detailButton'><i class='fas fa-search'></i> bekijk</div>";
            echo "</a>";
        }
        ?>
    </div>
    <footer>&copy; Merlijn de Groot 11 Januari 2024</footer>
</body>
</html>