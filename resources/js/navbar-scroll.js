window.addEventListener('scroll', function() {
  var navbar = document.querySelector('.navbar');
  var navLinks = document.querySelectorAll('.nav-link');
  var logBtn = document.querySelector('#btn-login');
  var signUpBtn = document.querySelector('#btn-sign-up');
  
  if (window.scrollY > 0) {
    navbar.classList.add('bg-white');
    navbar.classList.remove('bg-transparent');
    navbar.classList.add('navbar-light');
    navbar.classList.remove('navbar-dark');
    navbar.style.transition = 'all 1s'; 
    navLinks.forEach(function(link) {
      link.classList.add('text-black');
      link.classList.remove('text-white');
    });
    logBtn.classList.remove('btn-outline-white');
    logBtn.classList.add('btn-outline-dark');
    signUpBtn.classList.remove('btn-outline-white');
    signUpBtn.classList.add('btn-outline-dark');
  } else {
    navbar.classList.remove('bg-white');
    navbar.classList.add('bg-transparent');
    navbar.classList.remove('navbar-light');
    navbar.classList.add('navbar-dark');
    navLinks.forEach(function(link) {
      link.classList.remove('text-black');
      link.classList.add('text-white');
    });
    logBtn.classList.add('btn-outline-white');
    logBtn.classList.remove('btn-outline-dark');
    signUpBtn.classList.add('btn-outline-white');
    signUpBtn.classList.remove('btn-outline-dark');
  }
});
