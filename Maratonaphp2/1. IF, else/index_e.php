<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Preço do ingresso</title>
</head>
<body>
    <?php 
    
    $horario = 24;

    if ($horario >= 10 && $horario <= 12){
        echo "Preço do ingresso: R$ 10,00";
    } else if ($horario > 12 && $horario <= 17){
        echo "Preço do ingresso: R$ 20,00";
    } else if ($horario > 17 && $horario <= 22){
        echo "Preço do ingresso: R$ 30,00";
    } else {
        echo "Preço do ingresso: R$ 40,00";
    }
      


    
    
    
    ?>
    
</body>
</html>