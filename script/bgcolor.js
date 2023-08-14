const body = document.querySelector('body');
const circle = document.querySelector('.circle');
const logopng = document.querySelector('.header__logo');
const logoImage = document.querySelector('.header__link > img');
const bgColors = [1, 2, 3, 4, 5, 6];
const randomColor = bgColors[Math.floor(Math.random() * bgColors.length)];

window.onload = function () {
  body.classList.add(`color${randomColor}`);
  logopng.src = `images/logo${randomColor}.png`;
};

window.addEventListener('mousemove', (e) => {
  const mouseX = e.pageX;
  const mouseY = e.pageY;
  circle.style.left = `${mouseX}px`;
  circle.style.top = `${mouseY}px`;
});

document.addEventListener('DOMContentLoaded', () => {
  new TypeIt('.heading__h2').pause(1000).go();
});
