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

$media = (($_POST['n1'] + $_POST['n2'] + $_POST['n3']) / 3);
$media = (float) $media;

if ($media >= 7) {
    echo ("<h1>  Você foi aprovado!!");
    echo ("<h3> sua media foi $media");  
} else {
    echo ("<h1> Você foi reprovado!!");
    echo ("<h3> sua media foi $media");  
}

?>

</body>

</html>