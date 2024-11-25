<?php

 session_start();

if (isset($_SESSION['logado']) && $_SESSION['logado']) header("Location: index.php");

?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style type="text/css">
  /* Reset básico */
  * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        /* Corpo da página */
        body {
            background-image: url('Img/Fundo.jpg'); /* Caminho da imagem */
            background-size: cover; /* A imagem vai cobrir toda a tela */
            background-repeat: no-repeat; /* Impede a repetição da imagem */
            font-family: Arial, sans-serif;
            /* background: linear-gradient(135deg, #74ebd5, #acb6e5); */
            height: 100vh;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        /* Container principal */
        form {
            background: white;
            padding: 50px 30px;
            border-radius: 10px;
            box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);
            width: 100%;
            max-width: 500px; /* Aumenta o tamanho do formulário */
            text-align: center;
            position: relative;
        }


        /* Título no topo */
        form h1 {
            font-size: 28px;
            color: #333;
            margin-bottom: 20px;
        }

        /* Estilização dos parágrafos do formulário */
        form p {
            margin-bottom: 20px;
            text-align: left;
        }

        /* Labels */
        form label {
            font-size: 16px;
            color: #555;
            display: block;
            margin-bottom: 8px;
        }

        /* Campos de entrada */
        form input {
            width: 100%;
            padding: 15px; /* Aumenta o tamanho dos campos */
            border: 1px solid #ccc;
            border-radius: 5px;
            font-size: 16px;
            outline: none;
        }

        form input:focus {
            border-color: #74ebd5;
            box-shadow: 0 0 5px rgba(116, 235, 213, 0.5);
        }

        /* Botão de envio */
        form button {
            width: 100%;
            padding: 15px; /* Aumenta o tamanho do botão */
            background: #74ebd5;
            color: white;
            font-size: 18px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            transition: background 0.3s ease;
        }

        form button:hover {
            /* background: #68d3be; */
        }

    
    </style>
</head>
<body>

    <form action="cadastro.php" method= "POST">
    <h1>Cadastre seu usuario:</h1>
        <p>
            <label for="nome">Nome</label>
            <input type="text" name="nome">
        </p>
        <p>
            <label>E-mail </label>
            <input type="text" name="email">
        </p>
        <p>
            <label>Senha </label>
            <input type="password" name="senha">
        </p>
        <p>
           
            <button type="submit">Cadastre</button>
        </p>

    </form>

</body>
</html>