<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta http-equiv= "X-UA-Compatible" content="IE=Edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sintaxe geral</title>

    <style>
        .destaque {color:red;}
        .nome{color:blue;}
        .html{color:red}
        .paragrafo{color:purple;}
    </style>
</head>
<body>
    <h1 class="destaque">Trabalhando com PHP</h1>
    <p class= "nome">Programador:Jhuan Linarez</p>
    <hr>

    <?php

    echo "Chama SESI-SENAI !";

    echo "<h2>Gerando <span class='destaque'>HTML</span> através do PHP </h2>";
    echo "<h2>Gerando <span class='\destaque\'>HTML</span> através do PHP </h2>";
?>

<h1 class="html">HTML e PHP mesclados</h1>
<p class= "paragrafo">parágrafo HTML</p>

<?php
     $linguagem = "Linguagem PHP.";
?>
<p>Parágrafo mesclando HTML com <?=$linguagem?></p>
    
</body>
</html>