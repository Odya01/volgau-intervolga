const btn = document.getElementById('catalog__btn');
const div = document.querySelector('.catalog');

function toggleDivVisibility(){
  div.classList.toggle('visibility');
}

btn.addEventListener('click', toggleDivVisibility);