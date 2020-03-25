<?php
require_once('database.php');
?>
    <!doctype html>
    <html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport"
              content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>PHPChallenge</title>
        <link rel="stylesheet" type="text/css" href="style/style.css"/>
        <link href="https://fonts.googleapis.com/css?family=Bangers&display=swap" rel="stylesheet">
    </head>
    <body>
    <div class="image1">
        <img src="images/monkey1.jpg">
    </div>
    <div class="choose">
        <br>
        <h1>select your monkey!</h1>
    </div>
    <div class="image2">
        <img src="images/monkey2.png">
    </div>
    <div class="apenphp">
        <?php

        $aap = $con->prepare('SELECT * FROM leefgebied');
        $aap->execute();
        $apen = $aap->fetchAll();

        foreach ($apen as $aap2) {
            echo $aap2['soort'];
        }



        ?>
    </div>
    </body>
    </html>
<?php
?>