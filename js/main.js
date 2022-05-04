//Als het waar dat een div slideshow bevat
const main = document.querySelector('main');

if(main.classList.contains('main-content')) {
  // Voeg dan fixed class toe aan de nav
  var nav = document.getElementById("nav");
  nav.className += " fixed";
}


