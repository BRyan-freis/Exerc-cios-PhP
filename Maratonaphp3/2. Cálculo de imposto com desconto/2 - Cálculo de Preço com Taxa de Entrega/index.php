<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Preço com taxa de Entrega</title>
</head>
<body>
    <?php
    function calcularPrecoFinal($valorCompra) {
        $taxaEntrega = 0.15;
        $desconto = 0.20;
        $valorComTaxa = $valorCompra + ($valorCompra * $taxaEntrega);

        if ($valorCompra > 1000) {
            $valorFinal = $valorComTaxa - ($valorComTaxa * $desconto);
        } else {
            $valorFinal = $valorComTaxa;
        }

        return $valorFinal;
    }

    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $valorCompra = floatval($_POST["valorCompra"]);
        $valorFinal = calcularPrecoFinal($valorCompra);
        echo "Valor final da compra: R$ " . number_format($valorFinal, 2, ',', '.');
    }
    ?>

    <form method="post" action="">
        <label for="valorCompra">Valor da Compra:</label>
        <input type="text" id="valorCompra" name="valorCompra" required>
        <button type="submit">Calcular</button>
    </form>
</body>
</html>