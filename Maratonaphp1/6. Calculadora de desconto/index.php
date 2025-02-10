<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    
    <title>Calculadora de Desconto</title>
</head>
<body>
    

    <h2>Calculadora de Desconto</h2>

    <form method="post">
        
        <!-- (<label> e <input>) Cria um formulário com campos de texto para o usuário inserir o preço original e o desconto. -->
         <label for="preco">Preço Original:</label>
         <input type="number" id="preco" name="preco" step="0.01" required><br><br>
        <label for="desconto">Desconto (%):</label>
        <input type="number" id="desconto" name="desconto" step="0.01" required><br><br>
        <input type="submit" value="Calcular">
    </form>

    <?php
    //if para verificar se o botão foi pressionado, e se sim, calcular o desconto e exibir o resultado.
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $preco = $_POST["preco"];
        $desconto = $_POST["desconto"];

    //Calcula o valor do desconto e o preço final.
        $valor_desconto = ($preco * $desconto) / 100;
        $preco_final = $preco - $valor_desconto;

    //Exibe o resultado na tela.
        echo "<h3>Resultado:</h3>";
        echo "Preço Original: R$ " . number_format($preco, 2, ',', '.') . "<br>";
        echo "Desconto: R$ " . number_format($valor_desconto, 2, ',', '.') . "<br>";
        echo "Preço com Desconto: R$ " . number_format($preco_final, 2, ',', '.');
    }
    ?>
</body>
</html>