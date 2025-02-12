<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Números Primos</title>
</head>
<body>
    <h2>Números Primos<h2>
    <?php function ehPrimo($numero) {
    if ($numero <= 1) {
        return false;
    }
    for ($i = 2; $i < $numero; $i++) {
        if ($numero % $i == 0) {
            return false;
        }
    }
    return true;}
    //Exemplo de uso 
    $numero = 42; if (ehPrimo($numero)) {
    echo "$numero é um número primo.";} else {
    echo "$numero não é um número primo.";}

    
    ?> 
    
    
</body>
</html>