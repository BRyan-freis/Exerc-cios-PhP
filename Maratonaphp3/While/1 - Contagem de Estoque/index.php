<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body> 
    <?php 
    $estoque = 100;
    while ($estoque > 0) {
    if ($estoque > 0) {
    $estoque--;
        echo "Produtos vendidos unidades restantes: " . $estoque . "\n";
        echo "<br>";
    } else {
        echo "Estoque esotado. \n";
    }
}
    echo "Todas as unidades foram vendidas. Estoque final: " . $estoque . "\n" ; 

    ?>
</body>
</html>