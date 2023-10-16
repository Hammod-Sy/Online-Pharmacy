const slides = document.querySelectorAll('.slide');
const slideNavButtons = document.querySelectorAll('#slider-nav button');
let activeSlide = 0;

// Add click event listeners to slider navigation buttons
slideNavButtons.forEach((button, index) => {
  button.addEventListener('click', () => {
    // Remove the active class from the current slide and button
    slides[activeSlide].classList.remove('active');
    slideNavButtons[activeSlide].classList.remove('active');

    // Set the new active slide index
    activeSlide = index;

    // Add the active class to the new slide and button
    slides[activeSlide].classList.add('active');
    slideNavButtons[activeSlide].classList.add('active');
  });
});

// Set the first slide and button to active on page load
slides[activeSlide].classList.add('active');
slideNavButtons[activeSlide].classList.add('active');

// Advance to the next slide every 5 seconds
setInterval(() => {
  nextSlide();
}, 5000);

// Define the nextSlide function
function nextSlide() {
  // Remove the active class from the current slide and button
  slides[activeSlide].classList.remove('active');
  slideNavButtons[activeSlide].classList.remove('active');

  // Advance to the next slide or reset to the beginning
  activeSlide = (activeSlide + 1) % slides.length;
  if (activeSlide === 2) {
    slides.forEach((slide) => {
      slide.classList.remove('active');
    });
    activeSlide = 0;
  }

  // Add the active class to the new slide and button
  slides[activeSlide].classList.add('active');
  slideNavButtons[activeSlide].classList.add('active');
}
