<?php
require_once __DIR__ . '/../config/constants.php';
?>

<!-- WhatsApp Fixed Button -->
<a 
    href="https://wa.me/<?php echo WHATSAPP_NUMBER; ?>?text=Hello%20<?php echo urlencode(COMPANY_NAME); ?>,%20I%20would%20like%20to%20inquire%20about%20the%20tour%20packages" 
    target="_blank"
    rel="noopener noreferrer"
    class="fixed bottom-6 right-2 z-50 transition-transform duration-300 hover:scale-105"
    aria-label="Chat WhatsApp"
    title="Chat via WhatsApp"
>
    <img 
        src="assets/images/whatsapp-icon.png" 
        alt="WhatsApp"
        class="w-28 md:w-32 h-auto object-contain"
    >
</a>
