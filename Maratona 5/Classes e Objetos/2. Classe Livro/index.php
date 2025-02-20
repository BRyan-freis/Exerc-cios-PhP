<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Livro</title>
</head>

<h2>Classe livros</h2>
 
    <?php
 
    /*
    Crie uma classe chamada Livro com os seguintes atributos:
    • titulo (String)
    • autor (String)
    • anoPublicacao (Inteiro)
    1. Crie um método chamado exibirInformacoes() que imprima o título, autor e
    ano de publicação do livro.
    2. Em seguida, crie três objetos da classe Livro com dados diferentes e
    chame o método exibirInformacoes() para cada objeto.
    */
   
    class Livro {
        public $titulo;
        public $autor;
        public $anopublicado;
 
        public function exibirInformacoes() {
            echo "Título: " . $this ->titulo . "<br>";
            echo "Autor: " . $this ->autor . "<br>";
            echo "Ano de publicação: " . $this ->anopublicado . "<br>";
        }
    }
 
    $livro1 = new Livro();
    $livro1->titulo = "+ Mais esperto que o Diabo";
    $livro1->autor = "Napoleon Hill";
    $livro1->anopublicado = 2011;
 
    $livro2= new Livro();
    $livro2->titulo = "Anticâncer";
    $livro2->autor = "David Servan-Schreiber";
    $livro2->anopublicado = 2007;
 
    $livro3 = new Livro();
    $livro3->titulo = "Memórias Póstumas de Brás Cubas";
    $livro3->autor = "Machado de Assis";
    $livro3-> anopublicado = 1881;
 
    $livro1-> exibirInformacoes();
    echo "<br>";
    $livro2->exibirInformacoes();
    echo "<br>";
    $livro3->exibirInformacoes();
 
    ?>

</body>

</html>