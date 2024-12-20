<?php
if (!isset($_SESSION)){
    session_start();
  }
?>

<!DOCTYPE html>
<html lang="pt">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cartilha</title>
    <style type="text/css">
      
*{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}

/* Estilos gerais da navbar */
nav {
    display: flex;
    justify-content: space-between;
    align-items: center;
    background-color: #668dd7; /* Cor de fundo */
    padding: 0.5rem 1rem; /* Espaçamento interno */
}

/* Estilo do logo */
.logo {
    color: #ffffff; /* Cor do texto */
    font-size: 1.8rem; /* Tamanho da fonte */
    text-decoration: none; /* Remove sublinhado */
    font-family: 'Arch', sans-serif;
}

/* Estilo dos links de navegação */
.Links {
    display: flex;
    align-items: center;
    font-family: 'Arch', sans-serif;
}

.nav-itens {
    list-style: none; /* Remove marcadores */
    display: flex; /* Alinha itens em linha */
    padding: 0; /* Remove padding */
    margin: 0; /* Remove margin */
}

.nav-itens li {
    margin-right: 10px; /* Espaçamento entre itens */
}

.nav-itens a {
    color: #ffffff; /* Cor do texto */
    text-decoration: none; /* Remove sublinhado */
    transition: color 0.3s; /* Efeito de transição suave */
    padding: 5px 10px; /* Aumenta o espaço ao redor do texto, você pode ajustar os valores */
    display: inline-block; /* Garante que o link seja tratado como um bloco para que o padding tenha efeito */
    
    
}

.nav-itens a:hover {
    color: black; /* Cor ao passar o mouse */
    background-color: #a891eb;
    padding: 5px 15px; /* Aumenta o tamanho do campo ao passar o mouse */
    border-radius: 0.25rem; /* Bordas arredondadas */
}

/* Estilo do botão de login */
.login {
    background-color: #a891eb; /* Cor doFundo  */
    color: #ffffff; /* Cor do texto verde */
    padding: 0.375rem 0.75rem; /* Espaçamento do botão */
    border-radius: 0.25rem; /* Bordas arredondadas */
    cursor: pointer; /* Muda o cursor */
    transition: background-color 0.3s, color 0.3s; /* Transição suave */
    font-family: 'Arch', sans-serif;
}

.login:hover {
    background-color: #fffa7e; /* Fundo verde ao passar o mouse */
    color: #000000; /* Cor do texto branco ao passar o mouse */
}

h1 {
    font-family: 'LoveloLine', sans-serif;
}

@font-face {
    font-family: 'Arch';
    src: url('font/Arch.woff') format('woff'),
         url('font/Arch.woff2') format('woff2');
    font-weight: normal;
    font-style: normal;
}

    </style>
    
    <nav>
        <div class="logo">Educacao Sexual nas escolas: Para pais/Responsaveis e Comunidade escolar</div>
        <div class="Links">
            <ul class="nav-itens">
                <li>
                    <a href="index.html">Pagina Inicial</a>
                </li>
                <li>
                    <a href="material.html">Material Didatico</a>
                </li>
                <li>
                    <a href="inform.html">Portais Seguros</a>
                </li>
                <li>
                    <a href="Cartilha.html">Cartilha</a>
                </li>

</ul>
                <a href="Pagina_login.php">
                    <button class="login" type="submit">Login</button>
                </a>
        </div>
        
    </nav>

</head>

<body>
    <div style="position:relative;padding-top:max(60%,324px);width:100%;height:0;">
        <iframe style="position:absolute;border:none;width:100%;height:100%;left:0;top:0;" src="https://online.fliphtml5.com/zhunlz/izli/"  seamless="seamless" scrolling="no" frameborder="0" allowtransparency="true" allowfullscreen="true" >
        </iframe></div>

</body>

</html>