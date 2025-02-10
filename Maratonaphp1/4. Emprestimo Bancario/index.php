<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    
    <title>Emprestimo Bancario</title>

    
</head>
<body>
    
    <h2>Emprestimo Bancario</h2>

    <!--Cria um formulário com campos de texto para o usuário inserir o valor do emprestimo, o número de parcelas e a taxa de juros. -->
    <form method="post">
    <label for="valor_emprestimo">Valor do Emprestimo:</label>
    <input type="number" id="valor_emprestimo" name="valor_emprestimo" required><br><br>
    <label for="num_parcelas">Número de Parcelas:</label>
    <input type="number" id="num_parcelas" name="num_parcelas" required><br><br>
    <label for="taxa_juros">Taxa de Juros (% ao mês):</label>
    <input type="number" id="taxa_juros" name="taxa_juros" step="0.01" required><br><br>
    <button type="submit">Calcular</button><br><br>
</form>

<?php 

    //if para verificar se o botão foi pressionado, e se sim, calcular o valor do emprestimo, juros, valor total e valor da parcela.
    if(isset($_POST['valor_emprestimo']) && isset($_POST['num_parcelas']) && isset($_POST['taxa_juros'])){

    //Pegando os valores dos campos do formulário e exibindo na tela.
        $valor_emprestimo = $_POST['valor_emprestimo'];
        $num_parcelas = $_POST['num_parcelas'];
        $taxa_juros = $_POST['taxa_juros'] /100 + 1;
        
        
    //Calcula o valor do emprestimo, juros, valor total e valor da parcela.
        $juros = $valor_emprestimo * ($taxa_juros / 100  + 1);
        $valor_total = $valor_emprestimo + $juros;
        $valor_parcela = $valor_total / $num_parcelas;

    //Exibe o resultado na tela.
        echo "Valor do Emprestimo: R$ $valor_emprestimo<br>";
        echo "Número de Parcelas: $num_parcelas<br>";
        echo "Taxa de Juros: $taxa_juros% ao mês<br>";
        echo "Juros: R$ $juros<br>";
        echo "Valor Total: R$ $valor_total<br>";
        echo "Valor da Parcela: R$ $valor_parcela<br>";
    }

?>
</body>
</html>