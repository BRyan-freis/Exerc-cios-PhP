<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>SAUDAÇÃO COM CALCULADORA</title>
</head>
<body>
    <H2>
        <?php
        //Saudação simples com concatenação e interpolação
        $nome1 = "Fred"; 
        $nome1 .= " Santos"; 
        
        
        $frase1 = " Olá, Seja Bem-Vindo ao nosso site, $nome1 ";

        
        echo "$frase1";
        
        echo "<br>", "<br>";
        echo "<br>", "<br>";
        echo "Você ja pode começar a usar a nossa calculadora✨✨";

         ?>

    </H2>

    <h2>Calculadora simples</h2>
    <!DOCTYPE html>
<html>
<head>
<body>

<form method="post">
    <input type="number" name="num1" required placeholder=" ">
    
    <select name="operacao">
        <option value="soma">➕</option>
        <option value="subtracao">➖</option>
        <option value="multiplicacao">✖️</option>
        <option value="divisao">➗</option>
    </select>

    <input type="number" name="num2" required placeholder=" ">
    
    <input type="submit" name="calcular" value="Calcular">
</form>

<?php
// Verifica se o botão foi pressionado
if (isset($_POST["calcular"])) {
    // Pegando valores do formulário
    $num1 = $_POST["num1"];
    $num2 = $_POST["num2"];
    $operacao = $_POST["operacao"];
    $resultado = "";

    // Verifica qual operação foi escolhida e faz o cálculo
    if ($operacao == "soma") {
        $resultado = $num1 + $num2;
    } elseif ($operacao == "subtracao") {
        $resultado = $num1 - $num2;
    } elseif ($operacao == "multiplicacao") {
        $resultado = $num1 * $num2;
    } elseif ($operacao == "divisao") {
        if ($num2 != 0) {
            $resultado = $num1 / $num2;
        } else {
            $resultado = "Erro: divisão por zero!";
        }
    }

    // Exibindo o resultado
    echo "<h3>Resultado: $resultado</h3>";
}
?>

</body>
</html>

</body>
</html>