<?php
    require_once 'conexao.php';
    if ($_POST) {
        $nome = $_POST['nome'];
        $setor = $_POST['setor'];
        $cargo = $_POST['cargo'];
        $salario = $_POST['salario'];
        $id = $_POST['id'];
        $sql = "UPDATE funcionarios SET nome = '$nome', setor ='$setor', cargo ='$cargo', salario ='$salario' WHERE id = {$id}"; 

        if ($conexao->query($sql) === TRUE) {
            echo "<p>Atualizado com Sucesso</p>";
        }else {
            echo "Erro:".$conexao->error;
        }
        $conexao->close();
    }
?>