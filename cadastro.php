<?php

include_once("conexao.php");

$nome = $_POST["nome"];
$senha = $_POST["senha"];
$email = $_POST["email"];

$query = mysqli_prepare($mysqli, "INSERT INTO usuario (nome, email, senha) Values  (?, ?, ?)");
$query->bind_param("sss", $nome, $email, $senha);

$query->execute();

header("Location: index.html");