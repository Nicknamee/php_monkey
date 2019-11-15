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
    <h1>Choose your monkey!</h1>
</div>
<div class="image2">
    <img src="images/monkey2.png">
</div>
<div class="apenphp">
    <?php
    $apen[1] = "Baviaan";
    $apen[2] = "Guereza";
    $apen[3] = "Langoer";
    $apen[4] = "Tamarin";
    $apen[5] = "Neusaap";
    $apen[6] = "Halfaap";
    $apen[7] = "Mandril";
    $apen[8] = "Oeakari";
    $apen[9] = "Faunaap";
    $apen[10] = "Hoelman";
    $apen[11] = "Meerkat";
    $apen[12] = "Oormaki";
    $apen[13] = "Gorilla";
    $apen[14] = "Kuifaap";
    $apen[15] = "Mensaap";
    $apen[16] = "Spinaap";
    echo "<a href=https://www.google.nl/search?q=Baviaan&tbm=isch </a>". $apen[1] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Guereza </a>". $apen[2] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Langoer </a>".$apen[3] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Tamarin </a>".$apen[4] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Neusaap </a>".$apen[5] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Halfaap </a>".$apen[6] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Mandril </a>".$apen[7] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Oeakari </a>".$apen[8] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Faunaap </a>".$apen[9] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Hoelman </a>".$apen[10] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Meerkat </a>".$apen[11] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Oormaki </a>".$apen[12] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Gorilla </a>".$apen[13] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Kuifaap </a>".$apen[14] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Mensaap </a>".$apen[15] . "<br>";
    echo "<a href=https://www.google.com/search?client=firefox-b-d&q=Spinaap </a>".$apen[16] . "<br>";
    ?>
</div>
</body>
</html>