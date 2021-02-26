const hamburgerList = document.querySelector('.hamburger-list');
const hamburgerItem = document.querySelector('.hamburger-item');

hamburgerList.addEventListener('click',()=>{
if (hamburgerList.classList.contains('hamburger-list-disable')) {
    hamburgerList.classList.remove('hamburger-list-disable')
    hamburgerList.classList.add('hamburger-list-enable')
    
    hamburgerItem.classList.remove('hamburger-item-disable')
    hamburgerItem.classList.add('hamburger-item-enable')
} else {
    hamburgerList.classList.remove('hamburger-list-enable')
    hamburgerList.classList.add('hamburger-list-disable')

    hamburgerItem.classList.remove('hamburger-item-enable')
    hamburgerItem.classList.add('hamburger-item-disable')
}
},false)