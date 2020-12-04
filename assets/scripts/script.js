window.onload = () => {
  let hamburgerMenu = document.querySelector('.hamburger-menu');
  let navLinks = document.querySelector('.nav-links');

  hamburgerMenu.addEventListener('click', () => {
    navLinks.classList.toggle('visible');
  });
};
