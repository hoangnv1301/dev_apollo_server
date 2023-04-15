//ALL QUESTIONS -> NODE LIST
var questions = document.querySelectorAll('.question');
//TOTAL QUESTIONS
var total = questions.length;
//CURRENT QUESTION
var current = document.querySelector('.question.current');
//CURRENT QUESTION NUMBER
var currentInt = parseInt(current.getAttribute('data-id'));

//NAVIGATION BUTTON
var next = document.querySelector('.navigation-next .btn');
var back = document.querySelector('.navigation-back .btn');

//NAVIGATINO CURRENT AND TOTAL
var navCurrent = document.querySelector('.navigation-body .currentNav');
var navTotal = document.querySelector('.navigation-body .total');

//UPDATE NAVIGATION
navCurrent.textContent = currentInt;
navTotal.textContent = total;

next.addEventListener('click', e => {
  e.preventDefault();
  if(currentInt == total){
    //DISABLE NEXT
    next.classList.add('disabled');
  }else{
    if(currentInt == 1){
      //Remove disabled class
      back.classList.remove('disabled');
    }
    //Remove current class from question
    questions[currentInt-1].classList.remove('current')

    //Add current class to new question
    questions[currentInt].classList.add('current')

    //Update current int
    currentInt = currentInt + 1;
    //Update navigation
    navCurrent.textContent = currentInt;

  }
  
});


back.addEventListener('click', e => {
  e.preventDefault();
  if(currentInt == 1){
    back.classList.add('disabled');
  }else{
    if(currentInt == 5){
      next.classList.remove('disabled');
      //Remove current class from question
      questions[currentInt-1].classList.remove('current')

      //Add current class to preious question
      questions[currentInt-2].classList.add('current')

      //Update current int
      currentInt = currentInt - 1;
      //Update navigation
      navCurrent.textContent = currentInt;
    }else{
      //Remove current class from question
      questions[currentInt-1].classList.remove('current')

      //Add current class to new question
      questions[currentInt-2].classList.add('current')

      //Update current int
      currentInt = currentInt - 1;
      //Update navigation
      navCurrent.textContent = currentInt;
    }
    
  }
  
});


//RADIOS
var labels = document.querySelectorAll('label');

labels.forEach(label => {
  label.addEventListener('click', e => {
    e.preventDefault();
    console.log(e.target.previousElementSibling.checked = 'true');
  });
})
console.log(labels);


