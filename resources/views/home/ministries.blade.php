<section x-data="ministriesComponent" class="py-16 bg-gray-100">
<div class="container mx-auto px-4">

    <div class="text-center mb-12">
        <!-- Badge -->
        <x-badge title="Church Ministries " />
        <h1 class="text-3xl md:text-4xl font-bold font-Inter text-gray-900 mb-4 capitalize">
            Join a ministry and grow in faith with a supportive community.
        </h1>
    </div>

    <!--Ministries Tab  -->
    <div class="overflow-hidden">
        <!-- Desktop Tabs -->
        <div class="hidden md:block bg-white px-6">
            <div class="flex flex-wrap gap-2 py-3">
                <template x-for="tab in ministries" :key="tab.id">
                    <button @@click="activeTab = tab.id" :class="{ 'active': activeTab === tab.id, 'text-gray-700': activeTab !== tab.id }"
                        class="tab-button whitespace-nowrap py-4 px-6 rounded font-semibold text-base transition-all duration-300 focus:outline-none flex">
                        <span x-html="tab.icon" class="mr-1"></span>
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
                            <img :src="ministry.image" :alt="ministry.label" @@error="$event.target.src='image/ministries/default.jpg'"   class="rounded-lg shadow-2xl" />
                            <div class="absolute -bottom-4 -right-4 bg-white p-3 rounded-full shadow-lg">
                                <div class="ministry-icon w-16 h-16 rounded-full flex items-center justify-center">
                                    <span x-html="ministry.icon" class="text-white [&>svg]:w-8 [&>svg]:h-8" ></span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="lg:w-1/2 flex flex-col justify-center py-4">
                        <div class="flex items-center mb-4">
                            <div class="bg-primary-100 w-10 h-10 rounded-full flex items-center justify-center mr-3">
                                <svg class="w-5 h-5 text-primary-700" fill="currentColor" viewBox="0 0 20 20">
                                    <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-11a1 1 0 10-2 0v2H7a1 1 0 100 2h2v2a1 1 0 102 0v-2h2a1 1 0 100-2h-2V7z" clip-rule="evenodd" >
                                    </path>
                                </svg>
                            </div>
                            <h2 class="text-2xl md:text-3xl font-bold text-gray-800" x-text="ministry.label"></h2>
                        </div>
                        <p class="text-gray-600 leading-relaxed text-lg mb-6" x-text="ministry.message"></p>
                        <div class="flex space-x-4">
                            <button class="btn btn-cta cursor-pointer">
                                Learn More
                            </button>
                            <button class="cursor-pointer border-2 border-primary-600 text-primary-700 px-6 py-3 rounded-full font-medium hover:bg-primary-50 transition">
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
            <div :class="{ 'active': activeTab === ministry.id }" class="accordion-item border-b border-gray-200">
                <button @@click="activeTab = activeTab === ministry.id ? null : ministry.id" class="accordion-header w-full flex justify-between items-center p-5 text-left focus:outline-none">
                    <div class="flex items-center">
                        <div class="ministry-icon w-10 h-10 rounded-full flex items-center justify-center mr-4">
                            <span x-html="ministry.icon" class="text-white [&>svg]:w-5 [&>svg]:h-5" ></span>
                        </div>
                        <span class="font-semibold" x-text="ministry.label"></span>
                    </div>
                    <div class="accordion-icon text-gray-500 transform transition-transform duration-300">
                        <i class="fas fa-chevron-down"></i>
                    </div>
                </button>

                <div  x-show="activeTab === ministry.id" x-cloak class="accordion-content">
                    <div class="px-5 pb-5">
                        <div class="my-6 ">
                            <img :src="ministry.image" alt="ministry image" class="w-full h-auto rounded-xl shadow-md" @@error="$event.target.src = 'image/ministries/default.jpg'"
                            />
                        </div>
                        <p class="text-gray-600 mb-6" x-text="ministry.message"></p>
                        <div class="flex flex-col sm:flex-row sm:space-x-4 space-y-4 sm:space-y-0">
                            <a href="#" class="cursor-pointer bg-gradient-to-r btn-cta from-accent-600 to-accent-800 text-white">
                                Learn More
                            </a>
                            <button class="border-2 border-primary-600 text-primary-700 py-3 rounded-full font-medium hover:bg-primary-50 transition flex-1">
                                Join Ministry
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </template>
    </div>
</section>
