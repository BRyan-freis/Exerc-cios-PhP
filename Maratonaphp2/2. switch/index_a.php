<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> DIA DA SEMANA</title>
</head>
<body>
    <?php 
    $number = 1; 

    switch ($number) {
        case 1 : 
            echo "Hoje é Domingo!";
        break;
        case 2:
            echo "Hoje é segunda-feira";
        break;
        case 3:
            echo "Hoje é terça-feira";
        break;
        case 4:
            echo "Hoje é quarta-feira";
        break;
        case 5: 
            echo "Hoje é quinta-feira";
        break;
        case 6: 
            echo "Hoje é sexta-feira, sextou meu nobre. <br>";
        case 7:
            echo "Hoje é sabado";
        break;
        default:
            echo "Que dia é hoje? "; 
        break;
    }


    ?>
</body>
</html>