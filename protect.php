
<?php

if (!session_id()) session_start();

if (isset($_SESSION['logado']) && $_SESSION['logado']) header("Location: index.html");

?>
<!DOCTYPE html>
<html lang="pt-br">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Perfil</title>
  <style>
/* Corpo da página */
body {
    font-family: Arial, sans-serif; /* Define a fonte padrão */
    height: 100vh; /* Altura da página igual à altura da janela */
    margin: 0; /* Remove margens padrão */
    display: flex; /* Usa Flexbox */
    justify-content: center; /* Centraliza o conteúdo horizontalmente */
    align-items: center; /* Centraliza o conteúdo verticalmente */
    background-image: url('Img/Fundo.jpg'); /* Caminho da imagem */
    background-size: cover; /* A imagem vai cobrir toda a tela */
    /* background-position: center; Centraliza a imagem */
    background-repeat: no-repeat; /* Impede a repetição da imagem */
}

/* Formulário */
form {
    background: white; /* Fundo branco */
    padding: 50px 30px; /* Preenchimento interno */
    border-radius: 10px; /* Bordas arredondadas */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2); /* Sombra ao redor do formulário */
    width: 100%; /* Largura de 100% */
    max-width: 500px; /* Largura máxima de 500px */
    text-align: center; /* Centraliza o conteúdo do formulário */
}



/* Estilização dos parágrafos dentro do formulário */
form strong {
    margin-bottom: 20px;  /* Margem embaixo de cada parágrafo */
    text-align: left;  /* Alinha o texto à esquerda */
}
form input {
    width: 100%;  /* Campo ocupa toda a largura do formulário */
    padding: 15px;  /* Preenchimento interno dos campos */
    border: 1px solid #ccc;  /* Borda de 1px e cor cinza */
    border-radius: 5px;  /* Bordas arredondadas */
    font-size: 16px;  /* Tamanho da fonte */
    outline: none;  /* Remove o contorno padrão */
}

/* Efeito de foco nos campos de entrada */
form input:focus {
    border-color: #74ebd5;  /* Muda a cor da borda para azul claro */
    box-shadow: 0 0 5px rgba(116, 235, 213, 0.5);  /* Adiciona uma leve sombra ao redor do campo */
}
form button {
    width: 100%;  /* Botão ocupa toda a largura */
    padding: 15px;  /* Preenchimento interno do botão */
    background: black;  /* Cor de fundo do botão */
    color: white;  /* Cor do texto */
    font-size: 18px;  /* Tamanho da fonte */
    border: none;  /* Remove a borda padrão */
    border-radius: 5px;  /* Bordas arredondadas */
    cursor: pointer;  /* Indica que o botão é clicável */
    transition: background 0.3s ease;  /* Transição suave de cor */
}

/* Efeito de hover para o botão */
form button:hover {
    background: #fffa7e;  /* Muda a cor de fundo quando o botão é sobrevoado */
    color: black;
}
  </style>
</head>
<body>
    <form action="logout.php">
      <h1>Perfil</h1>
      colocar negocio para foto
  <div>
    <strong>E-mail:</strong>
    <?php echo $_SESSION["email"]; ?>

    <br>
    <br>
    <strong>Nome:</strong>
    <?php echo $_SESSION["nome"]; ?>
<br>

      <button type="submit">
        Sair
      </button>
    </form>
  </div>
</body>
</html>