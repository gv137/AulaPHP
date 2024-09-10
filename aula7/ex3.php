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
    <style>
        h3{
          text-align: center;  
          color: orange;
        }
    </style>



</head>

<body>
    
<?php

$tipo = ($_POST['opcao']);
$combustivel = ($_POST['n1']);
$gasolina = 6.50;
$etanol = 5.50;


if ($tipo == "gasolina") {

    echo ("<h1>Você abasteceu com gasolina");

    if ($combustivel > 20) {

        $valor = (($combustivel * $gasolina) * 0.93 );
        
    } else{

        $valor = (($combustivel * $gasolina) * 0.96);

    }

    echo ("<h3> O valor total é igual a $valor reais");
 
} else {

    echo ("<h1> Você abasteceu com etanol");

    if ($combustivel > 20) {

        $valor = (($combustivel * $etanol) * 0.95 );
        
    } else{

        $valor = (($combustivel * $etanol) * 0.98 );

    }

    echo ("<h3> O valor total é igual a $valor reais"); 
}

?>

</body>

</html>