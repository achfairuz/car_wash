<x-sidebar>
    <x-slot:title>{{ $title }}</x-slot:title>

    <!-- Carousel Section -->
    <div class="carousel-wrapper relative z-0 overflow-hidden mb-8">
        <div class="swiper-container mx-auto"
            :class="{
                'max-w-6xl': isOpen,
                'max-w-full': !isOpen,
            }">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <img src="{{ asset('img/bg section.jpg') }}" alt="Slide 1"
                        class="w-full h-full object-cover rounded-lg">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('img/bg-login.jpg') }}" alt="Slide 2"
                        class="w-full h-full object-cover rounded-lg">
                </div>
                <div class="swiper-slide">
                    <img src="{{ asset('img/feedback.jpg') }}" alt="Slide 3"
                        class="w-full h-full object-cover rounded-lg">
                </div>
            </div>
            <!-- Add Pagination -->
            <div class="swiper-pagination"></div>
            <!-- Add Navigation -->
            <div class="swiper-button-next bg-black opacity-40 px-6 py-8 scale-75 rounded-md after:text-white"></div>
            <div class="swiper-button-prev bg-black opacity-40 px-6 py-8 scale-75 rounded-md after:text-white"></div>
        </div>
    </div>

    <!-- User Dashboard Content -->
    <div class="p-6 bg-white rounded-lg shadow-md mb-6 mx-2 md:mx-6">
        <!-- Section Title -->
        <h2 class="text-2xl font-semibold mb-4 text-gray-800">Welcome, {{ session('username') }}!</h2>

        <!-- User Stats -->
        <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mb-6">
            <!-- Card 1 -->
            <div class="bg-white p-4 rounded-lg shadow-md border border-gray-200">
                <h3 class="text-lg font-semibold mb-2 text-gray-700">My Orders</h3>
                <p class="text-2xl font-bold text-indigo-600">5 Orders</p>
            </div>
            <!-- Card 2 -->
            <div class="bg-white p-4 rounded-lg shadow-md border border-gray-200">
                <h3 class="text-lg font-semibold mb-2 text-gray-700">Saved Items</h3>
                <p class="text-2xl font-bold text-teal-600">12 Items</p>
            </div>
            <!-- Card 3 -->
            <div class="bg-white p-4 rounded-lg shadow-md border border-gray-200">
                <h3 class="text-lg font-semibold mb-2 text-gray-700">Total Points</h3>
                <p class="text-2xl font-bold text-orange-600">350 Points</p>
            </div>
        </div>

        <!-- Recent Activities -->
        <div class="bg-white p-4 rounded-lg shadow-md border border-gray-200">
            <h3 class="text-lg font-semibold mb-4 text-gray-800">Recent Activities</h3>
            <ul class=" space-y-2 text-gray-700">
                <li>Placed a new order for <strong class="font-semibold text-indigo-600">Service A</strong></li>
                <li>Added <strong class="font-semibold text-teal-600">Item X</strong> to your saved list</li>
                <li>Redeemed <strong class="font-semibold text-orange-600">100 Points</strong> on your last purchase
                </li>
            </ul>
        </div>
    </div>




    <!-- Swiper Initialization -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const swiper = new Swiper('.swiper-container', {
                loop: true,
                autoplay: {
                    delay: 3000,
                },
                pagination: {
                    el: '.swiper-pagination',
                    clickable: true,
                },
                navigation: {
                    nextEl: '.swiper-button-next',
                    prevEl: '.swiper-button-prev',
                },
                spaceBetween: 10,
            });
        });
    </script>

    <style>
        /* Container wrapper styles */
        .carousel-wrapper {
            max-width: 100%;
            /* Adjust this value to control the maximum width */
            width: 100%;
            box-sizing: border-box;
            padding: 0 10px;
            /* Adjust padding if needed */
        }

        /* Swiper container styles */
        .swiper-container {
            width: 100%;
            /* Ensure the container does not exceed max-w-6xl */
            height: 300px;
            /* Adjust height as needed */
            margin: 0 auto;
            /* Center the container */
            overflow: hidden;
            /* Ensure no overflow */
        }

        /* Add gap between slides */
        .swiper-slide {
            box-sizing: border-box;
            display: flex;
            align-items: center;
        }

        /* Responsive adjustments */
        @media (max-width: 768px) {
            .swiper-container {
                height: 200px;
                /* Adjust height for smaller screens */
            }
        }
    </style>
</x-sidebar>
