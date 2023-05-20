var images = document.querySelectorAll('.slider-image');
let n = 0;
if (images.length > 0) {
    images.forEach(image => {
        image.style.display = "none";
    });
    images[n].style.display = "block";



    setInterval(() => {
        if (n == 2) {
            n = 0;
        }
        images.forEach(image => {
            image.style.display = "none";
        });
        images[n].style.display = "block";

        n++;
    }, 2000)
}

//// BOOK A CALL BUTTON AND MODAL
// var bookCallBtn = document.querySelector('.bookCall');
// var modal = document.querySelector('.modal');
// var closeModal = document.querySelector('.closeModal');

// bookCallBtn.addEventListener('click', e => {
//     e.preventDefault();
//     modal.style.display = 'flex';
// })

// closeModal.addEventListener('click', e => {
//     e.preventDefault();
//     modal.style.display = 'none';
// })




