<style>
    body {
        background: linear-gradient(rgba(0, 0, 0, 0.40), rgba(0, 0, 0, 0.371)), url('{{ asset('img/bg_login.jpg') }}');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    body.dark {
        background: linear-gradient(rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.50)), url('{{ asset('img/bg_login.jpg') }}');
    }
</style>

<body class="dark:bg-gray-900 dark:text-white">
    <x-main class="relative z-10">
        <x-slot:title>{{ $title }}</x-slot:title>

        <section class="max-w-xl mx-auto flex justify-center items-start pt-20 min-h-screen">
            <div class="w-full bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg dark:shadow-gray-900 mx-4 md:mx-0 ">

                <form action="{{ route('form-login') }}" method="POST">
                    @csrf
                    <div class="container">
                        <h1 class="text-center text-blue-600 dark:text-blue-400 lg:text-2xl text-xl font-bold mb-6">
                            Login
                        </h1>

                        <div class="input-group mb-4">
                            <label for="username"
                                class="text-sm font-sans font-semibold mb-2 dark:text-gray-300">Username</label>
                            <div class="flex items-center border border-gray-300 dark:border-gray-600 rounded-md">
                                <!-- Icon -->
                                <span class="px-3 text-gray-500 dark:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg" class="h-5 w-5" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M12 11c-2.208 0-4-1.792-4-4s1.792-4 4-4 4 1.792 4 4-1.792 4-4 4zm0 2c-2.667 0-8 1.334-8 4v2h16v-2c0-2.666-5.333-4-8-4z" />
                                    </svg>
                                </span>

                                <!-- Input Field -->
                                <input type="text" id="username" name="username"
                                    class="flex-1 py-2 px-4 border-none w-full focus:ring-0 focus:outline-none bg-transparent dark:bg-gray-700 dark:text-gray-300"
                                    placeholder="Username">
                            </div>
                        </div>

                        <div class="input-group mb-6">
                            <label for="password"
                                class="text-sm font-sans font-semibold mb-2 dark:text-gray-300">Password</label>
                            <div class="flex items-center border border-gray-300 dark:border-gray-600 rounded-md">
                                <!-- Icon -->
                                <span class="px-3 text-gray-500 dark:text-gray-400">
                                    <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                        fill="none" viewBox="0 0 24 24">
                                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round"
                                            stroke-width="2"
                                            d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z" />
                                    </svg>
                                </span>

                                <!-- Input Field -->
                                <input type="password" id="password" name="password"
                                    class="flex-1 py-2 px-4 w-full border-none focus:ring-0 focus:outline-none bg-transparent dark:bg-gray-700 dark:text-gray-300"
                                    placeholder="Password">
                            </div>

                            <a href="#"
                                class="font-light flex justify-end hover:underline dark:text-gray-400">Lupa
                                Password?</a>
                        </div>

                        <div class="text-center">
                            <button type="submit"
                                class="bg-blue-500 dark:bg-blue-600 text-white py-2 px-4 rounded-md w-full font-semibold hover:bg-blue-600 dark:hover:bg-blue-700">
                                Login
                            </button>
                        </div>
                    </div>
                </form>

                <div class="container text-center mt-10  border-gray-300 dark:border-gray-600 pt-6">
                    <p class="text-gray-600 dark:text-gray-300 mb-2">Atau Daftar Menggunakan</p>
                    <a href="/register"
                        class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 font-semibold">
                        Register
                    </a>
                </div>




            </div>
        </section>
    </x-main>
</body>
