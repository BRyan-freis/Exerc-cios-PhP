<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Classe Conta Corrente</title>
    <form action="" method="post">
        <link rel="stylesheet" href="../3. Classe conta/CSS/styles.css">
</head>

<body>
    <div class="caixona">
        <div class="caixa">

            <center>
                <h1>Cadastro de Conta Corrente</h1>
            </center>

            <!-- Formulário para entrada de dados -->
            <form action="processa_conta.php" method="post">
                <center><label for="numeroconta">Número da Conta:</label></center>
                <center><input type="text" name="numeroconta" id="num1" required><br></center>

                <center><label for="saldo">Saldo:</label></center>
                <center><input type="text" name="saldo" id="num2" required><br></center>

                <center><input type="submit" id="sub" value="Enviar"></center>
                <br>
                <center><a href="../1. Home/index.html" class="button">Voltar para a Home</a></center>
                <br>
            </form>


            <?php

    class ContaCorrente {
    private string $numeroConta;
    private float $saldo;

    public function __construct(string $numeroConta, float $saldo) {
        $this->numeroConta = $numeroConta;
        $this->saldo = $saldo;
    }

    // Método para obter o número da conta (somente leitura)
    public function getNumeroConta(): string {
        return $this->numeroConta;
    }

    // Método para obter o saldo
    public function getSaldo(): float {
        return $this->saldo;
    }

    // Método para adicionar dinheiro à conta
    public function depositar(float $valor): void {
        if ($valor > 0) {
            $this->saldo += $valor;
        }
    }

    // Método para sacar dinheiro da conta
    public function sacar(float $valor): void {
        if ($valor > 0 && $valor <= $this->saldo) {
            $this->saldo -= $valor;
        }
    }
}

// Verificando se o formulário foi enviado via método POST
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        $numeroConta = $_POST["numeroconta"];
        $saldo = $_POST["saldo"];

    // Garantindo que saldo seja um número válido
    if (!is_numeric($saldo)) {
        echo "Erro: O saldo deve ser um número válido!";
        exit;
    }

    // Criando uma instância da classe ContaCorrente
    $conta1 = new ContaCorrente($numeroConta, (float) $saldo);
    echo "<div class=\"caixinha\">";
    // Exibindo os dados da conta criada
    echo "<center>Número da conta: " . $conta1->getNumeroConta() . "<br></center>";
    echo "<center>Saldo inicial: R$ " . $conta1->getSaldo() . "<br></center>";
    echo "</div>";

    // Testando uma tentativa de alteração direta no saldo (o que é impossível!)
    //$conta1->saldo = 5000; // Isso gerará um erro, pois o saldo é privado
    echo "<div class=\"final\">";
    echo "<center><br>O saldo só pode ser modificado através dos métodos da classe.</center>";
    echo "</div>";
}

    ?>
        </div>
    </div>
</body>

</html>