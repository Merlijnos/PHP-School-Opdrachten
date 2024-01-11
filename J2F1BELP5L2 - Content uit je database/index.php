<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <title>J2F1BELP5L2 - Content uit je database</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
    <!-- Load header from includes folder -->
    <?php include 'includes/header.php'; ?>

	<?php
    if (isset($_GET['content'])) {
        $content = $_GET['content'];

        // Connect to your database
		$db = new PDO('mysql:host=localhost;dbname=databank_php;charset=utf8', 'root', 'mysql');

        // Prepare a query to fetch the desired content
        $query = $db->prepare("SELECT * FROM onderwerpen WHERE id = :content");
        $query->execute(['content' => $content]);

        // Fetch the content
        $result = $query->fetch(PDO::FETCH_ASSOC);

        // Display the content
        if ($result) {
            echo '<h1>' . htmlspecialchars($result['name']) . '</h1>';
            echo '<p>' . htmlspecialchars($result['description']) . '</p>';
            echo '<img src="' . htmlspecialchars($result['image']) . '" alt="' . htmlspecialchars($result['name']) . '">';
        } else {
            echo '<p>No content found for this ID.</p>';
        }
    }
?>

    <!-- Load footer from includes folder -->
    <?php include 'includes/footer.php'; ?>
</body>
</html>