//Navbar ----------------------------
function changeNavbarOpacityOnScroll() {
  // Récupère la position actuelle de défilement de la page
  var currentScrollPosition = window.pageYOffset;

  // Récupère l'élément de la barre de navigation
  var navbarElement = document.querySelector('nav');
  var logoElement = document.querySelector('#logo');
  var accueilElement = document.querySelector('.accueil');
  var lienElement = document.querySelector('.link');
  var svgElement = document.querySelector('svg');
  const profil = document.querySelector('.profil');
  const barProfil = document.querySelector('.account-visible');



  // Vérifie si la position de défilement est supérieure à la hauteur de la barre de navigation
  if (currentScrollPosition > navbarElement.offsetHeight) {
    // Si c'est le cas, réduit l'opacité de la barre de navigation
    navbarElement.style.backgroundImage = "url('../assets/img/6.png')";
    navbarElement.style.height = "85px";
    logoElement.style.width = "80px";
    accueilElement.style.paddingTop ="40px";
    accueilElement.style.fontSize ="35px";
    lienElement.style.padding ="10px";
    svgElement.style.width ="45px";
    barProfil.style.top ="85px";
  } else {
    // Sinon, remet l'opacité de la barre de navigation à 1
    navbarElement.style.backgroundImage = "url('../assets/img/png.png')";
    navbarElement.style.height = "115px";
    logoElement.style.width = "100px";
    accueilElement.style.paddingTop ="45px";
    accueilElement.style.fontSize ="40px";
    lienElement.style.padding ="15px";
    svgElement.style.width ="50px";
    barProfil.style.top ="115px";
  }
}
// Ajoute un écouteur d'événement pour détecter le défilement de la page
window.addEventListener('scroll', changeNavbarOpacityOnScroll);



// Menu burger ---------------------
function toggleProfil() {
  const connect = document.querySelector('.connect');
  const connexion = document.querySelector('.connexion'); // Lorsque qu'on ouvre le menu par defaut l'onglet Connexion s'ouvre
  const connexionTitle = document.querySelector('#seconnecter');
  connect.classList.toggle('profil-visible'); // ajoute ou retire la classe 'menu-visible' au menu
  if(typeof(connexionTitle) !== "undefined" && connexionTitle !== null  ) {
    connexionTitle.style.fontSize = '30px';
    connexion.classList.toggle('connexion-visible');
  }
  else {
    connect.classList.remove('profil-visible'); // ajoute ou retire la classe 'menu-visible' au menu
    connect.classList.toggle('account-visible');
  }
}
const bouton = document.querySelector('.profil-button');
bouton.addEventListener('click', toggleProfil); // ajoute un gestionnaire d'événements au clic sur le bouton qui appelle la fonction toggleProfil

function CloseConnect() {
  const inscriptionTitle = document.querySelector('#sInscrire');
  inscriptionTitle.style.fontSize = '25px';
  const connect = document.querySelector('.connect');
  connect.classList.remove('profil-visible'); // ajoute ou retire la classe 'menu-visible' au menu
  const connexion = document.querySelector('.connexion'); // Lorsque qu'on ouvre le menu par defaut l'onglet Connexion s'ouvre
  connexion.classList.toggle('connexion-visible');

}
const close = document.querySelector('#close');
close.addEventListener('click', CloseConnect); // ajoute un gestionnaire d'événements au clic sur le bouton qui appelle la fonction CloseConnect

///////Inscription Ou Connexion
function toggleConnexion() {
  const connexion = document.querySelector('.connexion');
  const inscription = document.querySelector('.inscription');
  const connexionTitle = document.querySelector('#seconnecter');
  const inscriptionTitle = document.querySelector('#sInscrire');
  const profil = document.querySelector('.profil');
  if(!connexion.classList.contains('connexion-visible')) {
    connexion.classList.toggle('connexion-visible');
    inscription.classList.remove('inscription-visible');
    profil.style.backgroundImage = "url('../assets/img/quis.jpg')"
    connexionTitle.style.fontSize = '30px';
    inscriptionTitle.style.fontSize = '25px';
  }

}
const seconnecter = document.querySelector('#seconnecter');
seconnecter.addEventListener('click', toggleConnexion);

function toggleInscription() {
  const inscription = document.querySelector('.inscription');
  const connexion = document.querySelector('.connexion');
  const connexionTitle = document.querySelector('#seconnecter');
  const inscriptionTitle = document.querySelector('#sInscrire');
  const profil = document.querySelector('.profil');
  if(!inscription.classList.contains('inscription-visible')) {
    inscriptionTitle.style.fontSize = '30px';
    connexionTitle.style.fontSize = '25px';
    inscription.classList.toggle('inscription-visible');
    connexion.classList.remove('connexion-visible');
    profil.style.backgroundImage = "url('../assets/img/img4s.jpg')"
  }
}
const sInscrire = document.querySelector('#sInscrire');
sInscrire.addEventListener('click', toggleInscription);

///////////////////////////////

// Changer avec les boutons et les cases les images 

var slideIndex = 1;
showSlides(slideIndex);

function plusSlides(n) {
  showSlides((slideIndex += n));
}

function currentSlide(n) {
  showSlides((slideIndex = n));
}

function showSlides(n) {
  var i;
  var slides = document.getElementsByClassName("diapo");
  var rond = document.getElementsByClassName("rond");
  if (n > slides.length) {
    slideIndex = 1;
  }
  if (n < 1) {
    slideIndex = slides.length;
  }
  for (i = 0; i < slides.length; i++) {
    slides[i].style.display = "none";
  }
  for (i = 0; i < rond.length; i++) {
    rond[i].className = rond[i].className.replace(" active", "");
  }
  slides[slideIndex - 1].style.display = "block";
  rond[slideIndex - 1].className += " active";
}


//////////////////////////
// Voir plus de suggestions 

function showCards() {
  const hideCard = document.querySelector('#hide-card'); 
  const btnText = document.querySelector('.changeText'); 
  if (hideCard.style.display === 'flex') {
    hideCard.style.display = 'none'; 
    btnText.innerHTML = 'Plus +';
    hideCard.style.maxHeight = null;

  }
  else {
    hideCard.style.display = 'flex'; 
    btnText.innerHTML = 'Moins -';
    hideCard.style.maxHeight = hideCard.scrollHeight + "px";
  }
}
console.log(showCards)
const savoirplus = document.querySelector('.savoirplus'); 
savoirplus.addEventListener('click', showCards); // ajoute un gestionnaire d'événements au clic sur le bouton qui appelle la fonction showCard

///////////////////////////////////
