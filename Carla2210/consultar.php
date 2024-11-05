

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>consulta</title>
<style>
    body{
        text-align: center;
    }
</style>

</head>
<body>

<nav class="navbar navbar-expand-lg navbar-dark bg-dark">
        <a class="navbar-brand" href="#">Navbar</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Alterna navegação">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li class="nav-item active">
              <a class="nav-link" href="index.html">Home <span class="sr-only">(Página atual)</span></a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="cadastrar.html">Cadastrar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="consultar.php">Consultar</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="atualizar.php">Atualizar</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Excluir</a>
              </li>
          </ul>
        </div>
      </nav>

      <br><br>

<table class="table table-hover table-dark">
<thead>
    <tr>
      <th scope="col">nome</th>
      <th scope="col">setor</th>
      <th scope="col">cargo</th>
      <th scope="col">salario</th>
      <th scope="col">Opções</th>
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

    <td>

    <a href='editar.php?id=".$row['id']."'><button type='button' class='btn btn-success'>Alterar</button></a>

    <a href='excluir.html?id=".$row['id']."'><button type='button' class='btn btn-danger'>Excluir</button></a>

    </tr>";
}
?>

</tbody>
</table>

<a href="inserir.php"><button class="btn btn-info">Adicionar</button></a>


</body>
</html>