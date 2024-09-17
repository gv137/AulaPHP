<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Exercício 2</title>

    <style>
        h1{
          text-align: center;  
          color: black;
        }
    </style>

</head>

<body style="background-color: rgb(255,255,240);">
    
<?php

$v1 = ($_POST['n1']);
$v2 = ($_POST['n2']);

if (($v1 > $v2) and ($v1 <= ($v2 + 10))) {
    
    echo ("<h1> Você está acima do limite. Irá pagar 150 reais ");

} elseif (($v1 >= ($v2 + 11)) and ($v1 <= ($v2 + 30))) {

    echo ("<h1> Você está acima do limite. Irá pagar 200 reais");
}elseif (($v1 > ($v2 + 30))) {
    
    echo ("<h1> Antes de morrer nessa velocidade, terá que pagar 300 reais");
}else {
    echo ("<h1> Você está na velocidade normal!");
}

?>

</body>

</html>