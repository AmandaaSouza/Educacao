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
  /* Reset básico para remover margens, preenchimentos e garantir que o box-sizing seja aplicado */
* {
    margin: 0;  /* Remove todas as margens padrão */
    padding: 0;  /* Remove os preenchimentos padrão */
    box-sizing: border-box;  /* Garante que padding e border sejam incluídos nas dimensões totais do elemento */
}

/* Corpo da página */
body {
    background-image: url('Img/Fundo.jpg'); /* Caminho da imagem */
    background-size: cover; /* A imagem vai cobrir toda a tela */
    background-repeat: no-repeat; /* Impede a repetição da imagem */
    font-family: Arial, sans-serif;  /* Define a fonte da página */
    height: 100vh;  /* A altura da página ocupa toda a altura da janela de visualização */
    display: flex;  /* Usa o modelo Flexbox para centralizar os itens */
    justify-content: center;  /* Centraliza horizontalmente */
    align-items: center;  /* Centraliza verticalmente */
    position: relative;  /* Define o corpo da página como contêiner de elementos posicionados de forma relativa */
}

/* Estilo do botão de voltar */
.btn-voltar {
    position: absolute;  /* Coloca o botão de forma absoluta dentro do contêiner */
    top: 20px;  /* Distância de 20px do topo */
    left: 20px;  /* Distância de 20px da esquerda */
    padding: 10px 20px;  /* Preenchimento interno do botão */
    background: #a891eb;  /* Cor de fundo do botão */
    color: white;  /* Cor do texto do botão */
    font-size: 16px;  /* Tamanho da fonte */
    border: none;  /* Remove a borda padrão */
    border-radius: 5px;  /* Bordas arredondadas */
    cursor: pointer;  /* Altera o cursor para indicar que é clicável */
    transition: background 0.3s ease;  /* Transição suave ao mudar a cor de fundo */
}

/* Efeito de hover para o botão de voltar */
.btn-voltar:hover {
    background: #68d3be;  /* Muda a cor de fundo quando o botão é sobrevoado */
}

/* Estilo do formulário */
form {
    background: white;  /* Fundo branco */
    padding: 50px 30px;  /* Preenchimento interno (50px em cima e embaixo, 30px nas laterais) */
    border-radius: 10px;  /* Bordas arredondadas */
    box-shadow: 0 4px 10px rgba(0, 0, 0, 0.2);  /* Sombras suaves ao redor do formulário */
    width: 100%;  /* Largura de 100% do contêiner */
    max-width: 500px;  /* Largura máxima de 500px */
    text-align: center;  /* Centraliza o conteúdo dentro do formulário */
}

/* Título no topo do formulário */
form h1 {
    font-size: 28px;  /* Tamanho da fonte */
    color: #333;  /* Cor do texto */
    margin-bottom: 20px;  /* Margem embaixo */
}

/* Estilização dos parágrafos dentro do formulário */
form p {
    margin-bottom: 20px;  /* Margem embaixo de cada parágrafo */
    text-align: left;  /* Alinha o texto à esquerda */
}

/* Estilo das labels dos campos */
form label {
    font-size: 16px;  /* Tamanho da fonte das labels */
    color: #555;  /* Cor das labels */
    display: block;  /* Faz com que cada label ocupe uma linha inteira */
    margin-bottom: 8px;  /* Margem embaixo das labels */
}

/* Estilo dos campos de entrada (input) */
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

/* Estilo do botão de envio do formulário */
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

/* Link para criar conta */
form .criar-conta {
    margin-top: 15px;  /* Margem superior */
    font-size: 14px;  /* Tamanho da fonte */
    color: #333;  /* Cor do texto */
    text-align: center;  /* Centraliza o texto */
}

/* Estilo do link dentro do parágrafo .criar-conta */
form .criar-conta a {
    color: #74ebd5;  /* Cor do link */
    text-decoration: none;  /* Remove o sublinhado do link */
}

/* Efeito de hover no link */
form .criar-conta a:hover {
    text-decoration: underline;  /* Adiciona sublinhado quando o link é sobrevoado */
}

    
    </style>
</head>
<body>
<button class="btn-voltar" onclick="history.back()">Voltar</button>    
    <form action="login.php" method= "POST">

    
        <h1>Faça seu login</h1>
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
<p>Não possui conta? <a href="Pagina_cadastro.php">Crie uma conta  </a></p>

    </form>

    
</body>
</html>