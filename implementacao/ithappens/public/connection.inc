<?php
//conexão com banco de dados usando PDO
$dsn 		='mysql:host=localhost;dbname=estoque';
$user		='root';
$password	='1234';

$pdo = new PDO($dsn, $user, $password);

