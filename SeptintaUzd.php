<?php
   if($_SERVER['REQUEST_METHOD'] == "GET"){
    $color = "green";
   }else{
    header("Location:./SestsUzd.php");
    die;
    $color = "yellow";
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
<h3>Pakartokite 6 uždavinį. Papildykite jį kodu, kuris naršyklę po POST metodo peradresuotų tuo pačiu adresu (t.y. į patį save) jau GET metodu.</h3>
    <form action="" method="get">
        <button type="submit">get</button>
    </form>
    <form action="" method="post">
        <button type="submit">post</button>
    </form>

</body>
</html>