<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Sistema de tentativas de login</title>
</head>
<body> 
<form method="post">
    <label for="senha">Digite a senha:</label>
    <input type="password" id="senha" name="senha" required>
    <input type="submit" value="Enviar">
</form>

<?php
session_start();  // Inicia a sessão para persistir as tentativas

$senha_correta = "senha123";  // A senha correta que o usuário deve digitar
$limite_tentativas = 3;  // Limite máximo de tentativas

// Inicializa o contador de tentativas, se ainda não existir
if (!isset($_SESSION['tentativas'])) {
    $_SESSION['tentativas'] = 0;
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $senha = $_POST["senha"];
    
    // Inicia o loop de tentativas
    do {
        // Verifica se a senha está correta
        if ($senha == $senha_correta) {
            echo "Acesso concedido!";
            $_SESSION['tentativas'] = 0;  // Reseta as tentativas após sucesso
            break;  // Sai do loop
        } else {
            $_SESSION['tentativas']++;  // Incrementa o contador de tentativas
            echo "Senha incorreta. Tentativa #" . $_SESSION['tentativas'] . "<br>";
            
            // Verifica se atingiu o limite de tentativas
            if ($_SESSION['tentativas'] >= $limite_tentativas) {
                echo "Limite de tentativas excedido!";
                echo "<script>document.querySelector('form').style.display = 'none';</script>"; // Esconde o formulário
                break;  // Sai do loop
            } else {
                echo "Tente novamente.<br>";
                break;  // Permite que o usuário tente novamente
            }
        }
    } while ($_SESSION['tentativas'] < $limite_tentativas);
}
?>