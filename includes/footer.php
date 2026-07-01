</main>

    <footer id="footer" class="bg-white dark:bg-dark-bg py-16 border-t border-gray-100 dark:border-dark-border transition-colors duration-300 mt-auto">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
            <div class="grid grid-cols-1 md:grid-cols-3 gap-12 text-center md:text-left mb-12">
                <div class="flex flex-col items-center md:items-start">
                    <img src="img/PIRS-LOGO.PNG" alt="PIRS Logo" class="h-8 w-auto object-contain mb-6 grayscale opacity-50" onerror="this.outerHTML='<span class=\'font-bold text-xl text-gray-300 dark:text-dark-text block mb-6\'>PIRS EASTERN</span>'">
                    <p class="text-sm text-gray-500 dark:text-dark-textSecondary font-light leading-relaxed">
                        Optimizing performance and driving growth through global logistics and advanced supply chain solutions.
                    </p>
                </div>
                
                <div class="flex flex-col items-center md:items-start">
                    <h4 class="text-sm font-semibold text-brand-black dark:text-dark-text uppercase tracking-widest mb-6">Quick Links</h4>
                    <div class="flex flex-col space-y-3 text-sm text-gray-500 dark:text-dark-textSecondary font-light">
                        <a href="about.php" class="hover:text-brand-black dark:hover:text-dark-text transition-colors">About Us</a>
                        <a href="services.php" class="hover:text-brand-black dark:hover:text-dark-text transition-colors">Services</a>
                        <a href="process.php" class="hover:text-brand-black dark:hover:text-dark-text transition-colors">Workflow Process</a>
                        <a href="technology.php" class="hover:text-brand-black dark:hover:text-dark-text transition-colors">Technology</a>
                        <a href="network.php" class="hover:text-brand-black dark:hover:text-dark-text transition-colors">Global Network</a>
                    </div>
                </div>

                <div class="flex flex-col items-center md:items-start">
                    <h4 class="text-sm font-semibold text-brand-black dark:text-dark-text uppercase tracking-widest mb-6">Contact</h4>
                    <div class="flex flex-col space-y-3 text-sm text-gray-500 dark:text-dark-textSecondary font-light">
                        <a href="mailto:info@pirs.co.id" class="hover:text-brand-black dark:hover:text-dark-text transition-colors">info@pirs.co.id</a>
                        <a href="tel:+6281359646964" class="hover:text-brand-black dark:hover:text-dark-text transition-colors">+62 81359 646964</a>
                        <a href="https://www.pirs.co.id" target="_blank" class="hover:text-brand-black dark:hover:text-dark-text transition-colors">www.pirs.co.id</a>
                    </div>
                </div>
            </div>
            
            <div class="border-t border-gray-100 dark:border-dark-border pt-8 flex flex-col items-center text-center">
                <p class="text-xs text-gray-400 font-light">&copy; <?php echo date("Y"); ?> PT. PANJASA IRS EASTERN. All rights reserved.</p>
                <p class="text-xs text-gray-400 dark:text-dark-textSecondary mt-3 font-light">Designed by <a href="https://markpigome-resume.vercel.app/" target="_blank" class="text-brand-blue dark:text-dark-accent hover:underline transition-all">Mark Pigome</a></p>
            </div>
        </div>
    </footer>

    <?php require_once __DIR__ . '/chat-widget.php'; ?>
</body>
</html>
