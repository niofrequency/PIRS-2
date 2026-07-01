<div id="chat-widget" class="fixed bottom-6 right-6 z-50 flex flex-col items-end font-sans">
        <div id="chat-window" 
             class="hidden 
                    w-[calc(100vw-2rem)] max-w-[380px] 
                    h-[450px]
                    bg-white dark:bg-dark-card 
                    border border-gray-200 dark:border-dark-border 
                    rounded-3xl shadow-2xl 
                    flex flex-col overflow-hidden mb-4 
                    transform origin-bottom-right transition-all duration-300 scale-95 opacity-0">
            <div class="px-5 py-4 bg-white dark:bg-dark-card border-b border-gray-100 dark:border-dark-border flex items-center justify-between z-10">
                <div class="flex items-center space-x-3">
                    <div class="w-2.5 h-2.5 bg-green-500 rounded-full"></div>
                    <div>
                        <h3 class="text-sm font-semibold text-brand-black dark:text-dark-text">Customer Support</h3>
                        <p class="text-xs text-gray-400 dark:text-dark-textSecondary">Online</p>
                    </div>
                </div>
                <button id="close-chat" class="text-gray-400 hover:text-black dark:hover:text-dark-text p-2">✕</button>
            </div>
            <div id="chat-messages" class="flex-grow overflow-y-auto p-5 space-y-5 bg-gray-50 dark:bg-dark-bg flex flex-col custom-scroll">
                <div class="flex w-full justify-start">
                    <div class="max-w-[85%]">
                        <div class="p-3.5 rounded-2xl rounded-tl-sm text-[13px] leading-relaxed bg-white dark:bg-dark-surface text-gray-800 dark:text-dark-text border border-gray-100 dark:border-dark-border shadow-sm">
                            Hello. I'm the PIRS technical diagnostic assistant. How can I assist you with your Reefer unit or global logistics today?
                        </div>
                    </div>
                </div>
            </div>
            <div id="typing-indicator" class="hidden px-5 pb-2 bg-gray-50 dark:bg-dark-bg">
                <div class="flex w-full justify-start">
                    <div class="p-3.5 rounded-2xl rounded-tl-sm bg-white dark:bg-dark-surface border border-gray-100 dark:border-dark-border shadow-sm flex items-center h-[42px]">
                        <div class="typing-indicator"><span></span><span></span><span></span></div>
                    </div>
                </div>
            </div>
            <div class="p-4 bg-white dark:bg-dark-card border-t border-gray-100 dark:border-dark-border">
                <div class="relative flex items-center">
                    <input type="text" id="chat-input" 
                           placeholder="Type an alarm code or question..." 
                           class="w-full bg-gray-50 dark:bg-dark-surface border border-gray-100 dark:border-dark-border rounded-3xl pl-5 pr-14 py-3.5 text-[13px] text-gray-900 dark:text-dark-text focus:outline-none focus:ring-1 focus:ring-brand-blue dark:focus:ring-dark-accent transition-colors">
                    <button id="send-btn" 
                            class="absolute right-2 w-9 h-9 flex items-center justify-center bg-brand-black dark:bg-dark-text text-white dark:text-dark-bg rounded-2xl hover:scale-105 transition-all">
                        <svg width="18" height="18" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="3" stroke-linecap="round" stroke-linejoin="round">
                            <polyline points="8 9 12 5 16 9"></polyline>
                            <path d="M12 5v14"></path>
                        </svg>
                    </button>
                </div>
            </div>
        </div>
        <button id="toggle-chat" class="w-14 h-14 rounded-full bg-brand-black dark:bg-dark-text text-white dark:text-dark-bg shadow-xl flex items-center justify-center hover:scale-105 active:scale-95 transition-all group">
            <svg class="group-hover:hidden transition-all" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"><path d="M21 15a2 2 0 0 1-2 2H7l-4 4V5a2 2 0 0 1 2-2h14a2 2 0 0 1 2 2z"></path></svg>
            <svg class="hidden group-hover:block transition-all" width="22" height="22" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2"><path d="M18 6 6 18"/><path d="m6 6 12 12"/></svg>
        </button>
    </div>

    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const themeToggleBtn = document.getElementById('theme-toggle');
            const themeToggleDarkIcon = document.getElementById('theme-toggle-dark-icon');
            const themeToggleLightIcon = document.getElementById('theme-toggle-light-icon');

            if (document.documentElement.classList.contains('dark')) {
                themeToggleLightIcon.classList.remove('hidden');
            } else {
                themeToggleDarkIcon.classList.remove('hidden');
            }

            themeToggleBtn.addEventListener('click', function() {
                themeToggleDarkIcon.classList.toggle('hidden');
                themeToggleLightIcon.classList.toggle('hidden');

                if (document.documentElement.classList.contains('dark')) {
                    document.documentElement.classList.remove('dark');
                    localStorage.setItem('color-theme', 'light');
                } else {
                    document.documentElement.classList.add('dark');
                    localStorage.setItem('color-theme', 'dark');
                }
            });

            const steps = document.querySelectorAll('.workflow-step');
            steps.forEach((step) => {
                step.addEventListener('click', () => {
                    steps.forEach(s => {
                        s.classList.remove('opacity-100');
                        s.classList.add('opacity-50');
                        const num = s.querySelector('.workflow-number');
                        num.className = 'workflow-number w-12 h-12 bg-white dark:bg-dark-surface border border-gray-200 dark:border-dark-border rounded-full flex items-center justify-center text-sm font-bold text-gray-900 dark:text-dark-textSecondary mb-6 shadow-sm transition-all duration-300 group-hover:scale-110';
                    });
                    
                    step.classList.remove('opacity-50');
                    step.classList.add('opacity-100');
                    const activeNum = step.querySelector('.workflow-number');
                    activeNum.className = 'workflow-number w-12 h-12 bg-brand-black dark:bg-dark-text border border-gray-200 dark:border-dark-text rounded-full flex items-center justify-center text-sm font-bold text-white dark:text-dark-bg mb-6 shadow-md transition-all duration-300 scale-110';
                });
            });

            const toggleBtn = document.getElementById('toggle-chat');
            const closeBtn = document.getElementById('close-chat');
            const chatWindow = document.getElementById('chat-window');
            const chatInput = document.getElementById('chat-input');
            const sendBtn = document.getElementById('send-btn');
            const chatMessages = document.getElementById('chat-messages');
            const typingIndicator = document.getElementById('typing-indicator');

            let isOpen = false;
            let isWaiting = false;
            let conversationHistory = [];

            function toggleChat() {
                isOpen = !isOpen;
                if (isOpen) {
                    chatWindow.classList.remove('hidden');
                    setTimeout(() => {
                        chatWindow.classList.remove('scale-95', 'opacity-0');
                        chatWindow.classList.add('scale-100', 'opacity-100');
                    }, 10);
                    toggleBtn.style.opacity = '0';
                    toggleBtn.style.pointerEvents = 'none';
                    chatInput.focus();
                } else {
                    chatWindow.classList.remove('scale-100', 'opacity-100');
                    chatWindow.classList.add('scale-95', 'opacity-0');
                    setTimeout(() => {
                        chatWindow.classList.add('hidden');
                        toggleBtn.style.opacity = '1';
                        toggleBtn.style.pointerEvents = 'auto';
                    }, 300);
                }
            }

            toggleBtn.addEventListener('click', toggleChat);
            closeBtn.addEventListener('click', toggleChat);

            function appendMessage(role, content) {
                const isBot = role === 'assistant';
                const wrapper = document.createElement('div');
                wrapper.className = `flex w-full ${isBot ? 'justify-start' : 'justify-end'}`;
                
                const inner = document.createElement('div');
                inner.className = 'max-w-[85%]';
                
                const bubble = document.createElement('div');
                bubble.className = `p-3.5 text-[13px] leading-relaxed whitespace-pre-wrap shadow-sm ${
                    isBot 
                    ? 'rounded-2xl rounded-tl-sm bg-white dark:bg-dark-surface text-gray-800 dark:text-dark-text border border-gray-100 dark:border-dark-border' 
                    : 'rounded-2xl rounded-tr-sm bg-brand-black dark:bg-dark-accent text-white'
                }`;
                bubble.textContent = content;

                inner.appendChild(bubble);
                wrapper.appendChild(inner);
                chatMessages.appendChild(wrapper);
                
                chatMessages.scrollTop = chatMessages.scrollHeight;
            }

            async function sendMessage() {
                const text = chatInput.value.trim();
                if (!text || isWaiting) return;

                appendMessage('user', text);
                conversationHistory.push({ role: 'user', content: text });
                
                chatInput.value = '';
                isWaiting = true;
                typingIndicator.classList.remove('hidden');
                chatMessages.scrollTop = chatMessages.scrollHeight;

                try {
                    // UPDATED: Now points to the separated API file
                    const response = await fetch('api/chat.php', {
                        method: 'POST',
                        headers: { 'Content-Type': 'application/json' },
                        body: JSON.stringify({ messages: conversationHistory })
                    });

                    const data = await response.json();
                    
                    typingIndicator.classList.add('hidden');
                    isWaiting = false;

                    if (response.ok && data.choices && data.choices.length > 0) {
                        const botContent = data.choices[0].message.content;
                        appendMessage('assistant', botContent);
                        conversationHistory.push({ role: 'assistant', content: botContent });
                    } else {
                        appendMessage('assistant', 'System error. Please contact info@pirs.co.id.');
                    }
                } catch (error) {
                    typingIndicator.classList.add('hidden');
                    isWaiting = false;
                    appendMessage('assistant', 'Network disconnected. Please check your connection.');
                }
            }

            sendBtn.addEventListener('click', sendMessage);
            chatInput.addEventListener('keypress', (e) => {
                if (e.key === 'Enter') sendMessage();
            });
        });
    </script>
</body>
</html>