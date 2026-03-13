<?php
$page_title = 'Jogja Tour Borobudur';
$page_description = 'Kenali lebih dekat Jogja Tour Borobudur. Kami menyediakan berbagai paket wisata terbaik dengan harga terjangkau dan layanan profesional.';
$page_keywords = 'about jogja tour, paket wisata jogja, harga tour borobudur, destinasi wisata yogyakarta';

include 'includes/head.php';
include 'includes/header.php';
?>

<main class="relative page-bg-overlay min-h-screen bg-[url('assets/images/bg-kawung.webp')] bg-fixed bg-cover">
    
    <!-- Hero Section -->
    <!-- <section class="pt-12 px-7 md:px-20">
      <div class="flex flex-col justify-center h-96 space-y-4">
        <h1 class="text-3xl md:text-5xl text-white font-bold">Tour Service Packages</h1>
        <p class="text-base md:text-xl text-white">Enjoy a memorable Jogja tourism experience with our best service!</p>
      </div>
    </section> -->

    <section class="pt-16 md:pt-24 px-5 md:px-20 pb-8 md:pb-12">
        <div class="max-w-6xl mx-auto text-center py-20 md:py-28">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-5">
                Tour Service Packages
            </h1>
            <p class="text-lg md:text-2xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                Enjoy a memorable Jogja tourism experience with our best service!
            </p>
        </div>
    </section>

    <!-- Navigation Links -->
    <section class="py-16 px-7 md:px-20">
      <div class="max-w-6xl mx-auto space-y-8">
        <div class="text-center text-white space-y-3">
          <p class="uppercase tracking-[0.2em] text-xs md:text-sm text-white/80">Choose Service Category</p>
          <h2 class="text-3xl md:text-5xl font-bold">Packages to Suit Your Vacation Style</h2>
        </div>
                <div class="grid grid-cols-1 md:grid-cols-2 gap-6 text-sm md:text-base">
                    <a href="#transportasi" class="group relative overflow-hidden rounded-3xl border border-white/25 bg-white/15 backdrop-blur-md p-7 md:p-8 shadow-xl transition-all duration-300 hover:-translate-y-1 hover:bg-white/20">
            <div class="absolute -right-10 -top-10 w-40 h-40 rounded-full bg-white/10 blur-2xl"></div>
            <!-- <p class="relative text-white/80 text-xs md:text-sm uppercase tracking-wide">Kategori 01</p> -->
            <h3 class="relative mt-2 text-2xl md:text-3xl font-bold text-white">Transportation Only</h3>
                        <p class="relative mt-3 text-white/90 leading-relaxed">Focus on comfortable transportation services with well-maintained vehicles, professional drivers, and flexible schedules tailored to your travel needs.</p>
                        <span class="relative inline-flex mt-5 text-white font-semibold">View Packages</span>
          </a>
                    <a href="#transportasi-spot" class="group relative overflow-hidden rounded-3xl border border-white/25 bg-black/25 backdrop-blur-md p-7 md:p-8 shadow-xl transition-all duration-300 hover:-translate-y-1 hover:bg-black/35">
            <div class="absolute -left-8 -bottom-8 w-40 h-40 rounded-full bg-orange-300/20 blur-2xl"></div>
            <!-- <p class="relative text-white/80 text-xs md:text-sm uppercase tracking-wide">Kategori 02</p> -->
            <h3 class="relative mt-2 text-2xl md:text-3xl font-bold text-white">Transportation and Tourist Spot</h3>
                        <p class="relative mt-3 text-white/90 leading-relaxed">A complete package combining transportation with selected tourist destinations such as city tours, Borobudur, and custom itineraries for families or groups.</p>
                        <span class="relative inline-flex mt-5 text-white font-semibold">Explore Packages</span>
          </a>
        </div>
      </div>
    </section>

        <!-- Tour Packages Section -->
        <section class="py-16 px-7 md:px-20 space-y-28">
            <div id="transportasi" class="space-y-6 md:space-y-8 scroll-mt-24">
                <h2 class="text-2xl md:text-5xl text-white font-bold text-center">Transportation only</h2>

                <div class="max-w-6xl mx-auto rounded-3xl border border-white/30 bg-black/35 backdrop-blur-xl shadow-2xl overflow-hidden">
                    <div class="relative h-44 md:h-56 bg-[url('assets/images/bg-pickup.webp')] bg-cover bg-center">
                        <div class="absolute inset-0 bg-gradient-to-r from-black/75 via-black/45 to-black/20"></div>
                        <div class="relative h-full px-6 md:px-10 flex items-end pb-6">
                            <div class="text-white max-w-3xl">
                                <p class="uppercase tracking-[0.2em] text-xs text-white/80">Category 01</p>
                                <h3 class="text-2xl md:text-4xl font-extrabold mt-2">Private Transport for Every Route</h3>
                            </div>
                        </div>
                    </div>

                    <div class="p-5 md:p-8 space-y-6">
                        <div class="grid lg:grid-cols-5 gap-6">
                            <div class="lg:col-span-3 rounded-2xl bg-white p-5 md:p-6 shadow-lg border border-slate-200">
                                <p class="text-sm md:text-base text-slate-700 leading-relaxed">
                                    We serve tour transportation in Jogja, including:
                                </p>
                                <ol class="mt-4 space-y-3 text-sm md:text-base text-slate-700 list-decimal pl-5 leading-relaxed">
                                    <li>Pick up from Yogyakarta International Airport (YIA) to the Jogja area, with a rate of Rp. 350,000.</li>
                                    <li>Full-day driving tour, with destinations such as Borobudur Temple, Mount Merapi, and Prambanan Temple, or destinations requested by consumers, with a rate of Rp. 650,000.</li>
                                    <li>Half-day driving tour, with destinations such as Borobudur only or Prambanan Temple only, or destinations requested by consumers, with a rate of Rp. 450,000.</li>
                                    <li>Drop off to Yogyakarta International Airport (YIA) with a rate of Rp. 350,000.</li>
                                    <li>Drop off outside the Jogja area with a rate adjusted to the destination.</li>
                                </ol>
                            </div>

                            <div class="lg:col-span-2 rounded-2xl border border-amber-200 bg-gradient-to-br from-amber-50 to-orange-50 p-5 md:p-6 shadow-lg">
                                <p class="text-sm md:text-base text-amber-900 font-semibold">Some Notes</p>
                                <ol class="mt-3 space-y-3 text-sm md:text-base text-slate-700 list-decimal pl-5 leading-relaxed">
                                    <li>The transportation costs above include driver, car, and fuel, with complimentary mineral water.</li>
                                    <li>For Sunrise tours to Punthuk Setumbu-Borobudur Nirwana Sunrise, pickup starts at 04.00 am from Yogyakarta (45 km), with an additional fee of Rp. 75,000 due to abnormal hours.</li>
                                    <li>Tour duration is full day 12 hours and half day 6 hours. Extra time is charged at 10% of normal full-day rate per hour.</li>
                                    <li>Booking uses a 50% deposit payment system and the remaining payment after completion, or paid daily after each trip.</li>
                                </ol>
                            </div>
                        </div>

                        <!-- <div class="flex justify-center">
                            <a href="contact.php" class="inline-flex items-center justify-center rounded-xl bg-white text-black px-7 py-3 font-semibold hover:bg-slate-200 transition-colors shadow-lg">
                            Book Transportation Service
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>

            <div id="transportasi-spot" class="space-y-6 md:space-y-10 scroll-mt-24">
                <h2 class="text-2xl md:text-5xl text-white font-bold text-center">Transportation and Tourist Spots</h2>

                <div class="max-w-6xl mx-auto rounded-3xl border border-white/30 bg-black/35 backdrop-blur-xl shadow-2xl overflow-hidden">
                    <div class="relative h-44 md:h-56 bg-[url('assets/images/bg-destinasi.webp')] bg-cover bg-center">
                        <div class="absolute inset-0 bg-gradient-to-r from-black/80 via-black/55 to-black/25"></div>
                        <div class="relative h-full px-6 md:px-10 flex items-end pb-6">
                            <div class="text-white max-w-3xl">
                                <p class="uppercase tracking-[0.2em] text-xs text-white/80">Category 02</p>
                                <h3 class="text-2xl md:text-4xl font-extrabold mt-2">All-in Package with Tourist Spots</h3>
                            </div>
                        </div>
                    </div>

                    <div class="p-5 md:p-8 space-y-6">
                        <div class="grid md:grid-cols-3 gap-4">
                            <div class="md:col-span-2 rounded-2xl bg-white p-5 shadow-lg border border-slate-200">
                                <p class="text-sm md:text-base text-slate-700 leading-relaxed">
                                    This full-day tours pairs Borobudur Temple with other attractions, allowing customization based on preferences. Additional requests outside the package can be discussed with the admin.
                                    Prices are listed in USD for foreign tourists, while domestic guests should consult for adjusted rates. The package includes an English-speaking driver, a full AC car with fuel, mineral
                                    water, tourist entrance tickets, and parking (meals not included).
                                </p>
                            </div>

                            <div class="rounded-2xl bg-sky-50 p-5 shadow-lg border border-sky-200">
                                <p class="text-sm md:text-base text-slate-700 leading-relaxed">
                                    Due to limited availability, only 1200 visitors can climb the temple daily. Tickets can be checked online at
                                    <a href="https://ticketcandi.borobudurpark.com/en/#borobudur" target="_blank" rel="noopener noreferrer" class="text-sky-700 hover:text-sky-900 underline underline-offset-4"> Borobudur Ticket Website</a>.
                                </p>
                            </div>
                        </div>

                        <div class="rounded-2xl bg-white p-5 shadow-lg border border-slate-200">
                            <p class="text-sm md:text-base text-slate-700 leading-relaxed">
                                Booking in advance is recommended, especially during holidays and summer when demand is high. If tickets for the Temple Structure are unavailable, visitors can still enjoy the Temple
                                Yard. The admin may attempt to secure tickets through external agent, and any price difference will be adjusted accordingly.
                                <br><br>
                                Tour prices depend on the number of people, as transportation costs remain fixed while ticket fees vary. Larger groups benefit from reduced per-person costs. For groups exceeding four
                                people, children under nine, or students with valid ID, please contact the admin for pricing adjustments.
                            </p>
                        </div>

                        <div class="relative isolate">
                            <div class="pointer-events-none absolute -top-10 -left-10 w-52 h-52 rounded-full bg-amber-200/35 blur-3xl"></div>
                            <div class="pointer-events-none absolute -bottom-10 -right-8 w-56 h-56 rounded-full bg-cyan-200/35 blur-3xl"></div>

                            <div class="relative grid grid-cols-1 xl:grid-cols-3 gap-5 auto-rows-fr">
                                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-b from-white to-slate-50 p-6 shadow-lg border border-slate-200 space-y-4 text-sm md:text-base transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:border-amber-300">
                                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-amber-300 via-amber-500 to-amber-300"></div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-extrabold text-2xl text-slate-900">A1</h3>
                                        <span class="text-xs font-semibold bg-amber-100 text-amber-800 px-3 py-1 rounded-full">Most Requested</span>
                                    </div>
                                    <p class="text-slate-600">This is the main tour package that is in demand by foreign tourists.</p>
                                    <ul class="space-y-2 text-slate-800">
                                        <li>1. Borobudur Temple</li>
                                        <li>2. Volcanic Lava Tour on Mount Merapi (lunch break)</li>
                                        <li>3. Prambanan Temple</li>
                                    </ul>
                                    <p class="text-slate-500 text-sm">Note: These destinations are far from each other, so leave at 6.30 am so that all can be visited.</p>
                                    <a href="contact.php?package=A1" class="inline-flex text-xs font-semibold text-amber-700 hover:text-amber-800">Choose A1</a>
                                </div>

                                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-b from-white to-sky-50 p-6 shadow-lg border border-slate-200 space-y-4 text-sm md:text-base transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:border-sky-300">
                                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-sky-300 via-sky-500 to-sky-300"></div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-extrabold text-2xl text-slate-900">A2</h3>
                                        <span class="text-xs font-semibold bg-sky-100 text-sky-800 px-3 py-1 rounded-full">Favorite</span>
                                    </div>
                                    <p class="text-slate-600">This is a favorite tour package that is in demand by foreign tourists.</p>
                                    <ul class="space-y-2 text-slate-800">
                                        <li>1. Borobudur Temple</li>
                                        <li>2. Prambanan Temple</li>
                                    </ul>
                                    <a href="contact.php?package=A2" class="inline-flex text-xs font-semibold text-sky-700 hover:text-sky-800">Choose A2</a>
                                </div>

                                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-b from-white to-orange-50 p-6 shadow-lg border border-slate-200 space-y-4 text-sm md:text-base transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:border-orange-300">
                                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-orange-300 via-orange-500 to-orange-300"></div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-extrabold text-2xl text-slate-900">A3</h3>
                                        <span class="text-xs font-semibold bg-orange-100 text-orange-800 px-3 py-1 rounded-full">Sunrise</span>
                                    </div>
                                    <p class="text-slate-600">This is a favorite tour package that is in demand by foreign tourists.</p>
                                    <ul class="space-y-2 text-slate-800">
                                        <li>1. Sunrise at Punthuk Setumbu "Borobudur Nirvana Sunrise" (breakfast break)</li>
                                        <li>2. Borobudur Temple</li>
                                        <li>3. Volcanic Lava Tour at Mount Merapi (lunch break)</li>
                                        <li>4. Prambanan Temple</li>
                                    </ul>
                                    <p class="text-slate-500 text-sm">Note: This is a sunrise destination, so leave at 04.00 am.</p>
                                    <a href="contact.php?package=A3" class="inline-flex text-xs font-semibold text-orange-700 hover:text-orange-800">Choose A3</a>
                                </div>

                                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-b from-white to-emerald-50 p-6 shadow-lg border border-slate-200 space-y-4 text-sm md:text-base transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:border-emerald-300">
                                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-emerald-300 via-emerald-500 to-emerald-300"></div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-extrabold text-2xl text-slate-900">A4</h3>
                                        <span class="text-xs font-semibold bg-emerald-100 text-emerald-800 px-3 py-1 rounded-full">Short Trip</span>
                                    </div>
                                    <ul class="space-y-2 text-slate-800">
                                        <li>1. Borobudur Temple</li>
                                    </ul>
                                    <a href="contact.php?package=A4" class="inline-flex text-xs font-semibold text-emerald-700 hover:text-emerald-800">Choose A4</a>
                                </div>

                                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-b from-white to-amber-50 p-6 shadow-lg border border-slate-200 space-y-4 text-sm md:text-base transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:border-amber-300">
                                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-amber-300 via-amber-500 to-amber-300"></div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-extrabold text-2xl text-slate-900">A5</h3>
                                        <span class="text-xs font-semibold bg-amber-100 text-amber-800 px-3 py-1 rounded-full">Sunrise Combo</span>
                                    </div>
                                    <ul class="space-y-2 text-slate-800">
                                        <li>1. Sunrise at Punthuk Setumbu "Borobudur Nirvana Sunrise" (breakfast break)</li>
                                        <li>2. Borobudur Temple</li>
                                    </ul>
                                    <p class="text-slate-500 text-sm">Note: This is a sunrise destination, so leave at 04.00 am.</p>
                                    <a href="contact.php?package=A5" class="inline-flex text-xs font-semibold text-amber-700 hover:text-amber-800">Choose A5</a>
                                </div>

                                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-b from-white to-purple-50 p-6 shadow-lg border border-slate-200 space-y-4 text-sm md:text-base transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:border-purple-300">
                                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-purple-300 via-purple-500 to-purple-300"></div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-extrabold text-2xl text-slate-900">A6</h3>
                                        <span class="text-xs font-semibold bg-purple-100 text-purple-800 px-3 py-1 rounded-full">Culture</span>
                                    </div>
                                    <ul class="space-y-2 text-slate-800">
                                        <li>1. Borobudur Temple</li>
                                        <li>2. Chicken Church (lunch break)</li>
                                        <li>3. Prambanan Temple</li>
                                    </ul>
                                    <a href="contact.php?package=A6" class="inline-flex text-xs font-semibold text-purple-700 hover:text-purple-800">Choose A6</a>
                                </div>

                                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-b from-white to-rose-50 p-6 shadow-lg border border-slate-200 space-y-4 text-sm md:text-base transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:border-rose-300">
                                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-rose-300 via-rose-500 to-rose-300"></div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-extrabold text-2xl text-slate-900">A7</h3>
                                        <span class="text-xs font-semibold bg-rose-100 text-rose-800 px-3 py-1 rounded-full">Classic Route</span>
                                    </div>
                                    <ul class="space-y-2 text-slate-800">
                                        <li>1. Prambanan Temple</li>
                                        <li>2. Kraton (lunch break)</li>
                                        <li>3. Borobudur Temple</li>
                                    </ul>
                                    <a href="contact.php?package=A7" class="inline-flex text-xs font-semibold text-rose-700 hover:text-rose-800">Choose A7</a>
                                </div>

                                <div class="group relative overflow-hidden rounded-2xl bg-gradient-to-b from-white to-cyan-50 p-6 shadow-lg border border-slate-200 space-y-4 text-sm md:text-base xl:col-span-2 transition-all duration-300 hover:-translate-y-1 hover:shadow-2xl hover:border-cyan-300">
                                    <div class="absolute top-0 inset-x-0 h-1 bg-gradient-to-r from-cyan-300 via-cyan-500 to-cyan-300"></div>
                                    <div class="flex items-center justify-between">
                                        <h3 class="font-extrabold text-2xl text-slate-900">A8</h3>
                                        <span class="text-xs font-semibold bg-cyan-100 text-cyan-800 px-3 py-1 rounded-full">Temple Trail</span>
                                    </div>
                                    <ul class="space-y-2 text-slate-800">
                                        <li>1. Borobudur Temple</li>
                                        <li>2. Pawon Temple</li>
                                        <li>3. Mendut Temple (lunch break)</li>
                                        <li>4. Malioboro</li>
                                    </ul>
                                    <a href="contact.php?package=A8" class="inline-flex text-xs font-semibold text-cyan-700 hover:text-cyan-800">Choose A8</a>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="flex justify-center pt-2">
                            <a href="https://ticket.borobudurpark.com/id/" target="_blank" rel="noopener noreferrer" class="inline-flex items-center justify-center bg-white text-black py-3 px-8 rounded-xl font-semibold hover:bg-slate-200 transition-colors shadow-lg">
                                Book Now
                            </a>
                        </div> -->
                    </div>
                </div>
            </div>
        </section>

    <!-- Call to Action -->
    <section class="py-16 px-5 md:px-20">
        <div class="relative max-w-4xl mx-auto overflow-hidden rounded-3xl border border-white/30 bg-white/15 backdrop-blur-xl p-8 md:p-12 shadow-2xl text-center text-white">
            <div class="pointer-events-none absolute -top-12 -left-12 h-40 w-40 rounded-full bg-white/15 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-12 -right-12 h-44 w-44 rounded-full bg-sky-300/20 blur-3xl"></div>

            <p class="relative uppercase tracking-[0.2em] text-xs md:text-sm text-white/80 mb-3">Ready to Start Your Journey?</p>
            <h2 class="relative text-3xl md:text-4xl font-bold mb-4">
                Explore Yogyakarta with Comfort and Style
            </h2>
            <p class="relative text-lg md:text-xl mb-8 text-white/90">
                Contact us now to get the best offer and a free consultation for your ideal trip.
            </p>
            <div class="relative flex flex-col sm:flex-row gap-4 justify-center">
                <a href="contact.php" class="bg-white text-slate-900 hover:bg-slate-100 px-8 py-3 rounded-xl font-semibold transition-colors shadow-lg">
                    Contact Us
                </a>
                <a href="testimoni.php" class="bg-black/25 border border-white/40 hover:bg-white/15 px-8 py-3 rounded-xl font-semibold transition-colors">
                    View Testimonials
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
