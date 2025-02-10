<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Funcionários</title>
</head>
<body>
<?php
// Variáveis de exemplo
$funcionario_tem_permissao = false;  // Indica se o funcionário tem permissão
$cadastro_ativo = false;             // Indica se o cadastro do funcionário está ativo
$funcionario_administrador = true; // Indica se o funcionário é um administrador

// Lógica de autenticação
$acesso_permitido = ($funcionario_tem_permissao && $cadastro_ativo) || $funcionario_administrador;

// Verificar se o acesso é permitido
if ($acesso_permitido) {
    echo "Acesso permitido";
} else {
    echo "Acesso negado";
}
?>

</body>
</html>