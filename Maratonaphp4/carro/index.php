<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Peças de Carro</title>
</head>
<body>
    <h2>Peças de Carro<h2>
        <?php
        $pecasCarro = ["Para-brisa", "Para-choque", "Pneu", "Roda", "Volante", "Capô", "Banco", "Retrovisor", "Capa de Banco", "Lanterna"];
        
        foreach($pecasCarro as $todas){
            echo $todas . "<br>";
        }
                
        ?>


    
</body>
</html>