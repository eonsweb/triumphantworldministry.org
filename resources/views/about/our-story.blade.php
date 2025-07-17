<!-- Our Story Section -->
<section class="py-12 md:py-20 bg-white" id="history">
    <div class="container mx-auto px-4">


        <div class="flex flex-col md:flex-row items-center gap-8 md:gap-12">
            <div class="w-full md:w-1/2" x-data="historySliderComponent" x-cloak>
                <div class="relative">
                    <div class="rounded-xl overflow-hidden shadow-xl">
                        <div class=" w-full h-96 flex items-center justify-center text-white text-2xl font-bold font-manrope z-20">
                            <div class="swiper history">
                                <div class="swiper-wrapper">

                                    <template x-for="history in historySlides" :key="history.id">
                                        <div class="swiper-slide">
                                            <img :src="history.image" class="w-full hover:scale-110 transition duration-300"  />
                                        </div>
                                    </template>

                                </div>

                            </div>
                            <div class="swiper-pagination absolute -bottom-8! md:-bottom-10!"></div>
                             <!-- If we need navigation buttons -->
                            <div class="swiper-button-prev after:text-primary-400 after:text-[30px]!"></div>
                            <div class="swiper-button-next after:text-primary-400 after:text-[30px]!"></div>

                        </div>
                    </div>
                    <div class="absolute -bottom-6 -right-6 bg-primary-200 text-gray-900 p-6 rounded-lg shadow-lg pulse-animation z-50">
                        <span class="text-4xl font-bold font-manrope">20+</span>
                        <p class="font-bold">Years Serving</p>
                    </div>
                </div>
            </div>

            <div class="w-full md:w-1/2 mt-10 md:mt-0">
                <h3 class="text-2xl font-bold mb-6 font-manrope text-gray-800">
                    Founded in Faith, Growing in Grace
                </h3>
                <p class="text-gray-600 mb-6">
                    Triumphant World Ministy was established in July 2005 with a small group
                    of believers meeting in a local shed of palm trees. What began as a humble
                    gathering has grown into a vibrant community of faith serving our
                    city and beyond.
                </p>
                <p class="text-gray-600 mb-6">
                    Our journey has been marked by God's faithfulness through seasons
                    of growth and challenge. We've witnessed lives transformed,
                    families restored, and hope renewed as we've sought to be the
                    hands and feet of Jesus in our community.
                </p>
                <div class="flex items-center mt-8">
                    <div class="flex -space-x-4">
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-primary-100 to-primary-300 border-2 border-white"></div>
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-primary-200 to-primary-400 border-2 border-white"></div>
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-primary-300 to-primary-500 border-2 border-white"></div>
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-primary-400 to-primary-600 border-2 border-white"></div>
                        <div class="w-12 h-12 rounded-full bg-gradient-to-r from-primary-500 to-primary-700 border-2 border-white flex items-center justify-center">
                            <span class="font-bold text-white">500+</span>
                        </div>
                    </div>
                    <p class="ml-4 text-gray-600">Active members in our community</p>
                </div>
            </div>
        </div>
    </div>
</section>
