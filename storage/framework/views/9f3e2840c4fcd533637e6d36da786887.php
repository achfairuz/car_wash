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
    <div class="content grid grid-cols-2 gap-6 lg:gap-10 md:gap-6 mx-4 mb-10 sm:mx-10 sm:grid-cols-3 lg:grid-cols-4">
        <?php $__currentLoopData = $produks; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $produk): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="<?php echo e(route('carts.add')); ?>" method="POST" class="w-full max-w-xs">
                <?php echo csrf_field(); ?>

                <input type="hidden" name="jenis" value="produk">
                <input type="hidden" name="quantity" value="1">
                <input type="hidden" name="produk_id" value="<?php echo e($produk->id); ?>">
                <div class="cart bg-white shadow-md rounded-md overflow-hidden mx-auto">
                    <div class="img">
                        <img src="<?php echo e(asset('img/product/' . $produk->image)); ?>" alt="<?php echo e($produk->nama_produk); ?>"
                            class="w-full h-32 object-cover">
                    </div>
                    <div class="text p-2">
                        <div class="body mt-2">
                            <h1 class="font-bold text-sm sm:text-lg"><?php echo e($produk->nama_produk); ?></h1>
                            <p class="text-gray-600 text-xs sm:text-sm mt-1"><?php echo e($produk->deskripsi); ?></p>
                        </div>
                        <div class="foot mt-4 mb-2">
                            <button type="submit"
                                class="bg-blue-400 text-sm sm:text-base text-white py-1 px-2 w-full rounded-full hover:bg-blue-500 shadow-md">
                                Beli Sekarang
                            </button>
                        </div>
                    </div>
                </div>
            </form>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
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
<?php /**PATH C:\DATASAYA\D\laragon\www\cuciMotor\resources\views/form/shop.blade.php ENDPATH**/ ?>