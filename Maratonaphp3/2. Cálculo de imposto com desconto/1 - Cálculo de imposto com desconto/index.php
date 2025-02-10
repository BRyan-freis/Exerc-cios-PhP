<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cálculo de Imposto com Desconto</title>
</head>
<body>
    <h1>Cálculo de Imposto com Desconto!</h1>
    <h2>
    <?php 
    $VO = 501;  // Valor original
    echo "O valor original é R$" . number_format($VO, 2, ',', '.') . ". ";
    echo "<br>";
    
    $TD = 0.1;  // Taxa de desconto de 10%
    $IP = 0.08; // Taxa de imposto de 8%

    $DESCONTO = $VO * $TD;  // Valor do Desconto
    $IMPOSTO = $VO * $IP;   // Valor do Imposto
    $VCD = ($VO - $DESCONTO) + $IMPOSTO;  // Valor com Desconto e Imposto

    if ($VO > 500) {
        echo "Você tem 10% de desconto.";
        echo "<br>";
        echo "O valor do desconto é R$" . number_format($DESCONTO, 2, ',', '.') . ". ";
        echo "<br>";
        echo "Total de Impostos = R$" . number_format($IMPOSTO, 2, ',', '.') . ".";
        echo "<br>";
        echo "Sua compra com o desconto e imposto, ficou no valor de R$" . number_format($VCD, 2, ',', '.') . ".";
        echo "<br>";
    } else {
        echo "Não há desconto para esse valor.";
    }
    ?>
    </h2>
</body>
</html>

