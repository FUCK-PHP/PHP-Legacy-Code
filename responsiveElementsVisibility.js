function moveElementsBasedOnWidth() {
  const sources = document.querySelectorAll('.source');
  const windowWidth = window.innerWidth;

  let visibleCount = 0;

  // Removed condition for windowWidth >= 1600
  if (windowWidth >= 1400) {
    visibleCount = 5;
  } else if (windowWidth >= 1200) {
    visibleCount = 4;
  } else if (windowWidth >= 992) {
    visibleCount = 3;
  } else if (windowWidth >= 768) {
    visibleCount = 2;
  } else if (windowWidth >= 468) {
    visibleCount = 1;
  }

  sources.forEach((source, index) => {
    // Show or hide elements based on visibleCount
    source.classList.toggle('hidden', index >= visibleCount);
  });
}

// Debounce function
function debounce(fn, delay) {
  let timeoutId;
  return function(...args) {
    clearTimeout(timeoutId);
    timeoutId = setTimeout(() => fn.apply(this, args), delay);
  };
}

// Initial run
moveElementsBasedOnWidth();

// Resize event listener with debounce
window.addEventListener('resize', debounce(moveElementsBasedOnWidth, 100)); 