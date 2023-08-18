<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Exercício 3</title>
</head>
<body>
   <h1>Primeiro exemplo:</h1>
   <h2>Numeros</h2>

   <!-- numeros inteiros -->
<?php
   echo 7*5;
   echo "<br>"
?>

<?php
        
        if(is_int(5)) { //true
            echo "É um inteiro <br>";
        }

        if(is_int("Não é um inteiro")) { //false
            echo "É um inteiro 2 <br>";
        }

        $a = 10;

        if(is_int($a)) { //true
            echo "É um inteiro 3 <br>";
        }
?>

<!-- texto -->
<?php
$idade = 36;

echo "Ele tem $idade anos <br>";
?>

<!-- booleano -->
<?php
    $maior = true;
    if($maior) {
         echo "voce é maior de idade!";
    }
?>

<!-- array -->
<?php
   $arr = ["SESI", 166, true];

   echo"<br>";
   print_r($arr);
   echo"<br>";
   print_r($arr[2]);
?>

</body>
</html>