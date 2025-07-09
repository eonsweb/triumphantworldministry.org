        @include("layout.head")

        {{-- Main Navigation --}}
        @include("layout.main-nav")

        <div>
            @yield('content')
        </div>


        <!-- Footer -->
        @include("layout.footer")


