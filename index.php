<?php
if (!isset($_SESSION)){
    session_start();
  }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Educacao sexual</title>

<style  type="text/css">

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
    font-size: 1.5rem; /* Tamanho da fonte */
    text-decoration: none; /* Remove sublinhado */
}

/* Estilo dos links de navegação */
.Links {
    display: flex;
    align-items: center;
}

.nav-itens {
    list-style: none; /* Remove marcadores */
    display: flex; /* Alinha itens em linha */
    padding: 0; /* Remove padding */
    margin: 0; /* Remove margin */
}

.nav-itens li {
    margin-right: 20px; /* Espaçamento entre itens */
}

.nav-itens a {
    color: #ffffff; /* Cor do texto */
    text-decoration: none; /* Remove sublinhado */
    transition: color 0.3s; /* Efeito de transição suave */
}

.nav-itens a:hover {
    color: #adb5bd; /* Cor ao passar o mouse */
}

/* Estilo do botão de login */
.login {
    background-color: #a891eb; /* Cor doFundo  */
   /* border: 1px solid #28a745; /* Borda verde */
    color: #ffffff; /* Cor do texto verde */
    padding: 0.375rem 0.75rem; /* Espaçamento do botão */
    border-radius: 0.25rem; /* Bordas arredondadas */
    cursor: pointer; /* Muda o cursor */
    transition: background-color 0.3s, color 0.3s; /* Transição suave */
}

.login:hover {
    background-color: #fffa7e; /* Fundo verde ao passar o mouse */
    color: #000000; /* Cor do texto branco ao passar o mouse */
}


</style>
<link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@100;200;300;400;500;600;700;800;900&display=swap" rel="stylesheet">
    <nav>
        <div class="logo">Educacao Sexual nas escolas: Para pais/Responsaveis e Comunidade escolar</div>
        <div class="Links">
          <ul class="nav-itens">
             <li>
              <a>Pagina Inicial</a>
            </li>
            <li>
              <a href="Cartilha.html">Cartilha</a>
            </li>
           
          
        <a href="login.php">
            <button class="login" type="submit">Login</button>
        </a>
        </div>
    </ul>
      </nav>
   
</head>
<body>
    
</body>
</html>