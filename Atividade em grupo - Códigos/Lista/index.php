<!DOCTYPE html>
<html lang="pt">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contagem de palavras</title>
</head>
<body>

    <h2>Contagem usando laco for</h2>

    <?php

function caracteres5($lista) { //Declaramos a função caracteres5.
    $contador = 0;
    $palavras_maiores_que_5 = [];
    $tamanho = count($lista); //Conta os elementos na lista

    for ($i = 0; $i < $tamanho; $i++) { //Ele começa com a variável $i igual a 0 e continuará enquanto $i for menor que o valor armazenado em $tamanho
        if (strlen($lista[$i]) > 5) { //Obtem o número de caracteres da palavra na posição $i do array $lista.
            $contador++;
            $palavras_maiores_que_5[] = $lista[$i];
        }
    }

    echo "Total de palavras com mais de 5 caracteres: " . $contador;
    echo "<br>";
    echo "As palvras com mais de 5 caracteres são: " . implode(", ", $palavras_maiores_que_5);
}

    $lista = ["Abacate", "Abacaxi", "Acerola", "Amora", "Banana", "Cacau", "Caju", "Cajá", "Coco", "Maça", "Melância", "Uva", "laranja", "Goiaba"];
    caracteres5($lista);

    ?>

</body>
</html>