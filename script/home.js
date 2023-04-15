gsap.from('.home__para', { duration: 6, ease: 'power4.inOut', x: -500 });
gsap.from('.home__heading', {
  duration: 8,
  ease: 'power4.inOut',
  x: -500,
});

gsap.from('.loading__page--wrapper', 2, {
  scale: 0.8,
  ease: 'power1.inOut',
});

gsap.from('.loading__page', 2, {
  top: '100%',
  ease: 'power3.inOut',
});

gsap.to(
  '.loading__page--wrapper, .loading__pre',
  1,
  {
    scale: 1.5,
    opacity: 0,
    display: 'none',
    ease: 'power3.inOut',
    delay: 2,
  },
  '-=1'
);

gsap.to('.loading__reveal', 0.8, {
  left: '100%',
  ease: 'power3.inOut',
  delay: 3,
});
