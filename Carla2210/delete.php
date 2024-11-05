<?php
    require_once 'conexao.php';

if ($_POST) {
    $id = $_POST['id'];
    $sql = "DELETE from funcionarios WHERE id = {$id}";
    if ($conexao->query($sql) === TRUE) {
        echo "Excluído com sucesso";
    } else {
        echo "Erro: " .$conexao->error;
    }
    $conexao->close();
}
?>