<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Exercício 1</title>

    <style>
        h1{
          text-align: center;  
          color: black;
        }
    </style>

</head>

<body>
    
<?php

$v1 = ($_POST['n1']);
$v2 = ($_POST['n2']);
$opc = ($_POST['opcao']);

if ($v1 > $v2) {
    
    echo ("O valor 1 é maior que o valor 2");  
} else {
    
    echo ("O valor 2 é maior que o valor 1");
}

if ($opc == "sim") {
    
    echo ("<h1> Sim foi selecionado");  
}

?>

</body>

</html>