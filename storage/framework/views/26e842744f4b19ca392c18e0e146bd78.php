<?php if (isset($component)) { $__componentOriginal2880b66d47486b4bfeaf519598a469d6 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal2880b66d47486b4bfeaf519598a469d6 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.sidebar','data' => []] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('sidebar'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(Illuminate\View\AnonymousComponent::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes([]); ?>
     <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>

    <div class="flex flex-wrap gap-10">
        <!-- Menghilangkan padding horizontal pada elemen .head -->
        <div
            class="head flex flex-col md:flex-row gap-4 md:gap-0 justify-between bg-white items-center w-full p-6 rounded-md shadow-md">
            <div class="title border-b-2 border-gray-500 w-full text-center pb-4 md:border-0 md:text-start">
                <h1 class="font-semibold text-xl text-blue-500 "><?php echo e($title); ?></h1>
            </div>
            <div class="content flex flex-row gap-8 max-w-80 w-full items-center">
                <div class="member text-center md:text-end max-w-md w-full">
                    <div class="head flex flex-row gap-1 items-center mb-1 justify-end">
                        <h1 class="font-semibold text-yellow-500 ">Total Users</h1>
                        <svg class="w-6 h-6 text-yellow-500 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                            <path fill-rule="evenodd"
                                d="M2 12C2 6.477 6.477 2 12 2s10 4.477 10 10-4.477 10-10 10S2 17.523 2 12Zm5.495.93A.5.5 0 0 0 6.5 13c0 1.19.644 2.438 1.618 3.375C9.099 17.319 10.469 18 12 18c1.531 0 2.9-.681 3.882-1.625.974-.937 1.618-2.184 1.618-3.375a.5.5 0 0 0-.995-.07.764.764 0 0 1-.156.096c-.214.106-.554.208-1.006.295-.896.173-2.111.262-3.343.262-1.232 0-2.447-.09-3.343-.262-.452-.087-.792-.19-1.005-.295a.762.762 0 0 1-.157-.096ZM8.99 8a1 1 0 0 0 0 2H9a1 1 0 1 0 0-2h-.01Zm6 0a1 1 0 1 0 0 2H15a1 1 0 1 0 0-2h-.01Z"
                                clip-rule="evenodd" />
                        </svg>
                    </div>

                    <p class="text-gray-600">5 Orang</p>
                </div>

                <div class="penghasilan text-end max-w-md w-full">
                    <div class="head flex flex-row gap-1 justify-end ">
                        <h1 class="font-semibold text-red-400">Barang Terjual</h1>
                        <svg class="w-6 h-6 text-red-400 " aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                            width="24" height="24" fill="none" viewBox="0 0 24 24">
                            <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                d="M4 4v15a1 1 0 0 0 1 1h15M8 16l2.5-5.5 3 3L17.273 7 20 9.667" />
                        </svg>
                    </div>
                    <p class="text-gray-600 text-center md:text-end">5.000</p>
                </div>
            </div>
        </div>
        <div
            class="content flex flex-col md:flex-row gap-6 md:gap-10 sm:mx-8 justify-center md:justify-between max-w-4xl mx-auto w-full">
            <!-- Canvas Chart -->
            <div class="canvas flex  w-full max-w-6xl mx-auto md:h-96 ">
                <canvas id="revenueChart" class="w-full h-full bg-white shadow-md rounded-md p-4" width="220"
                    height="190"></canvas>
            </div>


            <!-- Statistik Cards -->
            <div class="statistik-card flex flex-col gap-4 w-full max-w-md">
                <div class="flex flex-wrap gap-4 justify-center md:justify-start  w-full">
                    <div class="cart bg-white rounded-md shadow-md p-4 flex flex-col max-w-xs w-full">
                        <div class="title flex flex-row items-center text-green-400 gap-2">
                            <h1 class="font-semibold text-xl">Penghasilan</h1>
                            <svg class="w-6 h-6 text-green-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <!-- SVG path -->
                            </svg>
                        </div>
                        <h1 class="text-gray-600 font-medium mt-2">Rp. 100.000.000</h1>
                    </div>

                    <div class="cart bg-white rounded-md shadow-md p-4 flex flex-col max-w-xs w-full">
                        <div class="title flex flex-row items-center text-blue-400 gap-2">
                            <h1 class="font-semibold text-xl">Services</h1>
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 64 64"
                                fill="currentColor">
                                <!-- SVG path -->
                            </svg>
                        </div>
                        <h1 class="text-gray-600 font-medium mt-2">363 Services</h1>
                    </div>

                    <div class="cart bg-white rounded-md shadow-md p-4 flex flex-col max-w-xs w-full">
                        <div class="title flex flex-row items-center text-green-500 gap-2">
                            <h1 class="font-semibold text-xl">Feedback</h1>
                            <svg class="w-6 h-6 text-green-500" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <!-- SVG path -->
                            </svg>
                        </div>
                        <h1 class="text-gray-600 font-medium mt-2">363 Feedback</h1>
                    </div>

                    <div class="cart bg-white rounded-md shadow-md p-4 flex flex-col max-w-xs w-full">
                        <div class="title flex flex-row items-center text-yellow-400 gap-2">
                            <h1 class="font-semibold text-xl">Pending</h1>
                            <svg class="w-6 h-6 text-yellow-400" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                width="24" height="24" fill="currentColor" viewBox="0 0 24 24">
                                <!-- SVG path -->
                            </svg>
                        </div>
                        <h1 class="text-gray-600 font-medium mt-2">5 Services</h1>
                    </div>
                </div>
            </div>
        </div>




    </div>



    <script>
        const ctx = document.getElementById('revenueChart').getContext('2d');
        const revenueChart = new Chart(ctx, {
            type: 'bar', // atau 'line' untuk grafik garis
            data: {
                labels: ['January', 'February', 'March', 'April', 'May', 'June', 'July', 'August', 'September',
                    'October', 'November', 'December'
                ],
                datasets: [{
                    label: 'Penghasilan per Bulan (Rp)',
                    data: [5000000, 7000000, 8000000, 6000000, 9000000, 10000000, 8500000, 9500000,
                        11000000, 10500000, 12000000, 13000000
                    ], // data penghasilan per bulan
                    backgroundColor: 'rgba(75, 192, 192, 0.2)',
                    borderColor: 'rgba(75, 192, 192, 1)',
                    borderWidth: 1
                }]
            },
            options: {
                scales: {
                    y: {
                        beginAtZero: true
                    }
                },
                responsive: true,
                plugins: {
                    legend: {
                        position: 'top',
                    },
                    title: {
                        display: true,
                        text: 'Overview Penghasilan Per Bulan'
                    }
                }
            }
        });
    </script>

 <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $attributes = $__attributesOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__attributesOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal2880b66d47486b4bfeaf519598a469d6)): ?>
<?php $component = $__componentOriginal2880b66d47486b4bfeaf519598a469d6; ?>
<?php unset($__componentOriginal2880b66d47486b4bfeaf519598a469d6); ?>
<?php endif; ?>
<?php /**PATH C:\DATASAYA\D\laragon\www\cuciMotor\resources\views/admin/dashboard.blade.php ENDPATH**/ ?>