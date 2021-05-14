// Selecteur
const hamburgerList = document.querySelector(".hamburger-list");
const hamburgerItem = document.querySelector(".hamburger-item-disable");
const header = document.querySelector(".header");
const navList = document.querySelector(".nav-list");
const btnInscription = document.getElementById("btnInscription");
const btnConnexion = document.getElementById("btnConnexion");
const DivInscription = document.querySelector(".register");
const DivConnexion = document.querySelector(".login");
const btnCloseLogin = document.querySelector(".close-login");
const btnCloseRegister = document.querySelector(".close-register");
const bgLog = document.querySelector(".bg-log");
const e404 = document.querySelector(".e404");
const logo = document.querySelector(".logo");
const footer = document.querySelector("footer");
const ContainerProduit = document.querySelector(".container-product");
const panier = document.querySelector(".panier");
const homePage = document.querySelector(".homepage");
const inputEmail = document.querySelectorAll("form-input");
const TabsPanier = [];
const contact = document.querySelector(".contact");
// Evenement
hamburgerList.addEventListener(
  "click",
  () => {
    // navbar
    if (hamburgerList.classList.contains("hamburger-list-disable")) {
      //header
      header.classList.remove("header-disable");
      header.classList.add("header-enable");

      // activer hamburger list

      hamburgerList.classList.remove("hamburger-list-disable");
      hamburgerList.classList.add("hamburger-list-enable");

      hamburgerItem.classList.remove("hamburger-item-disable");
      hamburgerItem.classList.add("hamburger-item-enable");

      // afficher
      // navList.classList.remove('nav-list');
      navList.classList.remove("nav-list");
      navList.classList.add("nav-list-enable");
      // cacher le message d'erreur avant d'ouvrir le menu
      e404 ? (e404.style.opacity = 0) : null;
      //Desactiver navbar
    } else {
      // afficher e404 apres avoir ferme le menu
      e404
        ? setTimeout(() => {
          e404.style.opacity = 1;
        }, 500)
        : null;
      // mettre le header a disable
      header.classList.remove("header-enable");
      header.classList.add("header-disable");

      // desactive le hamburgeur et ses items
      hamburgerList.classList.remove("hamburger-list-enable");
      hamburgerList.classList.add("hamburger-list-disable");

      hamburgerItem.classList.remove("hamburger-item-enable");
      hamburgerItem.classList.add("hamburger-item-disable");
      // cache navlist
      navList.classList.remove("nav-list-enable");
      navList.classList.add("nav-list");
    }
  },
  false
);
// ouvrir la div inscription
if (!!btnInscription) {
  btnInscription.onclick = () => {
    if (DivInscription.classList.contains("inscription-disable"))
      DivInscription.classList.remove("inscription-disable");
    DivInscription.classList.add("inscription-enable");
    DivConnexion.classList.remove("connexion-enable");
    DivConnexion.classList.add("connexion-disable");
    hamburgerList.style.display = "none";
    bgLog.classList.remove("bg-log-disable");
    bgLog.classList.add("bg-log-enable");
    bgLog.removeAttribute("style");
  };
  /* Gestion du formulaire d'inscription et de connexion avec des Regex
        STOP
        */

  /*  const inputs = bgLog.querySelectorAll('input');
    const validerIncription = bgLog.querySelector('.valider-inscription')
    let isNull = true;
    addEventListener('input', () => {
        isNull = false;
        inputs.forEach(input => {
            if (input.value == '') isNull = true;
        })
        console.log(validerIncription);
        if (isNull) {
            validerIncription.disabled = isNull;
        } else {
            console.log(isNull);
            validerIncription.disabled = isNull;
            
        }
    }) */

  // STOP
}
// div connexion
// close inscription & connexion
if (!!btnConnexion) {
  btnConnexion.onclick = () => {
    if (DivConnexion.classList.contains("connexion-disable"))
      DivConnexion.classList.remove("connexion-disable");
    DivConnexion.classList.add("connexion-enable");
    DivInscription.classList.remove("inscription-enable");
    DivInscription.classList.add("inscription-disable");
    hamburgerList.style.display = "none";
    bgLog.classList.remove("bg-log-disable");
    bgLog.classList.add("bg-log-enable");
    bgLog.removeAttribute("style");
  };
  //desactiver si user saisie correspond pas au regex
}
// Close connexion inscription
if (btnCloseLogin && btnCloseRegister) {
  btnCloseLogin.onclick = btnCloseRegister.onclick = () => {
    if (DivInscription.classList.contains("inscription-enable")) {
      DivInscription.classList.remove("inscription-enable");
      DivInscription.classList.add("inscription-disable");
      changeHamburgerState();
      hamburgerList.style.display = "flex";
      bgLog.classList.remove("bg-log-enable");
      bgLog.classList.add("bg-log-disable");
      bgLog.style.animation = "bottomToTop .2s";
    } else {
      DivConnexion.classList.remove("connexion-enable");
      DivConnexion.classList.add("connexion-disable");
      changeHamburgerState();
      hamburgerList.style.display = "flex";
      bgLog.classList.remove("bg-log-enable");
      bgLog.classList.add("bg-log-disable");
      bgLog.style.animation = "bottomToTop .2s";
    }
  };
}
// function
function changeHamburgerState() {
  if (hamburgerList.classList.contains("hamburger-list-enable")) {
    // activer hamburger list
    hamburgerList.classList.remove("hamburger-list-disable");

    hamburgerItem.classList.add("hamburger-item-enable");
  } else {
    //desactiver
    hamburgerList.classList.remove("hamburger-list-enable");

    hamburgerItem.classList.add("hamburger-item-diabled");
  }
}

