<?php

include('conexao.php');

if (!session_id()) session_start();

if ($_SESSION["logado"]) header("Location: index.html");

$email = $_POST["email"];
$senhaLogin = $_POST["senha"];

echo $senhaLogin;

$query = mysqli_prepare($mysqli, "SELECT id, nome, email, senha from usuario WHERE email = ?");
$query->bind_param("s", $email);

$query->execute();
$resultado = $query->get_result();

if ($resultado->num_rows > 0) {
    while ($row = $resultado->fetch_assoc()) {
        $senha = $row["senha"];
        $email = $row["email"];
        $nome = $row["nome"];
    }
}


if ($senhaLogin === $senha) {
    $_SESSION['logado'] = true;
    $_SESSION['nome'] = $nome;
    $_SESSION['email'] = $email;

    header("Location: protect.php");
} else {
    echo "<script>alert('Nao deu certo');</script>";
}