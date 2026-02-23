<?php
$page_title = 'Contact - Jogja Tour Borobudur';
$page_description = 'Hubungi Jogja Tour Borobudur untuk informasi lengkap tentang paket wisata, booking, atau pertanyaan lainnya. Kami siap melayani Anda 24/7.';
$page_keywords = 'kontak jogja tour, booking tour jogja, hubungi jogja tour borobudur';

require_once 'config/constants.php';
include 'includes/head.php';
include 'includes/header.php';
?>

<main class="relative min-h-screen bg-[url('assets/images/bg-gringsing.webp')] bg-fixed bg-cover">
    
    <!-- Header -->
    <section class="pt-20 md:pt-28 px-5 md:px-20 pb-10">
        <div class="max-w-6xl mx-auto text-center bg-white/90 backdrop-blur-sm p-8 md:p-12 rounded-lg shadow-xl">
            <h1 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4">
                Hubungi Kami
            </h1>
            <p class="text-lg md:text-xl text-gray-700">
                Kami siap membantu Anda merencanakan perjalanan wisata yang tak terlupakan
            </p>
        </div>
    </section>

    <!-- Contact Info Cards -->
    <section class="py-10 px-5 md:px-20">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 lg:grid-cols-4 gap-6">
            <!-- Phone -->
            <div class="bg-white/90 backdrop-blur-sm p-6 rounded-lg shadow-lg text-center hover:scale-105 transition-transform">
                <div class="text-5xl mb-4">📞</div>
                <h3 class="font-bold text-gray-800 mb-2">Telepon</h3>
                <a href="tel:<?php echo COMPANY_PHONE; ?>" class="text-blue-600 hover:underline">
                    <?php echo COMPANY_PHONE; ?>
                </a>
            </div>

            <!-- WhatsApp -->
            <div class="bg-white/90 backdrop-blur-sm p-6 rounded-lg shadow-lg text-center hover:scale-105 transition-transform">
                <div class="text-5xl mb-4">💬</div>
                <h3 class="font-bold text-gray-800 mb-2">WhatsApp</h3>
                <a href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>" target="_blank" class="text-green-600 hover:underline">
                    Chat Sekarang
                </a>
            </div>

            <!-- Email -->
            <div class="bg-white/90 backdrop-blur-sm p-6 rounded-lg shadow-lg text-center hover:scale-105 transition-transform">
                <div class="text-5xl mb-4">📧</div>
                <h3 class="font-bold text-gray-800 mb-2">Email</h3>
                <a href="mailto:<?php echo COMPANY_EMAIL; ?>" class="text-blue-600 hover:underline break-all">
                    <?php echo COMPANY_EMAIL; ?>
                </a>
            </div>

            <!-- Social Media -->
            <div class="bg-white/90 backdrop-blur-sm p-6 rounded-lg shadow-lg text-center hover:scale-105 transition-transform">
                <div class="text-5xl mb-4">🌐</div>
                <h3 class="font-bold text-gray-800 mb-3">Social Media</h3>
                <div class="flex justify-center gap-3">
                    <a href="<?php echo FACEBOOK_URL; ?>" target="_blank" class="text-blue-600 hover:text-blue-700 text-2xl">📘</a>
                    <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" class="text-pink-600 hover:text-pink-700 text-2xl">📷</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form -->
    <section class="py-16 px-5 md:px-20 bg-black/30 backdrop-blur-lg border-t border-b border-white/20">
        <div class="bg-gradient-to-r from-gray-100 to-white p-6 md:p-10 rounded-lg shadow-2xl max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800">Kirim Pesan</h2>
            <p class="text-gray-600 mb-8">
                Atau isi form di bawah ini dan kami akan menghubungi Anda secepatnya
            </p>
            
            <form id="contactForm" class="space-y-6">
                <div class="grid md:grid-cols-2 gap-6">
                    <div>
                        <label for="nama" class="block text-sm md:text-base font-medium text-gray-700 mb-2">
                            Nama Lengkap <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="text" 
                            id="nama" 
                            name="nama" 
                            placeholder="Masukkan nama Anda" 
                            required 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                        >
                    </div>

                    <div>
                        <label for="email" class="block text-sm md:text-base font-medium text-gray-700 mb-2">
                            Email <span class="text-red-500">*</span>
                        </label>
                        <input 
                            type="email" 
                            id="email" 
                            name="email" 
                            placeholder="contoh@email.com" 
                            required 
                            class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                        >
                    </div>
                </div>

                <div>
                    <label for="subjek" class="block text-sm md:text-base font-medium text-gray-700 mb-2">
                        Subjek <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="subjek" 
                        name="subjek" 
                        placeholder="Subjek pesan Anda" 
                        required 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                    >
                </div>

                <div>
                    <label for="pesan" class="block text-sm md:text-base font-medium text-gray-700 mb-2">
                        Pesan <span class="text-red-500">*</span>
                    </label>
                    <textarea 
                        id="pesan" 
                        name="pesan" 
                        placeholder="Tulis pesan Anda di sini... (minimal 10 karakter)"
                        rows="6"
                        required 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all resize-none"
                    ></textarea>
                    <p class="text-sm text-gray-500 mt-1">Minimal 10 karakter</p>
                </div>

                <button 
                    type="submit" 
                    id="submitBtn"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-4 px-6 rounded-lg transition-colors duration-300 flex items-center justify-center gap-2 text-lg"
                >
                    <span id="btnText">Kirim Pesan</span>
                    <svg id="btnLoader" class="hidden w-6 h-6 animate-spin" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </form>
        </div>
    </section>

    <!-- Operating Hours & Additional Info -->
    <section class="py-16 px-5 md:px-20">
        <div class="max-w-6xl mx-auto grid md:grid-cols-2 gap-8">
            <!-- Operating Hours -->
            <div class="bg-white/90 backdrop-blur-sm p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                    <span class="text-3xl">⏰</span> Jam Operasional
                </h3>
                <div class="space-y-3 text-gray-700">
                    <div class="flex justify-between pb-3 border-b">
                        <span class="font-medium">Senin - Jumat</span>
                        <span>08:00 - 20:00 WIB</span>
                    </div>
                    <div class="flex justify-between pb-3 border-b">
                        <span class="font-medium">Sabtu - Minggu</span>
                        <span>08:00 - 22:00 WIB</span>
                    </div>
                    <div class="flex justify-between pb-3">
                        <span class="font-medium">Hari Libur</span>
                        <span>24/7 (WhatsApp)</span>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us -->
            <div class="bg-white/90 backdrop-blur-sm p-8 rounded-lg shadow-lg">
                <h3 class="text-2xl font-bold text-gray-800 mb-6 flex items-center gap-3">
                    <span class="text-3xl">⭐</span> Kenapa Pilih Kami?
                </h3>
                <ul class="space-y-3 text-gray-700">
                    <li class="flex items-start gap-3">
                        <span class="text-green-600 mt-1">✓</span>
                        <span>Driver berpengalaman & ramah</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-green-600 mt-1">✓</span>
                        <span>Harga kompetitif & transparan</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-green-600 mt-1">✓</span>
                        <span>Armada terawat & nyaman</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-green-600 mt-1">✓</span>
                        <span>Pelayanan 24/7</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-green-600 mt-1">✓</span>
                        <span>Flexible & customizable</span>
                    </li>
                </ul>
            </div>
        </div>
    </section>

</main>

<?php 
include 'includes/footer.php';
include 'includes/whatsapp-button.php';
?>

<!-- SweetAlert2 CDN -->
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

<!-- Custom Scripts -->
<script src="assets/js/email-form.js"></script>

</body>
</html>
