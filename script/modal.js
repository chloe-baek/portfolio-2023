const modals = document.querySelectorAll('.modal');
const overlay = document.querySelector('overlay');
const btnsClose = document.querySelectorAll('.btn__close');
const btnsShow = document.querySelectorAll('.btn__show');

for (let i = 0; i < btnsShow.length; i++) {
  btnsShow[i].addEventListener('click', () => {
    modals[i].classList.remove('hidden');
    overlay.classList.remove('hidden');
  });
}

for (let i = 0; i < btnsClose.length; i++) {
  btnsClose[i].addEventListener('click', () => {
    modals[i].classList.add('hidden');
    overlay.classList.add('hidden');
  });
}

document.addEventListener('keydown', function (e) {
  if (e.key === 'Escape') {
    modals.forEach((c) => c.classList.add('hidden'));
    overlay.classList.add('hidden');
  }
});
