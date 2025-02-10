<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Array</title>
</head>
<body>
    <?php 
 $array = array();
 $contadorPares = 0;
 
 for ($i = 0; $i < 10; $i++) {
     $numero = rand(1, 100);
     $array[] = $numero;
     if ($numero % 2 == 0) {
         $contadorPares++;
     }
 }
echo "<pre>";
 print_r($array);
 echo "Total de números pares: " . $contadorPares;
 echo "<pre>";
 

    ?>
</body>
</html>