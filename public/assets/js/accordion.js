//ACCORDION
var accordion_close = document.querySelectorAll('.accordion-close');
var accordion_open = document.querySelectorAll('.accordion-open');

accordion_open.forEach(accordion => {
  accordion.addEventListener('click', e => {
    e.preventDefault();
    e.currentTarget.parentElement.parentElement.classList.add('active')
  })
});

accordion_close.forEach(accordion => {
  accordion.addEventListener('click', e => {
    e.preventDefault();
    e.currentTarget.parentElement.parentElement.classList.remove('active')
  })
});