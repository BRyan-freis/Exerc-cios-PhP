<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Roupa</title>
</head>


<body>

<h2>Loja de roupas</h2>

    <?php
    
    /*
    Crie uma classe chamada ProdutoRoupa com os seguintes atributos:
    • nome (String)
    • codigoProduto (String)
    • preco (Float)
    Implemente o modificador de acesso private para o atributo codigoProduto e crie
    métodos get e set para permitir acessar e alterar o código do produto, mas somente de forma controlada (por exemplo, o código do produto deve ser validado antes de ser alterado). O atributo nome deve ser público e acessado diretamente.
    Depois, crie um objeto dessa classe e:
    1. Tente acessar diretamente o codigoProduto (isso não deve ser possível).
    2. Use o método set para alterar o codigoProduto de forma controlada e o
    método get para acessá-lo.
    */
 
    class Produtroupa{
        public $nome;
        private $codigoProduto;
        public $preco;
 
        public function __construct($nome, $codigoProduto, $preco){
            $this-> nome = $nome;
            $this -> codigoProduto = $codigoProduto;
            $this-> preco = $preco = "R$" . number_format($preco, 2, ',', '.');
        }
 
        public function exibirnome(){
            echo "Nome: " . $this->nome . "<br>";
        }
 
        private function exibircodigoProduto(){
            echo "Codigo de produto: " . $this->codigoProduto . "<br>";
        }
 
        public function exibirpreco(){
            echo "Preço: " . $this-> preco . "<br>";
        }
 
        public function exibirdetalhes(){
            $this->exibirnome();
            $this-> exibircodigoProduto();
            $this-> exibirpreco();
        }
 
        public function getcodigoProduto(){
            return $this->codigoProduto;
        }
 
        public function setcodigoProduto($codigoProduto){
            $this->codigoProduto = $codigoProduto;
        }
    }
 
    $produto1 = new Produtroupa('Camiseta', "65446-AB", preco: 45.99 );
 
    //Erro de acesso no Código.
    //$produto1->exibircodigoProduto();
 
    //Alterar o código
    $produto1->setcodigoProduto("101010");
 
    //Exibir o código diretamente.
    //echo "Código de Produto: " . $produto1-> getcodigoProduto();
 
    $produto1-> exibirdetalhes();

    ?>

</body>
    
</body>


</html>