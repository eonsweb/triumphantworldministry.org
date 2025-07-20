<section x-data="WeeklyActivitiesComponent" x-cloak class="py-16 bg-gray-900">
            <!-- Badge -->
            <div class="text-center mb-12">
               <x-badge title="Weekly church Activities" />
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
                <div class="hidden md:block! swiper-button-prev absolute top-1/2! -translate-y-1/2! -left-8! h-[40px]! w-[40px]! bg-yellow-100 hover:bg-yellow-500 rounded-full after:absolute after:text-[24px]! after:right-1/2 after:translate-x-1/2 after:top-1/2 after:-translate-y-1/2 after:text-gray-600!  hover:after:font-extrabold! transition-all duration-300"
                ></div>

                <div class="hidden! md:block! swiper-button-next absolute top-1/2! -translate-y-1/2! -right-8! h-[40px]! w-[40px]! bg-yellow-100 hover:bg-yellow-500 rounded-full after:absolute  after:text-[24px]! after:left-1/2 after:-translate-x-1/2 after:top-1/2 after:-translate-y-1/2 after:text-gray-600! hover:after:font-extrabold! transition-all duration-300"
                ></div>
            </div>
        </section>
