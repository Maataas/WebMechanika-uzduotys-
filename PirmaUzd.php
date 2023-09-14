<?php
    $color = "black";
    if(isset($_GET['color'])){
        $color = "red";
    }

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body style="background-color:<?=$color?>;">
    
    <h1 style="color: white;">WEB MACHANIKA UŽDUOTYS </h1>
    <h3 style="color: white;">1 UŽDUOTIS. Sukurti puslapį su juodu fonu ir su dviem linkais (nuorodom) į save. Viena nuoroda su failo vardu, o kita nuoroda su failo vardu ir GET duomenų  perdavimo metodu perduodamu kintamuoju color=1. Padaryti taip, kad paspaudus ant nuorodos su perduodamu kintamuoju fonas nusidažytų raudonai, o paspaudus ant nuorodos be perduodamo kintamojo, vėl pasidarytų juodas.
 </h3>
    <a href="./index.php" style="color:white">Home</a>
    <a href="./PirmaUzd.php" style="color: white;">1 nuoroda</a>
    <a href="./PirmaUzd.php?color=1" style="color: white;">2 nuoroda</a>

</body>
</html>