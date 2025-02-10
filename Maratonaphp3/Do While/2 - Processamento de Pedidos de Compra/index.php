<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
<h2>LOJAS DE PEDIDOS</h2>
    <?php 
    
    $numeros_de_pedido = 20;
    $p = 1;

    do {
        echo "Pedido $p\n: Pago com sucesso. <br>";
        $p++;
        }    while ($p <= $numeros_de_pedido);
        echo "Todos os pedidos foram comprados com sucesso <br>";
        echo "Obrigado por comprar na nossa loja <br>";


    
     

    
    ?>
    
</body>
</html>