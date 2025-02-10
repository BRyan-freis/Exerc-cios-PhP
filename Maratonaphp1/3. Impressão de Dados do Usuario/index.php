<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Impressão de dados de Usuário</title>
</head>
<body>
    <h2>Impressão de dados de Usuário</h2>
    <form method="post">
        // Cria um formulário com campos de texto para o usuário inserir seu nome, idade e localização.
        <label for="nome">Nome:</label>
        <input type="text" id="nome" name="nome" required><br><br>
        <label for="idade">Idade:</label>
        <input type="number" id="idade" name="idade" required><br><br>
        <label for="localizacao">Localização:</label>
        <input type="text" id="localizacao" name="localizacao" required><br><br>
        <input type="submit" name="enviar" value="Enviar">
    </form>
    
        // Este php será responsável por exibir os valores dos campos do formulário na página web após o usuário clicar no botão "Enviar".

    <?php 
    if (isset($_POST["enviar"])) {
    
        // Pegando os valores dos campos do formulário e exibindo na tela.
        $nome = $_POST["nome"];
        $idade = $_POST["idade"];
        $localizacao = $_POST["localizacao"];
    
        // Exibe os valores dos campos do formulário.
        echo "<div class='result'>Olá, eu sou o $nome, tenho $idade anos e moro em $localizacao</div>";
    }
    ?>
</body>
</html>