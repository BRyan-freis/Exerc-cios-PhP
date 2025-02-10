<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classificacao de nota</title>
</head>
<body>
    <?php 
    $alunaA = 10;
    $alunoB = 9;
    $alunoC = 8;
    $alunoD = 4;

    if ($alunoB <= 10 && $alunoB >= 9){
        echo "Aprovado com Distinção!";
    }elseif ($alunoB <= 8.9 && $alunoB >= 7){
        echo "Aprovado!";
    }elseif ($alunoB <= 6.9 && $alunoB >= 5){
        echo "Recuperação!";
    }else {
        echo "Reprovado!";
    }
    
    
    
    
    
    
    ?>
</body>
</html>