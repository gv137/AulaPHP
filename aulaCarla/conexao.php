<?php

$localhost = "localhost";
$db = "crud";
$senha = "";
$usuario = "root";
$conexao = new mysqli ($localhost, $usuario, $senha, $db);
if ($conexao->connect_error) {
    die("Erro de conexao : " . $conexao->conect_error);
} else {
    echo "conectado com sucesso";
}

?>