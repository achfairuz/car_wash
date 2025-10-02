<style>
    .rectangle-3,
    .rectangle-3 * {
        box-sizing: border-box;
    }

    .rectangle-3 {
        background: var(--font, #1d85ce);
        width: 146px;
        height: 4px;
        position: relative;
    }
</style>



<?php if (isset($component)) { $__componentOriginal1f9e5f64f242295036c059d9dc1c375c = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c = $attributes; } ?>
<?php $component = App\View\Components\Layout::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('layout'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Layout::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>

     <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>
    <section id="dashboard" class="py-32"
        style="background: url('img/bg section.jpg') no-repeat center center; background-size: cover;" id="dashboard">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16 lg:px-12">
            <h1
                class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-slate-200 md:text-5xl lg:text-6xl dark:text-white">
                Kebersihan Motor Adalah <br> Prioritas Kami
            </h1>
            <p class="mb-8 text-lg font-normal text-gray-400 lg:text-xl sm:px-16 xl:px-48 dark:text-gray-400">
                Motor Anda Selalu Prima dan Mengkilap dengan Layanan Cuci Motor Profesional dan Terpercaya dari Kami
            </p>
            
        </div>
    </section>

    <section id="slogan" class="bg-blue-700 py-20 dark:bg-blue-900">
        <div class="container mx-auto flex flex-col md:flex-row justify-center items-center lg:gap-56 md:gap-20 gap-16">
            <div class="content text-center">
                <img class="mx-auto" src="<?php echo e(asset('img/clean.png')); ?>" alt="Cleaning" draggable="false">
                <h1 class="text-white text-xl mt-4">Cleaning</h1>
                <p class="text-gray-400 text-center mt-1">Kebersihan Maksimal untuk<br> Kendaraan Anda</p>
            </div>
            <div class="content text-center">
                <img class="mx-auto" src="<?php echo e(asset('img/polish.png')); ?>" alt="Polishing" draggable="false">
                <h1 class="text-white text-xl mt-4">Polishing</h1>
                <p class="text-gray-400 text-center mt-1">Kilau Sempurna untuk<br> Kendaraan Anda</p>
            </div>
            <div class="content text-center">
                <img class="mx-auto" src="<?php echo e(asset('img/vehiclecare.png')); ?>" alt="Vehicle Care" draggable="false">
                <h1 class="text-white text-xl mt-4">Vehicle Care</h1>
                <p class="text-gray-400 text-center mt-1">Perawatan Menyeluruh untuk<br> Kendaraan Anda</p>
            </div>
        </div>
    </section>

    <section class="py-32 dark:bg-gray-900 bg-slate-200" id="about">
        <div class="container flex flex-wrap justify-center mx-auto gap-10 lg:gap-20">
            <div class="img mx-4">
                <img src="<?php echo e(asset('img/content about.jpg')); ?>" alt="about_content"
                    class="lg:max-w-sm md:max-w-md sm:max-w-xs rounded-md shadow-md">
            </div>
            <div class="content max-w-md mx-4 lg:mx-0 md:mx-0">
                <div class="title">
                    <h1 class="text-5xl font-bold dark:text-white text-black">Welcome to <br><span
                            class="text-blue-400">Fairuz Wash</span></h1>
                    <p class="dark:text-white text-justify mt-8">Di Fairuz Wash, kami berkomitmen untuk menyediakan
                        layanan
                        cuci mobil dan
                        detailing berkualitas
                        tinggi untuk menjaga kendaraan Anda tetap terlihat terbaik. Tim kami yang berpengalaman
                        menggunakan teknik terbaru dan produk berkualitas tinggi untuk memastikan pembersihan menyeluruh
                        dan profesional setiap saat.</p>
                    <div class="foot-content mt-6">
                        <ul class="flex justify-start items-center space-x-2">
                            <li><img src="<?php echo e(asset('img/check2-circle.png')); ?>" alt="check" class="h-8"
                                    draggable="false"></li>
                            <li>
                                <p class="font-semibold dark:text-blue-400 text-blue-900">Lebih 2000 pembersihan</p>
                            </li>
                        </ul>
                        <ul class="flex justify-start items-center space-x-2 mt-2">
                            <li><img src="<?php echo e(asset('img/check2-circle.png')); ?>" alt="check" class="h-8"
                                    draggable="false"></li>
                            <li>
                                <p class="font-semibold dark:text-blue-400 text-blue-900">100% Kepuasan</p>
                            </li>
                        </ul>
                        <ul class="flex justify-start items-center space-x-2 mt-2">
                            <li><img src="<?php echo e(asset('img/check2-circle.png')); ?>" alt="check" class="h-8"
                                    draggable="false"></li>
                            <li>
                                <p class="font-semibold dark:text-blue-400 text-blue-900">Dijamin cepat dan bersih</p>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section class="bg-slate-200 dark:bg-gray-900 pt-10 pb-16  relative flex flex-col items-center" id='services'>
        <h1 class="text-center text-blue-400 text-3xl font-bold">Our Service</h1>
        <div class="mt-4 md:mt-8 lg:mt-10 flex justify-center w-full">
            <img src="<?php echo e(asset('img/service.jpg')); ?>" alt="service_content"
                class="lg:max-w-4xl md:max-w-2xl max-w-full rounded-2xl hidden md:block lg:block" draggable="false">
        </div>

        <div
            class="container  flex flex-wrap justify-center gap-6 md:gap-10 lg:gap-16 mx-auto mt-4 lg:mt-10 lg:relative lg:top-1/2 lg:transform lg:-translate-y-1/2 md:relative md:top-1/2 md:transform md:-translate-y-1/2">
            <div
                class="content-box transition-transform duration-300 ease-in-out transform  bg-white rounded-xl p-8 shadow flex flex-col items-center justify-center text-center">
                <img src="<?php echo e(asset('img/motorcycle.png')); ?>" alt="motorcycle" draggable="false"
                    class="mx-auto mb-4 max-w-20 md:max-w-32 lg:max-w-40">
                <div>
                    <h1 class="font-bold text-blue-400 text-lg md:text-xl lg:text-2xl mb-2">Sepeda Motor</h1>
                    <ul class="text-center">
                        <li>Pencucian dan Pengeringan<br>Eksterior</li>
                        <li>Pengkilapan</li>
                    </ul>
                </div>
            </div>
            <div
                class="content-box bg-white rounded-xl p-8 shadow-lg flex flex-col items-center justify-center text-center">
                <img src="<?php echo e(asset('img/car.png')); ?>" alt="car"
                    class="mx-auto mb-4 max-w-20 md:max-w-32 lg:max-w-40" draggable="false">
                <div>
                    <h1 class="font-bold text-blue-400 text-lg md:text-xl lg:text-2xl mb-2">Mobil</h1>
                    <ul class="text-center">
                        <li>Pencucian dan Pengeringan<br>Eksterior dan Interior</li>
                        <li>Pengkilapan</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>


    <section id="pricing" class="bg-gray-100 dark:bg-gray-800 py-20">
        <div class="container mx-auto text-center">
            <h1 class="text-3xl font-bold text-blue-400 mb-8 ">Pricing</h1>
            <div class="flex flex-wrap justify-center mx-auto md:mt-14 mt-12 lg:mt-16 gap-8">
                <!-- Pricing Card -->
                <div
                    class="cart transition-transform duration-500 ease-in-out transform hover:scale-105 hover:shadow-lg bg-white dark:bg-gray-900 text-gray-800 dark:text-white rounded-lg px-6 py-12 flex flex-col justify-center">
                    <div class="title mb-4">
                        <h2 class="text-2xl font-bold">Sepeda Motor Kecil</h2>
                        <h3 class="text-xl font-semibold text-gray-400">Rp. 12.000</h3>
                    </div>
                    <div class="body mb-6 mt-2">
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-1">Pencucian Eksterior</li>
                            <li class="mb-1">Pengeringan</li>
                            <li class="mb-1">Pengkilapan</li>
                        </ul>
                    </div>
                    <div class="foot mt-10">
                        <button
                            class="dark:bg-blue-900 bg-blue-800 text-white w-full py-2 rounded-full hover:bg-blue-900 dark:hover:bg-blue-800 ">Select</button>
                    </div>
                </div>
                <div
                    class="cart transition-transform duration-500 ease-in-out transform hover:scale-105 bg-white dark:bg-gray-900 text-gray-800 dark:text-white rounded-lg hover:shadow-lg  px-6 py-12 flex flex-col justify-center">
                    <div class="title mb-4">
                        <h2 class="text-2xl font-bold">Sepeda Motor Besar</h2>
                        <h3 class="text-xl font-semibold text-gray-400">Rp. 15.000</h3>
                    </div>
                    <div class="body mb-6 mt-2">
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-1">Pencucian Eksterior</li>
                            <li class="mb-1">Pengeringan</li>
                            <li class="mb-1">Pengkilapan</li>
                        </ul>
                    </div>
                    <div class="foot mt-10 ">
                        <button
                            class="dark:bg-blue-900 bg-blue-800 text-white w-full py-2 rounded-full hover:bg-blue-900 dark:hover:bg-blue-800 ">Select</button>
                    </div>
                </div>
                <div
                    class="cart transition-transform duration-500 ease-in-out transform hover:scale-105 bg-white dark:bg-gray-900 text-gray-800 dark:text-white rounded-lg hover:shadow-lg  px-6 py-12 flex flex-col justify-center">
                    <div class="title mb-4">
                        <h2 class="text-2xl font-bold">Mobil</h2>
                        <h3 class="text-xl font-semibold text-gray-400">Rp. 45.000</h3>
                    </div>
                    <div class="body mb-6 mt-2">
                        <ul class="text-gray-600 dark:text-gray-400">
                            <li class="mb-1">Pencucian Eksterior dan Interior</li>
                            <li class="mb-1">Pengeringan</li>
                            <li class="mb-1">Pengkilapan</li>
                        </ul>
                    </div>
                    <div class="foot mt-10">
                        <button
                            class="dark:bg-blue-900 bg-blue-800 text-white w-full py-2 rounded-full hover:bg-blue-900 dark:hover:bg-blue-800 ">Select</button>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <?php
        $currentSection = explode('#', request()->fullUrl())[1] ?? '';

    ?>

    <section class="dark:bg-gray-900 bg-white py-24">
        <div class="container flex flex-wrap justify-center dark:text-white gap-10 mx-auto">
            <div class="container-box mx-4" class="w-full max-w-md">
                <div class="title ">
                    <h1 class="text-4xl font-bold mb-2">Location & Hours</h1>
                    <div class="rectangle-3"></div>
                </div>

                <div class="body mt-14">
                    <div class="subtitle max-w-sm">
                        <h1 class="font-bold text-xl">Alamat:</h1>
                        <p class="font-light text-sm mt-3">Jl. Kab. No.10, Karang Asem Tegalan, Wonorejo, Kec.
                            Wonorejo,
                            Pasuruan,
                            Jawa Timur 67173</p>
                    </div>
                    <div class="subtitle max-w-sm mt-8">
                        <h1 class="font-bold text-xl">Jam Operasional: </h1>
                        <p class="font-light text-sm mt-3">Kami siap melayani Anda setiap hari dengan jam operasional
                            yang fleksibel:</p>
                        <ul class="flex items-center flex-wrap space-x-4 ml-4 mt-2">
                            <li>
                                <img src="<?php echo e(asset('img/calendar.png')); ?>" alt="calendar_icon" class="w-6 h-6"
                                    draggable="false">
                            </li>
                            <li>
                                <p class="font-normal text-sm text-center">Setiap Hari : 07:00 - 16:00 WIB</p>
                            </li>
                        </ul>

                    </div>
                </div>

                <div class="foot mt-8 ">
                    <a href="https://maps.app.goo.gl/j4jkX669yrB1m5BQ8" target="_blank"
                        rel="noopener noreferrer"><button
                            class="rounded-full px-4 py-2 bg-yellow-500 dark:bg-yellow-600 font-bold text-white hover:bg-yellow-600 dark:hover:bg-yellow-500">Google
                            Maps</button></a>
                </div>


            </div>
            <div class="map mx-4 mt-6 lg:mt-0 md:mt-0 z-0">
                <div id="map" class="rounded-md"><span class="opacity-0">CUI MOTOR
                        FAIRUZSSSSSSSSSSSSSSSSSSSSSSSSSS </span>
                </div>
            </div>
        </div>
    </section>


    <section class="bg-slate-200 dark:bg-gray-900 py-20 animate-fadeIn">
        <div class="container mx-auto flex flex-wrap justify-center gap-10">
            <div class="max-w-xl dark:text-white px-6">
                <div class="mb-10">
                    <h1 class="text-4xl font-bold mb-2">Feedback</h1>
                    <div class="w-16 h-1 bg-blue-500 rounded"></div>
                </div>

                <?php if(session('success')): ?>
                    <div class="bg-green-500 text-white p-4 rounded-md mb-6">
                        <?php echo e(session('success')); ?>

                    </div>
                <?php endif; ?>
                <form action="<?php echo e(route('feedback.store')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="space-y-4">
                        <div class="flex flex-wrap gap-4">
                            <input type="text" name="name" placeholder="Name" aria-placeholder="name"
                                class="bg-transparent border-b-2 border-gray-400 dark:border-gray-400 mb-2 w-full sm:w-56 focus:outline-none focus:border-blue-500 focus:bg-transparent placeholder-text-small">
                            <input type="email" name="email" placeholder="Email (opsional)"
                                class="bg-transparent border-b-2 border-gray-400 dark:border-gray-400 mb-2 w-full sm:w-56 focus:outline-none focus:border-blue-500 focus:bg-transparent placeholder-text-small">
                            <input type="number" name="phonenumber" placeholder="Nomor Telepon"
                                aria-placeholder="Nomor Telepon"
                                class="bg-transparent border-b-2 border-gray-400 dark:border-gray-400 mb-2 w-full sm:w-56 focus:outline-none focus:border-blue-500 focus:bg-transparent no-spinner placeholder-text-small">
                            <input type="text" name="subject" placeholder="Subject (Opsional)"
                                aria-placeholder="Subject (Opsional)"
                                class="bg-transparent border-b-2 border-gray-400 dark:border-gray-400 mb-2 w-full sm:w-56 focus:outline-none focus:border-blue-500 focus:bg-transparent placeholder-text-small">
                        </div>
                        <textarea name="isi" id="isi" cols="60" rows="6" placeholder="Isi Feedback"
                            class="bg-transparent border-b-2 border-gray-400 dark:border-gray-400 mb-2 mt-4 w-full focus:outline-none focus:border-blue-500 focus:bg-transparent placeholder-text-small"></textarea>
                    </div>
                    <div class="flex justify-end mt-8 lg:mt-10">
                        <button type="submit"
                            class="bg-yellow-400 hover:bg-yellow-500 px-6 py-2 font-bold rounded-full text-white hover:shadow-md animate-bounce">
                            Send Feedback
                        </button>

                    </div>
                </form>


                <?php if($errors->any()): ?>
                    <div class="bg-red-500 text-white p-4 rounded-md mb-6">
                        <ul>
                            <?php $__currentLoopData = $errors->all(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $error): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <li><?php echo e($error); ?></li>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </ul>
                    </div>
                <?php endif; ?>

            </div>
            <div class="hidden lg:block lg:max-w-xs md:max-w-md">
                <img src="<?php echo e(asset('img/feedback.jpg')); ?>" alt="feedback_image" class="w-full rounded-md shadow-md">
            </div>
        </div>
    </section>


    <footer class=" py-20 dark:bg-gray-950 bg-blue-950">
        <div class="container mx-auto text-white px-4">
            <div class="grid grid-cols-1  md:grid-cols-4 gap-8">
                <div
                    class="container-box flex justify-center  md:text-end md:items-center md:justify-end md:max-w-72 md:border-r-2  md:border-yellow-400 px-4  border-b-2 pb-2 border-yellow-400 md:border-b-0">
                    <h1 class="text-lg font-bold mb-4 md:mb-0 md:me-2 lg:max-w-44">CUCI MOTOR FAIRUZ</h1>
                </div>
                <div class="container-box  px-4 border-b-2 py-8 border-gray-600 md:border-0">
                    <h1 class="text-lg font-bold mb-4 text-center">Tentang Kami</h1>
                    <p class="text-sm md:text-justify text-center">
                        Cuci Motor Fairuz adalah penyedia layanan cuci dan polishing kendaraan yang berdedikasi untuk
                        menjaga kebersihan dan keindahan kendaraan Anda. Kami menggunakan teknik dan produk terbaik
                        untuk hasil maksimal.
                    </p>
                </div>
                <div class="container-box text-center px-4 border-b-2 pb-8 md:py-8 border-gray-600 md:border-0">
                    <h1 class="text-lg font-bold mb-4">Layanan Kami</h1>
                    <ul class="text-sm">
                        <li>Cuci Sepeda Motor</li>
                        <li>Cuci Mobil</li>
                    </ul>
                </div>
                <div
                    class="container-box text-center md:text-start px-4 border-b-2 pb-8 md:py-8 border-gray-600 md:border-0">
                    <h1 class="text-lg font-bold mb-4">Hubungi Kami</h1>
                    <p class="text-sm font-light"><span class="font-semibold text-white">Alamat:</span> Jl. Kab.
                        No.10, Karang
                        Asem Tegalan,
                        Wonorejo, Kec. Wonorejo, Pasuruan,
                        Jawa Timur 67173</p>
                    <p class="text-sm mt-2 font-light"><span class="font-semibold">Telepon: </span><a
                            href="https://api.whatsapp.com/send/?phone=%2B622087795451773&text&type=phone_number&app_absent=0"
                            target="_blank" class="hover:underline">+62 877-9545-1773</a>
                    </p>
                    <p class="text-sm mt-2 font-light"><span class="font-semibold">Email:</span> <a
                            href="mailto:cucimotorfairuz01@gmail.com"
                            class="hover:underline break-all ">cucimotorfairuz01@gmail.com</a></p>
                </div>

            </div>
        </div>
    </footer>
    <!-- Leaflet JS -->
    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            var map = L.map('map').setView([-7.7099996, 112.8044073], 16); // Set view to CUCI MOTOR FAIRUZ

            // Set OpenStreetMap tile layer
            L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
                attribution: '© OpenStreetMap contributors'
            }).addTo(map);

            // Add a marker to the map
            L.marker([-7.7099996, 112.8044073]).addTo(map)
                .bindPopup('CUCI MOTOR FAIRUZ')
                .openPopup();
        });
    </script>
    <style>
        #map {
            height: 400px;
            width: 100%;
        }

        /* Chrome, Safari, Edge, Opera */
        input[type="number"]::-webkit-outer-spin-button,
        input[type="number"]::-webkit-inner-spin-button {
            -webkit-appearance: none;
            margin: 0;
        }

        /* Firefox */
        input[type="number"] {
            -moz-appearance: textfield;
        }

        /* Placeholder styling */
        ::placeholder {
            font-size: 0.875rem;
            /* Adjust the font size as needed */
        }

        /* Specific class for smaller placeholder text */
        .placeholder-text-small::placeholder {
            font-size: 0.75rem;
            /* Smaller font size for placeholder text */
        }

        .bg-primary {
            background: #4F8DB9;
        }

        @keyframes fadeIn {
            from {
                opacity: 0;
            }

            to {
                opacity: 1;
            }
        }

        .animate-fadeIn {
            animation: fadeIn 1s ease-in-out;
        }

        @keyframes wave {
            0% {
                transform: translateX(-10px);
            }

            50% {
                transform: translateX(10px);
            }

            100% {
                transform: translateX(-10px);
            }
        }

        .animate-wave {
            animation: wave 1s ease-in-out infinite;
        }

        @keyframes bounce {

            0%,
            20%,
            50%,
            80%,
            100% {
                transform: translateY(0);
            }

            40% {
                transform: translateY(-15px);
            }

            60% {
                transform: translateY(-5px);
            }
        }

        .animate-bounce {
            animation: bounce 1s infinite;
        }
    </style>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $attributes = $__attributesOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__attributesOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c)): ?>
<?php $component = $__componentOriginal1f9e5f64f242295036c059d9dc1c375c; ?>
<?php unset($__componentOriginal1f9e5f64f242295036c059d9dc1c375c); ?>
<?php endif; ?>
<?php /**PATH C:\DATASAYA\D\laragon\www\cuciMotor\resources\views/welcome.blade.php ENDPATH**/ ?>