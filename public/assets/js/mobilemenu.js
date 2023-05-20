//HANDILING NAVIGAITON
var hamburgerMenu = document.querySelector('.menu-burger');
var closeNav = document.querySelector('.close-nav');
var menu = document.querySelector('.menu');
var phone = document.querySelector('.call-us');
var hero = document.querySelector('.hero');

//console.log();

hamburgerMenu.addEventListener('click', e => {
  hamburgerMenu.classList.add('hide');
  closeNav.classList.add('show-block');
  phone.classList.add('show-block');
  menu.classList.add('show-flex')
  hero.classList.add('bg-dark')
})

closeNav.addEventListener('click', e => {
  hamburgerMenu.classList.remove('hide');
  closeNav.classList.remove('show-block');
  phone.classList.remove('show-block');
  menu.classList.remove('show-flex');
  hero.classList.remove('bg-dark')



})

