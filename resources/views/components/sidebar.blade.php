<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>{{ $title }}</title>
    @vite('resources/css/app.css')
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="icon" href="{{ asset('img/logo.png') }}" type="image/x-icon">
    <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>



</head>

<body class="w-full" x-data="{ isOpen: window.innerWidth >= 1024, showLogoutModal: false }" x-init="window.addEventListener('resize', () => { isOpen = window.innerWidth >= 1024 })">

    <div class="h-screen flex overflow-hidden">
        <!-- Sidebar -->
        <div :class="{
            'translate-x-0 lg:relative': isOpen,
            '-translate-x-full': !isOpen,
        }"
            class="fixed z-20 inset-y-0 left-0 w-64 dark:bg-gray-900 dark:text-gray-200 text-gray-800 transform transition-transform duration-75 flex-shrink-0">

            <!-- Logo Section -->
            <div class="mt-6 flex justify-between mx-4">
                <div class="img">
                    <img src="{{ asset('img/logo.png') }}" class="w-24" alt="logo">
                </div>
                <button @click="isOpen = !isOpen" x-show="isOpen"
                    class="text-gray-700 hover:text-black dark:text-gray-400 dark:hover:text-white focus:outline-none text-md font-bold">
                    &#10005;
                </button>
            </div>

            <!-- Profile Section -->
            <div
                class="profile flex items-center justify-center my-4 py-4 mx-2 border-y-2 border-gray-400 dark:border-gray-700">
                <div class="img">
                    <img src="https://via.placeholder.com/150" class="w-24 h-24 rounded-full" alt="profile">

                    <div class="text text-center mt-2 font-semibold  ">
                        <h1 class="text-xl font-bold ">{{ session('username') }}</h1>
                        <a href="#" class="hover:underline text-gray-500 dark:text-gray-400">Setting</a>
                    </div>
                </div>
            </div>
            <!-- Navigation -->
            <!-- Sidebar Navigation -->
            <nav class="mt-6 border-b-2 border-gray-600 mb-4 pb-2">
                <a href="{{ session('role') === 'admin' ? route('dashboard-admin') : route('dashboard-user') }}"
                    class="block py-2.5 px-4 mx-4 my-2 rounded transition duration-200 
    {{ (session('role') === 'admin' && request()->routeIs('dashboard-admin')) ||
    (session('role') === 'user' && request()->routeIs('dashboard-user'))
        ? 'bg-gray-700 text-white'
        : 'hover:bg-gray-700 hover:text-white' }}">
                    Dashboard
                </a>

                <a href="{{ session('role') === 'admin' ? route('services-admin') : route('services-user') }}"
                    class="block py-2.5 mx-4 px-4 my-2 rounded transition duration-200 
    {{ (session('role') === 'admin' && request()->routeIs('services-admin')) ||
    (session('role') === 'user' && request()->routeIs('services-user'))
        ? 'bg-gray-700 text-white'
        : 'hover:bg-gray-700 hover:text-white' }}">
                    Services
                </a>

                <a href="{{ session('role') === 'admin' ? route('shop-admin') : route('shop-user') }}"
                    class="block py-2.5 mx-4 px-4 my-2 rounded transition duration-200 
    {{ (session('role') === 'admin' && request()->routeIs('shop-admin')) ||
    (session('role') === 'user' && request()->routeIs('shop-user'))
        ? 'bg-gray-700 text-white'
        : 'hover:bg-gray-700 hover:text-white' }}">
                    Shop
                </a>

                <a href="{{ route('manajemen-admin') }}"
                    class="block py-2.5 mx-4 px-4 my-2 rounded transition duration-200 {{ session('role') === 'user' ? 'hidden' : 'block' }}
    {{ session('role') === 'admin' && request()->routeIs('manajemen-admin')
        ? 'bg-gray-700 text-white'
        : 'hover:bg-gray-700 hover:text-white' }}">
                    Manajemen
                </a>


                <a href="{{ route('discounts-admin') }}"
                    class="block py-2.5 mx-4 px-4 my-2 rounded transition duration-200 {{ session('role') === 'user' ? 'hidden' : 'block' }}
    {{ session('role') === 'admin' && request()->routeIs('discounts-admin')
        ? 'bg-gray-700 text-white'
        : 'hover:bg-gray-700 hover:text-white' }}">
                    Discount
                </a>
            </nav>




            <div class="px-4 mt-6">
                <button @click="showLogoutModal = true"
                    class="block py-2.5 px-4 my-2 rounded transition duration-200 bg-red-800 text-white hover:bg-red-900 hover:text-white w-full text-left">
                    Logout
                </button>
            </div>
        </div>

        <!-- Logout Modal -->
        <div x-show="showLogoutModal"
            class="fixed inset-0 bg-gray-900 bg-opacity-50 flex items-center justify-center z-50">
            <div class="bg-white dark:bg-gray-800 rounded-lg shadow-lg p-6 w-96">
                <h2 class="text-xl font-semibold mb-4 text-gray-800 dark:text-gray-200">Confirm Logout</h2>
                <p class="mb-4 text-gray-600 dark:text-gray-400">Are you sure you want to logout?</p>
                <div class="flex justify-end">
                    <button @click="showLogoutModal = false"
                        class="px-4 py-2 bg-gray-300 text-gray-700 rounded-md mr-2 hover:bg-gray-400">
                        Cancel
                    </button>
                    <form method="POST" action="{{ route('logout') }}">
                        @csrf
                        <button type="submit" class="px-4 py-2 bg-red-800 text-white rounded-md hover:bg-red-900">
                            Logout
                        </button>
                    </form>
                </div>
            </div>
        </div>

        <!-- Main Content -->
        <div class="flex flex-col w-full transition-all duration-200">
            <header
                class=" top-0 left-0 right-0 z-10  flex items-center justify-end px-4 h-16 bg-gray-100 dark:bg-gray-800 dark:text-white shadow">

                {{-- button mobile side --}}
                <button @click="isOpen = !isOpen" x-show="!isOpen"
                    class="text-white hover:bg-yellow-600 focus:outline-none bg-yellow-500 rounded-md py-1 items-center flex px-4 absolute top-12 -left-4">
                    <span class="ml-2 text-md font-bold">&#9776; <span
                            class="font-bold ml-2 text-md">SIDEBAR</span></span>
                </button>
                <a href="{{ session('role') === 'admin' ? route('carts-admin') : route('carts-user') }}">
                    <div
                        class="flex flex-row gap-2 {{ Request::routeIs('carts-admin') || Request::routeIs('carts-user') ? 'text-blue-300' : 'text-gray-800 dark:text-white' }}">
                        <span>Keranjang</span>

                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" width="24"
                            height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M14 7h-4v3a1 1 0 0 1-2 0V7H6a1 1 0 0 0-.997.923l-.917 11.924A2 2 0 0 0 6.08 22h11.84a2 2 0 0 0 1.994-2.153l-.917-11.924A1 1 0 0 0 18 7h-2v3a1 1 0 1 1-2 0V7Zm-2-3a2 2 0 0 0-2 2v1H8V6a4 4 0 0 1 8 0v1h-2V6a2 2 0 0 0-2-2Z"
                                clip-rule="evenodd" />
                        </svg>

                    </div>
                </a>

            </header>
            <main class="flex-1 overflow-y-auto py-10 px-4 bg-gray-100 ">
                {{ $slot }}
            </main>
        </div>
    </div>
</body>

</html>
