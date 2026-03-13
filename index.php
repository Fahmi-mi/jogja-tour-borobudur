<?php
$page_title = 'Jogja Tour Borobudur';
$page_description = 'Selamat datang di Jogja Tour Borobudur. Nikmati pengalaman wisata terbaik di Yogyakarta dan Borobudur dengan paket tour lengkap dan harga terjangkau.';
$page_keywords = 'jogja tour, borobudur tour, wisata yogyakarta, paket tour jogja, travel borobudur';

include 'includes/head.php';
include 'includes/header.php';
?>

<main class="relative page-bg-overlay bg-[url('assets/images/bg-parang.webp')] bg-fixed bg-cover min-h-screen">
    
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
            <div id="imageSlider" class="relative w-full max-w-5xl mx-auto rounded-3xl border border-white/20 bg-white/10 backdrop-blur-sm shadow-2xl overflow-hidden">
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

                    <div class="absolute inset-0 bg-gradient-to-t from-black/30 via-transparent to-transparent pointer-events-none"></div>
                    
                    <!-- Navigation Buttons -->
                    <button id="prevBtn" class="absolute left-3 md:left-4 top-1/2 -translate-y-1/2 bg-black/35 backdrop-blur-md hover:bg-black/55 text-white p-2.5 md:p-3 rounded-full border border-white/20 transition-all z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 19l-7-7 7-7" />
                        </svg>
                    </button>
                    <button id="nextBtn" class="absolute right-3 md:right-4 top-1/2 -translate-y-1/2 bg-black/35 backdrop-blur-md hover:bg-black/55 text-white p-2.5 md:p-3 rounded-full border border-white/20 transition-all z-10">
                        <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M9 5l7 7-7 7" />
                        </svg>
                    </button>

                    <!-- Dots Indicator -->
                    <div class="absolute bottom-3 md:bottom-5 left-1/2 -translate-x-1/2 z-10 max-w-[calc(100%-2rem)] md:max-w-none">
                        <div id="dotsContainer" class="flex items-center justify-center gap-1 md:gap-1.5 px-3 py-2 rounded-full bg-black/35 backdrop-blur-md border border-white/15 shadow-lg">
                            <?php for ($i = 0; $i < 25; $i++): ?>
                            <button class="dot shrink-0 w-1.5 h-1.5 md:w-2 md:h-2 rounded-full bg-white/40 hover:bg-white/70 transition-colors <?php echo $i === 0 ? 'bg-white' : ''; ?>"></button>
                            <?php endfor; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- A Glance of Jogja -->
    <section class="relative z-10 py-16 px-5 md:px-20">
        <div class="space-y-6 md:space-y-6">
            <h2 class="text-2xl md:text-5xl text-white font-bold text-center">A Glance of Jogja</h2>
            <div class="flex flex-col justify-center items-center bg-black/30 backdrop-blur-xl border border-white/20 shadow-lg p-6 md:py-12 rounded-3xl max-w-6xl mx-auto">
                <div class="bg-white rounded-lg p-5 w-full max-w-3xl">
                    <div class="relative aspect-video">
                        <div id="video1Container" class="absolute inset-0 cursor-pointer group">
                            <img
                                id="thumbnail1"
                                src="https://img.youtube.com/vi/1V_4-f5Ocy4/hqdefault.jpg"
                                alt="Borobudur Temple Video Thumbnail"
                                class="w-full h-full object-cover rounded-md"
                                loading="lazy"
                            >
                            <div class="absolute inset-0 flex items-center justify-center bg-black/25 group-hover:bg-black/40 transition-all">
                                <svg class="w-16 h-16 text-white opacity-80 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z"/>
                                </svg>
                            </div>
                        </div>
                        <iframe
                            id="iframe1"
                            class="absolute top-0 left-0 w-full h-full rounded-md hidden"
                            src=""
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            loading="lazy"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
                <p class="text-xs md:text-base text-white text-justify mt-8 max-w-5xl drop-shadow-2xl">
                    Jogja as tourist destination has many special features. The Cosmological Axis of Yogyakarta that is acknowledge by UNESCO is an inseperable of the Javanese cosmological concept that sees
                    life relating to Mount Merapi, Sultan's Palace, Krapyak Platform, and Indonesian ocean. Various tourist attraction and the friendliness of the people of Jogja make Jogja a favourite tour
                    destination in Indonesia for domestic and foreign visitors.
                </p>
            </div>
        </div>
    </section>

    <!-- A Glance of Borobudur Temple -->
    <section class="relative z-10 py-16 px-5 md:px-20">
        <div class="space-y-6 md:space-y-6">
            <h2 class="text-2xl md:text-5xl text-white font-bold text-center">A Glance of Borobudur Temple</h2>
            <div class="flex flex-col justify-center items-center bg-black/30 backdrop-blur-xl border border-white/20 shadow-lg p-6 md:py-12 rounded-3xl max-w-6xl mx-auto">
                <div class="bg-white rounded-lg p-5 w-full max-w-3xl">
                    <div class="relative aspect-video">
                        <div id="video2Container" class="absolute inset-0 cursor-pointer group">
                            <img
                                id="thumbnail2"
                                src="https://img.youtube.com/vi/lIZeZMbUG6s/hqdefault.jpg"
                                alt="Borobudur Temple Video Thumbnail"
                                class="w-full h-full object-cover rounded-md"
                                loading="lazy"
                            >
                            <div class="absolute inset-0 flex items-center justify-center bg-black/25 group-hover:bg-black/40 transition-all">
                                <svg class="w-16 h-16 text-white opacity-80 group-hover:opacity-100 transition-opacity" fill="currentColor" viewBox="0 0 24 24">
                                    <path d="M8 5v14l11-7z" />
                                </svg>
                            </div>
                        </div>
                        <iframe
                            id="iframe2"
                            class="absolute top-0 left-0 w-full h-full rounded-md hidden"
                            src=""
                            title="YouTube video player"
                            frameborder="0"
                            allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share"
                            referrerpolicy="strict-origin-when-cross-origin"
                            loading="lazy"
                            allowfullscreen
                        ></iframe>
                    </div>
                </div>
                <p class="text-xs md:text-base text-white text-justify mt-8 max-w-5xl drop-shadow-2xl">
                    Borobudur Temple is the largest Buddhist temple in the world. Located in Magelang, Central Java, Indonesia, It is a holy place to respect Buddha and a destination for pilgrim to get
                    enlightment and wisdom based on Buddhism. The name of Borobudur was possibly introduced by Raffles based on the name of Boro, the nearest village from this monument.
                </p>
            </div>
        </div>
    </section>

    <section class="relative z-10 py-16 px-3 md:px-20 space-y-6 md:space-y-6">
        <h2 class="text-2xl md:text-5xl text-white font-bold text-center">Why Jogja and Borobudur?</h2>
        <div class="flex flex-col p-10 space-y-8 max-w-6xl mx-auto text-xs md:text-base bg-black/30 backdrop-blur-xl border rounded-xl">
            <div class="relative card-bg-hotel bg-center bg-cover p-6 py-2 md:p-10 rounded-lg shadow-lg border-[10px] md:border-[17px]">
                <div class="absolute inset-0 backdrop-blur-[1px] bg-black/30"></div>
                <p class="relative mt-2 font-extrabold text-lg md:text-4xl uppercase text-center text-white">More choices of hotels or lodging</p>
            </div>
            <div class="relative card-bg-destinasi bg-center bg-cover p-6 py-2 md:p-10 rounded-lg shadow-lg border-[10px] md:border-[17px]">
                <div class="absolute inset-0 backdrop-blur-[1px] bg-black/30"></div>
                <p class="relative mt-2 font-extrabold text-lg md:text-4xl uppercase text-center text-white">More varied other tourist destinations</p>
            </div>
            <div class="relative card-bg-makanan bg-center bg-cover p-6 py-2 md:p-10 rounded-lg shadow-lg border-[10px] md:border-[17px]">
                <div class="absolute inset-0 backdrop-blur-[1px] bg-black/30"></div>
                <p class="relative mt-2 font-extrabold text-lg md:text-4xl uppercase text-center text-white">More tempting variety of food or cuisine</p>
            </div>
            <div class="relative card-bg-fasilitas bg-center bg-cover p-6 py-2 md:p-10 rounded-lg shadow-lg border-[10px] md:border-[17px]">
                <div class="absolute inset-0 backdrop-blur-[1px] bg-black/30"></div>
                <p class="relative mt-2 font-extrabold text-lg md:text-4xl uppercase text-center text-white">Better supporting tourist facilities</p>
            </div>
            <div class="relative card-bg-jarak bg-center bg-cover p-6 py-2 md:p-10 rounded-lg shadow-lg border-[10px] md:border-[17px]">
                <div class="absolute inset-0 backdrop-blur-[1px] bg-black/30"></div>
                <p class="relative mt-2 font-extrabold text-lg md:text-4xl uppercase text-center text-white">The distance traveled is not far from Jogja</p>
            </div>
        </div>
    </section>

    <section class="relative z-10 py-16 px-5 md:px-20 space-y-6 md:space-y-6">
        <h2 class="text-2xl md:text-5xl text-white font-bold text-center">Our Services</h2>
        <div class="flex flex-col space-y-8 max-w-6xl bg-black/30 backdrop-blur-lg border shadow-lg p-6 md:py-8 rounded-3xl mx-auto">
            <div class="grid grid-cols-1 md:grid-cols-2 gap-8 text-xs md:text-base auto-rows-fr">
                <div class="relative card-bg-pickup bg-center bg-cover p-6 md:p-10 rounded-lg shadow flex items-center justify-center border-[10px] md:border-[17px]">
                    <div class="absolute inset-0 backdrop-blur-[1px] bg-black/30"></div>
                    <p class="relative mt-2 font-extrabold text-lg md:text-2xl uppercase text-center text-white">Pick up, from Yogyakarta International Airport</p>
                </div>
                <div class="relative card-bg-tours bg-center bg-cover p-6 md:p-10 rounded-lg shadow flex items-center justify-center border-[10px] md:border-[17px]">
                    <div class="absolute inset-0 backdrop-blur-[1px] bg-black/30"></div>
                    <p class="relative mt-2 font-extrabold text-lg md:text-2xl uppercase text-center text-white">Tours, tourist trips</p>
                </div>
                <div class="relative card-bg-pickup bg-center bg-cover p-6 md:p-10 rounded-lg shadow flex items-center justify-center border-[10px] md:border-[17px]">
                    <div class="absolute inset-0 backdrop-blur-[1px] bg-black/30"></div>
                    <p class="relative mt-2 font-extrabold text-lg md:text-2xl uppercase text-center text-white">Drop off, to Yogyakarta International Airport</p>
                </div>
                <div class="relative card-bg-tours bg-center bg-cover p-6 md:p-10 rounded-lg shadow flex items-center justify-center border-[10px] md:border-[17px]">
                    <div class="absolute inset-0 backdrop-blur-[1px] bg-black/30"></div>
                    <p class="relative mt-2 font-extrabold text-lg md:text-2xl uppercase text-center text-white">Overland, a delivery trip outside the city of Yogyakarta</p>
                </div>
            </div>
            <p class="text-xs text-white md:text-base text-justify">
                With the reasons above, if you are traveling in Jogja it would be better to combine a visit to Borobudur Temple. Also considering that tourists who go to tourist attractions in Jogja and
                its surroundings have minimal public transportation, resulting in less effective time, so that it can be more effective, it can be overcome with a private car with a rental system or a
                one-way tour package. So on this occasion, we offer a tour service package in the Jogja area, Borobudur Temple and its surroundings, which has been supported by reliable drivers who are
                experienced and understand the ins and outs of the Jogja area and its surroundings, cars in good condition and well maintained, the driver can speak English well, this meets the needs of
                tourists from abroad
            </p>
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
<script src="assets/js/main.js"></script>
<script src="assets/js/email-form.js"></script>

</body>
</html>
