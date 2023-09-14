<?php
$color = "black";
if($_SERVER['REQUEST_METHOD'] == "POST"){
    $color = "white";
}
$letters = ["A", "B", "C", "D", "E", "F", "G", "H", "I", "J"];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-T3c6CoIi6uLrA9TneNEoa7RxnatzjcDSCmG1MXxSR1GAsXEV/Dwwykc2MPK8M2HN" crossorigin="anonymous">
    <title>Document</title>
</head>
<style>
    label {
        color: white;
    }

</style>
<body style="background-color:<?=$color?>;">
    <h3>9. Padarykite juodą puslapį, kuriame būtų POST forma, mygtukas ir atsitiktinis kiekis (3-10) checkbox su raidėm A,B,C… Padarykite taip, kad paspaudus mygtuką, fono spalva pasikeistų į baltą, forma išnyktų ir atsirastų skaičius, rodantis kiek buvo pažymėta checkboksų (ne kurie, o kiek). </h3>

    <?php if($_SERVER['REQUEST_METHOD'] == "GET") {?>
    <form action="" method = "post">
        <?php for ($i=0; $i < rand(3,10); $i++) { ?> 
             <label><?=$letters[$i]?></label>
            <input type="checkbox" name="varneles[]" id="">
        <?php } ?>

        <button class="btn btn-primary" type="submit">Pateikti duomenis</button>
    </form>

    <?php }else { ?>
        <h1> <?= (isset($_POST['varneles'])) ? count($_POST['varneles']) : "varniukai isskrido" ?></h1>
    <?php } ?>

    
</body>
</html>