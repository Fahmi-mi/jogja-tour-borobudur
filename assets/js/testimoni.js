// Testimonial Form & List Handler
(function () {
  const form = document.getElementById("testimoniForm");
  const testimoniContainer = document.getElementById("testimoniContainer");
  const loadingState = document.getElementById("loadingState");
  const errorState = document.getElementById("errorState");
  const emptyState = document.getElementById("emptyState");

  // Rating stars functionality
  const stars = document.querySelectorAll(".star");
  const ratingInput = document.getElementById("rating");
  const ratingText = document.getElementById("ratingText");

  let selectedRating = 0;

  stars.forEach((star) => {
    star.addEventListener("click", function (e) {
      e.preventDefault();
      selectedRating = parseInt(this.dataset.rating);
      ratingInput.value = selectedRating;
      updateStars();
    });

    star.addEventListener("mouseenter", function () {
      const hoverRating = parseInt(this.dataset.rating);
      highlightStars(hoverRating);
    });
  });

  document
    .querySelector(".rating-stars")
    .addEventListener("mouseleave", function () {
      updateStars();
    });

  function highlightStars(rating) {
    stars.forEach((star, index) => {
      if (index < rating) {
        star.classList.remove("text-gray-300");
        star.classList.add("text-yellow-400");
      } else {
        star.classList.remove("text-yellow-400");
        star.classList.add("text-gray-300");
      }
    });
  }

  function updateStars() {
    highlightStars(selectedRating);

    const labels = ["", "Very Poor", "Poor", "Fair", "Good", "Excellent"];
    ratingText.textContent = labels[selectedRating] || "Choose rating";
  }

  // Validation function
  function validateForm(formData) {
    const nama = formData.get("nama")?.trim();
    const pesan = formData.get("pesan")?.trim();
    const rating = parseInt(formData.get("rating"));

    if (!nama || nama.length < 2) {
      Swal.fire({
        icon: "error",
        title: "Invalid Name",
        text: "Name must contain at least 2 characters",
        confirmButtonColor: "#2563eb",
      });
      return false;
    }

    if (!rating || rating < 1 || rating > 5) {
      Swal.fire({
        icon: "error",
        title: "Rating Not Selected",
        text: "Please choose a rating between 1 and 5 stars",
        confirmButtonColor: "#2563eb",
      });
      return false;
    }

    if (!pesan || pesan.length < 10) {
      Swal.fire({
        icon: "error",
        title: "Invalid Message",
        text: "Testimonial must contain at least 10 characters",
        confirmButtonColor: "#2563eb",
      });
      return false;
    }

    return true;
  }

  // Form submit handler
  if (form) {
    const submitBtn = document.getElementById("submitBtn");
    const btnText = document.getElementById("btnText");
    const btnLoader = document.getElementById("btnLoader");

    form.addEventListener("submit", async function (e) {
      e.preventDefault();

      const formData = new FormData(form);

      // Validate form
      if (!validateForm(formData)) {
        return;
      }

      // Disable button and show loader
      submitBtn.disabled = true;
      btnText.textContent = "Sending...";
      btnLoader.classList.remove("hidden");

      try {
        const response = await fetch("api/post_testimoni.php", {
          method: "POST",
          headers: {
            "Content-Type": "application/json",
          },
          body: JSON.stringify({
            nama: formData.get("nama"),
            pesan: formData.get("pesan"),
            rating: parseInt(formData.get("rating")),
          }),
        });

        const result = await response.json();

        if (result.success) {
          await Swal.fire({
            icon: "success",
            title: "Success!",
            text: result.message || "Thank you for your testimonial!",
            confirmButtonColor: "#10b981",
          });

          // Reset form
          form.reset();
          selectedRating = 0;
          ratingInput.value = 0;
          updateStars();

          // Reload testimonials
          loadTestimonials();
        } else {
          Swal.fire({
            icon: "error",
            title: "Submission Failed",
            text: result.message || "An error occurred. Please try again.",
            confirmButtonColor: "#ef4444",
          });
        }
      } catch (error) {
        console.error("Error:", error);
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "A network error occurred. Please try again.",
          confirmButtonColor: "#ef4444",
        });
      } finally {
        // Re-enable button and hide loader
        submitBtn.disabled = false;
        btnText.textContent = "Submit Testimonial";
        btnLoader.classList.add("hidden");
      }
    });
  }

  // Load testimonials
  async function loadTestimonials() {
    if (!testimoniContainer) return;

    // Show loading
    loadingState.classList.remove("hidden");
    errorState.classList.add("hidden");
    emptyState.classList.add("hidden");
    testimoniContainer.innerHTML = "";

    try {
      const response = await fetch("api/get_testimoni.php");

      if (!response.ok) {
        throw new Error("Network response was not ok");
      }

      const testimonials = await response.json();

      // Hide loading
      loadingState.classList.add("hidden");

      if (!Array.isArray(testimonials) || testimonials.length === 0) {
        emptyState.classList.remove("hidden");
        return;
      }

      // Display testimonials
      testimonials.forEach((t) => {
        const card = createTestimonialCard(t);
        testimoniContainer.appendChild(card);
      });
    } catch (error) {
      console.error("Error loading testimonials:", error);
      loadingState.classList.add("hidden");
      errorState.classList.remove("hidden");
    }
  }

  // Create testimonial card
  function createTestimonialCard(testimonial) {
    const card = document.createElement("div");
    card.className =
      "bg-white/15 backdrop-blur-xl border border-white/30 rounded-2xl shadow-lg p-6 space-y-4 hover:shadow-xl hover:-translate-y-1 transition-all duration-300";

    const stars = "⭐".repeat(testimonial.rating);

    const dateStr = formatDate(testimonial.created_at);

    card.innerHTML = `
            <div class="flex justify-between items-start">
          <h3 class="font-bold text-lg text-white">${escapeHtml(testimonial.nama)}</h3>
          <span class="text-sm text-white/70">${dateStr}</span>
            </div>
            <div class="text-yellow-500 text-xl">${stars}</div>
        <p class="text-white/90 leading-relaxed">${escapeHtml(testimonial.pesan)}</p>
        `;

    return card;
  }

  // Format date
  function formatDate(dateString) {
    if (!dateString) return "";

    const date = new Date(dateString);
    const options = { year: "numeric", month: "long", day: "numeric" };
    return date.toLocaleDateString("en-US", options);
  }

  // Escape HTML to prevent XSS
  function escapeHtml(text) {
    const div = document.createElement("div");
    div.textContent = text;
    return div.innerHTML;
  }

  // Make loadTestimonials available globally for error retry
  window.loadTestimonials = loadTestimonials;

  // Load testimonials on page load
  if (testimoniContainer) {
    loadTestimonials();
  }
})();
