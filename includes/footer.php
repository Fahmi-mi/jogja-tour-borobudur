<?php
require_once __DIR__ . '/../config/constants.php';
?>

<footer class="py-6 bg-gray-800 text-gray-400 text-center space-y-6 z-50">
    <!-- Flag Counter -->
    <div class="flex justify-start ml-6">
        <a href="https://info.flagcounter.com/XlYK" class="max-w-[160px]">
            <img 
                src="https://s01.flagcounter.com/count2/XlYK/bg_FFFFFF/txt_000000/border_CCCCCC/columns_2/maxflags_10/viewers_0/labels_0/pageviews_0/flags_0/percent_0/" 
                alt="Flag Counter"
                loading="lazy"
            >
        </a>
    </div>
    
    <!-- Copyright -->
    <p class="text-sm md:text-base">
        &copy; <?php echo date('Y'); ?> <?php echo COMPANY_NAME; ?>. All rights reserved.
    </p>
</footer>