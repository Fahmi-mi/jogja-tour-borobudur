<?php
$page_title = 'Testimoni - Jogja Tour Borobudur';
$page_description = 'Baca testimoni dan pengalaman pelanggan yang telah menggunakan layanan Jogja Tour Borobudur. Kepuasan Anda adalah prioritas kami.';
$page_keywords = 'testimoni jogja tour, review tour borobudur, pengalaman wisata jogja';

include 'includes/head.php';
include 'includes/header.php';
?>

<main class="relative min-h-screen bg-[url('assets/images/bg-parang.webp')] bg-fixed bg-cover">
    
    <!-- Header -->
    <section class="pt-20 md:pt-28 px-5 md:px-20 pb-10">
        <div class="max-w-6xl mx-auto text-center bg-white/90 backdrop-blur-sm p-8 md:p-12 rounded-lg shadow-xl">
            <h1 class="text-3xl md:text-5xl font-bold text-gray-800 mb-4">
                Testimoni Pelanggan
            </h1>
            <p class="text-lg md:text-xl text-gray-700">
                Dengarkan cerita dan pengalaman pelanggan kami yang puas
            </p>
        </div>
    </section>

    <!-- Testimonial Form -->
    <section class="py-16 px-5 md:px-20 bg-black/30 backdrop-blur-lg border-t border-b border-white/20">
        <div class="bg-gradient-to-r from-blue-50 to-white p-6 md:p-10 rounded-lg shadow-2xl max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold mb-2 text-gray-800">Bagikan Pengalaman Anda</h2>
            <p class="text-gray-600 mb-8">
                Kami sangat menghargai feedback Anda untuk meningkatkan layanan kami
            </p>
            
            <form id="testimoniForm" class="space-y-6">
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
                        maxlength="100"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all"
                    >
                    <p class="text-sm text-gray-500 mt-1">Maksimal 100 karakter</p>
                </div>

                <div>
                    <label for="rating" class="block text-sm md:text-base font-medium text-gray-700 mb-2">
                        Rating <span class="text-red-500">*</span>
                    </label>
                    <div class="flex gap-2">
                        <div class="rating-stars flex gap-1 text-3xl">
                            <button type="button" class="star text-gray-300 hover:text-yellow-400 transition-colors" data-rating="1">★</button>
                            <button type="button" class="star text-gray-300 hover:text-yellow-400 transition-colors" data-rating="2">★</button>
                            <button type="button" class="star text-gray-300 hover:text-yellow-400 transition-colors" data-rating="3">★</button>
                            <button type="button" class="star text-gray-300 hover:text-yellow-400 transition-colors" data-rating="4">★</button>
                            <button type="button" class="star text-gray-300 hover:text-yellow-400 transition-colors" data-rating="5">★</button>
                        </div>
                        <input type="hidden" id="rating" name="rating" value="0" required>
                        <span id="ratingText" class="text-gray-500 ml-2 self-center">Pilih rating</span>
                    </div>
                </div>

                <div>
                    <label for="pesan" class="block text-sm md:text-base font-medium text-gray-700 mb-2">
                        Testimoni <span class="text-red-500">*</span>
                    </label>
                    <textarea 
                        id="pesan" 
                        name="pesan" 
                        placeholder="Ceritakan pengalaman Anda menggunakan layanan kami..."
                        rows="6"
                        required 
                        maxlength="1000"
                        class="w-full p-3 border border-gray-300 rounded-lg focus:ring-2 focus:ring-blue-500 focus:border-transparent outline-none transition-all resize-none"
                    ></textarea>
                    <p class="text-sm text-gray-500 mt-1">Maksimal 1000 karakter</p>
                </div>

                <button 
                    type="submit" 
                    id="submitBtn"
                    class="w-full bg-blue-600 hover:bg-blue-700 text-white font-medium py-4 px-6 rounded-lg transition-colors duration-300 flex items-center justify-center gap-2 text-lg"
                >
                    <span id="btnText">Kirim Testimoni</span>
                    <svg id="btnLoader" class="hidden w-6 h-6 animate-spin" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                </button>
            </form>
        </div>
    </section>

    <!-- Testimonial List -->
    <section class="py-16 px-5 md:px-20">
        <div class="max-w-7xl mx-auto">
            <div class="text-center mb-12">
                <h2 class="text-3xl md:text-4xl font-bold text-white mb-4 drop-shadow-lg">
                    Apa Kata Mereka
                </h2>
                <p class="text-lg text-white/90 drop-shadow-md">
                    Testimoni dari pelanggan yang puas dengan layanan kami
                </p>
            </div>

            <!-- Loading State -->
            <div id="loadingState" class="text-center py-12">
                <div class="inline-block">
                    <svg class="animate-spin h-12 w-12 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <p class="text-white mt-4">Memuat testimoni...</p>
                </div>
            </div>

            <!-- Error State -->
            <div id="errorState" class="hidden text-center py-12">
                <div class="bg-red-100 text-red-800 p-6 rounded-lg inline-block">
                    <p class="font-medium">Gagal memuat testimoni</p>
                    <button onclick="loadTestimonials()" class="mt-3 bg-red-600 text-white px-4 py-2 rounded hover:bg-red-700">
                        Coba Lagi
                    </button>
                </div>
            </div>

            <!-- Empty State -->
            <div id="emptyState" class="hidden text-center py-12">
                <div class="bg-white/90 backdrop-blur-sm p-8 rounded-lg shadow-lg inline-block">
                    <div class="text-6xl mb-4">💬</div>
                    <h3 class="text-2xl font-bold text-gray-800 mb-2">Belum Ada Testimoni</h3>
                    <p class="text-gray-600">Jadilah yang pertama memberikan testimoni!</p>
                </div>
            </div>

            <!-- Testimonial Grid -->
            <div id="testimoniContainer" class="grid grid-cols-1 md:grid-cols-2 gap-6">
                <!-- Testimonials will be loaded here by JavaScript -->
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
<script src="assets/js/testimoni.js"></script>

</body>
</html>
