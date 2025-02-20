<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>3x3</title>
</head>

<body>

<h3>Matriz 3x3</h3>

<?php 


/*
Crie uma matriz de 3x3 contendo números inteiros aleatórios entre 1 e 100. 
Escreva um script em PHP que percorra a matriz e calcule a soma de todos os 
elementos da matriz. Após isso, imprima a soma total.
*/

for ($i = 0; $i < 3; $i++) {
    for ($j = 0; $j < 3; $j++) {
        $matriz[$i][$j] = rand(1, 100);
    }
}

function somaElementos($matriz) {
    $soma = 0;
    for ($i = 0; $i < count($matriz[0]); $i++) {
        $soma += array_sum(array_column($matriz, $i));
    }

    return $soma;
}


print_r($matriz);

echo "<br><br>";

echo "A soma dos elementos da matriz é: " . somaElementos($matriz) . "."


?>
    
</body>

</html>