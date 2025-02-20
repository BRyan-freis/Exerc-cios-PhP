<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Produto</title>
</head>

<h2 style="color: brown;">Classe Produto</h2>

<body>

<?php 


/*

Crie uma classe chamada Produto com os seguintes atributos:
• nome (String)
• preco (Float)
• quantidade (Inteiro)
1. Crie um construtor que inicialize os atributos com valores passados como 
parâmetros.
2. Crie um método chamado desconto() que receba um valor de desconto em 
percentual (por exemplo, 10 para 10%) e aplique o desconto ao preço do 
produto. Esse método deve retornar o novo preço com o desconto 
aplicado.
3. Crie um destruidor que imprima a mensagem "Produto destruído" quando o 
objeto for destruído.
4. Ao final do código, crie um objeto da classe Produto, aplique um desconto 
usando o método desconto(), imprima o novo preço do produto e, ao final 
do código, verifique se o destruidor é chamado corretamente.

*/

class Produto{
    public $nome;
    public $preco;
    public $quantidade;

public function __construct($nome, $preco, $quantidade)
{ 
    $this->nome = $nome;
    $this->preco = $preco;
    $this->quantidade = $quantidade;
}

public function Desconto($pdesc){

echo "O produto:<b>" . $this->nome . "</b>, com desconto de " . $pdesc . " % = R$"   . number_format($this->preco - ($this->preco * ($pdesc/100)),2,',','.') . "<br>";

}

public function __destruct()
{
    echo "Produto destruído!"; 
}   

}

$produto1 = new Produto("Televisão", 2500, "1" );
$produto1->Desconto(30);





?>
    
</body>


</html>