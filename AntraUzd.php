<?php
    $color = "ff0000";
    if(isset($_GET['color'])){
        $color = $_GET['color'];
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:#<?=$color?>;">
    
    <h1 style="color: white;">WEB MACHANIKA UŽDUOTYS </h1>
    <h3 style="color: white;">2 UŽDUOTIS. Sukurti puslapį panašų į 1 uždavinį, tiktai antro linko su perduodamu kintamuoju nedarykite, o vietoj to padarykite, URL eilutėje ranka įvedus GET kintamąjį color su RGB spalvos kodu (pvz color=ff1234) puslapio fono spalva pasidarytų tokios spalvos. </h3>
    <a href="./index.php" style="color:white">Home</a>
    <a href="./AntraUzd.php" style="color: white;">1 nuoroda</a>
    
    
</body>
</html>