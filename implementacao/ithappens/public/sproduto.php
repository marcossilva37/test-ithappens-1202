<?php
include 'connection.inc'; //recebe post do formulario
$id = $_POST['id'];
$nome = $_POST['nome'];
$stt = $_POST['stt'];
$qtd = $_POST['qtd'];
$codigo = $_POST['codbarras'];
$preco = $_POST['preco'];



$sql = "UPDATE produtos set qtd = qtd - $qtd, hora = now() WHERE id = :id OR codBarras = :codBarras OR nome = :nome ";
// gambiarra boa é a gambi que funciona
$result = $pdo->prepare($sql);//saida de produtos
$result->bindValue(":id", $id, PDO::PARAM_INT);
$result->bindValue(":nome", $nome, PDO::PARAM_STR);
$result->bindValue(":codBarras", $codigo, PDO::PARAM_INT);
$result->execute();


header("location: ". '/produto.php');



