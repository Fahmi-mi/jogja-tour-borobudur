<?php
$current_page = basename($_SERVER['PHP_SELF'], '.php');
if ($current_page == 'index') {
    $current_page = 'beranda';
}
?>

<header class="fixed z-50 w-full transition-all duration-300 shadow-sm bg-white text-black">
    <nav class="flex flex-col md:flex-row justify-around md:justify-between items-center h-20 md:h-16 mx-4 md:mx-20">
        <!-- Logo -->
        <a href="index.php">
            <img 
                src="assets/images/logo.png" 
                alt="Jogja Tour Borobudur Logo" 
                class="w-auto h-7 md:h-10 object-contain"
            >
        </a>
        
        <!-- Navigation Menu -->
        <div class="space-x-5 text-sm md:text-base font-medium">
            <a 
                href="index.php" 
                class="hover:text-blue-600 transition-colors <?php echo ($current_page == 'beranda') ? 'text-blue-600 font-semibold' : ''; ?>"
            >
                Beranda
            </a>
            <a 
                href="about.php" 
                class="hover:text-blue-600 transition-colors <?php echo ($current_page == 'about') ? 'text-blue-600 font-semibold' : ''; ?>"
            >
                About
            </a>
            <a 
                href="contact.php" 
                class="hover:text-blue-600 transition-colors <?php echo ($current_page == 'contact') ? 'text-blue-600 font-semibold' : ''; ?>"
            >
                Contact
            </a>
            <a 
                href="testimoni.php" 
                class="hover:text-blue-600 transition-colors <?php echo ($current_page == 'testimoni') ? 'text-blue-600 font-semibold' : ''; ?>"
            >
                Testimoni
            </a>
        </div>
    </nav>
</header>

<!-- Spacer untuk prevent konten tertutup navbar fixed -->
<div class="h-20 md:h-16"></div>