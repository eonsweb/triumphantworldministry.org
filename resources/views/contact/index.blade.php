@extends('layout.app')

@section('page-title', 'Contact Us')
@section("page-subtitle","We'd love to hear from you. Reach out to us with any questions or prayer requests.")

@section('content')
    @include('layout.header')

    <div class="py-16 bg-gray-50">
        <div class="max-w-7xl mx-auto px-4 sm:px-6 lg:px-8">


            <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-8">
                <!-- Postal Address -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <span class="text-primary-500 mr-3 mt-1">📮</span>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">Postal Address</h3>
                            <p class="text-gray-600 mt-2">Triumphant World Ministry</p>
                            <p class="text-gray-600 mt-2">P.O.Box Ks 12480,Adum</p>
                            <p class="text-gray-600 mt-2"> Kumasi,Ghana</p>
                        </div>
                    </div>
                </div>

                <!-- Physical Address -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <span class="text-primary-500 mr-3 mt-1">📍</span>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">PHYSICAL ADDRESS</h3>
                            <p class="text-gray-600 mt-2">Adum-Kwanwoma</p>
                            <p class="text-gray-600 mt-2">Off Ahodwo-Daban Rd.</p>
                            <p class="text-gray-600 mt-2">Ashanti - Ghana</p>
                        </div>
                    </div>
                </div>

                <!-- Digital Address -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <span class="text-primary-500 mr-3 mt-1">📍</span>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">DIGITAL ADDRESS</h3>
                            <p class="text-gray-600 mt-2">Triumphant World Ministry</p>
                            <p class="text-gray-600 mt-2">AG-0993-0757</p>
                            <p class="text-gray-600 mt-2">GPS - Ghana Post</p>
                        </div>
                    </div>
                </div>

                <!-- General Enquiries -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <span class="text-primary-500 mr-3 mt-1">📞</span>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">GENERAL ENQUIRIES</h3>
                            <p class="text-gray-600 mt-2">
                                +233 20 8141 735<br>
                                admin@triumphantworldministry.org
                            </p>
                        </div>
                    </div>
                </div>

                <!-- Prayer Call Center -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <span class="text-primary-500 mr-3 mt-1">🙏</span>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">PRAYER CALL CENTER</h3>
                            <p class="text-gray-600 mt-2">
                                <span class="block">Enquiries: (+233) 244 6777 39</span>
                                <span class="block">WhatsApp: (+233) 208 1417 35</span>
                                <span class="block">Prayer: (+233) 244 6777 391</span>
                            </p>
                        </div>
                    </div>
                </div>



                <!-- Ministries -->
                <div class="bg-white p-6 rounded-lg shadow-md">
                    <div class="flex items-start">
                        <span class="text-primary-500 mr-3 mt-1">🌐</span>
                        <div>
                            <h3 class="text-lg font-semibold text-gray-900">PROPHET JOSEPH JOHN DARKO'S MINISTRIES</h3>
                            <p class="text-gray-600 mt-2">
                                <a href="https://ndwministries.org"
                                   class="text-primary-500 hover:underline transition"
                                   target="_blank">
                                    johndarkoministry.org
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Map Section -->
    <div class="w-full h-[500px]">
        <iframe
           src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3963.5362422672442!2d-1.6281498255191795!3d6.580056322504551!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0xfdb91145738acc7%3A0x157e8cc290a29809!2sTriumphant%20World%20Ministry%20(Land%20of%20Overflow)!5e0!3m2!1sen!2sgh!4v1752065551307!5m2!1sen!2sgh"
            width="100%"
            height="100%"
            style="border:0;"
            allowfullscreen
            loading="lazy"
            title="Action Chapel Location Map">
        </iframe>
    </div>
@endsection
