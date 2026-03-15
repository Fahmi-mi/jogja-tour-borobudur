<?php
$page_title = 'Jogja Tour Borobudur';
$page_description = 'Contact Jogja Tour Borobudur for complete information about tour packages, bookings, or other inquiries. We are ready to assist you 24/7.';
$page_keywords = 'contact jogja tour, jogja tour booking, jogja tour borobudur contact';

require_once 'config/constants.php';
include 'includes/head.php';
include 'includes/header.php';
?>

<main class="relative page-bg-overlay min-h-screen bg-[url('assets/images/bg-gringsing.webp')] bg-fixed bg-cover">
    
    <!-- Header -->
    <section class="pt-16 md:pt-24 px-5 md:px-20 pb-8 md:pb-12">
        <div class="max-w-6xl mx-auto text-center py-20 md:py-28">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-5">
                Contact Us
            </h1>
            <p class="text-lg md:text-2xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                Let us help you plan a smooth and memorable journey across Yogyakarta and Borobudur.
            </p>
        </div>
    </section>

    <!-- Contact Intro Card -->
    <section class="pb-8 md:pb-12 px-5 md:px-20">
        <div class="max-w-6xl mx-auto relative overflow-hidden rounded-3xl border border-white/25 bg-black/50 backdrop-blur-lg p-6 md:p-10 shadow-2xl space-y-6">
            <div class="pointer-events-none absolute -top-12 -left-10 h-36 w-36 rounded-full bg-white/10 blur-3xl"></div>
            <div class="pointer-events-none absolute -bottom-16 -right-10 h-44 w-44 rounded-full bg-sky-300/15 blur-3xl"></div>

            <p class="relative text-sm md:text-base text-justify text-white/95 leading-relaxed">
                Thank you very much for visiting this website, <strong>Jogja Tour Borobudur</strong>. If you need help and support, we will be happy to serve you wholeheartedly. Please contact this admin:
            </p>

            <div class="relative grid md:grid-cols-2 gap-4 text-sm md:text-base">
                <div class="rounded-2xl border border-white/20 bg-white/10 p-5 text-white/95">
                    <p class="text-xs uppercase tracking-[0.18em] text-white/80 mb-2">Admin Contact</p>
                    <p class="font-semibold text-white mb-3">Agung Budi Cahyono</p>
                    <div class="space-y-2">
                        <p>
                            <span class="text-white/75">WhatsApp:</span>
                            <span class="ml-1 text-white font-medium hover:text-sky-200">+62 813 2747 0390</span>
                        </p>
                        <p>
                            <span class="text-white/75">Email:</span>
                            <span class="ml-1 text-white font-medium hover:text-sky-200">agung1jogjadriver@gmail.com</span>
                        </p>
                    </div>
                </div>

                <div class="rounded-2xl border border-white/20 bg-white/10 p-5 text-white/95">
                    <p class="text-xs uppercase tracking-[0.18em] text-white/80 mb-2">Address</p>
                    <p class="font-medium text-white leading-relaxed">
                        Kasongan, Kasihan, Bantul, Yogyakarta
                    </p>
                    <p class="mt-4 text-white/85 leading-relaxed">
                        We will respond to your every request and faithfully await good news.
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- Connect Cards -->
    <section class="py-10 px-5 md:px-20">
        <div class="max-w-6xl mx-auto text-center text-white space-y-3 mb-8">
            <p class="uppercase tracking-[0.2em] text-xs md:text-sm text-white/80">Stay Connected</p>
            <h2 class="text-3xl md:text-4xl font-bold">Reach Us Through Our Digital Channels</h2>
        </div>
        <div class="max-w-6xl mx-auto grid md:grid-cols-3 gap-6">
            <!-- WhatsApp -->
            <div class="bg-white/15 backdrop-blur-xl p-6 rounded-2xl border border-white/30 shadow-lg text-center transition-all duration-300 hover:-translate-y-1 hover:bg-white/20">
                <p class="text-xs uppercase tracking-[0.2em] text-white/80 mb-3">WhatsApp</p>
                <h3 class="font-semibold text-white mb-2">Quick Response</h3>
                <p class="text-white/75 text-sm mb-4">Start a direct conversation with our team anytime.</p>
                <a href="<?php echo WHATSAPP_URL; ?>" target="_blank" rel="noopener noreferrer" class="inline-flex text-white font-medium hover:underline">
                    Start Chat
                </a>
            </div>

            <!-- Email -->
            <div class="bg-white/15 backdrop-blur-xl p-6 rounded-2xl border border-white/30 shadow-lg text-center transition-all duration-300 hover:-translate-y-1 hover:bg-white/20">
                <p class="text-xs uppercase tracking-[0.2em] text-white/80 mb-3">Email</p>
                <h3 class="font-semibold text-white mb-2">Detailed Inquiry</h3>
                <p class="text-white/75 text-sm mb-4">Send your travel questions or custom tour requests by email.</p>
                <a href="<?php echo EMAIL_URL; ?>" class="text-white font-medium hover:underline break-all">
                    <?php echo COMPANY_EMAIL; ?>
                </a>
            </div>

            <!-- Instagram -->
            <div class="bg-white/15 backdrop-blur-xl p-6 rounded-2xl border border-white/30 shadow-lg text-center transition-all duration-300 hover:-translate-y-1 hover:bg-white/20">
                <p class="text-xs uppercase tracking-[0.2em] text-white/80 mb-3">Instagram</p>
                <h3 class="font-semibold text-white mb-2">Visual Inspiration</h3>
                <p class="text-white/75 text-sm mb-4">See destination highlights, tour moments, and travel inspiration.</p>
                <a href="<?php echo INSTAGRAM_URL; ?>" target="_blank" rel="noopener noreferrer" class="text-white font-medium hover:underline">
                    Visit Instagram
                </a>
            </div>
        </div>
    </section>

    <!-- Contact Form Section -->
    <section class="py-16 px-5 md:px-20 bg-black/30 backdrop-blur-lg border-t border-b border-white/20">
        <div class="bg-white/15 backdrop-blur-xl border border-white/30 p-6 md:p-8 rounded-2xl shadow-xl max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold mb-6 text-white">Send a Message</h2>
            
            <form id="contactForm" class="space-y-5">
                <div>
                    <label for="nama" class="block text-sm md:text-base font-medium text-white mb-2">
                        Full Name <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="nama" 
                        name="nama" 
                        placeholder="Enter your full name" 
                        required 
                        class="w-full p-3 border border-white/30 bg-white/85 text-gray-900 rounded-lg focus:ring-2 focus:ring-sky-400 focus:border-transparent outline-none transition-all"
                    >
                </div>

                <div>
                    <label for="email" class="block text-sm md:text-base font-medium text-white mb-2">
                        Email <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="email" 
                        id="email" 
                        name="email" 
                        placeholder="example@email.com" 
                        required 
                        class="w-full p-3 border border-white/30 bg-white/85 text-gray-900 rounded-lg focus:ring-2 focus:ring-sky-400 focus:border-transparent outline-none transition-all"
                    >
                </div>

                <div>
                    <label for="subjek" class="block text-sm md:text-base font-medium text-white mb-2">
                        Subject <span class="text-red-500">*</span>
                    </label>
                    <input 
                        type="text" 
                        id="subjek" 
                        name="subjek" 
                        placeholder="Subject of your message" 
                        required 
                        class="w-full p-3 border border-white/30 bg-white/85 text-gray-900 rounded-lg focus:ring-2 focus:ring-sky-400 focus:border-transparent outline-none transition-all"
                    >
                </div>

                <div>
                    <label for="pesan" class="block text-sm md:text-base font-medium text-white mb-2">
                        Message <span class="text-red-500">*</span>
                    </label>
                    <textarea 
                        id="pesan" 
                        name="pesan" 
                        placeholder="Write your message here..."
                        rows="5"
                        required
                        class="w-full p-3 border border-white/30 bg-white/85 text-gray-900 rounded-lg focus:ring-2 focus:ring-sky-400 focus:border-transparent outline-none transition-all resize-none"
                    ></textarea>
                </div>

                <button 
                    type="submit" 
                    id="submitBtn"
                    class="w-full bg-white text-slate-900 font-semibold py-3 px-6 rounded-lg transition-colors duration-300 hover:bg-slate-100 flex items-center justify-center gap-2 cursor-pointer"
                >
                    <span id="btnText">Send Message</span>
                    <svg id="btnLoader" class="hidden w-5 h-5 animate-spin" fill="none" viewBox="0 0 24 24">
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
            <div class="bg-white/15 backdrop-blur-xl border border-white/30 p-8 rounded-2xl shadow-lg">
                <h3 class="text-2xl font-bold text-white mb-6">
                    Operating Hours
                </h3>
                <div class="space-y-3 text-white/90">
                    <div class="flex justify-between pb-3 border-b">
                        <span class="font-medium">Monday - Friday</span>
                        <span>08:00 - 20:00 WIB</span>
                    </div>
                    <div class="flex justify-between pb-3 border-b">
                        <span class="font-medium">Saturday - Sunday</span>
                        <span>08:00 - 22:00 WIB</span>
                    </div>
                    <div class="flex justify-between pb-3">
                        <span class="font-medium">Public Holidays</span>
                        <span>24/7 (WhatsApp)</span>
                    </div>
                </div>
            </div>

            <!-- Why Choose Us -->
            <div class="bg-white/15 backdrop-blur-xl border border-white/30 p-8 rounded-2xl shadow-lg">
                <h3 class="text-2xl font-bold text-white mb-6">
                    Why Choose Us?
                </h3>
                <ul class="space-y-3 text-white/90">
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-300 mt-1">✓</span>
                        <span>Experienced and friendly drivers</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-300 mt-1">✓</span>
                        <span>Competitive and transparent pricing</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-300 mt-1">✓</span>
                        <span>Well-maintained and comfortable vehicles</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-300 mt-1">✓</span>
                        <span>24/7 customer support</span>
                    </li>
                    <li class="flex items-start gap-3">
                        <span class="text-emerald-300 mt-1">✓</span>
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
