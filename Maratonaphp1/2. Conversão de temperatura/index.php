<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Conversão de Temperatura</title>
    </head>
    <body>
    <h2>Conversão de Temperatura</h2>

    <form method="post">
    <input type="number" name="num1" required placeholder=" ">
    <select name="convercao">
        <option value="converter">🌡️</option>
    </select>
        <input type="submit" name="calcular" value="Calcular">
    </form>
       
       
       
       
       <?php
    // Constante
    const VALOR = 1.8;
    // Verifica se o botão foi pressionado
    if (isset($_POST["calcular"])) {
    // Pegando valores do formulário
    $num1 = $_POST["num1"];
    $operacao = $_POST["convercao"];
    $resultado = ($num1 * VALOR) + 32;

        //Exibindo o resultado   
        echo "<h2> $resultado ºF</h2>"; 
    }
    ?>
    
</body>
</html