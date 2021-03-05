// Selecteur

const hamburgerList = document.querySelector('.hamburger-list');
const hamburgerItem = document.querySelectorAll('.hamburger-item-disable');
const header = document.querySelector('.header');
const navList = document.querySelector('.nav-list');
const btnInscription = document.getElementById('btnInscription');
const btnConnexion = document.getElementById('btnConnexion');
const DivInscription = document.querySelector('.register');
const DivConnexion = document.querySelector('.login');
let btnCloseLogin = document.querySelector('.close-login');
let btnCloseRegister = document.querySelector('.close-register');

hamburgerList.addEventListener('click',()=>{
    // navbar
if (hamburgerList.classList.contains('hamburger-list-disable')) {
    
    //header
    header.classList.remove('header-disable');
    header.classList.add('header-enable');

    // nav
    hamburgerList.classList.remove('hamburger-list-disable');
    hamburgerList.classList.add('hamburger-list-enable');
    hamburgerItem.forEach((element)=>{
        element.classList.remove('hamburger-item-disable');
        element.classList.add('hamburger-item-enable');
        
    });
    // afficher 
    // navList.classList.remove('nav-list');
    navList.classList.remove('nav-list');
    navList.classList.add('nav-list-enable');
    //Desactiver navbar
} else {
    // mettre le header a disable
    header.classList.remove('header-enable');
    header.classList.add('header-disable');
    
    // desactive le hamburgeur et ses items
    hamburgerList.classList.remove('hamburger-list-enable');
    hamburgerList.classList.add('hamburger-list-disable');
    hamburgerItem.forEach((element)=>{
        element.classList.remove('hamburger-item-enable');
        element.classList.add('hamburger-item-disable');
    })
    // cache navlist
    navList.classList.remove('nav-list-enable');
    navList.classList.add('nav-list');
   
}
},false);
// ouvrir la div inscription
btnInscription.onclick = ()=>{
   if (DivInscription.classList.contains('inscription-disable'))
       DivInscription.classList.remove('inscription-disable');
       DivInscription.classList.add('inscription-enable');
       DivConnexion.classList.remove('connexion-enable');
       DivConnexion.classList.add('connexion-disable');

}
// div connexion
// close inscription & connexion
btnConnexion.onclick = ()=>{
    if (DivConnexion.classList.contains('connexion-disable'))
        DivConnexion.classList.remove('connexion-disable');
        DivConnexion.classList.add('connexion-enable');
        DivInscription.classList.remove('inscription-enable');
        DivInscription.classList.add('inscription-disable');
    }
    
    
    btnCloseLogin.onclick = btnCloseRegister.onclick = ()=> {
        if (DivInscription.classList.contains('inscription-enable')) {
            DivInscription.classList.remove('inscription-enable');
            DivInscription.classList.add('inscription-disable');
        } else {
            DivConnexion.classList.remove('connexion-enable');
            DivConnexion.classList.add('connexion-disable');
        }
    };