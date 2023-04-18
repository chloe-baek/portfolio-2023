const container = Array.from(document.querySelectorAll('.work__imgContainer'));
container.forEach((item) => {
  const video = item.querySelector('video');

  item.addEventListener('mouseover', () => {
    item.classList.add('active');
    !video.play() ? video.play() : '';
  });
  item.addEventListener('mouseleave', () => {
    item.classList.remove('active');
    video.play() ? video.pause() : '';
  });
});
