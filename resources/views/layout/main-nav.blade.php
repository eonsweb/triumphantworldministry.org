<nav
        x-data="navbar"
        x-cloak
        class="fixed top-0 left-0 w-full z-50 transition-all backdrop-blur-[4px] duration-300 hover:bg-gray-900/95"
        x-bind:class="isScrolled ? 'bg-gray-900/90 ' : 'bg-transparent'"
        >
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="h-20 flex items-center justify-between">
                <!-- Logo -->
                <a href="/" class="flex items-center space-x-1">
                    <img
                    src="./image/church-logo.png"
                    class="h-16 w-auto"
                    alt="Triumphant World Ministry Logo"
                    />
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="/" class="nav-link active">Home</a>
                    <a href="/about-us" class="nav-link">About Us</a>
                    <a href="/events" class="nav-link">Events</a>
                    <a href="/sermons" class="nav-link">Sermons</a>
                    <a href="/books" class="nav-link">Books</a>
                    <a href="/blog" class="nav-link">Blogs</a>
                    <a href="/contact" class="nav-link">Contact</a>
                </div>

                <!-- Donate -->
                <!-- Donate Button -->
                <a
                    href="/donate"
                    class="hidden lg:inline-flex donate-btn bg-gradient-to-r from-primary-100 to-primary-200 text-gray-900 items-center justify-center px-6 py-3 text-sm font-semibold rounded-full transition-all duration-300 transform hover:scale-[1.02] shadow-lg focus:ring-2 focus:ring-gray-300 focus:ring-offset-2 focus:ring-offset-gray-800"
                >
                    <img src="./image/icons/given-black.png" class="h-6" alt="" />
                    <span class="pl-1 text-[18px]">Donate</span>
                </a>

                <!-- Mobile Navigation -->
                <div
                    x-show="open"
                    x-transition:enter="transition ease-out duration-300"
                    x-transition:enter-start="opacity-0 -translate-x-full"
                    x-transition:enter-end="opacity-100 translate-x-0"
                    x-transition:leave="transition ease-in duration-200"
                    x-transition:leave-start="opacity-100 translate-x-0"
                    x-transition:leave-end="opacity-0 -translate-x-full"
                    class="fixed inset-0 z-50 bg-gray-900/95 backdrop-blur-sm lg:hidden"
                >
                    <div
                    class="relative h-full max-w-xs w-full bg-gray-950/10 shadow-2xl"
                    >
                    <div class="flex justify-end p-6 border-b border-gray-700">
                        <button
                        @click="open = false"
                        class="cursor-pointer text-gray-400 hover:text-white transition-colors"
                        aria-label="Close menu"
                        >
                        <svg
                            class="w-8 h-8"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M6 18L18 6M6 6l12 12"
                            />
                        </svg>
                        </button>
                    </div>
                    <nav class="p-6 space-y-4 bg-gray-900 h-screen">
                        <a href="#" class="mobile-nav-link active"
                        ><svg
                            class="mobile-nav-icon"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 12l2-2m0 0l7-7 7 7M5 10v10a1 1 0 001 1h3m10-11l2 2m-2-2v10a1 1 0 01-1 1h-3m-6 0a1 1 0 001-1v-4a1 1 0 011-1h2a1 1 0 011 1v4a1 1 0 001 1m-6 0h6"
                            /></svg
                        >Home</a
                        >
                        <a href="#" class="mobile-nav-link"
                        ><svg
                            class="mobile-nav-icon"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M13 16h-1v-4h-1m1-4h.01M21 12a9 9 0 11-18 0 9 9 0 0118 0z"
                            /></svg
                        >About Us</a
                        >
                        <a href="#" class="mobile-nav-link"
                        ><svg
                            class="mobile-nav-icon"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 21V5a2 2 0 00-2-2H7a2 2 0 00-2 2v16m14 0h2m-2 0h-5m-9 0H3m2 0h5M9 7h1m-1 4h1m4-4h1m-1 4h1m-5 10v-5a1 1 0 011-1h2a1 1 0 011 1v5m-4 0h4"
                            /></svg
                        >Services</a
                        >
                        <a href="#" class="mobile-nav-link">
                        <svg
                            class="mobile-nav-icon"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M19 11H5m14 0a2 2 0 012 2v6a2 2 0 01-2 2H5a2 2 0 01-2-2v-6a2 2 0 012-2m14 0V9a2 2 0 00-2-2M5 11V9a2 2 0 012-2m0 0V5a2 2 0 012-2h6a2 2 0 012 2v2M7 7h10"
                            /></svg
                        >Projects</a
                        >
                        <a href="#" class="mobile-nav-link"
                        ><svg
                            class="mobile-nav-icon"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M17 20h5v-2a3 3 0 00-5.356-1.857M17 20H7m10 0v-2c0-.656-.126-1.283-.356-1.857M7 20H2v-2a3 3 0 015.356-1.857M7 20v-2c0-.656.126-1.283.356-1.857m0 0a5.002 5.002 0 019.288 0M15 7a3 3 0 11-6 0 3 3 0 016 0zm6 3a2 2 0 11-4 0 2 2 0 014 0zM7 10a2 2 0 11-4 0 2 2 0 014 0z"
                            /></svg
                        >Partner</a
                        >
                        <a href="#" class="mobile-nav-link">
                        <svg
                            class="mobile-nav-icon"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M8 12h.01M12 12h.01M16 12h.01M21 12c0 4.418-4.03 8-9 8a9.863 9.863 0 01-4.255-.949L3 20l1.395-3.72C3.512 15.042 3 13.574 3 12c0-4.418 4.03-8 9-8s9 3.582 9 8z"
                            /></svg
                        >Testimonials</a
                        >
                        <a href="#" class="mobile-nav-link">
                        <svg
                            class="mobile-nav-icon"
                            fill="none"
                            stroke="currentColor"
                            viewBox="0 0 24 24"
                        >
                            <path
                            stroke-linecap="round"
                            stroke-linejoin="round"
                            stroke-width="2"
                            d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                            /></svg
                        >Contact</a
                        >
                    </nav>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button
                    class="lg:hidden cursor-pointer text-gray-300 hover:text-white focus:outline-none"
                    x-on:click="toggle"
                >
                    <svg
                    class="h-8 w-8"
                    fill="none"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M4 6h16M4 12h16m-7 6h7"
                    />
                    </svg>
                </button>
                </div>
            </div>
        </nav>
