<?php
require_once __DIR__ . '/../config/constants.php';
?>

<!-- WhatsApp Fixed Button -->
<a 
    href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Halo%20<?php echo urlencode(COMPANY_NAME); ?>,%20saya%20ingin%20bertanya%20tentang%20paket%20tour" 
    target="_blank"
    rel="noopener noreferrer"
    class="fixed bottom-6 right-6 z-50 bg-green-500 hover:bg-green-600 text-white rounded-full p-4 shadow-lg transition-all duration-300 hover:scale-110 group"
    aria-label="Chat WhatsApp"
    title="Chat via WhatsApp"
>
    <img 
        src="assets/images/whatsapp-icon.png" 
        alt="WhatsApp" 
        class="w-8 h-8 md:w-10 md:h-10"
    >
    
    <!-- Tooltip (optional) -->
    <span class="absolute right-full mr-3 top-1/2 -translate-y-1/2 bg-gray-800 text-white text-sm px-3 py-2 rounded-lg whitespace-nowrap opacity-0 group-hover:opacity-100 transition-opacity duration-300 pointer-events-none">
        Chat dengan kami
    </span>
</a>
