<?php
    require_once 'conexao.php';
    if ($_GET['id']) {
        $id = $_GET['id'];
        $sql = "SELECT * FROM funcionarios WHERE id = {$id}";
        $result = $conexao->query($sql);
        $data = $result->fetch_assoc();
        $conexao->close();
    }
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
    <title>Alterar funcionários</title>
</head>
<body>
    <fieldset>
        <legend>Alterar funcionarios</legend>
        <form action="update.php" method="post">

        <table class="table">
    <tr>
        <th>Nome</th>
        <td><input type="text" name="nome" placeholder="Nome" value="<?php echo $data['nome']?>"/></td> 
    </tr>

    <tr>
        <th>Setor</th>
        <td><input type="text" name="setor" placeholder="setor" value="<?php echo $data['setor']?>"/></td> 
    </tr>

    <tr>
        <th>Cargo</th>
        <td><input type="text" name="cargo" placeholder="cargo" value="<?php echo $data['cargo']?>"/></td> 
    </tr>  
    
    <tr>
        <th>salario</th>
        <td><input type="text" name="salario" placeholder="salario" value="<?php echo $data['salario']?>"/></td> 
    </tr>  
    
    <tr>
        <input type="hidden" name="id" value="<?php echo $data['id']?>" />

        <td><button type="submit" class="btn btn-info">Salvar Alterações</button></td>
    </tr>

    </table>

    </form>

    </fieldset>
</body>
</html>