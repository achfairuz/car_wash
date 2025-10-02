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

    <div class="flex justify-center">
        <form action="<?php echo e(route('orders.process')); ?>" method="POST">
            <?php echo csrf_field(); ?>
            <div class="container max-w-full sm:max-w-6xl p-4" x-data="{
                selectedCarts: [],
                selectAll: false,
                toggleAll() {
                    this.selectAll = !this.selectAll;
                    this.selectedCarts = this.selectAll ?
                        <?php echo e(json_encode($carts->pluck('id')->toArray())); ?> : [];
                }
            }">
                <div class="header my-4 py-2 px-4 border-b-2 border-gray-300 pb-6">
                    <h1 class="font-bold text-lg sm:text-xl text-blue-400">Shopping Cart</h1>
                </div>

                <!-- Mobile Layout -->
                <div class="block sm:hidden">
                    <?php
                    $subtotal = 0;
                    $discount = 5000;
                    $oingPersentase = 0.1;
                    ?>

                    <!-- Checkbox All -->
                    <div class="mb-4">
                        <input type="checkbox" id="select-all-mobile" x-model="selectAll" @click="toggleAll">
                        <label for="select-all-mobile" class="text-gray-700">Select All</label>
                    </div>

                    <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <?php if($cart->service): ?>
                            <?php $subtotal += $cart->service->harga_service * $cart->quantity; ?>
                        <?php elseif($cart->produk): ?>
                            <?php $subtotal += $cart->produk->harga_produk * $cart->quantity; ?>
                        <?php endif; ?>
                        <div class="cart flex flex-col mb-4 p-4 border rounded-lg bg-gray-50 shadow-sm">
                            <div class="flex flex-row gap-4 items-center">
                                <input type="checkbox" x-model="selectedCarts" value="<?php echo e($cart->id); ?>"
                                    class="mr-2">
                                <img class="w-16 h-16 object-cover"
                                    src="<?php echo e($cart->service ? asset('img/motorcycle.png') : asset('img/product/' . $cart->produk->image)); ?>"
                                    alt="<?php echo e($cart->service ? 'Icon ' . $cart->service->nama_service : $cart->produk->nama_produk); ?>">

                                <div class="flex-grow mr-4">
                                    <h1 class="text-sm font-semibold mb-2">
                                        <?php echo e($cart->service ? $cart->service->nama_service : $cart->produk->nama_produk); ?>

                                    </h1>
                                    <p class="text-xs text-gray-600">
                                        <?php echo e($cart->service ? 'Cuci ' . $cart->service->kategori : 'Produk'); ?></p>
                                    <h1 class="text-sm font-semibold text-gray-700">
                                        Rp.
                                        <?php echo e(number_format($cart->service->harga_service ?? $cart->produk->harga_produk, 0, ',', '.')); ?>

                                    </h1>
                                </div>
                            </div>
                            <div class="flex items-center mt-2 justify-between">
                                <div x-data="{ quantity: <?php echo e($cart->quantity); ?> }"
                                    @click.debounce.500ms="fetch('<?php echo e(route('cart.updateQuantity', $cart->id)); ?>', {
                                    method: 'PATCH',
                                    headers: {
                                        'Content-Type': 'application/json',
                                        'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                                    },
                                    body: JSON.stringify({ quantity })
                                })"
                                    class="flex items-center border-2 border-gray-400 rounded-md">
                                    <button @click="if(quantity > 1) quantity--"
                                        class="text-sm font-bold p-1 w-6 h-6 text-gray-700 hover:text-gray-900">
                                        &minus;
                                    </button>
                                    <input type="number" x-model="quantity" name="quantity"
                                        class="text-center border-l-2 border-r-2 border-gray-400 p-1 w-8 h-6 m-0">
                                    <button @click="quantity++"
                                        class="text-sm font-bold p-1 w-6 h-6 text-gray-700 hover:text-gray-900">
                                        &plus;
                                    </button>
                                </div>

                                <form action="<?php echo e(route('cart.destroy', $cart->id)); ?>" method="POST" class="mr-4">
                                    <?php echo csrf_field(); ?>
                                    <?php echo method_field('DELETE'); ?>
                                    <button class="text-xs text-red-500 hover:text-red-700 font-bold">
                                        Remove
                                    </button>
                                </form>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>

                <!-- Web Layout -->
                <div class="hidden sm:block">
                    <div class="mb-4">
                        <input type="checkbox" id="select-all-web" x-model="selectAll" @click="toggleAll">
                        <label for="select-all-web" class="text-gray-700">Select All</label>
                    </div>
                    <table class="min-w-full bg-white border">
                        <thead class="bg-gray-900">
                            <tr>
                                <th class="py-2 px-4 bg-gray-100 border-b text-left">Product</th>
                                <th class="py-2 px-4 bg-gray-100 border-b text-left">Category</th>
                                <th class="py-2 px-4 bg-gray-100 border-b text-center">Quantity</th>
                                <th class="py-2 px-4 bg-gray-100 border-b text-right">Price</th>
                                <th class="py-2 px-4 bg-gray-100 border-b text-right">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $__currentLoopData = $carts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $cart): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                                <tr class="border-b">
                                    <td class="py-2 px-4">
                                        <div class="flex items-center gap-4">
                                            <input type="checkbox" x-model="selectedCarts" value="<?php echo e($cart->id); ?>"
                                                class="mr-2">
                                            <img class="w-16 h-16 object-cover"
                                                src="<?php echo e($cart->service ? asset('img/motorcycle.png') : asset('img/product/' . $cart->produk->image)); ?>"
                                                alt="<?php echo e($cart->service ? 'Icon ' . $cart->service->nama_service : $cart->produk->nama_produk); ?>">
                                            <span><?php echo e($cart->service ? $cart->service->nama_service : $cart->produk->nama_produk); ?></span>
                                        </div>
                                    </td>
                                    <td class="py-2 px-4 ">
                                        <?php echo e($cart->service ? 'Cuci ' . $cart->service->kategori : 'Produk'); ?></td>
                                    <td class="py-2 px-4 text-center flex h-20 justify-center items-center">
                                        <div x-data="{ quantity: <?php echo e($cart->quantity); ?> }"
                                            @click.debounce.500ms="fetch('<?php echo e(route('cart.updateQuantity', $cart->id)); ?>', {
                                            method: 'PATCH',
                                            headers: {
                                                'Content-Type': 'application/json',
                                                'X-CSRF-TOKEN': '<?php echo e(csrf_token()); ?>',
                                            },
                                            body: JSON.stringify({ quantity })
                                        })"
                                            class="flex items-center border-2 border-gray-400 rounded-md">
                                            <button @click="if(quantity > 1) quantity--"
                                                class="text-sm font-bold w-6 h-6 text-gray-700 hover:text-gray-900">
                                                &minus;
                                            </button>
                                            <input type="number" x-model="quantity" name="quantity"
                                                class="text-center border-l-2 border-r-2 border-gray-400 w-8">
                                            <button @click="quantity++"
                                                class="text-sm font-bold w-6 h-6 text-gray-700 hover:text-gray-900">
                                                &plus;
                                            </button>
                                        </div>
                                    </td>
                                    <td class="py-2 px-4 text-right font-bold">
                                        Rp.
                                        <?php echo e(number_format($cart->service->harga_service ?? $cart->produk->harga_produk, 0, ',', '.')); ?>

                                    </td>
                                    <td class="py-2 px-4 text-right">
                                        <form action="<?php echo e(route('cart.destroy', $cart->id)); ?>" method="POST">
                                            <?php echo csrf_field(); ?>
                                            <?php echo method_field('DELETE'); ?>
                                            <button
                                                class="text-xs bg-red-500 text-white hover:bg-red-700 font-bold py-1 px-2 rounded-lg">
                                                Remove
                                            </button>
                                        </form>
                                    </td>
                                </tr>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        </tbody>
                    </table>
                </div>

                <!-- Subtotal & Checkout Button -->
                <div class="summary flex flex-col-reverse sm:flex-row justify-between mt-4 gap-2">
                    <div class="flex items-center justify-center w-full sm:w-1/2 sm:hidden block">

                        <button x-bind:disabled="selectedCarts.length === 0" type="submit"
                            class="bg-blue-400 disabled:opacity-50 text-white font-bold py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 w-full sm:w-auto">
                            Checkout
                        </button>
                    </div>
                    <div class=
                "bg-white p-4 rounded-lg shadow-md w-full sm:w-1/2">
                        <div class="flex justify-between items-center">
                            <p class="font-bold">Subtotal</p>
                            <p class="font-bold text-gray-900">Rp. <?php echo e(number_format($subtotal, 0, ',', '.')); ?></p>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <p class="font-bold">Discount</p>
                            <p class="font-bold text-green-500">- Rp. <?php echo e(number_format($discount, 0, ',', '.')); ?></p>
                        </div>
                        <div class="flex justify-between items-center mt-2">
                            <p class="font-bold">Shipping </p>
                            <p class="font-bold text-gray-900">
                                
                            </p>
                        </div>
                        <div class="flex justify-between items-center mt-4 border-t pt-2">
                            <p class="font-bold">Total</p>
                            <p class="font-bold text-blue-400">
                                Rp.
                                
                            </p>
                        </div>
                    </div>

                    <div class="flex items-center justify-center w-full sm:w-1/2 sm:block hidden">

                        <button x-bind:disabled="selectedCarts.length === 0" type="submit"
                            class="bg-blue-400 disabled:opacity-50 text-white font-bold py-2 px-4 rounded-lg shadow-md hover:bg-blue-600 w-full sm:w-auto">
                            Checkout
                        </button>
                    </div>
                </div>
            </div>
        </form>
    </div>
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



<style>
    /* Hapus spinner input number */
    input[type="number"]::-webkit-inner-spin-button,
    input[type="number"]::-webkit-outer-spin-button {
        -webkit-appearance: none;
        margin: 0;
    }

    input[type="number"] {
        -moz-appearance: textfield;
    }
</style>
<?php /**PATH C:\DATASAYA\D\laragon\www\cuciMotor\resources\views/form/carts.blade.php ENDPATH**/ ?>