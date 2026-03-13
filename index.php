<?php
$page_title = 'Beranda - Jogja Tour Borobudur';
$page_description = 'Selamat datang di Jogja Tour Borobudur. Nikmati pengalaman wisata terbaik di Yogyakarta dan Borobudur dengan paket tour lengkap dan harga terjangkau.';
$page_keywords = 'jogja tour, borobudur tour, wisata yogyakarta, paket tour jogja, travel borobudur';

include 'includes/head.php';
include 'includes/header.php';
?>

<main class="relative bg-[url('assets/images/bg-parang.webp')] bg-fixed bg-cover min-h-screen">
    
    <!-- Hero Section with Slider -->
    <section class="relative pb-16">
        <div class="container mx-auto px-4 md:px-20">
            <!-- Welcome Text -->
            <section class="relative z-10 w-full h-screen">
              <div class="flex flex-col justify-center h-full px-7 md:px-20 space-y-10">
                <div class="space-y-4">
                  <h1 class="text-2xl text-center md:text-4xl text-white font-medium">Welcome To</h1>
                  <h1 class="text-5xl text-center md:text-7xl text-white font-extrabold">Jogja Tour Borobudur</h1>
                </div>
                <p class="text-sm text-center md:text-xl text-white font-medium max-w-4xl mx-auto">
                  Experience the sacred harmony of Borobudur's ancient stones and lush landscapes. Find serenity in Indonesia's iconic wonder
                </p>
              </div>
            </section>

            <!-- Image Slider -->
            <div id="imageSlider" class="relative w-full max-w-5xl mx-auto bg-white rounded-lg shadow-2xl overflow-hidden">
                <div class="relative h-[300px] md:h-[500px]">
                    <!-- Slider Images -->
                    <?php for ($i = 1; $i <= 25; $i++): ?>
                    <div class="slider-item absolute w-full h-full opacity-0 transition-opacity duration-500 <?php echo $i === 1 ? 'opacity-100' : ''; ?>">
                        <img 
                            src="assets/images/slider/slide<?php echo $i; ?>.webp" 
                            alt="Slide <?php echo $i; ?>"
                            class="w-full h-full object-cover"
                            loading="<?php echo $i <= 3 ? 'eager' : 'lazy'; ?>"
                        >
                    </div>
                    <?php endfor; ?>
                    
                    <!-- Navigation Buttons -->
                    <button id="prevBtn" class="absolute left-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-3 rounded-full transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="nextBtn" class="absolute right-4 top-1/2 -translate-y-1/2 bg-black/50 hover:bg-black/70 text-white p-3 rounded-full transition-all">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>
                </div>

                <!-- Dots Indicator -->
                <div id="dotsContainer" class="flex justify-center gap-2 py-4 bg-gray-100">
                    <?php for ($i = 0; $i < 25; $i++): ?>
                    <button class="dot w-2 h-2 rounded-full bg-gray-400 hover:bg-gray-600 transition-colors <?php echo $i === 0 ? 'bg-gray-800' : ''; ?>"></button>
                    <?php endfor; ?>
                </div>
            </div>
        </div>
    </section>

    <!-- About Jogja & Borobudur Section -->
    <section class="py-16 px-5 md:px-20">
        <div class="max-w-6xl mx-auto bg-white/90 backdrop-blur-sm p-8 rounded-lg shadow-lg">
            <h2 class="text-3xl md:text-4xl font-bold text-center mb-10 text-gray-800">
                Tentang Yogyakarta & Borobudur
            </h2>
            
            <div class="grid md:grid-cols-2 gap-8">
                <!-- Yogyakarta -->
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-gray-800">Yogyakarta</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Yogyakarta adalah kota istimewa yang kaya akan budaya, sejarah, dan keindahan alam. 
                        Dari Keraton yang megah hingga pantai-pantai yang memukau, Yogyakarta menawarkan 
                        pengalaman wisata yang tak terlupakan. Kota ini juga dikenal sebagai pusat pendidikan 
                        dan seni budaya Jawa yang masih terjaga hingga saat ini.
                    </p>
                    
                    <!-- Video Yogyakarta -->
                    <div class="relative pt-[56.25%] bg-gray-200 rounded-lg overflow-hidden shadow-md">
                        <div id="video1Container" class="absolute inset-0 cursor-pointer group">
                            <img 
                                id="thumbnail1" 
                                src="https://img.youtube.com/vi/1V_4-f5Ocy4/hqdefault.jpg" 
                                alt="Video Yogyakarta"
                                class="w-full h-full object-cover"
                            >
                            <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/50 transition-all">
                                <svg class="w-20 h-20 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                        <iframe 
                            id="iframe1" 
                            class="absolute inset-0 w-full h-full hidden" 
                            src="" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>

                <!-- Borobudur -->
                <div class="space-y-4">
                    <h3 class="text-2xl font-bold text-gray-800">Candi Borobudur</h3>
                    <p class="text-gray-700 leading-relaxed">
                        Candi Borobudur adalah warisan dunia UNESCO dan merupakan candi Buddha terbesar di dunia. 
                        Dibangun pada abad ke-9, candi ini memiliki arsitektur yang menakjubkan dengan lebih dari 
                        2.000 panel relief dan 504 arca Buddha. Keindahan sunrise di Borobudur menjadi momen 
                        spiritual yang tak terlupakan bagi setiap pengunjung.
                    </p>
                    
                    <!-- Video Borobudur -->
                    <div class="relative pt-[56.25%] bg-gray-200 rounded-lg overflow-hidden shadow-md">
                        <div id="video2Container" class="absolute inset-0 cursor-pointer group">
                            <img 
                                id="thumbnail2" 
                                src="https://img.youtube.com/vi/lIZeZMbUG6s/hqdefault.jpg" 
                                alt="Video Borobudur"
                                class="w-full h-full object-cover"
                            >
                            <div class="absolute inset-0 flex items-center justify-center bg-black/30 group-hover:bg-black/50 transition-all">
                                <svg class="w-20 h-20 text-white" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                        <iframe 
                            id="iframe2" 
                            class="absolute inset-0 w-full h-full hidden" 
                            src="" 
                            frameborder="0" 
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" 
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 px-5 md:px-20 bg-black/30 backdrop-blur-lg border-t border-b border-white/20">
        <div class="bg-gradient-to-r from-gray-100 to-white p-6 md:p-8 rounded-lg shadow-xl max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold mb-6 text-gray-800">Hubungi Kami</h2>
            
            <form id="contactForm" class="space-y-5">
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

                <div>
                    <label for="subjek" class="block text-sm md:text-base font-medium text-gray-700 mb-2">
                        Subjek <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="subjek" 
                        name="subjek" 
                        placeholder="Subjek pesan" 
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
                        placeholder="Tulis pesan Anda di sini..."
                        rows="5"
                        required 
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all resize-none"
                    ></textarea>
                </div>

                <button 
                    type="submit" 
                    id="submitBtn"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-3 px-6 rounded-lg transition-colors duration-300 flex items-center justify-center gap-2"
                >
                    <span id="btnText">Kirim Pesan</span>
                    <svg id="btnLoader" class="hidden w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </form>
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
<script src="assets/js/slider.js"></script>
<script src="assets/js/email-form.js"></script>

</body>
</html>
