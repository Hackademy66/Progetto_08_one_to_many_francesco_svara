window.addEventListener('scroll', function() {
  let navbar = document.querySelector('.navbar');
  let navLinks = document.querySelectorAll('.nav-link');
  const button1 = document.querySelector('#myButton1');
  const button2 = document.querySelector('#myButton2');
  const button3 = document.querySelector('#myButton3');
  const button4 = document.querySelector('#myButton4');
  
  if (window.scrollY > 0) {
    navbar.classList.add('bg-white');
    navbar.classList.add('navbar-border');
    navbar.classList.remove('bg-transparent');
    navbar.classList.add('navbar-light');
    navbar.classList.remove('navbar-dark');
    if (button1 && button2) {
      button1.classList.replace('btn-outline-light', 'btn-outline-dark');
      button2.classList.replace('btn-outline-light', 'btn-outline-dark');
    }
    if (button3 && button4) {
      button3.classList.replace('btn-outline-light', 'btn-outline-dark');
      button4.classList.replace('btn-outline-light', 'btn-outline-dark');
    }
    navbar.style.transition = 'all 1s'; 
    navLinks.forEach(function(link) {
      link.classList.add('text-black');
      link.classList.remove('text-white');
    });
  } else {
    navbar.classList.remove('bg-white');
    navbar.classList.remove('navbar-border');
    navbar.classList.add('bg-transparent');
    navbar.classList.remove('navbar-light');
    navbar.classList.add('navbar-dark');
    navLinks.forEach(function(link) {
      link.classList.remove('text-black');
      link.classList.add('text-white');
    });
    if (button1 && button2) {
      button1.classList.replace('btn-outline-dark', 'btn-outline-light');
      button2.classList.replace('btn-outline-dark', 'btn-outline-light');
    }
    if (button3 && button4) {
      button3.classList.replace('btn-outline-dark', 'btn-outline-light');
      button4.classList.replace('btn-outline-dark', 'btn-outline-light');
    }
  }
});