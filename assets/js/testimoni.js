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

    const labels = [
      "",
      "Sangat Buruk",
      "Buruk",
      "Cukup",
      "Bagus",
      "Sangat Bagus",
    ];
    ratingText.textContent = labels[selectedRating] || "Pilih rating";
  }

  // Validation function
  function validateForm(formData) {
    const nama = formData.get("nama")?.trim();
    const pesan = formData.get("pesan")?.trim();
    const rating = parseInt(formData.get("rating"));

    if (!nama || nama.length < 2) {
      Swal.fire({
        icon: "error",
        title: "Nama Tidak Valid",
        text: "Nama harus diisi minimal 2 karakter",
        confirmButtonColor: "#2563eb",
      });
      return false;
    }

    if (!rating || rating < 1 || rating > 5) {
      Swal.fire({
        icon: "error",
        title: "Rating Belum Dipilih",
        text: "Silakan pilih rating dari 1-5 bintang",
        confirmButtonColor: "#2563eb",
      });
      return false;
    }

    if (!pesan || pesan.length < 10) {
      Swal.fire({
        icon: "error",
        title: "Pesan Tidak Valid",
        text: "Testimoni harus diisi minimal 10 karakter",
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
      btnText.textContent = "Mengirim...";
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
            title: "Berhasil!",
            text: result.message || "Terima kasih atas testimoni Anda!",
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
            title: "Gagal Mengirim",
            text: result.message || "Terjadi kesalahan. Silakan coba lagi.",
            confirmButtonColor: "#ef4444",
          });
        }
      } catch (error) {
        console.error("Error:", error);
        Swal.fire({
          icon: "error",
          title: "Error",
          text: "Terjadi kesalahan jaringan. Silakan coba lagi.",
          confirmButtonColor: "#ef4444",
        });
      } finally {
        // Re-enable button and hide loader
        submitBtn.disabled = false;
        btnText.textContent = "Kirim Testimoni";
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
      "bg-white/95 backdrop-blur-sm rounded-lg shadow-lg p-6 space-y-4 hover:shadow-xl transition-shadow";

    const stars = "⭐".repeat(testimonial.rating);

    const dateStr = formatDate(testimonial.created_at);

    card.innerHTML = `
            <div class="flex justify-between items-start">
                <h3 class="font-bold text-lg text-gray-800">${escapeHtml(testimonial.nama)}</h3>
                <span class="text-sm text-gray-500">${dateStr}</span>
            </div>
            <div class="text-yellow-500 text-xl">${stars}</div>
            <p class="text-gray-700 leading-relaxed">${escapeHtml(testimonial.pesan)}</p>
        `;

    return card;
  }

  // Format date
  function formatDate(dateString) {
    if (!dateString) return "";

    const date = new Date(dateString);
    const options = { year: "numeric", month: "long", day: "numeric" };
    return date.toLocaleDateString("id-ID", options);
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
