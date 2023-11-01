<?php
$fname = $email = "";
$fnameErr = $emailErr = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["fname"])) {
        $fnameErr = "Naam is verplicht";
    } else {
        $fname = htmlspecialchars($_POST["fname"], ENT_QUOTES, 'UTF-8');
    }

    if (empty($_POST["email"])) {
        $emailErr = "Email is verplicht";
    } else {
        $email = htmlspecialchars($_POST["email"], ENT_QUOTES, 'UTF-8');
        if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
            $emailErr = "Ongeldig email formaat";
        }
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <style>
        form {
            width: 300px;
            margin: 0 auto;
        }
        input[type="text"], input[type="email"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #4CAF50;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>

<?php
if ($fname && $email && !$fnameErr && !$emailErr) {
    echo "<h1>De ingevulde gegevens zijn:</h1>";
    echo "<p>Naam: " . $fname . "</p>";
    echo "<p>Emailadres: " . $email . "</p>";
} else {
?>

<form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>" method="post">
    <label for="fname">Naam:</label><br>
    <input type="text" id="fname" name="fname" value="<?php echo $fname;?>">
    <span class="error">* <?php echo $fnameErr;?></span>
    <br><br>
    <label for="email">Email:</label><br>
    <input type="email" id="email" name="email" value="<?php echo $email;?>">
    <span class="error">* <?php echo $emailErr;?></span>
    <br><br>
    <input type="submit" value="Submit">
</form>

<?php
}
?>

</body>
</html>