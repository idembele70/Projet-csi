const hamburgerList = document.querySelector('.hamburger-list');
const hamburgerItem = document.querySelectorAll('.hamburger-item-disable');

hamburgerList.addEventListener('click',()=>{
if (hamburgerList.classList.contains('hamburger-list-disable')) {
    hamburgerList.classList.remove('hamburger-list-disable');
    hamburgerList.classList.add('hamburger-list-enable');
    hamburgerItem.forEach((element)=>{
        element.classList.remove('hamburger-item-disable');
        element.classList.add('hamburger-item-enable');
    })
} else {
    hamburgerList.classList.remove('hamburger-list-enable');
    hamburgerList.classList.add('hamburger-list-disable');
    
    hamburgerItem.forEach((element)=>{
    element.classList.remove('hamburger-item-enable');
    element.classList.add('hamburger-item-disable');
    })
   
}
},false)