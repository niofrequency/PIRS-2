<!DOCTYPE html>
<html lang="en" class="scroll-smooth">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0, user-scalable=no">
    <title>PT. PANJASA IRS EASTERN</title>
    <link rel="icon" type="image/png" href="img/PIRS-LOGO.PNG">
    
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    
    <script src="https://cdn.tailwindcss.com"></script>
    <script>
        tailwind.config = {
            darkMode: 'class',
            content: [],
            theme: {
                extend: {
                    fontFamily: { sans: ['Inter', 'sans-serif'] },
                    colors: {
                        brand: { 
                            blue: '#0066cc', 
                            red: '#cc0033', 
                            black: '#0a0a0a', 
                            gray: '#f5f5f7' 
                        },
                        dark: {
                            bg: '#0a0a0f',        
                            card: '#111118',      
                            surface: '#1a1a22',   
                            border: '#27272f',
                            text: '#e5e5e8',
                            textSecondary: '#a3a3b0',
                            accent: '#3b82f6'     
                        }
                    },
                    boxShadow: {
                        'premium': '0 10px 40px -10px rgba(0,0,0,0.08)',
                        'floating': '0 20px 40px -10px rgba(0,0,0,0.15)',
                    }
                }
            }
        }
    </script>
    <script>
        if (localStorage.getItem('color-theme') === 'dark') {
            document.documentElement.classList.add('dark');
        } else {
            document.documentElement.classList.remove('dark');
            localStorage.setItem('color-theme', 'light');
        }
    </script>
    <style>
        body { text-rendering: optimizeLegibility; -webkit-font-smoothing: antialiased; }
        .dark { --tw-ring-color: rgb(59 130 246); }
        .bg-grid { background-size: 40px 40px; background-image: linear-gradient(to right, rgba(0, 0, 0, 0.04) 1px, transparent 1px), linear-gradient(to bottom, rgba(0, 0, 0, 0.04) 1px, transparent 1px); }
        .dark .bg-grid { background-image: linear-gradient(to right, rgba(255, 255, 255, 0.03) 1px, transparent 1px), linear-gradient(to bottom, rgba(255, 255, 255, 0.03) 1px, transparent 1px); }
        .bg-grid-dark { background-size: 40px 40px; background-image: linear-gradient(to right, rgba(255, 255, 255, 0.05) 1px, transparent 1px), linear-gradient(to bottom, rgba(255, 255, 255, 0.05) 1px, transparent 1px); }
        .custom-scroll::-webkit-scrollbar { width: 4px; }
        .custom-scroll::-webkit-scrollbar-track { background: transparent; }
        .custom-scroll::-webkit-scrollbar-thumb { background: #e5e7eb; border-radius: 4px; }
        .dark .custom-scroll::-webkit-scrollbar-thumb { background: #27272f; }
        .custom-scroll:hover::-webkit-scrollbar-thumb { background: #d1d5db; }
        .dark .custom-scroll:hover::-webkit-scrollbar-thumb { background: #a3a3b0; }
        .typing-indicator span { display: inline-block; width: 4px; height: 4px; background-color: #111827; border-radius: 50%; animation: typing 1.4s infinite ease-in-out both; margin: 0 1px; }
        .dark .typing-indicator span { background-color: #e5e5e8; }
        .typing-indicator span:nth-child(1) { animation-delay: -0.32s; }
        .typing-indicator span:nth-child(2) { animation-delay: -0.16s; }
        @keyframes typing { 0%, 80%, 100% { transform: scale(0.4); opacity: 0.5; } 40% { transform: scale(1); opacity: 1; } }
        .fade-in { animation: fadeIn 0.8s ease-out forwards; opacity: 0; transform: translateY(10px); }
        .delay-100 { animation-delay: 100ms; }
        .delay-200 { animation-delay: 200ms; }
        @keyframes fadeIn { to { opacity: 1; transform: translateY(0); } }
    </style>
</head>
<body class="font-sans text-gray-900 dark:text-dark-text bg-white dark:bg-dark-bg transition-colors duration-300 selection:bg-brand-blue selection:text-white flex flex-col min-h-screen">

<nav class="bg-white/80 dark:bg-dark-bg/90 backdrop-blur-xl border-b border-gray-100 dark:border-dark-border fixed w-full z-40 top-0 transition-all duration-300">
    <!-- Removed mx-auto to stop centering and kept tight padding -->
    <div class="w-full px-4 md:px-8">
        <div class="flex justify-between h-24 items-center">
            <div class="flex items-center">
                <a href="index.php">
                    <img src="img/PIRS-LOGO.PNG" alt="PIRS Logo" class="h-10 md:h-12 w-auto object-contain" onerror="this.outerHTML='<span class=\'font-bold text-xl tracking-tight text-gray-900 dark:text-dark-text\'>PIRS <span class=\'text-gray-400\'>EASTERN</span></span>'">
                </a>
            </div>
                
            <div class="flex items-center space-x-4 md:space-x-10">
                <div class="hidden lg:flex items-center space-x-10">
                    <a href="about.php" class="text-base font-medium text-gray-500 dark:text-dark-textSecondary hover:text-black dark:hover:text-dark-text transition-colors">About</a>
                    <a href="services.php" class="text-base font-medium text-gray-500 dark:text-dark-textSecondary hover:text-black dark:hover:text-dark-text transition-colors">Services</a>
                    <a href="process.php" class="text-base font-medium text-gray-500 dark:text-dark-textSecondary hover:text-black dark:hover:text-dark-text transition-colors">Process</a>
                    <a href="technology.php" class="text-base font-medium text-gray-500 dark:text-dark-textSecondary hover:text-black dark:hover:text-dark-text transition-colors">Technology</a>
                    <a href="network.php" class="text-base font-medium text-gray-500 dark:text-dark-textSecondary hover:text-black dark:hover:text-dark-text transition-colors">Network</a>
                </div>
                
                <div class="flex items-center space-x-4">
                    <button id="theme-toggle" type="button" class="text-gray-500 dark:text-dark-textSecondary hover:bg-gray-100 dark:hover:bg-dark-surface focus:outline-none rounded-lg p-3 transition-colors">
                        <svg id="theme-toggle-dark-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M17.293 13.293A8 8 0 016.707 2.707a8.001 8.001 0 1010.586 10.586z"></path></svg>
                        <svg id="theme-toggle-light-icon" class="hidden w-6 h-6" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg"><path d="M10 2a1 1 0 011 1v1a1 1 0 11-2 0V3a1 1 0 011-1zm4 8a4 4 0 11-8 0 4 4 0 018 0zm-.464 4.95l.707.707a1 1 0 001.414-1.414l-.707-.707a1 1 0 00-1.414 1.414zm2.12-10.607a1 1 0 010 1.414l-.706.707a1 1 0 11-1.414-1.414l.707-.707a1 1 0 011.414 0zM17 11a1 1 0 100-2h-1a1 1 0 100 2h1zm-7 4a1 1 0 011 1v1a1 1 0 11-2 0v-1a1 1 0 011-1zM5.05 6.464A1 1 0 106.465 5.05l-.708-.707a1 1 0 00-1.414 1.414l.707-.707zm1.414 8.486l-.707.707a1 1 0 01-1.414-1.414l.707-.707a1 1 0 011.414 1.414zM4 11a1 1 0 100-2H3a1 1 0 000 2h1z" fill-rule="evenodd" clip-rule="evenodd"></path></svg>
                    </button>
                    <a href="contact.php" class="hidden md:inline-flex text-base font-medium px-8 py-3 rounded-full bg-brand-black dark:bg-dark-text text-white dark:text-dark-bg hover:bg-gray-800 dark:hover:bg-gray-300 transition-all">Contact Us</a>
                </div>
            </div>
        </div>
    </div>
</nav>
    
    <!-- Spacer so page content doesn't hide under the fixed nav -->
    <div class="pt-24"></div>
    
    <!-- Main Content Wrapper -->
    <main class="flex-grow flex flex-col justify-center">