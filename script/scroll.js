ScrollOut({
  onShown: (e) => {
    new TypeIt(e.querySelector('.work__heading'), {
      startDelay: 500,
      cursor: false,
    })
      .pause(3000)
      .go();
  },
});

const toTop = document.querySelector('.work__top');
window.addEventListener('scroll', () => {
  if (window.pageYOffset > 100) {
    toTop.classList.add('active');
  } else {
    toTop.classList.remove('active');
  }
});
