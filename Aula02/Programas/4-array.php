<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array no PHP</title>
</head>
<body>
    <h1>Tipos de dados array no PHP</h1>
    <p>Um array, da forma mais simples, é uma lista.</p>
    <hr>
    <p>Arrays são essenciais para armazenar, gerenciar, e operar sobre um conjunto de variáveis.</p>
    <hr>
    <p>Veja 2 exemplos:</p>
    
    <!-- Código PHP para arrays -->
<?php
    echo "<p> Sintaxe NORMAL: usa o nome e põe os valores entre parenteses.<p>";
    $a = array (1, 2, 3, 4);

    print_r($a);
    echo"<br>";

    echo "<p>O primeiro valor da lista é: $a[0]<p>";

    echo"<br><hr><p>Sintaxe curta: não usa o nome e põe os valores entre colchetes.<p>";

    $arr = ["SENAI", 118, true];

    echo"<br>";
    print_r($arr);
    echo"<br>";
    print_r($arr[1]);
    echo "<br><p>O segunda valor d lista é: $arr[1]</p>";
?>
</body>
</html>