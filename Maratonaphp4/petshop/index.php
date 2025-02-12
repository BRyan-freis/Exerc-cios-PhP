<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Petshop</title>
</head>
<body>
    <h2>Petshop<h2>

    <?php
    $dados = [
        "nome" => "Dudu",
        "idade" => "7",
        "cor" => "preto e marrom",
    ];

    foreach($dados as $juntos){
        echo $juntos . "<br>";
    }
    
    ?>


</body>
</html>