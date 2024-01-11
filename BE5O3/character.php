<?php
include 'db.php';
$id = $_GET['id'];
$stmt = $pdo->prepare('SELECT * FROM characters WHERE id = ?');
$stmt->execute([$id]);
$character = $stmt->fetch();
?>
<!DOCTYPE html>
<html>
<style>
        body {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            background-color: grey;
            padding: 20px;
        }
        .character-info {
            background-color: #ffffff;
            display: flex;
            flex-direction: row;
            justify-content: space-between;
            margin-bottom: 20px;
        }
        .character-stats {
            background-color: <?php echo $character['color']; ?>; /* Use the color from the database here */
            padding: 10px;
            margin-top: 20px;
            border: 3px solid black;
        }
        .back-button {
            position: absolute;
            top: 10px;
            right: 10px;
        }
        .bio {
            background-color: #ffffff;
            margin-left: 20px;
        }
        .name-box, .footer-box {
            background-color: #ffffff;
            padding: 10px;
            margin-bottom: 20px;
            width: 100%;
            text-align: center;
        }
    </style>
</head>
<body>
    <a class="back-button" href="index.php">Back to overview</a>
    <div class="name-box">
        <h1><?php echo $character['name']; ?></h1>
    </div>
    <div class="character-info">
        <div>
            <img src="resources/images/<?php echo $character['avatar']; ?>" alt="<?php echo $character['name']; ?>">
            <div class="character-stats">
                <p>Health: <?php echo $character['health']; ?></p>
                <p>Attack: <?php echo $character['attack']; ?></p>
                <p>Defense: <?php echo $character['defense']; ?></p>
                <p>Weapon: <?php echo $character['weapon']; ?></p>
                <p>Armor: <?php echo $character['armor']; ?></p>
            </div>
        </div>
        <div class="bio">
            <h2>Bio</h2>
            <p><?php echo $character['bio']; ?></p>
        </div>
    </div>
    <div class="footer-box">
        <footer>&copy; Merlijn de Groot 11 Januari 2024</footer>
    </div>
</body>
</html>