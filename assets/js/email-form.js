// Email/Contact Form Handler
(function () {
  const form = document.getElementById("contactForm");

  if (!form) return;

  const submitBtn = document.getElementById("submitBtn");
  const btnText = document.getElementById("btnText");
  const btnLoader = document.getElementById("btnLoader");

  // Validation functions
  function validateEmail(email) {
    const re = /^[^\s@]+@[^\s@]+\.[^\s@]+$/;
    return re.test(email);
  }

  function validateForm(formData) {
    const nama = formData.get("nama")?.trim();
    const email = formData.get("email")?.trim();
    const subjek = formData.get("subjek")?.trim();
    const pesan = formData.get("pesan")?.trim();

    if (!nama || nama.length < 2) {
      Swal.fire({
        icon: "error",
        title: "Nama Tidak Valid",
        text: "Nama harus diisi minimal 2 karakter",
        confirmButtonColor: "#2563eb",
      });
      return false;
    }

    if (!email || !validateEmail(email)) {
      Swal.fire({
        icon: "error",
        title: "Email Tidak Valid",
        text: "Masukkan alamat email yang valid",
        confirmButtonColor: "#2563eb",
      });
      return false;
    }

    if (!subjek || subjek.length < 3) {
      Swal.fire({
        icon: "error",
        title: "Subjek Tidak Valid",
        text: "Subjek harus diisi minimal 3 karakter",
        confirmButtonColor: "#2563eb",
      });
      return false;
    }

    if (!pesan || pesan.length < 10) {
      Swal.fire({
        icon: "error",
        title: "Pesan Tidak Valid",
        text: "Pesan harus diisi minimal 10 karakter",
        confirmButtonColor: "#2563eb",
      });
      return false;
    }

    return true;
  }

  // Form submit handler
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
      const response = await fetch("api/send_email.php", {
        method: "POST",
        headers: {
          "Content-Type": "application/json",
        },
        body: JSON.stringify({
          nama: formData.get("nama"),
          email: formData.get("email"),
          subjek: formData.get("subjek"),
          pesan: formData.get("pesan"),
        }),
      });

      const result = await response.json();

      if (result.success) {
        await Swal.fire({
          icon: "success",
          title: "Berhasil!",
          text:
            result.message ||
            "Pesan Anda berhasil dikirim. Kami akan segera menghubungi Anda!",
          confirmButtonColor: "#10b981",
        });

        // Reset form
        form.reset();
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
        text: "Terjadi kesalahan jaringan. Silakan coba lagi atau hubungi kami via WhatsApp.",
        confirmButtonColor: "#ef4444",
      });
    } finally {
      // Re-enable button and hide loader
      submitBtn.disabled = false;
      btnText.textContent = "Kirim Pesan";
      btnLoader.classList.add("hidden");
    }
  });
})();
