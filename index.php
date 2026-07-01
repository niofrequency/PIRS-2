<?php require_once 'includes/header.php'; ?>

<header id="home" class="relative w-full min-h-[90vh] flex items-center justify-center bg-brand-black dark:bg-dark-bg overflow-hidden pt-24">
    <div class="absolute inset-0 z-0">
        <img src="img/cargo-dock-ship.jpg" alt="PIRS Hero" class="w-full h-full object-cover opacity-40 mix-blend-overlay">
        <div class="absolute inset-0 bg-gradient-to-b from-brand-black/80 via-brand-black/50 to-brand-black dark:from-dark-bg/90 dark:via-dark-bg/70 dark:to-dark-bg"></div>
    </div>
    
    <div class="relative z-10 max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center text-white">
        <h1 class="text-5xl md:text-7xl font-extrabold tracking-tight mb-6 fade-in">
            Global Logistics. <br><span class="text-brand-blue dark:text-dark-accent">Redefined.</span>
        </h1>
        <p class="mt-4 text-xl md:text-2xl text-gray-300 font-light max-w-3xl mx-auto mb-10 fade-in delay-100">
            End-to-end supply chain solutions, advanced reefer diagnostics, and unparalleled global connectivity.
        </p>
        <div class="flex flex-col sm:flex-row justify-center gap-4 fade-in delay-200">
            <a href="services.php" class="px-8 py-4 rounded-full bg-brand-blue text-white font-semibold hover:bg-blue-700 transition-all shadow-lg text-lg">Explore Services</a>
            <a href="contact.php" class="px-8 py-4 rounded-full bg-white/10 text-white font-semibold hover:bg-white/20 transition-all border border-white/20 text-lg">Contact Us</a>
        </div>
    </div>
</header>

<section id="about">
    <?php require_once 'includes/about.php'; ?>
</section>

<section id="services">
    <?php require_once 'includes/services.php'; ?>
</section>

<section id="process">
    <?php require_once 'includes/process.php'; ?>
</section>

<section id="technology">
    <?php require_once 'includes/technology.php'; ?>
</section>

<section id="contact-section">
    <?php require_once 'includes/contact.php'; ?>
</section>

<?php require_once 'includes/footer.php'; ?>
