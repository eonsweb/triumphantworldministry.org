<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Laravel</title>

        <!-- Fonts -->
        <link rel="preconnect" href="https://fonts.bunny.net">
        <link href="https://fonts.bunny.net/css?family=instrument-sans:400,500,600" rel="stylesheet" />

            @vite(['resources/css/app.css', 'resources/js/app.js'])

    </head>
    <body class="font-sans">
        {{-- Main Navigation --}}
        <nav
        x-data="navbar"
        x-cloak
        class="fixed top-0 left-0 w-full z-50 transition-all backdrop-blur-[4px] duration-300 hover:bg-gray-900/95"
        x-bind:class="isScrolled ? 'bg-gray-900/90 ' : 'bg-transparent'"
        >
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">
                <div class="h-20 flex items-center justify-between">
                <!-- Logo -->
                <a href="#" class="flex items-center space-x-1">
                    <img
                    src="./image/church-logo.png"
                    class="h-16 w-auto"
                    alt="Triumphant World Ministry Logo"
                    />
                </a>

                <!-- Desktop Navigation -->
                <div class="hidden lg:flex items-center space-x-8">
                    <a href="#" class="nav-link active">Home</a>
                    <a href="#" class="nav-link">About Us</a>
                    <a href="#" class="nav-link">Events</a>
                    <a href="#" class="nav-link">Sermons</a>
                    <a href="#" class="nav-link">Books</a>
                    <a href="#" class="nav-link">Blogs</a>
                    <a href="#" class="nav-link">Contact</a>
                </div>

                <!-- Donate -->
                <!-- Donate Button -->
                <a
                    href="#"
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

        <!-- Header -->
        <header class="relative h-screen bg-gray-900 overflow-hidden">
        <!-- Background Image with Parallax Effect -->
        <div class="absolute inset-0 z-0">
            <img
            src="./image/church-gallery/church-members.jpg"
            loading="lazy"
            class="w-full h-full object-cover"
            alt="Triumphant World Ministry Church Services"
            />
            <div class="absolute inset-0 gradient-overlay opacity-95"></div>
        </div>

        <!-- Header Content -->
        <div class="relative h-full flex items-center justify-center z-10">
            <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8 text-center">
            <div class="space-y-5" data-aos="fade-up">
                <!-- Badge -->
                <div class="inline-flex items-center space-x-3 text-white">
                <div class="h-px w-8 bg-white"></div>
                <span class="text-lg font-semibold tracking-widest uppercase"
                    >2025 THEME</span
                >
                <div class="h-px w-8 bg-white"></div>
                </div>
                <!-- Main Heading -->
                <h1
                class="text-4xl sm:text-5xl lg:text-8xl font-bold text-primary-100 leading-tight max-w-4xl mx-auto"
                >
                <span
                    class="block mb-4 bg-gradient-to-r from-primary-100 to-primary-200 bg-clip-text text-transparent"
                    >Grace Upon Grace</span
                >
                </h1>

                <!-- Subtext -->
                <p
                class="text-xl md:text-2xl font-serif text-white italic mb-6"
                data-aos="fade-up"
                data-aos-delay="100"
                >
                And of His fullness we have all received, and grace for grace.
                </p>
                <p
                class="text-lg text-white tracking-widest"
                data-aos="fade-up"
                data-aos-delay="200"
                >
                John 1:16
                </p>

                <!-- CTA Buttons -->
                <div
                class="flex flex-col sm:flex-row items-center justify-center gap-4 mt-10"
                >
                <a href="#" class="cta-button primary">
                    <svg
                    xmlns="http://www.w3.org/2000/svg"
                    x="0px"
                    y="0px"
                    width="16"
                    height="16"
                    viewBox="0 0 50 50"
                    >
                    <path
                        d="M 8.03125 8.4570312 C 7.770375 8.4589063 7.5103125 8.5625312 7.3203125 8.7695312 C 3.3953125 13.041531 1 18.741 1 25 C 1 31.259 3.3953125 36.958469 7.3203125 41.230469 C 7.7003125 41.644469 8.3569063 41.643094 8.7539062 41.246094 L 10.882812 39.117188 C 11.265812 38.734187 11.263391 38.124656 10.900391 37.722656 C 7.8553906 34.352656 6 29.889 6 25 C 6 20.111 7.8553906 15.647344 10.900391 12.277344 C 11.263391 11.875344 11.265813 11.266812 10.882812 10.882812 L 8.7539062 8.7539062 C 8.5554063 8.5554063 8.292125 8.4551562 8.03125 8.4570312 z M 41.96875 8.4570312 C 41.707625 8.4554062 41.444594 8.5554062 41.246094 8.7539062 L 39.115234 10.884766 C 38.732234 11.267766 38.734656 11.875344 39.097656 12.277344 C 42.143656 15.646344 44 20.111 44 25 C 44 29.889 42.144609 34.352656 39.099609 37.722656 C 38.736609 38.124656 38.734188 38.733187 39.117188 39.117188 L 41.246094 41.246094 C 41.643094 41.643094 42.299687 41.643469 42.679688 41.230469 C 46.604687 36.958469 49 31.259 49 25 C 49 18.741 46.604687 13.041531 42.679688 8.7695312 C 42.489688 8.5625312 42.229875 8.4586563 41.96875 8.4570312 z M 35.625 14.837891 C 35.355125 14.824516 35.079594 14.920406 34.871094 15.128906 L 32.740234 17.259766 C 32.381234 17.618766 32.341969 18.196938 32.667969 18.585938 C 34.123969 20.323937 35 22.561 35 25 C 35 27.439 34.123969 29.675109 32.667969 31.412109 C 32.341969 31.801109 32.381234 32.379281 32.740234 32.738281 L 34.871094 34.871094 C 35.288094 35.288094 35.967516 35.250687 36.353516 34.804688 C 38.625516 32.175687 40 28.748 40 25 C 40 21.252 38.625516 17.824312 36.353516 15.195312 C 36.160516 14.972313 35.894875 14.851266 35.625 14.837891 z M 14.375 14.839844 C 14.105125 14.853219 13.839484 14.974266 13.646484 15.197266 C 11.374484 17.825266 10 21.252 10 25 C 10 28.748 11.374484 32.175688 13.646484 34.804688 C 14.032484 35.250687 14.711906 35.288094 15.128906 34.871094 L 17.259766 32.740234 C 17.618766 32.381234 17.658031 31.803062 17.332031 31.414062 C 15.876031 29.676062 15 27.439 15 25 C 15 22.561 15.876031 20.324891 17.332031 18.587891 C 17.658031 18.198891 17.618766 17.620719 17.259766 17.261719 L 15.128906 15.128906 C 14.920406 14.920406 14.644875 14.826469 14.375 14.839844 z M 25 19 C 21.686 19 19 21.686 19 25 C 19 28.314 21.686 31 25 31 C 28.314 31 31 28.314 31 25 C 31 21.686 28.314 19 25 19 z"
                    ></path>
                    </svg>
                    <span class="px-2"> Live Service </span>
                    <i class="fa-solid fa-arrow-right"></i>
                </a>
                <a href="#" class="cta-button secondary"
                    >
                    <i class="fa-solid fa-users"></i>
                    <span class="pl-1"> Plan Your Visit </span>
                </a>
                </div>
            </div>
            </div>
        </div>
        </header>

        <!-- Prayer request Bar -->
        <section class="relative z-30 w-full flex justify-center -mt-8">
        <div
            class="flex flex-col sm:flex-row items-center w-full max-w-3xl gap-4 bg-white px-6 py-3 shadow-lg rounded-full"
        >
            <p class="flex-1 text-base text-gray-900 text-center sm:text-left">
            We'd love to join you in prayer. Click the button to submit your prayer request.
            </p>
            <a
            href="#"
            class="w-full sm:w-auto text-center green-btn text-white px-6 py-3 text-sm font-semibold rounded-full transition-all duration-300"
            >
            Submit
            </a>
        </div>
        </section>

        <!-- Welcome Section -->
        <section class="py-16 bg-white">
            <div class="container mx-auto px-4">
                <div class="flex flex-col md:flex-row items-center gap-12 ">
                <div class="hidden lg:block mx-4 lg:mx-0 w-full lg:w-6/12">
                    <!-- Responsive container for composition -->
                    <div class="relative w-full aspect-[4/3] md:aspect-[4/3] lg:h-[500px] group/composition ">
                    <!-- Box 1 -->
                    <div
                        class="absolute w-[60%] shadow-2xl rounded-lg overflow-hidden transition-transform duration-300 z-[3]
                            [transform:translate(-10%,20%)_scale(100%)]
                            group-hover/composition:[transform:translate(-10%,20%)_scale(95%)]
                            hover:!z-[5] hover:[transform:translate(-10%,20%)_scale(110%)]"
                    >
                        <img src="./image/image-composition/ic-1.jpg" alt="Pastoral Leadership" class="w-full h-full object-cover" />
                        <div
                        class="absolute bottom-0 left-0 right-0 bg-black/70 text-white text-xs uppercase text-center p-3 opacity-0 group-hover/composition:opacity-100 transition-opacity"
                        >
                        THE FOUNDERS
                        </div>
                    </div>

                    <!-- Box 2 -->
                    <div
                        class="absolute w-[60%] shadow-2xl rounded-lg overflow-hidden transition-transform duration-300 z-[4]
                            [transform:translate(50%,50%)_scale(100%)]
                            group-hover/composition:[transform:translate(50%,50%)_scale(95%)]
                            hover:!z-[5] hover:[transform:translate(50%,50%)_scale(110%)]"
                    >
                        <img src="./image/image-composition/ic-2.jpg" alt="Community Outreach" class="w-full h-full object-cover" />
                        <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white text-xs uppercase text-center p-3 opacity-0 group-hover/composition:opacity-100 transition-opacity">
                        Pastoral Leadership
                        </div>
                    </div>

                    <!-- Box 3 -->
                    <div
                        class="absolute w-[60%] shadow-2xl rounded-lg overflow-hidden transition-transform duration-300 z-[4]
                            [transform:translate(20%,90%)_scale(100%)]
                            group-hover/composition:[transform:translate(20%,90%)_scale(95%)]
                            hover:!z-[5] hover:[transform:translate(20%,90%)_scale(110%)]"
                    >
                        <img src="./image/image-composition/ic-3.jpg" alt="Spiritual Growth" class="w-full h-full object-cover" />
                        <div class="absolute bottom-0 left-0 right-0 bg-black/70 text-white text-xs uppercase text-center p-3 opacity-0 group-hover/composition:opacity-100 transition-opacity">
                        FOUNDER & FIRST SENIOR PASTOR
                        </div>
                    </div>
                    </div>
                </div>

                <!-- Welcome text message -->
                <div class="w-full lg:w-1/2">
                    <!-- Badge -->
                    <div
                    class="inline-flex items-center space-x-3 mb-6"
                    data-aos="fade-up"
                    >
                    <div class="h-px w-8 bg-gray-900"></div>
                    <span
                        class="text-lg font-semibold tracking-wide uppercase gradient-overlay bg-clip-text text-transparent"
                        >Faith In Action: A Place For new Beginnings</span
                    >

                    <div class="h-px w-8 bg-gray-900"></div>
                    </div>
                    <p
                    class="text-gray-700 mb-4 leading-relaxed"
                    data-aos="fade-up"
                    data-aos-delay="100"
                    >
                    Greetings in the name of our Lord and Savior, Jesus Christ!<br />
                    Welcome to Triumphant World Ministry, a place of grace, love, and
                    spiritual growth. We're delighted you've chosen to explore our
                    community and learn more about our mission to spread God's love
                    throughout the world. Whether you’re a long-standing member, a
                    friend we’ve yet to meet in person, or a virtual visitor from
                    across the globe, we are delighted to have you with us.
                    </p>
                    <p
                    class="text-gray-700 mb-4 leading-relaxed"
                    data-aos="fade-up"
                    data-aos-delay="200"
                    >
                    Our Pastoral team, led by Prophet Joseph John Darko and Rev Mrs.
                    Asabea Ayisi Darko, brings decades of experience and heartfelt
                    dedication to serving our congregation. We believe in creating a
                    nurturing environment where every individual can discover their
                    divine purpose and grow in faith.
                    </p>
                    <p
                    class="text-gray-700 mb-1 leading-relaxed"
                    data-aos="fade-up"
                    data-aos-delay="300"
                    >
                    This website serves as a gateway to the heart of our community—a
                    space where we share the good news, stay connected, and extend the
                    love of Christ beyond the walls of our physical sanctuary. Thank
                    you for being a part of our online community.
                    </p>
                    <p
                    class="text-gray-700 mb-8 leading-relaxed"
                    data-aos="fade-up"
                    data-aos-delay="300"
                    >
                    We look forward to the day we can welcome you in person, but until
                    then, know that you are in our prayers, and our digital doors are
                    always open.
                    </p>
                    <p
                    class="text-lg font-greatevibe font-semibold tracking-wide gradient-overlay bg-clip-text text-transparent"
                    >
                    In Christ’s love
                    </p>
                </div>
                </div>
            </div>
        </section>

        <!-- Upcoming Events -->
        <section class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <div class="text-center mb-12">
            <!-- Badge -->
            <div
                class="inline-flex items-center space-x-3 mb-6"
                data-aos="fade-up"
            >
                <div class="h-px w-8 bg-gray-900"></div>
                <span
                class="text-lg font-semibold tracking-wide uppercase gradient-overlay bg-clip-text text-transparent"
                >Upcoming Events</span
                >

                <div class="h-px w-8 bg-gray-900"></div>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-900 mb-4">
                Breaking Bread: Serving Up The Latest News for our Members!
            </h1>
            </div>

            <div class="grid grid-cols-1 md:grid-cols-2 gap-8">
            <!-- Event 1 -->
            <div
                class="relative h-[500px] rounded-xl overflow-hidden shadow-xl group"
            >
                <img
                src="./image/church-gallery/pastors/pastors.jpg"
                class="absolute inset-0 w-full h-full object-cover object-left transition-transform duration-500 group-hover:scale-110"
                alt="Pastor's Appreciation Event"
                />
                <div
                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"
                ></div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                <h5 class="text-sm font-semibold uppercase tracking-wider mb-2">
                    Upcoming Event
                </h5>
                <h2 class="text-2xl font-bold mb-4">Pastor's Appreciation</h2>
                <p class="text-gray-200 mb-4">
                    Come and experience Jesus, the miracle worker, through the
                    ministries of the father. Join us at Church Auditorium. Come
                    with a heart of expectation.
                </p>
                <p class="text-gray-300 mb-6">1st May</p>
                <a
                    href="#"
                    class="inline-flex items-center bg-gradient-to-r from-primary-100 to-primary-200 text-gray-900 px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 transform hover:scale-[1.02] shadow-lg"
                >
                    Read More
                    <svg
                    class="w-4 h-4 ml-2"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"
                    />
                    </svg>
                </a>
                </div>
            </div>

            <!-- Event 2 -->
            <div
                class="relative h-[500px] rounded-xl overflow-hidden shadow-xl group"
            >
                <img
                src="./image/events/let-the-fire-fall.jpg"
                class="absolute inset-0 w-full h-full object-cover object-top transition-transform duration-500 group-hover:scale-110"
                alt="Pentecostal Month Event"
                />
                <div
                class="absolute inset-0 bg-gradient-to-t from-black/70 to-transparent"
                ></div>
                <div class="absolute bottom-0 left-0 right-0 p-8 text-white">
                <h5 class="text-sm font-semibold uppercase tracking-wider mb-2">
                    Upcoming Event
                </h5>
                <h2 class="text-2xl font-bold mb-4">
                    Pentecostal Month: Let The Fire Fall
                </h2>
                <p class="text-gray-200 mb-4">
                    Experience the power of the Holy Spirit in our special Pentecost
                    series. Daily teachings, worship nights, and prayer gatherings
                    throughout June.
                </p>
                <p class="text-gray-300 mb-6">1st June - 30th June</p>
                <a
                    href="#"
                    class="inline-flex items-center bg-gradient-to-r from-primary-100 to-primary-200 text-gray-900 px-6 py-2.5 rounded-full text-sm font-semibold transition-all duration-300 transform hover:scale-[1.02] shadow-lg"
                >
                    Read More
                    <svg
                    class="w-4 h-4 ml-2"
                    fill="none"
                    stroke="currentColor"
                    viewBox="0 0 24 24"
                    >
                    <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M14 5l7 7m0 0l-7 7m7-7H3"
                    />
                    </svg>
                </a>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- cta book Section -->
        <section
        class=" bg-gradient-to-r from-secondary-100 to-secondary-50 flex items-center justify-center px-4 py-12 md:py-24 mt-12 font-manrope"
        >
        <div class="max-w-7xl mx-auto w-full">
            <!-- cta container -->
            <div
            class="bg-gradient-to-r from-secondary-100 to-primary-50 rounded-2xl overflow-hidden shadow-xl"
            >
            <div class="container mx-auto px-4 py-12 md:py-16">
                <div
                class="flex flex-col md:flex-row items-center justify-between gap-8 md:gap-12"
                >
                <!-- Book Image with Decorative Elements -->
                <div class="relative w-full md:w-1/2 flex justify-center">
                    <div class="relative">
                    <div
                        class="absolute -top-6 -left-6 w-24 h-24 bg-primary-400 rounded-full opacity-20 z-0"
                    ></div>
                    <div
                        class="absolute -bottom-6 -right-6 w-32 h-32 bg-secondary-400 rounded-full opacity-20 z-0"
                    ></div>
                    <div class="relative z-10 shadow-xs">
                        <!-- Book cover with 3D effect -->
                        <div class="relative">
                        <img
                            src="./image/books/mystery-book.png"
                            class="w-64 transform rotate-3 z-20"
                            alt="the mystery of midnight prayers"
                        />
                        </div>
                        <!-- Decorative element -->
                        <div
                        class="absolute top-0 right-0 transform translate-x-6 -translate-y-6 z-10"
                        >
                        <div
                            class="bg-gray-50 rounded-full w-12 h-12 flex items-center justify-center"
                        >
                            <svg
                            class="fill-current w-8 text-primary-600"
                            xmlns="http://www.w3.org/2000/svg"
                            viewBox="0 0 640 512"
                            >
                            <path
                                d="M351.2 4.8c3.2-2 6.6-3.3 10-4.1c4.7-1 9.6-.9 14.1 .1c7.7 1.8 14.8 6.5 19.4 13.6L514.6 194.2c8.8 13.1 13.4 28.6 13.4 44.4l0 73.5c0 6.9 4.4 13 10.9 15.2l79.2 26.4C631.2 358 640 370.2 640 384l0 96c0 9.9-4.6 19.3-12.5 25.4s-18.1 8.1-27.7 5.5L431 465.9c-56-14.9-95-65.7-95-123.7L336 224c0-17.7 14.3-32 32-32s32 14.3 32 32l0 80c0 8.8 7.2 16 16 16s16-7.2 16-16l0-84.9c0-7-1.8-13.8-5.3-19.8L340.3 48.1c-1.7-3-2.9-6.1-3.6-9.3c-1-4.7-1-9.6 .1-14.1c1.9-8 6.8-15.2 14.3-19.9zm-62.4 0c7.5 4.6 12.4 11.9 14.3 19.9c1.1 4.6 1.2 9.4 .1 14.1c-.7 3.2-1.9 6.3-3.6 9.3L213.3 199.3c-3.5 6-5.3 12.9-5.3 19.8l0 84.9c0 8.8 7.2 16 16 16s16-7.2 16-16l0-80c0-17.7 14.3-32 32-32s32 14.3 32 32l0 118.2c0 58-39 108.7-95 123.7l-168.7 45c-9.6 2.6-19.9 .5-27.7-5.5S0 490 0 480l0-96c0-13.8 8.8-26 21.9-30.4l79.2-26.4c6.5-2.2 10.9-8.3 10.9-15.2l0-73.5c0-15.8 4.7-31.2 13.4-44.4L245.2 14.5c4.6-7.1 11.7-11.8 19.4-13.6c4.6-1.1 9.4-1.2 14.1-.1c3.5 .8 6.9 2.1 10 4.1z"
                            />
                            </svg>
                        </div>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- Book Information -->
                <div class="w-full md:w-1/2 text-center md:text-left">
                    <div class="max-w-lg mx-auto md:ml-0">
                    <span
                        class="inline-block px-4 py-1 bg-white text-primary-600 rounded-full text-sm font-semibold mb-4 shadow-md"
                    >
                        Latest Release
                    </span>
                    <h1
                        class="font-inter text-4xl md:text-5xl lg:text-6xl font-bold text-gray-900 leading-tight mb-6"
                    >
                        The Mystery of Midnight Prayer
                    </h1>
                    <p
                        class="text-lg md:text-xl text-gray-700 leading-relaxed mb-8"
                    >
                        Discover the transformative power of prayer with Prophet
                        John Darko's profound exploration of midnight prayer. Unlock
                        spiritual breakthroughs and deepen your connection with God
                        through this life-changing guide.
                    </p>
                    <div
                        class="flex flex-col sm:flex-row gap-4 justify-center md:justify-start"
                    >
                        <a
                        href="#"
                        class="relative inline-flex items-center justify-center px-8 py-4 overflow-hidden font-bold text-gray-100 rounded-full group pulse-animation"
                        >
                        <span
                            class="absolute inset-0 w-full h-full green-btn transition-all duration-300 ease-out group-hover:opacity-90"
                        ></span>
                        <span
                            class="absolute top-0 left-0 w-48 h-48 -mt-1 -ml-12 transition-all duration-700 ease-out bg-white rotate-45 -translate-x-96 translate-y-12 opacity-30 group-hover:-translate-x-40"
                        ></span>
                        <span class="relative flex items-center gap-2 text-lg">
                            <i class="fa-solid fa-book-open"></i>

                            Get Your Copy Now
                        </span>
                        </a>

                        <a
                        href="#"
                        class="border-2 border-primary-600 text-primary-700 px-6 py-4 rounded-full font-medium hover:bg-primary-50 transition"
                        >
                        <i class="fa-solid fa-circle-play"></i>

                        Book's Audio Sample
                        </a>
                    </div>
                    </div>
                </div>
                </div>
            </div>
            </div>
        </div>
        </section>

        <!-- Weekly Activies Section-->
        <section x-data="WeeklyActivitiesComponent" class="py-16 bg-gray-900">
        <!-- Badge -->
        <div class="text-center mb-12">
            <div class="inline-flex items-center space-x-3 mb-6" data-aos="fade-up">
            <div class="h-px w-8 gradient-overlay"></div>
            <span
                class="text-lg font-semibold tracking-wide uppercase gradient-overlay bg-clip-text text-transparent"
                >Weekly Church Activities</span
            >

            <div class="h-px w-8 gradient-overlay"></div>
            </div>
            <h1 class="text-3xl md:text-4xl font-bold text-gray-400 mb-4">
            Fortify Your Faith: Join Us For Our Weekly Worship services!
            </h1>
        </div>

        <!-- Weekly Activities Card Slider -->
        <div class="activities relative mx-auto max-w-7xl px-4 py-4">
            <!-- Weekly Activity Slider -->
            <div class="swiper weekly-activities">
            <div class="swiper-wrapper">
                <template x-for="activity in activitySlides">
                <div class="swiper-slide">
                <div class="flex flex-col h-[500px] bg-white rounded-xl shadow">
                    <div class="overflow-hidden h-1/2 rounded-t">
                    <img
                        :src="activity.image"
                        alt="Dominion Service"
                        class="w-full h-full rounded-t-xl object-cover hover:scale-110 hover:grayscale transition duration-500"
                        @@error="$event.target.src='image/weekly-activities/default.jpg'"
                    />
                    </div>
                    <div class="p-6 flex flex-col flex-1">
                    <h5 class="text-xl font-bold text-gray-900 mb-2" x-text="activity.title">

                    </h5>
                    <p class="text-primary-500 font-medium mb-4">
                        <span x-text="activity.day" class="capitalize"></span>
                        <span class="mx-2">|</span>
                        <span x-text="activity.time"></span>
                    </p>
                    <p class="program-summary text-gray-700 mb-6" x-text="activity.description"></p>
                    <a
                        href="#"
                        class="inline-block mt-auto text-primary-500 font-medium hover:text-primary-600"
                    >
                        Read more
                        <i class="fa-solid fa-arrow-right"></i>
                    </a>
                    </div>
                </div>
                </div>
                </template>
            </div>

            <!-- Pagination -->
            </div>
            <div class="swiper-pagination absolute -bottom-3!"></div>

            <!-- Navigation buttons -->
            <div
            class="hidden md:block swiper-button-prev absolute top-1/2! -translate-y-1/2! -left-8! h-[40px]! w-[40px]! bg-yellow-100 hover:bg-yellow-500 rounded-full after:text-[24px]! after:text-gray-600! hover:after:font-extrabold! transition-all duration-300"
            ></div>

            <div
            class="hidden md:block swiper-button-next absolute top-1/2! -translate-y-1/2! -right-8! h-[40px]! w-[40px]! bg-yellow-100 hover:bg-yellow-500 rounded-full after:text-[24px]! after:text-gray-600! hover:after:font-extrabold! transition-all duration-300"
            ></div>
        </div>
        </section>

        <!-- Ministries Section -->
        <section x-data="ministriesComponent" class="py-16 bg-gray-100">
        <div class="container mx-auto px-4">
            <!-- Badge -->
            <div class="text-center mb-12">
            <!-- Badge -->
            <div
                class="inline-flex items-center space-x-3 mb-6"
                data-aos="fade-up"
            >
                <div class="h-px w-8 bg-gray-900"></div>
                <span
                class="text-lg font-semibold tracking-wide uppercase gradient-overlay bg-clip-text text-transparent"
                >Church Ministries</span
                >

                <div class="h-px w-8 bg-gray-900"></div>
            </div>
            <h1
                class="text-3xl md:text-4xl font-bold font-Inter text-gray-900 mb-4 capitalize"
            >
                Join a ministry and grow in faith with a supportive community.
            </h1>
            </div>

            <!--Ministries Tab  -->
            <div class="overflow-hidden">
            <!-- Desktop Tabs -->
            <div class="hidden md:block bg-white px-6">
                <div class="flex flex-wrap gap-2 py-3">
                <template x-for="tab in ministries" :key="tab.id">
                    <button
                    @@click="activeTab = tab.id"
                    :class="{
                                        'active': activeTab === tab.id,
                                        'text-gray-700': activeTab !== tab.id
                                    }"
                    class="tab-button whitespace-nowrap py-4 px-6 rounded font-semibold text-base transition-all duration-300 focus:outline-none"
                    >
                    <i :class="tab.icon" class="mr-2"></i>
                    <span x-text="tab.label"></span>
                    </button>
                </template>
                </div>
            </div>
            </div>


        <!-- Desktop Tab Content -->
        <div class="hidden md:block p-6 md:p-8">
            <template x-for="ministry in ministries" :key="ministry.id">
            <div x-show="activeTab === ministry.id" x-cloak >
                <div class="flex flex-col lg:flex-row gap-8">
                <div class="lg:w-1/2 flex justify-center items-center">
                    <div class="relative">
                    <img
                        :src="ministry.image"
                        :alt="ministry.label"
                        @@error="$event.target.src= 'image/ministries/default.jpg'"
                        class="rounded-lg shadow-2xl"
                    />
                    <div
                        class="absolute -bottom-4 -right-4 bg-white p-3 rounded-full shadow-lg"
                    >
                        <div
                        class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center"
                        >
                        <i :class="ministry.icon" class="text-white text-2xl"></i>
                        </div>
                    </div>
                    </div>
                </div>
                <div class="lg:w-1/2 flex flex-col justify-center py-4">
                <div class="flex items-center mb-4">
                        <div
                        class="bg-primary-100 w-10 h-10 rounded-full flex items-center justify-center mr-3"
                        >
                        <svg
                            class="w-5 h-5 text-primary-700"
                            fill="currentColor"
                            viewBox="0 0 20 20"
                        >
                            <path
                            fill-rule="evenodd"
                            d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z"
                            clip-rule="evenodd"
                            ></path>
                        </svg>
                        </div>
                        <h2
                        class="text-2xl md:text-3xl font-bold text-gray-800"
                        x-text="ministry.label"
                        ></h2>
                    </div>
                <p
                    class="text-gray-600 leading-relaxed text-lg mb-6"
                    x-text="ministry.message"
                ></p>
                <div class="flex space-x-4">
                    <button
                    class="green-btn text-white px-6 py-3 rounded-full font-medium"
                    >
                    Learn More
                    </button>
                    <button
                    class="border-2 border-primary-600 text-primary-700 px-6 py-3 rounded-full font-medium hover:bg-primary-50 transition"
                    >
                    Join Ministry
                    </button>
                </div>
                </div>
                </div>

            </div>
            </template>
        </div>

        <!-- Mobile Accordion -->
            <div class="md:hidden">
            <template x-for="(ministry, index) in ministries" :key="ministry.id">
                <div
                :class="{ 'active': activeTab === ministry.id }"
                class="accordion-item border-b border-gray-200"
                >
                <button
                    @@click="activeTab = activeTab === ministry.id ? null : ministry.id"
                    class="accordion-header w-full flex justify-between items-center p-5 text-left focus:outline-none"
                >
                    <div class="flex items-center">
                    <div
                        class="ministry-icon w-10 h-10 rounded-full flex items-center justify-center mr-4"
                    >
                        <i :class="ministry.icon" class="text-white"></i>
                    </div>
                    <span class="font-semibold" x-text="ministry.label"></span>
                    </div>
                    <div
                    class="accordion-icon text-gray-500 transform transition-transform duration-300"
                    >
                    <i class="fas fa-chevron-down"></i>
                    </div>
                </button>

                <div
                    x-show="activeTab === ministry.id"
                    x-cloak
                    class="accordion-content"
                >
                    <div class="px-5 pb-5">
                    <div class="my-6 ">
                        <img
                        :src="ministry.image"
                        alt="ministry image"
                        class="w-full h-auto rounded-xl shadow-md"
                        @@error="$event.target.src = 'https://images.unsplash.com/photo-1508357941501-0924cf312bbd?ixlib=rb-4.0.3&ixid=M3wxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8fA%3D%3D&auto=format&fit=crop&w=1740&q=80'"
                        />
                    </div>
                    <p class="text-gray-600 mb-6" x-text="ministry.message"></p>
                    <div
                        class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0"
                    >
                        <button
                        class="learn-more-btn text-white py-3 rounded-full font-medium flex-1"
                        >
                        Learn More
                        </button>
                        <button
                        class="border-2 border-primary-600 text-primary-700 py-3 rounded-full font-medium hover:bg-primary-50 transition flex-1"
                        >
                        Join Ministry
                        </button>
                    </div>
                    </div>
                </div>
                </div>
            </template>
            </div>
        </section>

        <!-- Footer -->
        <footer class="bg-gray-800 text-white py-12">
        <div class="container mx-auto px-4">
            <div class="grid grid-cols-1 md:grid-cols-4 gap-8">
            <div>
                <div class="flex items-center mb-4">
                <img src="./image/twm-logo-w.png" class="w-12 md:w-20" alt="">
                <h3 class="text-xl font-bold font-heading">
                    Triumphant World Ministry
                </h3>
                </div>
                <p class="text-gray-400 mb-4">The Land of overflow</p>
                <div class="flex space-x-4">
                <a href="#" class="text-gray-400 hover:text-white transition"
                    ><i class="fab fa-facebook-f"></i
                ></a>
                <a href="#" class="text-gray-400 hover:text-white transition"
                    ><i class="fab fa-instagram"></i
                ></a>
                <a href="#" class="text-gray-400 hover:text-white transition"
                    ><i class="fab fa-youtube"></i
                ></a>
                <a href="#" class="text-gray-400 hover:text-white transition"
                    ><i class="fab fa-spotify"></i
                ></a>
                </div>
            </div>

            <div>
                <h4 class="text-lg font-bold font-heading mb-4">Quick Links</h4>
                <ul class="space-y-2">
                <li>
                    <a
                    href="#"
                    class="text-gray-400 hover:text-secondary transition"
                    >About Us</a
                    >
                </li>
                <li>
                    <a
                    href="#"
                    class="text-gray-400 hover:text-secondary transition"
                    >Sermons</a
                    >
                </li>
                <li>
                    <a
                    href="#"
                    class="text-gray-400 hover:text-secondary transition"
                    >Events</a
                    >
                </li>
                <li>
                    <a
                    href="#"
                    class="text-gray-400 hover:text-secondary transition"
                    >Ministries</a
                    >
                </li>
                <li>
                    <a
                    href="#"
                    class="text-gray-400 hover:text-secondary transition"
                    >Give Online</a
                    >
                </li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold font-heading mb-4">Resources</h4>
                <ul class="space-y-2">
                <li>
                    <a
                    href="#"
                    class="text-gray-400 hover:text-secondary transition"
                    >Bible Reading Plan</a
                    >
                </li>
                <li>
                    <a
                    href="#"
                    class="text-gray-400 hover:text-secondary transition"
                    >Prayer Requests</a
                    >
                </li>
                <li>
                    <a
                    href="#"
                    class="text-gray-400 hover:text-secondary transition"
                    >Small Groups</a
                    >
                </li>
                <li>
                    <a
                    href="#"
                    class="text-gray-400 hover:text-secondary transition"
                    >Children's Ministry</a
                    >
                </li>
                <li>
                    <a
                    href="#"
                    class="text-gray-400 hover:text-secondary transition"
                    >Volunteer</a
                    >
                </li>
                </ul>
            </div>

            <div>
                <h4 class="text-lg font-bold font-heading mb-4">Contact Us</h4>
                <ul class="space-y-3">
                <li class="flex items-start">
                    <i class="fas fa-map-marker-alt text-secondary mt-1 mr-3"></i>
                    <span class="text-gray-400"
                    >Kwanwoma, Off Ahodwo/Daban Rd, Ashanti - Ghana</span
                    >
                </li>
                <li class="flex items-center">
                    <i class="fas fa-phone text-secondary mr-3"></i>
                    <span class="text-gray-400">+233 244 677 739</span>
                </li>
                <li class="flex items-center">
                    <i class="fas fa-envelope text-secondary mr-3"></i>
                    <span class="text-gray-400">ministry.prohphetdarko@gmail.com</span>
                </li>
                </ul>
            </div>
            </div>

            <div
            class="border-t border-gray-800 mt-10 pt-6 text-center text-gray-500 text-sm"
            >
            <p>© 2025 Triumphant World Ministry. All Rights Reserved.</p>
            </div>
        </div>
        </footer>


    </body>
</html>
