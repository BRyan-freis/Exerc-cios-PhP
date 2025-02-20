<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conta Corrente</title>
</head>


<body>

<h3>Conta Corrente</h3>

<?php 

/*
Crie uma classe chamada ContaCorrente com os seguintes atributos:
• numeroConta (String)
• saldo (Float)
Implemente um modificador de acesso para o atributo numeroConta de forma 
que ele seja somente leitura (ou seja, apenas pode ser acessado por métodos 
get). O atributo saldo deve ser alterado apenas por métodos da classe (não deve 
ser modificado diretamente de fora).
Em seguida, crie um objeto dessa classe e:
1. Tente acessar diretamente o numeroConta e o saldo.
2. Alterar o saldo diretamente (isso deve gerar um erro ou ser impossível).
3. Utilize o método de acesso para alterar o saldo de forma controlada e 
mostre o saldo atualizado.
*/


class ContaCorrente{

    public $numeroconta;
    private $saldo;

    public function __construct($numeroconta, $saldo)
    {
        $this->numeroconta = $numeroconta;
        $this->saldo = $saldo;
    }

    public function setnovoSaldo($saldo){
    $this->saldo = $saldo;
}
    public function getSaldo(){
    
        echo "O saldo atualizado da conta é: R$" . number_format($this->saldo, 2,',','.') . ".";
    }
}

$conta1 = new ContaCorrente(135768, 12557);

echo "Número da conta: " . $conta1->numeroconta . "." ;

echo "<br>";

// $conta1->saldo = 500; Tentativa de alterar atributo privado

$conta1->setnovoSaldo(20);

$conta1->getSaldo();


?>

</body>


</html>