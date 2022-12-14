<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>PHP</title>
    <style>
        body {
            background-color: green;
        }
    </style>
</head>

<body>
    <?php
    $n1 = $_GET["a"];
    $n2 = $_GET["b"];
    $m = ($n1+$n2) / 2;
    echo"os valores passados foram $n1 e $n2";
    echo"<br>";
    echo"o resultado e: $m";
    echo"<br>";
    $sit=($m>=7)?"aprovado":"reprovado";
    echo"<br>";
    echo"resultado final: $sit";
    ?>

</body>

</html>