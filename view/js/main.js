const hamburgerList = document.querySelector('.hamburger-list');
const hamburgerItem = document.querySelectorAll('.hamburger-item-disable');
const header = document.querySelector('.header');

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
    //Desactiver navbar
} else {
    // 
    header.classList.remove('header-enable');
    header.classList.add('header-disable');
    // 
    hamburgerList.classList.remove('hamburger-list-enable');
    hamburgerList.classList.add('hamburger-list-disable');
    
    hamburgerItem.forEach((element)=>{
    element.classList.remove('hamburger-item-enable');
    element.classList.add('hamburger-item-disable');
    })
   
}
},false)