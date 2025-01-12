let search = document.querySelector('.search-box');

document.querySelector('#search-icon').onclick = () => {
  search.classList.toggle('active');
};

document.addEventListener('DOMContentLoaded', function () {
  const searchBox = document.querySelector('.search-box');
  const searchIcon = document.querySelector('#search-icon');
  const contactForm = document.getElementById('contactForm');

  if (searchIcon) {
    searchIcon.onclick = () => {
      searchBox.classList.toggle('active');
    };
  }
});
