<?php

session_start();

if (!$_SESSION["logado"]) header("Location: index.html");
?>

<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
</head>
<body>
  <div>
    <strong>Email:</strong>
    <?php echo $_SESSION["email"]; ?>

    <br>

    <strong>Nome:</strong>
    <?php echo $_SESSION["nome"]; ?>

    <form action="logout.php">
      <button type="submit">
        Sair
      </button>
    </form>
  </div>
</body>
</html>