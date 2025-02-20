<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Aluno</title>
</head>

<body>
    
<H2>Classe Aluno</H2>

    <?php
 
    /*
    Crie uma classe chamada Aluno que tenha os seguintes atributos:
    • nome (String)
    • matricula (Inteiro)
    • curso (String)
     - Implemente um construtor que inicializa os atributos e um destruidor que imprime uma mensagem dizendo "Aluno [nome] removido".
     - Em seguida, crie um objeto dessa classe e destrua o objeto no final, verificando a mensagem de destruição.
     */
 
 
    class Alunos {
        public $nome;
        public $matriculas;
        public $curso;
   
        public function __construct($nome, $matriculas, $curso) {
            $this->nome = $nome;
            $this->matriculas = $matriculas;
            $this->curso = $curso;
           
       
        }
 
        public function __destruct() {
            echo "O Aluno " . $this-> nome . ", com a matrícula ". $this->matriculas . " foi removido. <br>";
        }
 
    }
   
    $aluno1 = new Alunos("Paulo",1654568, "Tecnico em T.I" );
    
    ?>
   
</body>
</html>