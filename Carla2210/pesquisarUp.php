<!DOCTYPE html>
<html lang="pt-br">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
    <title>HOME</title>
</head>

<body>


<?php
    require_once'conexao.php';

    $id=$_POST['id'];

    $sql = ("SELECT * FROM funcionarios where id = '$id'") or die (mysqli_error($conexao));
    $result = $conexao->query($sql);
    if($result->num_rows>0){
        $dados=$result->fetch_assoc();
        $nome=$dados['nome'];
        $setor=$dados['setor'];
        $cargo=$dados['cargo'];
        $salario=$dados['salario'];
        $id=$dados['id'];
    }

?>

</body>
</html>


