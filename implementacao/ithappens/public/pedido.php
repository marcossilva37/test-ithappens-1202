<?php
include 'connection.inc'; //recebe get do formulario
$filial = $_POST['filial'];
$usuario = $_POST['usuario'];
$cliente = $_POST['cliente'];
$obs = $_POST['obs'];



$sql = "INSERT INTO pedido(filial, nomeUsuario, nomeCliente, obs) VALUES(:filial, :usuario, :cliente, :obs)";// insere no banco de dados com sgurança pelo prepare statements
$stmt = $pdo->prepare($sql);
$stmt->bindValue(':filial', $filial, PDO::PARAM_STR);
$stmt->bindValue(':usuario', $usuario, PDO::PARAM_STR);
$stmt->bindValue(':cliente', $cliente, PDO::PARAM_STR);
$stmt->bindValue(':obs', $obs, PDO::PARAM_STR);

$result = $stmt->execute();
header("location: ". '/produto.php');


