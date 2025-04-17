<!DOCTYPE html>
<html lang="pt-br">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="../4. Calculadora/CSS/styles.css">
    <form method="post">

        <title>Calculadora</title>
</head>

<body>

    <div class="video1">
        <video autoplay muted loop id="vid1">
            <source src="../4. Calculadora/VID/CIRCULAR_INTERFACE_HUD.mp4" type="video/mp4">
        </video>
    </div>
    <div class="caixona">
        <div class="caixa">
            <h1>Calculadora Simples</h1>
            <center><input type="number" id="num1" name="num1" required placeholder=" "></center>
            <br>

            <center><select id="op" name="operacao">
                    <option value="soma">➕</option>
                    <option value="subtracao">➖</option>
                    <option value="multiplicacao">✖️</option>
                    <option value="divisao">➗</option>
                </select></center>
            <br>

            <center><input type="number" id="num2" name="num2" required placeholder=" "></center>
            <br>

            <center>
                <input type="submit" id="sub" name="calcular" value="Calcular">
                <input type="reset" id="sub" name="Limpar" value="Limpar">
            </center>
            <br>
            <a href="../1. Home/index.html" class="button">Voltar para a Home</a>
            </form>

            <?php
    
        // Verifica se o botão foi pressionado

        if (isset($_POST["calcular"])) {

            // Pegando valores do formulário

            $num1 = $_POST["num1"];
            $num2 = $_POST["num2"];
            $operacao = $_POST["operacao"];
            $resultado = "";
        
            // Verifica qual operação foi escolhida e faz o cálculo

            if ($operacao == "soma") {
                $resultado = $num1 + $num2;
            
            } elseif ($operacao == "subtracao") {
                $resultado = $num1 - $num2;
            
            } elseif ($operacao == "multiplicacao") {
                $resultado = $num1 * $num2;
            
            } elseif ($operacao == "divisao") {
                if ($num2 != 0) {
                    $resultado = $num1 / $num2;
                
                } else {
                    $resultado = "Erro: divisão por zero!";
                }
            }
        
            // Exibindo o resultado

            echo "<center><h3>$resultado</h3></center>";
        }
       
    ?>
        </div>
    </div>
</body>

</html>