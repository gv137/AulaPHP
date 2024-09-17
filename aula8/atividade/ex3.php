<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Exercício 3</title>

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
$v3 = ($_POST['n3']);

if ($v1 > $v2 and $v1 > $v3 and $v2 > $v3) {
    
    echo ("<h1> $v3 , $v2 , $v1");  

} elseif ($v1 > $v3 and $v1 > $v2 and $v3 > $v2) {

    echo ("<h1> $v2 , $v3 , $v1 ");

} elseif ($v2 > $v1 and  $v2 > $v3 and $v1 > $v3) {

    echo ("<h1> $v3 , $v1 , $v2 ");

} elseif ($v2 > $v3 and $v2 > $v1 and $v3 > $v1) {

    echo ("<h1> $v1 , $v3 , $v2 ");

} elseif ($v3 > $v2 and $v3 > $v1 and $v1 > $v2) {

    echo ("<h1> $v2 , $v1 , $v3 ");

} elseif ($v3 > $v2 and $v3 > $v1 and $v2 > $v1) {

    echo ("<h1> $v1 , $v2 , $v3 ");
}

?>

</body>

</html>