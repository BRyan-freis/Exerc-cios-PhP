<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Conversor</title>
</head>
<body>
   

    <h2>Conversor de Moedas</h2>
    
    <!--Cria um formulário com um campo de texto para o usuário inserir um valor em reais e um botão para enviar o formulário. -->

    <form method="post">
    <label for="valor">Valor em R$</label>
    <input type="number" id="valor" name="valor" step="0.1" required><br><br>
   
    <!--Cria um campo de seleção para o usuário escolher a moeda para conversão.-->
    
    <select name = "moeda" required>
         <option value= "dolar">Dollar</option>
         <option value= "euro">Euro</option>
         <option value= "iene">Iene</option>
         <option value= "won">Won</option>
         <option value= "robux">Robux</option>
     </select>
    
    <!-- Cria um botão para enviar o formulário. -->
    
     <input type="submit" id="enviar" name="enviar" value="Enviar">


    <?php

        //if para verificar se o botão foi pressionado

    if (isset($_POST["enviar"])) {
        $valor = floatval($_POST["valor"]);
        $moeda = $_POST["moeda"];
        $resultado = 0;

       
        // Taxas de câmbio
        $taxas = [
            "dolar" => 5.84,
            "euro" => 6.20,
            "iene" => 0.038,
            "won" => 0.0052,
            "robux" => 0.0747
        ];

        // Conversão baseada na moeda escolhida
        if (array_key_exists($moeda, $taxas)) {
            $resultado = $valor / $taxas[$moeda];
            echo "<h2>" . number_format($resultado, 2, ',', '.') . " " . strtoupper($moeda) . "</h2>";
        } else {
            echo "<h2>Moeda inválida!</h2>";
        }
        /*DOLLAR      ****ERRADO****

    if  ($moeda == "dolar") {
        $resultado = $valor / 5.84;
        echo "<h2> $resultado USD</h2>";}

        //EURO

    elseif ($moeda == "euro") {
        $resultado = $valor / 6.20;
        echo "<h2> $resultado EUR</h2>";}

        //IENE

    elseif ($moeda == "iene") {
        $resultado = $valor / 0.038;
        echo "<h2> $resultado JPY</h2>";}

        //WON

    elseif ($moeda == "won") {
        $resultado = $valor / 0.0052;
        echo "<h2> $resultado KRW </h2>";}

        //ROBUX

    elseif ($moeda == "robux") {
        $resultado = $valor / 0.0035;
        echo "<h2> $resultado RBX </h2>";} */

}
?>
</body>
</html>





