// page error 404
if (!!e404) {
  document.body.classList.toggle("body-404");
  setTimeout(() => {
    e404.style.height =
      document.body.offsetHeight -
      footer.clientHeight -
      header.clientHeight +
      "px";
  }, 200);
  console.log("it's true");
}
// Go To home page
logo.onclick = function () {
  location.href = "./";
};

// Product
if (!!ContainerProduit) {
  const btnAjoutPanier = document.querySelector(".ajoutPanier");
  if (btnConnexion) btnAjoutPanier.disabled = true;
  else btnAjoutPanier.disabled = false;

  document.body.classList.toggle("body-product");
  function ajoutPanier() {
    TabsPanier.unshift(document.location.search.replace(/\D/g, ""));
    if (sessionStorage.getItem("commande")) {
      const item = sessionStorage.getItem("commande").trim().split(",");
      console.log("item", item);
      item.forEach((id) => TabsPanier.push(id));
      console.log("tabs Panier", TabsPanier);
      sessionStorage.setItem("commande", TabsPanier);
    } else {
      sessionStorage.setItem("commande", TabsPanier);
    }
    while (TabsPanier.length > 0) TabsPanier.pop();
  }
}

// Panier

if (!!panier) {
  document.body.classList.toggle("body-panier");
  const panierContainer = document.querySelector(".panier");
  // affichage des differentes commande dans la page de panier
  if (!!sessionStorage.getItem("commande")) {
    sessionStorage
      .getItem("commande")
      .split(/,/)
      .forEach((id) => TabsPanier.push(id));
    console.log(TabsPanier);
    TabsPanier.forEach(
      (id, i) =>
        (panierContainer.innerHTML += `
        <div class="article">
        <span style="opacity:0;">${i}</span>
          <img src="view/assets/img/fimo${id}.png" alt="image d'un article ">
          <div class="infos">
              <h4>Les sushi Nulla ex libero porta eget</h4>
              <span> Lorem, ipsum dolor sit amet consectetur adipisicing elit. Cumque harum doloribus maxime, eius mollitia velit ut minima delectus, placeat, eos ad. Sit, cum. Nobis ullam deleniti nesciunt ratione, unde nostrum?</span>
              <button onClick=retirePanier(this) >Retiré du panier</button>
          </div>
      </div>
          `)
    );
  }
  // configuration de la taille de la page
  window.addEventListener("load", () => {
    const articles = document.querySelectorAll(".article");
    if (
      document.body.offsetWidth < 800 /* && document.body.offsetHeight < 600 */
    ) {
      document.body.style.minHeight =
        document.body.offsetHeight +
        (articles.length > 2 ? header.clientHeight : 0) +
        "px";
    } else {
      document.body.style.minHeight =
        document.body.offsetHeight +
        (articles.length > 2 ? header.clientHeight : 0) +
        "px";
    }
  });
  // Envoyer le formulaire vers commande.php en post

  const formPanier = document.querySelector(".form-panier");
  const formContaint = [];
  TabsPanier.forEach((id) =>
    formContaint.push(`<input type="hidden" name="fimo${id}" value="1">`)
  );
  formPanier.innerHTML += formContaint.join`\n`;
  //   valider commande
  function validerAchat() {
    TabsPanier.forEach((el) => TabsPanier.pop);
    sessionStorage.removeItem("commande");
  }

  function retirePanier(me) {
    const articlePanier = me.parentElement.parentElement;
    const index = Number(articlePanier.firstElementChild.textContent);
    articlePanier.remove();
    TabsPanier.splice(index, 1);
    sessionStorage.setItem("commande", TabsPanier);
    location.reload();
  }
}

if (!!homePage) {
  let progress = 0;
  addEventListener("load", () => {
    const item = document.body.querySelectorAll(".container_article_item img");
    const container = document.body.querySelector(
      ".container_article_item"
    ).clientHeight;
    const title1 = document.body.querySelector("h1").clientHeight;
    if (document.body.clientWidth < 800) {
      item.forEach((i) => (progress += i.clientHeight));
      document.body.style.height =
        header.clientHeight + container + title1 + item[0].clientHeight + "px";
    } else document.body.style.height = document.body.clientHeight + "px";
  });
}

// Espace perso
const espacePerso = document.querySelector(".espacePerso");
const mainEspacePerso = document.querySelector("main");
if (!!espacePerso) {
  onload = () => {
    const espacePersoHeight = this.document.body.clientHeight;
    mainEspacePerso.style.height =
      espacePersoHeight - header.clientHeight - footer.clientHeight + "px";
  };
}
// Page Contact
if (!!contact) {
  // 180 equivaut a la hauter du header
  document.body.classList.add('body-contact')
}
