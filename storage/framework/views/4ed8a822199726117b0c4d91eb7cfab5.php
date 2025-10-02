<style>
    body {
        background: linear-gradient(rgba(0, 0, 0, 0.40), rgba(0, 0, 0, 0.371)), url('<?php echo e(asset('img/bg_login.jpg')); ?>');
        background-size: cover;
        background-position: center;
        background-attachment: fixed;
    }

    body.dark {
        background: linear-gradient(rgba(0, 0, 0, 0.70), rgba(0, 0, 0, 0.50)), url('<?php echo e(asset('img/bg_login.jpg')); ?>');
    }
</style>

<body class="dark:bg-gray-900 dark:text-white">
    <?php if (isset($component)) { $__componentOriginal65e0bd0aeed8a21b598c76606db79d38 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal65e0bd0aeed8a21b598c76606db79d38 = $attributes; } ?>
<?php $component = App\View\Components\Main::resolve([] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? (array) $attributes->getIterator() : [])); ?>
<?php $component->withName('main'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag && $constructor = (new ReflectionClass(App\View\Components\Main::class))->getConstructor()): ?>
<?php $attributes = $attributes->except(collect($constructor->getParameters())->map->getName()->all()); ?>
<?php endif; ?>
<?php $component->withAttributes(['class' => 'relative z-10']); ?>
         <?php $__env->slot('title', null, []); ?> <?php echo e($title); ?> <?php $__env->endSlot(); ?>

        <section class="max-w-xl mx-auto flex justify-center items-center min-h-screen mb-10">
            <div class="w-full bg-white dark:bg-gray-800 p-8 rounded-lg shadow-lg dark:shadow-gray-900 mx-4 md:mx-0 ">

                <form id="registerForm" action="<?php echo e(route('register')); ?>" method="POST">
                    <?php echo csrf_field(); ?>
                    <div class="container">


                        <h1 class="text-center text-blue-600 dark:text-blue-400 lg:text-2xl text-xl font-bold mb-6">
                            Register
                        </h1>

                        <div class="input-group mb-4">
                            <label for="name"
                                class="text-sm font-sans font-semibold mb-2 dark:text-gray-300">Name</label>
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
                                <input type="text" id="name" name="name" value="<?php echo e(old('name')); ?>"
                                    class="flex-1 py-2 px-4 border-none w-full focus:ring-0 focus:outline-none bg-transparent dark:bg-gray-700 dark:text-gray-300"
                                    placeholder="Type your name">
                            </div>
                        </div>

                        <div class="input-group mb-4">
                            <label for="email"
                                class="text-sm font-sans font-semibold mb-2 dark:text-gray-300">Email</label>
                            <div class="flex items-center border border-gray-300 dark:border-gray-600 rounded-md">
                                <!-- Icon -->
                                <span class="px-3 text-gray-500 dark:text-gray-400">
                                    <svg xmlns="http://www.w3.org/2000/svg"
                                        class="w-5 h-5 text-gray-500 dark:text-gray-400" fill="none"
                                        viewBox="0 0 24 24" stroke="currentColor">
                                        <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                                            d="M3 8h18M3 8l9 8 9-8M3 8v12a2 2 0 002 2h14a2 2 0 002-2V8l-9 8-9-8z" />
                                    </svg>
                                </span>

                                <!-- Input Field -->
                                <input type="email" id="email" name="email" value="<?php echo e(old('email')); ?>"
                                    class="flex-1 py-2 px-4 border-none w-full focus:ring-0 focus:outline-none bg-transparent dark:bg-gray-700 dark:text-gray-300"
                                    placeholder="Type your email">

                            </div>
                            <?php $__errorArgs = ['email'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class="text-xs mt-1" style="color: #dc2626;"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                        </div>

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
                                <input type="text" id="username" name="username" value="<?php echo e(old('username')); ?>"
                                    class="flex-1 py-2 px-4 border-none w-full focus:ring-0 focus:outline-none bg-transparent dark:bg-gray-700 dark:text-gray-300"
                                    placeholder="Username">

                            </div>
                            <?php $__errorArgs = ['username'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                <p class=" text-xs mt-1" style="color: #dc2626;"><?php echo e($message); ?></p>
                            <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>


                            <div class="input-group mb-4 mt-4">
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
                                <?php $__errorArgs = ['password'];
$__bag = $errors->getBag($__errorArgs[1] ?? 'default');
if ($__bag->has($__errorArgs[0])) :
if (isset($message)) { $__messageOriginal = $message; }
$message = $__bag->first($__errorArgs[0]); ?>
                                    <p class="text-xs mt-1" style="color: #dc2626;"><?php echo e($message); ?></p>
                                <?php unset($message);
if (isset($__messageOriginal)) { $message = $__messageOriginal; }
endif;
unset($__errorArgs, $__bag); ?>
                            </div>

                            <div class="input-group mb-6">
                                <label for="password_confirmation"
                                    class="text-sm font-sans font-semibold mb-2 dark:text-gray-300">Confirm
                                    Password</label>
                                <div class="flex items-center border border-gray-300 dark:border-gray-600 rounded-md">
                                    <!-- Icon -->
                                    <span class="px-3 text-gray-500 dark:text-gray-400">
                                        <svg class="w-6 h-6" aria-hidden="true" xmlns="http://www.w3.org/2000/svg"
                                            fill="none" viewBox="0 0 24 24">
                                            <path stroke="currentColor" stroke-linecap="round"
                                                stroke-linejoin="round" stroke-width="2"
                                                d="M12 14v3m-3-6V7a3 3 0 1 1 6 0v4m-8 0h10a1 1 0 0 1 1 1v7a1 1 0 0 1-1 1H7a1 1 0 0 1-1-1v-7a1 1 0 0 1 1-1Z" />
                                        </svg>
                                    </span>

                                    <!-- Input Field -->
                                    <input type="password" id="password_confirmation" name="password_confirmation"
                                        class="flex-1 py-2 px-4 w-full border-none focus:ring-0 focus:outline-none bg-transparent dark:bg-gray-700 dark:text-gray-300"
                                        placeholder="Confirm Password">
                                </div>

                            </div>

                            <div class="input-group mb-4 custom-checkbox">
                                <input type="checkbox" id="remember" name="remember">
                                <label for="remember" class="text-sm dark:text-gray-300">Remember me</label>
                            </div>

                            <div class="text-center">
                                <button type="submit" id="submitButton"
                                    class="bg-blue-500 dark:bg-blue-600 text-white py-2 px-4 rounded-md w-full font-semibold hover:bg-blue-600 dark:hover:bg-blue-700">
                                    Register
                                </button>
                            </div>
                        </div>
                </form>

                <div class="container text-center mt-10 border-t-2 border-gray-300 dark:border-gray-600 pt-6">
                    <p class="text-gray-600 dark:text-gray-300 mb-2">Apakah Anda Sudah Punya Akun?</p>
                    <a href="/login"
                        class="text-blue-600 hover:text-blue-700 dark:text-blue-400 dark:hover:text-blue-300 font-semibold">
                        Login
                    </a>
                </div>

            </div>
        </section>
     <?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal65e0bd0aeed8a21b598c76606db79d38)): ?>
<?php $attributes = $__attributesOriginal65e0bd0aeed8a21b598c76606db79d38; ?>
<?php unset($__attributesOriginal65e0bd0aeed8a21b598c76606db79d38); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal65e0bd0aeed8a21b598c76606db79d38)): ?>
<?php $component = $__componentOriginal65e0bd0aeed8a21b598c76606db79d38; ?>
<?php unset($__componentOriginal65e0bd0aeed8a21b598c76606db79d38); ?>
<?php endif; ?>


    <script>
        document.addEventListener('DOMContentLoaded', function() {
            const form = document.getElementById('registerForm');
            const submitButton = document.getElementById('submitButton');
            const rememberCheckbox = document.getElementById('remember');

            form.addEventListener('submit', function(event) {
                if (!rememberCheckbox.checked) {
                    event.preventDefault();
                    alert('Please check the "Remember me" checkbox to proceed.');
                }
            });
        });
    </script>
</body>
<?php /**PATH C:\DATASAYA\D\laragon\www\cuciMotor\resources\views/register.blade.php ENDPATH**/ ?>