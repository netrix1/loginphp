<?php
require "conexao.php";

$nome = 'netrix';
$email = 'urso.net@gmail.com';
$senha = password_hash('andersom11', PASSWORD_DEFAULT);


$conexao = conexao::getInstance();
$sql = "INSERT INTO tab_usuario(nome, email, senha, status)VALUES('{$nome}', '{$email}', '{$senha}', 'Ativo')";
$stm = $conexao->prepare($sql);
$stm->execute();

?>