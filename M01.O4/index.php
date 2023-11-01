<!DOCTYPE html>
<html>
<head>
    <style>
        body {
            color: white;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
            background-size: cover;
            background-position: center;
            font-size: 2em;
            font-family: Arial, sans-serif;
            text-shadow: 2px 2px 4px #000000;
        }
    </style>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script>
        $(document).ready(function(){
            setInterval(function(){
                $("#greeting").load(window.location.href + " #greeting" );
                $("#time").load(window.location.href + " #time" );
            }, 1000);  // Refresh every second
        });
    </script>
</head>
<body>
    <div id="greeting">
        <?php
        date_default_timezone_set('Europe/Amsterdam');
        $hour = date('H');
        $greeting = '';
        $backgroundImage = '';

        if ($hour >= 6 && $hour < 12) {
            $greeting = 'Goedemorgen';
            $backgroundImage = 'morning.png';
        } elseif ($hour >= 12 && $hour < 18) {
            $greeting = 'Goedemiddag';
            $backgroundImage = 'afternoon.png';
        } elseif ($hour >= 18 && $hour < 24) {
            $greeting = 'Goedeavond';
            $backgroundImage = 'evening.png';
        } else {
            $greeting = 'Goedenacht';
            $backgroundImage = 'night.png';
        }

        echo "<style>body{background-image: url('$backgroundImage');}</style>";
        echo "<h1>$greeting</h1>";
        ?>
    </div>
    <div id="time">
        <?php
        echo date('H:i:s');
        ?>
    </div>
</body>
</html>