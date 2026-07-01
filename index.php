<?php require_once 'includes/header.php'; ?>

<header id="home" class="relative w-full min-h-[90vh] flex items-center justify-center bg-white dark:bg-dark-bg overflow-hidden pt-24 transition-colors duration-300">
    <div class="absolute inset-0 z-0 flex items-center justify-center pointer-events-none opacity-[0.04] dark:opacity-[0.08]">
        <img src="https://upload.wikimedia.org/wikipedia/commons/e/ec/World_map_blank_without_borders.svg" 
             alt="" 
             class="w-[150%] md:w-full h-full object-cover md:object-contain brightness-0 dark:invert" 
             style="mask-image: linear-gradient(to bottom, black 30%, transparent 90%); -webkit-mask-image: linear-gradient(to bottom, black 30%, transparent 90%);">
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 text-brand-black dark:text-dark-text fade-in">
            Intelligent Movement<br><span class="text-gray-500 dark:text-dark-textSecondary">of Goods.</span>
        </h1>
        <p class="mt-4 text-xl md:text-2xl text-gray-500 dark:text-dark-textSecondary font-light max-w-3xl mx-auto mb-10 fade-in delay-100">
            Redefining the standard in Reefer Container Solutions. We provide end-to-end logistics precision designed for modern business needs.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4 fade-in delay-200">
            <a href="services.php" class="px-8 py-4 rounded-full bg-brand-black text-white font-semibold hover:bg-gray-800 transition-all shadow-lg text-lg">Explore Services</a>
            <a href="about.php" class="px-8 py-4 rounded-full bg-white text-brand-black font-semibold hover:bg-gray-50 transition-all border border-gray-200 shadow-sm text-lg">Learn More</a>
        </div>
    </div>
</header>

<section id="about">
    <?php require_once 'includes/about.php'; ?>
</section>
<?php require_once 'includes/footer.php'; ?>
