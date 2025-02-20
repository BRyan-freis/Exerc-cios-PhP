<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Carro</title>
</head>

<h2 style="color: Brown;">Classe Carro</h2>

<body>
   


<?php 

/* 

Crie uma classe chamada Carro que tenha os seguintes atributos:
• modelo (String)
• ano (Inteiro)
• cor (String)
• preco (Float)
Crie um método que imprima uma mensagem com todas as informações do carro 
(modelo, ano, cor e preço) de forma legível. Depois, crie um objeto dessa classe e 
chame o método para imprimir as informações.

*/

class Carro{

public $modelo;
public $ano;
public $cor;
public $preco;

public function dadosCarro(){
echo "<b>Modelo:</b> " . $this->modelo . "; <br>". "<b>Ano:</b> " .  $this->ano . "; <br>" . "<b>Cor:</b> " .  $this->cor . "; <br>" . "<b>Preço: R$ </b>" .$this->preco . ".";
}

}

$carro1 = new Carro;
$carro1->modelo = "Volkswagen Jetta";
$carro1->ano = 2024;
$carro1->cor =  "vermelho";
$carro1->preco = number_format(239390,2,',','.');
$carro1->dadosCarro();



?>


</body>

</html>