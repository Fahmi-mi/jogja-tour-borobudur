// Image Slider with Auto-play
(function () {
  const sliderItems = document.querySelectorAll(".slider-item");
  const dots = document.querySelectorAll(".dot");
  const prevBtn = document.getElementById("prevBtn");
  const nextBtn = document.getElementById("nextBtn");

  if (!sliderItems.length) return;

  let currentIndex = 0;
  let isAnimating = false;
  let autoplayInterval;

  // Show slide function
  function showSlide(index) {
    if (isAnimating) return;
    isAnimating = true;

    // Hide all slides
    sliderItems.forEach((item) => {
      item.classList.remove("opacity-100");
      item.classList.add("opacity-0");
    });

    // Update dots
    dots.forEach((dot) => {
      dot.classList.remove("bg-gray-800");
      dot.classList.add("bg-gray-400");
    });

    // Show current slide
    sliderItems[index].classList.remove("opacity-0");
    sliderItems[index].classList.add("opacity-100");

    // Update current dot
    if (dots[index]) {
      dots[index].classList.remove("bg-gray-400");
      dots[index].classList.add("bg-gray-800");
    }

    setTimeout(() => {
      isAnimating = false;
    }, 500);
  }

  // Next slide
  function nextSlide() {
    currentIndex = (currentIndex + 1) % sliderItems.length;
    showSlide(currentIndex);
  }

  // Previous slide
  function prevSlide() {
    currentIndex = (currentIndex - 1 + sliderItems.length) % sliderItems.length;
    showSlide(currentIndex);
  }

  // Start autoplay
  function startAutoplay() {
    stopAutoplay();
    autoplayInterval = setInterval(nextSlide, 4000); // 4 seconds
  }

  // Stop autoplay
  function stopAutoplay() {
    if (autoplayInterval) {
      clearInterval(autoplayInterval);
    }
  }

  // Event listeners
  if (nextBtn) {
    nextBtn.addEventListener("click", () => {
      nextSlide();
      stopAutoplay();
      startAutoplay(); // Restart autoplay
    });
  }

  if (prevBtn) {
    prevBtn.addEventListener("click", () => {
      prevSlide();
      stopAutoplay();
      startAutoplay(); // Restart autoplay
    });
  }

  // Dots click
  dots.forEach((dot, index) => {
    dot.addEventListener("click", () => {
      currentIndex = index;
      showSlide(currentIndex);
      stopAutoplay();
      startAutoplay(); // Restart autoplay
    });
  });

  // Pause on hover
  const slider = document.getElementById("imageSlider");
  if (slider) {
    slider.addEventListener("mouseenter", stopAutoplay);
    slider.addEventListener("mouseleave", startAutoplay);
  }

  // Start autoplay on load
  startAutoplay();
})();

// YouTube Video Player
(function () {
  // Video 1
  const video1Container = document.getElementById("video1Container");
  const thumbnail1 = document.getElementById("thumbnail1");
  const iframe1 = document.getElementById("iframe1");

  if (video1Container && iframe1) {
    video1Container.addEventListener("click", function () {
      iframe1.src = "https://www.youtube.com/embed/1V_4-f5Ocy4?autoplay=1";
      video1Container.classList.add("hidden");
      iframe1.classList.remove("hidden");
    });
  }

  // Video 2
  const video2Container = document.getElementById("video2Container");
  const thumbnail2 = document.getElementById("thumbnail2");
  const iframe2 = document.getElementById("iframe2");

  if (video2Container && iframe2) {
    video2Container.addEventListener("click", function () {
      iframe2.src = "https://www.youtube.com/embed/lIZeZMbUG6s?autoplay=1";
      video2Container.classList.add("hidden");
      iframe2.classList.remove("hidden");
    });
  }
})();
