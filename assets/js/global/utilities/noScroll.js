//  ! Requires corresponding styles to work

export function noScroll(stopScrolling = true) {
  const html = document.documentElement;
  const scrollPosition = stopScrolling
    ? window.pageYOffset
    : html.getAttribute('data-scroll-offset');

  if (stopScrolling) {
    html.classList.add('noscroll');
    html.setAttribute('data-scroll-offset', scrollPosition);

    //  Add offset to the page equal to the scroll
    html.style.top = `${-scrollPosition}px`;
  } else {
    html.classList.remove('noscroll');
    html.style.top = '';

    //  Scroll back to the previous position
    //  Only if there is a position to move back to
    if (scrollPosition !== null) {
      window.scrollTo(0, scrollPosition);
    }
  }
}
