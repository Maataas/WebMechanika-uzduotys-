<?php
    $color = "800000";
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
    <h3 style="color: white;">1 Perdarykite 2 uždavinį taip, kad spalvą būtų galimą įrašyti į laukelį ir ją išsiųsti mygtuku GET metodu formoje.
 </h3>
    <a href="./index.php" style="color:white">Home</a>
    <a href="./TreciaUzd.php" style="color: white;">1 nuoroda</a>

    <form action="" method="get">
    <input type="text" name="color">
    <button type="submit">press</button>
    </form>
    
</body>
</html>