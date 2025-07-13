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
                    <li class="nav-list">
                        <a href="/" class=" nav-link {{ Request::is('/') ? 'active' : '' }} ">
                            Home
                        </a>
                    </li>
                    <li class="nav-list relative">
                        <button @@click="toggleAboutDropdown"
                            class="nav-link {{ Request::is('who-we-are','pastoral-leadership','our-history') ? 'active' :''}}">
                            About Us
                            <i class="fas fa-chevron-down ml-2 text-xs transition-transform duration-300"
                               :class="aboutDropdown ? 'transform rotate-180' : ''"></i>
                        </button>
                        <!-- Dropdown Menu -->
                        <div x-show="aboutDropdown"
                            @click.outside="aboutDropdown = false"
                            x-transition
                            class="absolute left-0 mt-2 w-64 bg-white text-gray-900 rounded shadow-4xl z-50"  >
                            <a href="/who-we-are" class="block px-6 py-3 hover:bg-gray-100 hover:rounded-t-lg">
                                <i class="fas fa-users mr-3 text-secondary-400"></i>
                                Who We Are
                            </a>
                            <a href="/our-history" class="block px-6 py-3 hover:bg-gray-100">
                                <i class="fas fa-history mr-3 text-secondary-400"></i>
                            Our History</a>
                            <a href="/pastoral-leadership" class="block px-6 py-3 hover:bg-gray-100 hover:rounded-b-lg">
                            <i class="fas fa-user-tie mr-3 text-secondary-400"></i>
                            Pastoral Leadership
                            </a>
                        </div>
                    </li>
                    <li class="nav-list"><a href="/events" class="nav-link {{ Request::is('events*') ? 'active' : '' }}">Events</a></li>
                    <li class="nav-list"><a href="/sermons" class="nav-link {{ Request::is('sermons*') ? 'active' : '' }}">Sermons</a></li>
                    <li class="nav-list"><a href="/books" class="nav-link {{ Request::is('books*') ? 'active' : '' }}">Books</a></li>
                    <li class="nav-list"><a href="/blog" class="nav-link {{ Request::is('blog*') ? 'active' : '' }}">Blog</a></li>
                    <li class="nav-list"><a href="/contact" class="nav-link {{ Request::is('contact*') ? 'active' : '' }}">Contact</a></li>
                </div>

                <!-- Donate -->
                <!-- Donate Button -->
                <a
                    href="/donate"
                    class="hidden lg:inline-flex btn-cta animate-pulse-outward"
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
                    <div class="relative h-full max-w-xs w-full bg-gray-950/10 shadow-2xl">
                        <div class="flex justify-end p-6 border-b border-gray-700 ">
                            <button
                            @click="open = false"
                            class="cursor-pointer text-gray-400 hover:text-white transition-colors mr-2"
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
                            <a href="/" class="mobile-nav-link {{Request::is('/') ? 'active' : ''}}">
                                <i class="fa-solid fa-house mobile-nav-icon "></i>
                                <span>Home</span>
                            </a>
                            <div>
                                <button @click="aboutDropdown = !aboutDropdown" class="mobile-nav-link {{Request::is('who-we-are','our-history','pastoral-leadership') ? 'active' :''}}">
                                    <i class="fa-solid fa-circle-info mobile-nav-icon"></i>
                                    <span class="mr-2">About</span>
                                    <i class="fas fa-chevron-down text-xs" :class="aboutDropdown ? 'transform rotate-180' : ''"></i>
                                </button>

                                <div x-show="aboutDropdown" class="pl-6 mt-2 space-y-2">
                                    <a href="/who-we-are" class="mobile-nav-link">Who We Are</a>
                                    <a href="/our-history" class="mobile-nav-link">Our History</a>
                                    <a href="/pastoral-leadership" class="mobile-nav-link">Pastoral Leadership</a>
                                </div>
                            </div>

                            <a href="/events" class="mobile-nav-link {{Request::is('events*') ? 'active' : ''}}">
                                <i class="fa-solid fa-calendar-days mobile-nav-icon"></i>
                                Events
                            </a>
                            <a href="/sermons" class="mobile-nav-link {{Request::is('sermons') ? 'active' : ''}}">
                                <i class="fa-solid fa-podcast mobile-nav-icon"></i>
                                Sermons
                            </a>
                            <a href="/books" class="mobile-nav-link {{Request::is('books') ? 'active' : ''}}">
                                <i class="fa-solid fa-book-open mobile-nav-icon"></i>
                                Books
                            </a>
                            <a href="/blog" class="mobile-nav-link {{Request::is('blog') ? 'active' : ''}}">
                                <i class="fa-solid fa-newspaper mobile-nav-icon"></i>
                                Blog
                            </a>
                            <a href="/Contact" class="mobile-nav-link {{Request::is('contact') ? 'active' : ''}}">
                                <i class="fa-solid fa-envelope mobile-nav-icon"></i>
                                Contact
                            </a>
                        </nav>
                    </div>
                </div>

                <!-- Mobile Menu Button -->
                <button class="lg:hidden cursor-pointer text-gray-300 hover:text-white focus:outline-none mr-6" x-on:click="toggle">
                    <svg class="h-8 w-8" fill="none" viewBox="0 0 24 24" stroke="currentColor">
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
