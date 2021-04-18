// Selecteur
const hamburgerList = document.querySelector('.hamburger-list');
const hamburgerItem = document.querySelector('.hamburger-item-disable');
const header = document.querySelector('.header');
const navList = document.querySelector('.nav-list');
const btnInscription = document.getElementById('btnInscription');
const btnConnexion = document.getElementById('btnConnexion');
const DivInscription = document.querySelector('.register');
const DivConnexion = document.querySelector('.login');
const btnCloseLogin = document.querySelector('.close-login');
const btnCloseRegister = document.querySelector('.close-register');
const bgLog = document.querySelector('.bg-log');
const e404 = document.querySelector('.e404');
const logo = document.querySelector('.logo');
const footer = document.querySelector('footer');
const ContainerProduit = document.querySelector('.container-product');
const panier = document.querySelector('.panier');

// Evenement
hamburgerList.addEventListener('click', () => {
    // navbar
    if (hamburgerList.classList.contains('hamburger-list-disable')) {

        //header
        header.classList.remove('header-disable');
        header.classList.add('header-enable');

        // activer hamburger list

        hamburgerList.classList.remove('hamburger-list-disable')
        hamburgerList.classList.add('hamburger-list-enable');

        hamburgerItem.classList.remove('hamburger-item-disable');
        hamburgerItem.classList.add('hamburger-item-enable');

        // afficher 
        // navList.classList.remove('nav-list');
        navList.classList.remove('nav-list');
        navList.classList.add('nav-list-enable');
        // cacher le message d'erreur avant d'ouvrir le menu
        e404 ? e404.style.opacity = 0 : null;
        //Desactiver navbar
    } else {
        // afficher e404 apres avoir ferme le menu
        e404 ? setTimeout(() => {
            e404.style.opacity = 1;
        }, 500) : null;
        // mettre le header a disable
        header.classList.remove('header-enable');
        header.classList.add('header-disable');

        // desactive le hamburgeur et ses items
        hamburgerList.classList.remove('hamburger-list-enable');
        hamburgerList.classList.add('hamburger-list-disable');

        hamburgerItem.classList.remove('hamburger-item-enable');
        hamburgerItem.classList.add('hamburger-item-disable');
        // cache navlist
        navList.classList.remove('nav-list-enable');
        navList.classList.add('nav-list');

    }
}, false);
// ouvrir la div inscription
if (!!btnInscription) {
    btnInscription.onclick = () => {
        if (DivInscription.classList.contains('inscription-disable'))
            DivInscription.classList.remove('inscription-disable');
        DivInscription.classList.add('inscription-enable');
        DivConnexion.classList.remove('connexion-enable');
        DivConnexion.classList.add('connexion-disable');
        hamburgerList.style.display = "none";
        bgLog.classList.remove('bg-log-disable')
        bgLog.classList.add('bg-log-enable');
        bgLog.removeAttribute('style');
    }
}
// div connexion
// close inscription & connexion
if (!!btnConnexion) {

    btnConnexion.onclick = () => {
        if (DivConnexion.classList.contains('connexion-disable'))
            DivConnexion.classList.remove('connexion-disable');
        DivConnexion.classList.add('connexion-enable');
        DivInscription.classList.remove('inscription-enable');
        DivInscription.classList.add('inscription-disable');
        hamburgerList.style.display = "none";
        bgLog.classList.remove('bg-log-disable')
        bgLog.classList.add('bg-log-enable');
        bgLog.removeAttribute('style');
    }
}
// Close connexion inscription
if (btnCloseLogin && btnCloseRegister) {

    btnCloseLogin.onclick = btnCloseRegister.onclick = () => {
        if (DivInscription.classList.contains('inscription-enable')) {
            DivInscription.classList.remove('inscription-enable');
            DivInscription.classList.add('inscription-disable');
            changeHamburgerState();
            hamburgerList.style.display = 'flex';
            bgLog.classList.remove('bg-log-enable');
            bgLog.classList.add('bg-log-disable');
            bgLog.style.animation = "bottomToTop .2s";
        } else {
            DivConnexion.classList.remove('connexion-enable');
            DivConnexion.classList.add('connexion-disable');
            changeHamburgerState();
            hamburgerList.style.display = 'flex';
            bgLog.classList.remove('bg-log-enable');
            bgLog.classList.add('bg-log-disable');
            bgLog.style.animation = "bottomToTop .2s";
        }
    };
}
// function
function changeHamburgerState() {
    if (hamburgerList.classList.contains('hamburger-list-enable')) {
        // activer hamburger list
        hamburgerList.classList.remove('hamburger-list-disable');

        hamburgerItem.classList.add('hamburger-item-enable');
    } else {
        //desactiver
        hamburgerList.classList.remove('hamburger-list-enable');

        hamburgerItem.classList.add('hamburger-item-diabled');
    }
}

// page error 404
if (!!e404) {
    document.body.classList.toggle('body-404')
    setTimeout(() => {
        e404.style.height = document.body.offsetHeight - footer.clientHeight - header.clientHeight + 'px';
    }, 200);
    console.log("it's true");
}
// Go To home page
logo.onclick = function () { location.href = '/projet-csi/'; }

// Product.js


if (!!ContainerProduit) {
    document.body.classList.toggle('body-product')
}

if(!!panier){
    document.body.classList.toggle('body-panier');
}