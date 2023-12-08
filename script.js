document.addEventListener("DOMContentLoaded", function () {
    const slider = document.querySelector(".slider");
    let slideIndex = 0;
  
    function showSlide(index) {
      if (index < 0) {
        index = slider.children.length - 1;
      } else if (index >= slider.children.length) {
        index = 0;
      }
  
      const transformValue = -index * 100 + "%";
      slider.style.transform = `translateX(${transformValue})`;
      slideIndex = index;
    }
  
    function nextSlide() {
      showSlide(slideIndex + 1);
    }
  
    function prevSlide() {
      showSlide(slideIndex - 1);
    }
  
  
    // Add event listeners for manual control (e.g., buttons)
    const nextButton = document.getElementById("nextButton");
    const prevButton = document.getElementById("prevButton");
  
    if (nextButton && prevButton) {
      nextButton.addEventListener("click", nextSlide);
      prevButton.addEventListener("click", prevSlide);
    }
  });
  