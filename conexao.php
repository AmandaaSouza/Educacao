<?php
$usuario = 'root';
$senha = '';
$host = 'localhost';
$database = 'login';

$mysqli = new mysqli($usuario, $senha, $database, $host);

if ($msqli->error){
    die("Falha ao conectar banco de dados:" .$msqli->error);
}

?>