<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
</head>
<body>
    <h1>Login</h1>
    <?php
    // Definindo a senha correta
    $senha_correta = "12345";
    $tentativas = 0;

    // Verifica se o formulário foi enviado
    if ($_SERVER["REQUEST_METHOD"] === "POST") {
        // Captura a senha digitada
        $senha = $_POST["senha"];

        // Verifica se a senha está correta
        if ($senha === $senha_correta) {
            echo "<p>Acesso concedido!</p>";
        } else {
            $tentativas++;
            echo "<p>Senha incorreta. Tentativas restantes: " . (3 - $tentativas) . "</p>";
        }
    }

    // Se o número de tentativas for 3, bloqueia o acesso
    if ($tentativas === 3) {
        echo "<p>Acesso negado. Você excedeu o número de tentativas.</p>";
    } else {
        // Exibe o formulário para tentar novamente
        if ($tentativas < 3) {
            echo '<form method="POST">
                    <label for="senha">Digite a senha:</label>
                    <input type="password" id="senha" name="senha" required>
                    <button type="submit">Enviar</button>
                  </form>';
        }
    }
    ?>
</body>
</html>