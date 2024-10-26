<?php
include('conexao.php');

if(isset($_POST ['email']) || isset ($_POST ['senha']) ){

}
if(strlen ($_POST ['email'])==0 ){
    Echo "Preencha seu e-mail";
}
else if (strlen ($_POST ['senha'])==0 ){
    Echo "Preencha sua senha";
}
else{
    $email = $mysqli-> real_escape_string ($_POST ['email']);
    $senha = $mysqli-> real_escape_string ($_POST ['senha']);

    $sql_code = "SELECT * FROM usuarios where email = '$email' and senha = '$senha'";
    $sql_query = $mysqli -> query ($sql_code) or die("Falha na execucao do codigo SQL:" .$mysqli->error);

$quantidade = $sql_query-> $num_rows;

if($quabtidade == 1){
$usuario = $sql_query ->fetch-assoc();
if (!isset($_SESSION)){
  session_start();
}
$_SESSION ['id'] = $usuario ['id'];
$_SESSION ['nome'] = $usuario ['nome']; 

heder ("Location: index.html");
}
else{
      echo "falha ao logar! E-mail ou senha incorretos";
}
}

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
  
    
    </style>
</head>
<body>
    
    <h1>Faça seu login:</h1>
    <form action="" method= "POST">
        <p>
            <label>E-mail </label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha </label>
            <input type="password" name="senha">
        </p>
        <p>
           
            <button type="submit">Entrar </button>
        </p>

    </form>

</body>
</html>