<section class="bg-gray-800 py-12 px-4  md:py-20 md:px-20 mx-auto max-w-8xl relative" x-data="leadershipComponent('#other-pastors')" id="other-pastors" x-cloak>

    <!-- Wrapper for top-right buttons -->
    <div class="flex justify-between mb-10 md:mr-20 relative">
        <h1 class="text-2xl text-gray-100">Associate Pastors</h1>
        <div class="flex gap-2">
            <div class="custom-button-prev bg-gray-800 rounded-full! h-10! w-10! flex justify-center items-center after:text-white after:text-[16px]! cursor-pointer shadow-2xl shadow-primary-50 disabled:bg-gray-400" :class="isBeginning ? 'opacity-50 cursor-not-allowed' : 'cursor-pointer'">
                <i class="fa-solid fa-arrow-left text-white"></i>
            </div>
            <div class="custom-button-next bg-gray-800 rounded-full! h-10! w-10! flex justify-center items-center after:text-white after:text-[16px]! cursor-pointer shadow-2xl shadow-primary-50 "
            :class="isEnd ? 'opacity-50 cursor-not-allowed' : 'cursor-pointer'">
                <i class="fa-solid fa-arrow-right text-white"></i>
            </div>
        </div>
    </div>
    <div class="swiper church-leadership">
        <div class="swiper-wrapper">
            <template x-for="leader in getLeadersByLevel(2)" :key="leader.id">
                    <div class="swiper-slide">
                        <div class="relative overflow-hidden rounded-2xl h-[400px] w-[300px] md:h-[500px] md:w-[350px]">
                            <img
                            :src="leader.image"
                            :alt="leader.name"
                            class="w-full h-full rounded object-cover hover:scale-110 hover:grayscale transition duration-500 z-20"
                            @@error="$event.target.src='image/church-gallery/leadership/prophetdarko.jpg'"
                            />
                            <div class="absolute bottom-0 text-center left-0 w-full h-[200px] z-30
                                        bg-[linear-gradient(to_top,_black,_#1f2937_50%,_transparent)]
                                        px-4 py-6">
                                <h1 x-text="leader.name" class="text-white text-xl font-semibold"></h1>
                                <h2 x-text="leader.position" class="text-gray-300 text-lg"></h2>
                                <template x-if="leader.social && leader.social.length">
                                    <div class="flex justify-center gap-4 mt-3">
                                        <template x-for="(item, index) in leader.social" :key="index">
                                            <a
                                                :href="item.url"
                                                target="_blank"
                                                class="text-white hover:text-primary-400 text-2xl"
                                                :title="item.platform"
                                            >
                                                <i :class="`fab fa-${item.platform}`"></i>
                                            </a>
                                        </template>
                                    </div>
                                </template>
                            </div>
                        </div>
                    </div>
            </template>
        </div>
    </div>

</section>
