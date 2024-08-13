feather.replace();
let button = document.querySelector('.button');
let navbar = document.querySelector('.navbar');
let navLinks = document.querySelectorAll('.navbar a');

button.onclick = function(){
    button.classList.toggle('active');
    navbar.classList.toggle('active');
}

navLinks.forEach(function(link) {
    link.onclick = function() {
        button.classList.remove('active');
        navbar.classList.remove('active');
    }
});

let subMenu = document.getElementById("subMenu");
      function toggleMenu() {
        subMenu.classList.toggle("open-menu");
      }