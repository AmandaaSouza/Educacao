function toggleMenu() {
    const links = document.querySelector('.Links');
    links.classList.toggle('active');
}

// const mobileMenu = document.getElementById('mobile-menu');
const navList = document.querySelector('.nav-list');

// mobileMenu.addEventListener('click', () => {
//     navList.classList.toggle('active');
// });

document.addEventListener('DOMContentLoaded', () => {
    // Verifica o estado de login
    const isLoggedIn = localStorage.getItem('userLoggedIn'); // Suponha que true ou false

    const loginButton = document.getElementById('login-button');
    // const searchBox = document.getElementById('search-box');
    // const searchLabel = document.getElementById('search-label');
    const usuariologado = document.getElementById('usuario-logado');


    if (isLoggedIn === 'true') {
        // Mostra os elementos para usuários logados
        usuariologado.style.display = 'inline-block';
        // searchBox.style.display = 'inline-block';
        // searchLabel.style.display = 'block';
        loginButton.style.display = 'none';

    } else {
        // Mostra o botão de login para não logados
        loginButton.style.display = 'inline-block';
        usuariologado.style.display = 'none';

    }
});

// Simula login ao clicar no botão de login (apenas exemplo)
// document.getElementById('login-button')?.addEventListener('click', () => {
//     localStorage.setItem('userLoggedIn', 'true');
//     alert('Você está logado!');
//     window.location.reload(); // Recarrega a página para atualizar o estado
// });
