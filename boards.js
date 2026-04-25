
const boards = document.querySelectorAll('.board');

window.addEventListener('scroll', () => {
  const trigger = window.innerHeight * 0.8; // scroll trigger point

  boards.forEach(board => {
    const top = board.getBoundingClientRect().top;
    const bottom = board.getBoundingClientRect().bottom;

    if (top < trigger && bottom > 0) {
      board.classList.add('visible');   // in view → animate
    } else {
      board.classList.remove('visible'); // out of view → reset
    }
  });
});
