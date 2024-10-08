<?php
require_once 'conexao.php';

if ($_POST) {
    $nome = $_POST['nome'];
    $setor = $_POST['setor'];
    $cargo = $_POST['cargo'];
    $salario = $_POST['salario'];
    $sql = "INSERT INTO funcionarios (nome, setor, cargo, salario) VALUES ('$nome', '$setor', '$cargo', '$salario')";
    if ($conexao->query($sql)) {
        echo "cadastrado com sucesso!";
    } else {
        echo "Erro ", $sql , ' ', $conexao->connect_error;
    }
    $conexao->close();
}


?>