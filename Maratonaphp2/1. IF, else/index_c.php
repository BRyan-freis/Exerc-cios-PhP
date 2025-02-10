<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php 

    // Condicional Elseif
    $idadepessoa = 20;

    if ($idadepessoa >= 16 && $idadepessoa <= 17) {
        echo "Você pode Votar, OPCIONAL";
    } elseif ($idadepessoa >= 18 ) {
        echo "Você tem que Votar, OBRIGATÓRIO"; 
    }else {
        echo "Você não pode votar ";
    }
    
    ?>
</body>
</html>