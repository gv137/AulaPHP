<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Excluir funcionário</title>
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
                <a class="nav-link" href="excluir.html">Excluir</a>
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
    </tr>
</thead>

<tbody>

      <?php
    require_once 'conexao.php';

    $id=$_POST['id'];

    $sql = ("SELECT * FROM funcionarios where id = '$id'") or die (mysqli_error($conexao));
    $result = $conexao->query($sql);
    if($result->num_rows>0){
        $dados= $result->fetch_assoc();
        $nome= $dados['nome'];
        $setor= $dados['setor'];
        $cargo= $dados['cargo'];
        $salario= $dados['salario'];
        $id= $dados['id'];
            echo "<tr>
            <td>".$dados['nome']."</td>
            <td>".$dados['setor']."</td>
            <td>".$dados['cargo']."</td>
            <td>".$dados['salario']."</td>
        
            <td>";
    }

?>

</tbody>
</table>

    <h3>Tem certeza que deseja excluir esse funcionário ?</h3>

    <form class="form-inline" method="post" action="delete.php">

    <input type="hidden" name="id" value="<?php echo $data['id']?>" />

    <button type="submit" class="btn btn-danger">Excluir</button>

    <a href="index.html"><button type="button" class="btn btn-success">Voltar</button></a>

    </form>
    
</body>
</html>
