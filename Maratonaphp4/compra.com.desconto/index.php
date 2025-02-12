<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Compra com Desconto</title>
</head>
<body>
    <h2>Compra com Desconto<h2>
        <?php
        function desconto($a, $b){
            return $a * $b;
        }
        
        $resultado = desconto(100, 0.15);
        $valorFinal = 100 - $resultado;
        $preco_formatado = number_format($valorFinal, 2, ',', '.');
        
        echo "Valor com desconto é de : R$ " . $preco_formatado ;

                ?>

    
</body>
</html>