<?php
$page_title = 'About - Jogja Tour Borobudur';
$page_description = 'Kenali lebih dekat Jogja Tour Borobudur. Kami menyediakan berbagai paket wisata terbaik dengan harga terjangkau dan layanan profesional.';
$page_keywords = 'about jogja tour, paket wisata jogja, harga tour borobudur, destinasi wisata yogyakarta';

include 'includes/head.php';
include 'includes/header.php';
?>

<main class="relative min-h-screen bg-[url('assets/images/bg-kawung.webp')] bg-fixed bg-cover">
    
    <!-- Hero Section -->
    <section class="pt-20 md:pt-28 px-5 md:px-20 pb-10">
        <div class="max-w-6xl mx-auto text-center bg-white/90 backdrop-blur-sm p-8 md:p-12 rounded-lg shadow-xl">
            <h1 class="text-3xl md:text-5xl font-bold text-gray-800 mb-6">
                Jogja Tour Borobudur
            </h1>
            <p class="text-lg md:text-xl text-gray-700 leading-relaxed max-w-4xl mx-auto">
                Kami adalah penyedia jasa tour dan travel terpercaya di Yogyakarta dan Borobudur. 
                Dengan pengalaman bertahun-tahun, kami berkomitmen memberikan pengalaman wisata 
                terbaik yang tak terlupakan bagi setiap pelanggan kami. Dari wisata budaya, sejarah, 
                hingga kuliner, kami siap mengantarkan Anda menjelajahi keindahan Yogyakarta dan sekitarnya.
            </p>
        </div>
    </section>

    <!-- Navigation Links -->
    <section class="py-10 px-5 md:px-20">
        <div class="max-w-6xl mx-auto">
            <div class="grid grid-cols-2 md:grid-cols-4 gap-4">
                <a href="#tours" class="bg-white/90 hover:bg-white backdrop-blur-sm p-6 rounded-lg shadow-md text-center transition-all hover:scale-105 hover:shadow-xl">
                    <div class="text-4xl mb-3">🗺️</div>
                    <h3 class="font-bold text-gray-800">Paket Tour</h3>
                </a>
                <a href="#destinations" class="bg-white/90 hover:bg-white backdrop-blur-sm p-6 rounded-lg shadow-md text-center transition-all hover:scale-105 hover:shadow-xl">
                    <div class="text-4xl mb-3">🏛️</div>
                    <h3 class="font-bold text-gray-800">Destinasi</h3>
                </a>
                <a href="#facilities" class="bg-white/90 hover:bg-white backdrop-blur-sm p-6 rounded-lg shadow-md text-center transition-all hover:scale-105 hover:shadow-xl">
                    <div class="text-4xl mb-3">🚐</div>
                    <h3 class="font-bold text-gray-800">Fasilitas</h3>
                </a>
                <a href="#price" class="bg-white/90 hover:bg-white backdrop-blur-sm p-6 rounded-lg shadow-md text-center transition-all hover:scale-105 hover:shadow-xl">
                    <div class="text-4xl mb-3">💰</div>
                    <h3 class="font-bold text-gray-800">Harga</h3>
                </a>
            </div>
        </div>
    </section>

    <!-- Tour Packages Section -->
    <section id="tours" class="py-16 px-5 md:px-20">
        <div class="max-w-7xl mx-auto space-y-20">
            
            <!-- Package 1: City Tour -->
            <div class="bg-white/95 backdrop-blur-sm rounded-lg shadow-xl overflow-hidden">
                <div class="relative h-64 md:h-80 bg-[url('assets/images/bg-tours.webp')] bg-cover bg-center">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/60 flex items-end">
                        <h2 class="text-3xl md:text-4xl font-bold text-white p-6 md:p-8">
                            Paket City Tour Yogyakarta
                        </h2>
                    </div>
                </div>
                <div class="p-6 md:p-8 space-y-6">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Deskripsi Paket</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Jelajahi keindahan dan kekayaan budaya Kota Yogyakarta dalam satu hari penuh. 
                            Kunjungi destinasi ikonik seperti Keraton, Malioboro, Taman Sari, dan berbagai 
                            tempat wisata menarik lainnya yang menjadi ikon Yogyakarta.
                        </p>
                    </div>
                    
                    <div id="destinations" class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-3">
                            <h4 class="font-bold text-lg text-gray-800 flex items-center gap-2">
                                <span class="text-2xl">🏛️</span> Destinasi Wisata
                            </h4>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-600 mt-1">•</span>
                                    <span>Keraton Yogyakarta - Istana Sultan</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-600 mt-1">•</span>
                                    <span>Taman Sari - Kolam Pemandian Raja</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-600 mt-1">•</span>
                                    <span>Malioboro - Shopping & Kuliner</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-600 mt-1">•</span>
                                    <span>Candi Prambanan (Opsional)</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div id="facilities" class="space-y-3">
                            <h4 class="font-bold text-lg text-gray-800 flex items-center gap-2">
                                <span class="text-2xl">✨</span> Fasilitas
                            </h4>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start gap-2">
                                    <span class="text-green-600 mt-1">✓</span>
                                    <span>Mobil ber-AC + Driver berpengalaman</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-green-600 mt-1">✓</span>
                                    <span>BBM & Parkir sudah termasuk</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-green-600 mt-1">✓</span>
                                    <span>Antar-jemput hotel/bandara</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-green-600 mt-1">✓</span>
                                    <span>Tour guide (opsional)</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div id="price" class="bg-gradient-to-r from-blue-50 to-blue-100 p-6 rounded-lg border border-blue-200">
                        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Harga mulai dari</p>
                                <p class="text-3xl md:text-4xl font-bold text-blue-600">Rp 400.000</p>
                                <p class="text-sm text-gray-500">per mobil / 12 jam</p>
                            </div>
                            <a href="contact.php" class="bg-blue-600 hover:bg-blue-700 text-white px-8 py-3 rounded-lg font-medium transition-colors">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Package 2: Borobudur Tour -->
            <div class="bg-white/95 backdrop-blur-sm rounded-lg shadow-xl overflow-hidden">
                <div class="relative h-64 md:h-80 bg-[url('assets/images/bg-destinasi.webp')] bg-cover bg-center">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/60 flex items-end">
                        <h2 class="text-3xl md:text-4xl font-bold text-white p-6 md:p-8">
                            Paket Borobudur Sunrise Tour
                        </h2>
                    </div>
                </div>
                <div class="p-6 md:p-8 space-y-6">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Deskripsi Paket</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Saksikan keindahan sunrise di Candi Borobudur, warisan dunia UNESCO yang menakjubkan. 
                            Pengalaman spiritual dan pemandangan yang tak terlupakan di pagi hari dengan udara segar 
                            dan suasana yang damai.
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-3">
                            <h4 class="font-bold text-lg text-gray-800 flex items-center gap-2">
                                <span class="text-2xl">⛰️</span> Destinasi Wisata
                            </h4>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-600 mt-1">•</span>
                                    <span>Candi Borobudur - Sunrise</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-600 mt-1">•</span>
                                    <span>Punthuk Setumbu (View Point)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-600 mt-1">•</span>
                                    <span>Candi Mendut & Pawon</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-600 mt-1">•</span>
                                    <span>Pasar Tradisional (Opsional)</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="space-y-3">
                            <h4 class="font-bold text-lg text-gray-800 flex items-center gap-2">
                                <span class="text-2xl">✨</span> Fasilitas
                            </h4>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start gap-2">
                                    <span class="text-green-600 mt-1">✓</span>
                                    <span>Pick up jam 03:00 pagi</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-green-600 mt-1">✓</span>
                                    <span>Mobil ber-AC + Driver</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-green-600 mt-1">✓</span>
                                    <span>BBM, Parkir, Tol termasuk</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-green-600 mt-1">✓</span>
                                    <span>Mineral water</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-r from-orange-50 to-orange-100 p-6 rounded-lg border border-orange-200">
                        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Harga mulai dari</p>
                                <p class="text-3xl md:text-4xl font-bold text-orange-600">Rp 600.000</p>
                                <p class="text-sm text-gray-500">per mobil (belum termasuk tiket Borobudur)</p>
                            </div>
                            <a href="contact.php" class="bg-orange-600 hover:bg-orange-700 text-white px-8 py-3 rounded-lg font-medium transition-colors">
                                Pesan Sekarang
                            </a>
                        </div>
                    </div>
                </div>
            </div>

            <!-- Package 3: Custom Tour -->
            <div class="bg-white/95 backdrop-blur-sm rounded-lg shadow-xl overflow-hidden">
                <div class="relative h-64 md:h-80 bg-[url('assets/images/bg-makanan.webp')] bg-cover bg-center">
                    <div class="absolute inset-0 bg-gradient-to-b from-black/30 to-black/60 flex items-end">
                        <h2 class="text-3xl md:text-4xl font-bold text-white p-6 md:p-8">
                            Paket Custom / Private Tour
                        </h2>
                    </div>
                </div>
                <div class="p-6 md:p-8 space-y-6">
                    <div>
                        <h3 class="text-2xl font-bold text-gray-800 mb-4">Deskripsi Paket</h3>
                        <p class="text-gray-700 leading-relaxed">
                            Sesuaikan perjalanan wisata Anda sesuai keinginan! Pilih destinasi favorit Anda sendiri 
                            dan kami akan mengatur segalanya. Cocok untuk keluarga, grup, atau perayaan spesial.
                        </p>
                    </div>
                    
                    <div class="grid md:grid-cols-2 gap-6">
                        <div class="space-y-3">
                            <h4 class="font-bold text-lg text-gray-800 flex items-center gap-2">
                                <span class="text-2xl">🎯</span> Fleksibilitas Penuh
                            </h4>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-600 mt-1">•</span>
                                    <span>Pilih destinasi sesuai keinginan</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-600 mt-1">•</span>
                                    <span>Atur jadwal sendiri</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-600 mt-1">•</span>
                                    <span>Kombinasi multiple destinations</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-blue-600 mt-1">•</span>
                                    <span>Private & personal service</span>
                                </li>
                            </ul>
                        </div>
                        
                        <div class="space-y-3">
                            <h4 class="font-bold text-lg text-gray-800 flex items-center gap-2">
                                <span class="text-2xl">✨</span> Fasilitas Premium
                            </h4>
                            <ul class="space-y-2 text-gray-700">
                                <li class="flex items-start gap-2">
                                    <span class="text-green-600 mt-1">✓</span>
                                    <span>Mobil pilihan (Avanza/Innova/Hiace)</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-green-600 mt-1">✓</span>
                                    <span>Driver berpengalaman & ramah</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-green-600 mt-1">✓</span>
                                    <span>BBM, Parkir, Tol included</span>
                                </li>
                                <li class="flex items-start gap-2">
                                    <span class="text-green-600 mt-1">✓</span>
                                    <span>Konsultasi gratis itinerary</span>
                                </li>
                            </ul>
                        </div>
                    </div>
                    
                    <div class="bg-gradient-to-r from-purple-50 to-purple-100 p-6 rounded-lg border border-purple-200">
                        <div class="flex flex-col md:flex-row justify-between items-center gap-4">
                            <div>
                                <p class="text-sm text-gray-600 mb-1">Harga mulai dari</p>
                                <p class="text-3xl md:text-4xl font-bold text-purple-600">Rp 500.000</p>
                                <p class="text-sm text-gray-500">per mobil / 12 jam (harga dapat disesuaikan)</p>
                            </div>
                            <a href="contact.php" class="bg-purple-600 hover:bg-purple-700 text-white px-8 py-3 rounded-lg font-medium transition-colors">
                                Konsultasi Gratis
                            </a>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </section>

    <!-- Call to Action -->
    <section class="py-16 px-5 md:px-20">
        <div class="max-w-4xl mx-auto bg-gradient-to-r from-blue-600 to-blue-800 p-8 md:p-12 rounded-lg shadow-2xl text-center text-white">
            <h2 class="text-3xl md:text-4xl font-bold mb-4">
                Siap Menjelajahi Yogyakarta?
            </h2>
            <p class="text-lg md:text-xl mb-8 opacity-90">
                Hubungi kami sekarang untuk mendapatkan penawaran menarik dan konsultasi gratis!
            </p>
            <div class="flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact.php" class="bg-white text-blue-600 hover:bg-gray-100 px-8 py-3 rounded-lg font-medium transition-colors">
                    Hubungi Kami
                </a>
                <a href="testimoni.php" class="bg-transparent border-2 border-white hover:bg-white/10 px-8 py-3 rounded-lg font-medium transition-colors">
                    Lihat Testimoni
                </a>
            </div>
        </div>
    </section>

</main>

<?php 
include 'includes/footer.php';
include 'includes/whatsapp-button.php';
?>

<!-- Smooth Scroll -->
<script>
document.querySelectorAll('a[href^="#"]').forEach(anchor => {
    anchor.addEventListener('click', function (e) {
        e.preventDefault();
        const target = document.querySelector(this.getAttribute('href'));
        if (target) {
            target.scrollIntoView({ behavior: 'smooth', block: 'start' });
        }
    });
});
</script>

</body>
</html>
