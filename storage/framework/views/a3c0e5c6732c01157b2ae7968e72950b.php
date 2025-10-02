<body>
    <nav class="bg-slate-100 dark:bg-gray-900 fixed w-full z-20 top-0 start-0 border-b border-gray-200 dark:border-gray-600"
        x-data="{ isOpen: false }">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="#" class="flex items-center space-x-3 rtl:space-x-reverse">
                <img src="<?php echo e(asset('img/Carwash.png')); ?>" class="h-12" alt="Flowbite Logo">
            </a>
            <div class="hidden sm:ml-6 lg:block md:block">
                <div class="flex space-x-4">
                    <!-- Dashboard Link -->
                    <a href="#dashboard" data-section="dashboard"
                        class="rounded-md px-3 py-2 nav-link text-sm font-medium text-gray-500 hover:bg-gray-700 hover:text-white"
                        aria-current="page">Dashboard</a>
                    <!-- About Us Link -->
                    <a href="#about" data-section="about"
                        class="rounded-md px-3 py-2 nav-link text-sm font-medium text-gray-500 hover:bg-gray-700 hover:text-white">About
                        Us</a>
                    <!-- Services Link -->
                    <a href="#services" data-section="services"
                        class="rounded-md px-3 py-2 nav-link text-sm font-medium text-gray-500 hover:bg-gray-700 hover:text-white">Services</a>
                    <!-- Pricing Link -->
                    <a href="#pricing" data-section="pricing"
                        class="rounded-md px-3 py-2 nav-link text-sm font-medium text-gray-500 hover:bg-gray-700 hover:text-white">Pricing</a>
                </div>
            </div>
            <div class="flex md:order-2 space-x-3 md:space-x-0 rtl:space-x-reverse">
                <div class="button-group gap-5 flex flex-wrap">
                    <a href="/login"><button type="button"
                            class="text-white hidden lg:block md:block bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button></a>

                    <a href="/register"> <button type="button"
                            class=" text-blue-800 hover:text-white dark:text-white hidden lg:block md:block border-2 border-blue-600 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-10 py-2 text-center  dark:hover:bg-blue-700 dark:focus:ring-blue-800">Register</button></a>

                </div>

                <button @click="isOpen = !isOpen" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600"
                    aria-controls="navbar-sticky" :aria-expanded="isOpen ? 'true' : 'false'">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5" aria-hidden="true" xmlns="http://www.w3.org/2000/svg" fill="none"
                        viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div x-show="isOpen" x-transition:enter="transition ease-out duration-100 transform"
                x-transition:enter-start="opacity-0 scale-95" x-transition:enter-end="opacity-100 scale-100"
                x-transition:leave="transition ease-in duration-75 transform"
                x-transition:leave-start="opacity-100 scale-100" x-transition:leave-end="opacity-0 scale-95"
                id="navbar-sticky" class="items-center justify-between w-full md:flex md:w-auto md:order-1">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border border-gray-100 rounded-lg bg-gray-50 md:space-x-8 rtl:space-x-reverse md:flex-row md:mt-0 md:border-0 md:bg-white dark:bg-gray-800 md:dark:bg-gray-900 dark:border-gray-700">
                    <li>
                        <a href="#dashboard" data-section="dashboard"
                            class="block py-2 px-3 nav-link text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700"
                            aria-current="page">Dashboard</a>
                    </li>
                    <li>
                        <a href="#about" data-section="about"
                            class="block py-2 px-3 nav-link text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">About</a>
                    </li>
                    <li>
                        <a href="#services" data-section="services"
                            class="block py-2 px-3 nav-link text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Services</a>
                    </li>
                    <li>
                        <a href="#pricing" data-section="pricing"
                            class="block py-2 px-3 nav-link text-gray-900 rounded hover:bg-gray-100 md:hover:bg-transparent md:hover:text-blue-700 md:p-0 md:dark:hover:text-blue-500 dark:text-white dark:hover:bg-gray-700 dark:hover:text-white md:dark:hover:bg-transparent dark:border-gray-700">Pricing</a>
                    </li>
                    <a href="/login"><button type="button"
                            class="text-white mt-4 w-full bg-blue-700 hover:bg-blue-800 focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2 text-center dark:bg-blue-600 dark:hover:bg-blue-700 dark:focus:ring-blue-800">Login</button></a>

                    <a href="/register" class="w-full max-w-full"><button type="button"
                            class="text-blue-800 hover:text-white w-full dark:text-white mt-4 border-2 border-blue-600 dark:border-blue-400 hover:bg-blue-800  focus:ring-4 focus:outline-none focus:ring-blue-300 font-medium rounded-lg text-sm px-4 py-2  ">Register</button></a>

                </ul>
            </div>
        </div>
    </nav>

    <script>
        // Function to set the active class based on the current hash
        function setActiveLink() {
            const currentSection = window.location.hash.substring(1);
            document.querySelectorAll('.nav-link').forEach(link => {
                link.classList.remove('bg-gray-900', 'text-white');
                if (link.getAttribute('data-section') === currentSection) {
                    link.classList.add('bg-gray-900', 'text-white');
                }
            });
        }

        // Set the active link when the page loads
        document.addEventListener('DOMContentLoaded', setActiveLink);

        // Set the active link when the hash changes
        window.addEventListener('hashchange', setActiveLink);
    </script>
</body>

</html>
<?php /**PATH C:\DATASAYA\D\laragon\www\cuciMotor\resources\views/components/navbar.blade.php ENDPATH**/ ?>