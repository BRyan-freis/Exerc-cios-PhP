<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Categoria de estudante</title>
</head>
<body>
    <?php 
    $aluna = 3;

    switch (true) {
        case (is_numeric($aluna) && $aluna >= 7 && $aluna <= 10):
            echo "Aprovado";
            break;
        case (is_numeric($aluna) && $aluna >= 5 && $aluna <= 6.9):
            echo "Recuperação";
            break;
        default:
            echo "Reprovado";
        break;
    }
    
    
    ?>
</body>
</html>