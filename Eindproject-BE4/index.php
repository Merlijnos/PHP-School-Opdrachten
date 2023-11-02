<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <title>Lab 2 - Includes en require</title>
    <link rel="stylesheet" href="css/style.css">

    <style>
        nav {
            background-color: #333;
            padding: 20px;
        }

        nav ul {
            list-style-type: none;
            padding: 0;
            text-align: center;
        }

        nav ul li {
            display: inline;
            margin-right: 40px;
        }

        nav a {
            text-decoration: none;
            color: #fff;
            font-weight: bold;
            padding: 10px 20px;
            background-color: #333;
            border: 1px solid #333;
            border-radius: 5px;
            transition: background-color 0.3s, color 0.3s;
        }

        nav a:hover {
            background-color: #555;
            color: #fff;
            text-decoration: none;
        }

        body {
            font-family: Arial, sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        h1 {
            color: #333;
            text-align: center;
        }

        p {
            margin: 20px;
            line-height: 1.6;
            text-align: center;
        }

        img {
            max-width: 100%;
            display: block;
            margin: 0 auto;
            box-shadow: 0 0 20px rgba(0, 0, 0, 0.2);
        }
    </style>
</head>
<body>
  
<?php
include 'includes/header.php'; 
$content = isset($_GET['content']) ? $_GET['content'] : 'default';

switch ($content) {
    case 'content1':
        include 'pages/content1.php'; 
        break;
    case 'content2':
        include 'pages/content2.php'; 
        break;
    case 'content3':
        include 'pages/content3.php'; 
        break;
    case 'content4':
        include 'pages/content4.php'; 
        break;
}

include 'includes/footer.php'; 
?>

</body>
</html>
