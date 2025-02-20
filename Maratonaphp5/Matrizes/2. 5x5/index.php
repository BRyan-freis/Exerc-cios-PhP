<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>5x5</title>
</head>


<body>

<h3>Matriz 5x5</h3>

<?php 

for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        $matriz[$i][$j] = rand(1, 50);
    }
}

print_r($matriz);

echo "<br><br>";

$maior = 0;
 
for ($i = 0; $i < 5; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($matriz[$i][$j] > $maior) {
            $maior = $matriz[$i][$j];
        }
    }
}

echo "O maior elemento da matriz é : " . $maior . "<br>";


$posicao = array();
 
    for ($i = 0; $i < 5; $i++) {
        for ($j = 0; $j < 5; $j++) {
            if ($matriz[$i][$j] == $maior) {
                $posicao[0] = $i;
                $posicao[1] = $j;
            }
        }
    }
 
 
    echo "<br>";
    echo "A posição do maior elemento é : " . "Linha: " . $posicao[0] . " Coluna: " . $posicao[1];
 

?>

</body>


</html>