<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>consulta</title>
<style>
    body{
        text-align='center'
    }
</style>

</head>
<body>
    

<table classs="table table-hover">
<thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">setor</th>
      <th scope="col">cargo</th>
      <th scope="col">salario</th>
    </tr>
</thead>

<tbody>
<?php
require_once 'conexao.php';
$conexao = mysqli_connect("localhost", "root", "");
$banco = mysqli_select_db($conexao, "crud1");
$sql = mysqli_query($conexao, "SELECT * FROM funcionarios") or die(mysqli_error($conexao));


while ($row = mysqli_fetch_assoc($sql)) {
    echo "<tr>
    <td>".$row['nome']."</td>
    <td>".$row['setor']."</td>
    <td>".$row['cargo']."</td>
    <td>".$row['salario']."</td>
    </tr>";
}
?>

</tbody>


</body>
</html>