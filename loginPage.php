<?php

if (!session_id()) session_start();

if (isset($_SESSION['logado']) && $_SESSION['logado']) header("Location: index.php");

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

    <h1>Faca seu login</h1>

    <form action="login.php" method= "POST">
        <p>
            <label>E-mail </label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha </label>
            <input type="password" name="senha">
        </p>
        <p>
           
            <button type="submit">Entrar</button>
        </p>

    </form>

    <p>Nao possui conta? <a href="cadastroPage.php">Crie uma conta  </a></p>

</body>
</html>