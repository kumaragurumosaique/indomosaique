

document.addEventListener("DOMContentLoaded", function() {
  const totalTestimonials = document.querySelectorAll('.testimonial').length;
  let currentIndex = 0;
  let timer;

  function nextTestimonial() {
    currentIndex = (currentIndex + 1) % totalTestimonials;
    showTestimonial(currentIndex);
  }

  function startTimer() {
    timer = setInterval(nextTestimonial, 3000); // Change testimonial every 3 seconds (3000 milliseconds)
  }

  function stopTimer() {
    clearInterval(timer);
  }

  // Start the timer initially
  startTimer();
});

