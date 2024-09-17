<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Switch case</title>

    <style>
        h1{
          text-align: center;  
          color: black;
        }

        h3{
          text-align: center;  
          color: orange;
        }
    </style>

</head>

<body style="background-color: cornsilk;">
    
<?php

$sorteio = rand(0,5);

echo ("<h1> O número sorteado foi $sorteio");

switch ($sorteio) {
    case '0':
        echo ("<h3> Você perdeu a vez :(");
        break;
    case '1':
        echo ("<h3> Avance 1 casa");
        break;
    case '2':
        echo ("<h3> Você ganhou um bônus. Avance 3 casas!");
        break;
        
    default:
        echo ("<h3> Jogue novamente");
        break;
}


?>

<br><br><br><br>
<center><a class="btn btn-primary" href="switch.php" role="button">Jogue novamente</a></center>

</body>

</html>