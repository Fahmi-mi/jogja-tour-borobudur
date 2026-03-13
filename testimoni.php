<?php
$page_title = 'Jogja Tour Borobudur';
$page_description = 'Read testimonials and experiences from customers who have used Jogja Tour Borobudur services. Your satisfaction is our top priority.';
$page_keywords = 'jogja tour testimonials, borobudur tour reviews, yogyakarta travel experiences';

include 'includes/head.php';
include 'includes/header.php';
?>

<main class="relative page-bg-overlay min-h-screen bg-[url('assets/images/bg-parang.webp')] bg-fixed bg-cover">
    
    <!-- Header -->
    <section class="pt-16 md:pt-24 px-5 md:px-20 pb-8 md:pb-12">
        <div class="max-w-6xl mx-auto text-center py-20 md:py-28">
            <h1 class="text-4xl md:text-6xl font-bold text-white mb-5">
                Customer Testimonials
            </h1>
            <p class="text-lg md:text-2xl text-white/90 max-w-3xl mx-auto leading-relaxed">
                Discover stories and experiences from our happy customers
            </p>
        </div>
    </section>

    <!-- Testimonial Form -->
    <section class="py-16 px-5 md:px-20 bg-black/30 backdrop-blur-lg border-t border-b border-white/20">
        <div class="bg-white/15 backdrop-blur-xl border border-white/30 p-6 md:p-8 rounded-2xl shadow-xl max-w-4xl mx-auto">
            <h2 class="text-2xl md:text-3xl font-bold mb-2 text-white">Share Your Experience</h2>
            <p class="text-white/85 mb-8">
                We highly value your feedback to help us improve our service
            </p>
            
            <form id="testimoniForm" class="space-y-6">
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
                        maxlength="100"
                        class="w-full p-3 border border-white/30 bg-white/85 text-gray-900 rounded-lg focus:ring-2 focus:ring-sky-400 focus:border-transparent outline-none transition-all"
                    >
                    <p class="text-sm text-white/70 mt-1">Maximum 100 characters</p>
                </div>

                <div>
                    <label for="rating" class="block text-sm md:text-base font-medium text-white mb-2">
                        Rating <span class="text-red-500">*</span>
                    </label>
                    <div class="flex gap-2 items-center">
                        <div class="rating-stars flex gap-1 text-3xl">
                            <button type="button" class="star text-gray-300 hover:text-yellow-400 transition-colors" data-rating="1">★</button>
                            <button type="button" class="star text-gray-300 hover:text-yellow-400 transition-colors" data-rating="2">★</button>
                            <button type="button" class="star text-gray-300 hover:text-yellow-400 transition-colors" data-rating="3">★</button>
                            <button type="button" class="star text-gray-300 hover:text-yellow-400 transition-colors" data-rating="4">★</button>
                            <button type="button" class="star text-gray-300 hover:text-yellow-400 transition-colors" data-rating="5">★</button>
                        </div>
                        <input type="hidden" id="rating" name="rating" value="0" required>
                        <span id="ratingText" class="text-white/80 ml-2 self-center">Choose rating</span>
                    </div>
                </div>

                <div>
                    <label for="pesan" class="block text-sm md:text-base font-medium text-white mb-2">
                        Testimonial <span class="text-red-500">*</span>
                    </label>
                    <textarea 
                        id="pesan" 
                        name="pesan" 
                        placeholder="Tell us about your experience with our service..."
                        rows="6"
                        required 
                        maxlength="1000"
                        class="w-full p-3 border border-white/30 bg-white/85 text-gray-900 rounded-lg focus:ring-2 focus:ring-sky-400 focus:border-transparent outline-none transition-all resize-none"
                    ></textarea>
                    <p class="text-sm text-white/70 mt-1">Maximum 1000 characters</p>
                </div>

                <button 
                    type="submit" 
                    id="submitBtn"
                    class="w-full bg-white text-slate-900 font-semibold py-4 px-6 rounded-lg transition-colors duration-300 hover:bg-slate-100 flex items-center justify-center gap-2 text-lg"
                >
                    <span id="btnText">Submit Testimonial</span>
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
                    What They Say
                </h2>
                <p class="text-lg text-white/90 drop-shadow-md">
                    Testimonials from customers satisfied with our services
                </p>
            </div>

            <!-- Loading State -->
            <div id="loadingState" class="text-center py-12">
                <div class="inline-block">
                    <svg class="animate-spin h-12 w-12 text-white" fill="none" viewBox="0 0 24 24">
                        <circle class="opacity-25" cx="12" cy="12" r="10" stroke="currentColor" stroke-width="4"></circle>
                        <path class="opacity-75" fill="currentColor" d="M4 12a8 8 0 018-8V0C5.373 0 0 5.373 0 12h4zm2 5.291A7.962 7.962 0 014 12H0c0 3.042 1.135 5.824 3 7.938l3-2.647z"></path>
                    </svg>
                    <p class="text-white mt-4">Loading testimonials...</p>
                </div>
            </div>

            <!-- Error State -->
            <div id="errorState" class="hidden text-center py-12">
                <div class="bg-red-500/20 border border-red-300/40 text-white p-6 rounded-2xl inline-block backdrop-blur-md">
                    <p class="font-medium">Failed to load testimonials</p>
                    <button onclick="loadTestimonials()" class="mt-3 bg-white text-red-700 px-4 py-2 rounded-lg hover:bg-red-50">
                        Try Again
                    </button>
                </div>
            </div>

            <!-- Empty State -->
            <div id="emptyState" class="hidden text-center py-12">
                <div class="bg-white/15 border border-white/30 backdrop-blur-xl p-8 rounded-2xl shadow-lg inline-block">
                    <h3 class="text-2xl font-bold text-white mb-2">No Testimonials Yet</h3>
                    <p class="text-white/80">Be the first to share your testimonial!</p>
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
