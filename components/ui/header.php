<header class="h-16 bg-white border-b border-slate-200 flex items-center justify-between px-4 sm:px-6 lg:px-8 z-10 shadow-sm">

    <div class="flex items-center gap-4">
        <button onclick="toggleSidebar()" class="md:hidden text-slate-500 hover:text-slate-700 focus:outline-none p-2 rounded-md hover:bg-slate-100 transition-colors">
            <svg class="w-6 h-6" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M4 6h16M4 12h16M4 18h16"></path>
            </svg>
        </button>

        <nav class="hidden sm:flex text-sm font-medium text-slate-500">
            <a href="#" class="hover:text-slate-900 transition-colors">Dashboard</a>
            <span class="mx-2 text-slate-400">/</span>
            <span class="text-slate-900">Penerima Manfaat</span>
        </nav>
    </div>

    <div class="flex items-center gap-2 sm:gap-4">
        <button class="text-slate-400 hover:text-slate-600 p-2 rounded-full hover:bg-slate-100 transition-colors relative" title="Notifikasi">
            <svg class="w-5 h-5" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M15 17h5l-1.405-1.405A2.032 2.032 0 0118 14.158V11a6.002 6.002 0 00-4-5.659V5a2 2 0 10-4 0v.341C7.67 6.165 6 8.388 6 11v3.159c0 .538-.214 1.055-.595 1.436L4 17h5m6 0v1a3 3 0 11-6 0v-1m6 0H9"></path>
            </svg>
            <span class="absolute top-1.5 right-1.5 w-2 h-2 bg-rose-500 rounded-full border-2 border-white"></span>
        </button>

        <div class="h-6 w-px bg-slate-200 mx-1 hidden sm:block"></div>

        <a href="index.php?route=/logout" class="text-rose-500 hover:text-rose-700 hover:bg-rose-50 px-3 py-1.5 rounded-lg text-sm font-medium transition-colors hidden sm:flex items-center gap-2">
            <svg class="w-4 h-4" fill="none" stroke="currentColor" viewBox="0 0 24 24">
                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 16l4-4m0 0l-4-4m4 4H7m6 4v1a3 3 0 01-3 3H6a3 3 0 01-3-3V7a3 3 0 013-3h4a3 3 0 013 3v1"></path>
            </svg>
            Keluar
        </a>
    </div>

</header>