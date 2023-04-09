ScrollOut({
  onShown: (e) => {
    new TypeIt(e.querySelector('.work__heading'), {
      startDelay: 500,
      cursor: false,
    })
      .pause(2000)
      .go();
  },
});
