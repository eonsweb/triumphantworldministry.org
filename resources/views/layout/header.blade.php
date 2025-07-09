<header class="relative h-[400px] bg-gray-900 overflow-hidden">
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

            <h1
            class="text-4xl sm:text-5xl lg:text-6xl font-bold text-primary-100 leading-tight max-w-4xl mx-auto"
            >
            <span
                class="block mb-4 bg-gradient-to-r from-primary-100 to-primary-200 bg-clip-text text-transparent"
                >@yield("page-title","TWM")</span
            >
            </h1>
            <p
            class="text-xl md:text-2xl font-serif text-white italic mb-6"
            data-aos="fade-up"
            data-aos-delay="100"
            >
            @yield("page-subtitle")
            </p>
        </div>
        </div>
    </div>
</header>
