<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>Atualizar</title>
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

<form class="form-inline" method="post" action="pesquisarUp.php">
    <div class="form-group mx-sm-3 mb-2">
        <label>Digite a matrícula do funcionário: </label>
        <input type="text" class="form-control" name="id">
    </div>
    <button type="submit" class="btn btn-primary mb-2">Pesquisar</button>
</form>

</body>


</html>


