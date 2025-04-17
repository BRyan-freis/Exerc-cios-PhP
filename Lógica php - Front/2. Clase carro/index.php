<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../2. Clase carro/CSS/styles.css">
    <title>Carros</title>
</head>

<body>
    <h1>Classe de Carros</h1>
    <br>
    <div class="conteiner">
        <div class="box">
            <form action="index.php" method="get">
                <input type="text" name="termo" placeholder="Digite o nome do item">
                <button type="submit">Buscar</button>
            </form>
        </div>
    </div>

    <a href="../1. Home/index.html" class="button">Voltar para a Home</a>
    <br>
    <?php
        
        require_once 'index.php';

        class Carro{
            
        public $modelo;
        public $ano;
        public $cor;
        public $preco;
            
        public function __construct($modelo, $ano, $cor, $preco){
            $this->modelo = $modelo;
            $this->ano = $ano;
            $this->cor = $cor;
            $this->preco = $preco;
        }
        public function __toString() {
            return "Modelo: $this->modelo<br>Ano: $this->ano<br> Cor: $this->cor<br>Preço: R$" . number_format($this->preco, 2, ',', '.');
        }
    } 
    
        $Carro = [
        new Carro ("Volkswagen Jetta", 2024, "Red", 239390),
        new Carro ("Nissan skyline R34", 2013, "Blue", 400390),
        new Carro ("Ferrari SF90 Stradale/Spider", 2019, "white", 750000),
        new Carro ("Mercedes-AMG S63", 2017, "Gray", 325500),
        new Carro ("Chevrolet Impala-67", 1967, "Black", 254631),

    
        ];


        if (isset($_GET['termo'])) {
        $termo = strtolower(trim($_GET['termo']));
        $resultado = null;

   
        foreach ($Carro as $Carro) {
            if (strpos(strtolower($Carro->modelo), $termo) !== false) {
                $resultado = $Carro;
                break; 
            }
        }

        if ($resultado) {
            
        } else {
            echo "<h2>Nenhum Carro encontrado com o nome: $termo </h2>";
        }
    }

    ?>

    <div class="conteiner">
        <div class="box">
            <?php
            if (isset($resultado)) {
                echo "<h2>Carro encontrado:</h2>";
                echo $resultado; 
            }            
            ?>
        </div>

    </div>

</body>

</html>