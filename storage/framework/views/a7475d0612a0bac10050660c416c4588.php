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
    <div class="flex flex-col items-center space-y-6 mb-6">
        <?php $__currentLoopData = $services; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $service): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <form action="<?php echo e(route('carts.add')); ?>" method="POST" class="w-full max-w-4xl">
                <?php echo csrf_field(); ?>
                <div class="cart bg-white shadow-md rounded-md p-6 flex flex-col md:flex-row gap-6 md:gap-8 lg:gap-12">
                    <!-- Image Section -->
                    <div class="flex items-center justify-center flex-shrink-0">
                        <?php if($service->kategori === 'Sepeda Motor'): ?>
                            <img src="<?php echo e(asset('img/motorcycle.png')); ?>" alt="Motorcycle-Icon"
                                class="w-32 h-32 object-contain">
                        <?php elseif($service->kategori === 'Mobil'): ?>
                            <img src="<?php echo e(asset('img/car.png')); ?>" alt="Car-Icon" class="w-32 h-32 object-contain">
                        <?php endif; ?>
                    </div>

                    <!-- Details Section -->
                    <div class="flex-1">
                        <h1 class="font-bold text-xl mb-2 text-blue-600"><?php echo e($service->nama_service); ?></h1>
                        <p class="text-gray-600 text-justify"><?php echo e($service->deskripsi_service); ?></p>
                    </div>

                    <!-- Footer Section -->
                    <div class="flex flex-col justify-end items-end text-right space-y-2">
                        <h1 class="text-xl font-bold text-blue-600">
                            <span class="text-2xl font-medium">Rp. </span>
                            <?php echo e(number_format($service->harga_service, 0, '.', ',')); ?>

                        </h1>
                        <input type="hidden" name="service_id" value="<?php echo e($service->id); ?>">
                        <input type="hidden" name="jenis" value="service">
                        <input type="hidden" name="quantity" value="1">
                        <button type="submit"
                            class="bg-blue-400 py-2 px-4 text-white shadow-md hover:bg-blue-500 hover:shadow-lg w-full rounded-full">
                            Select
                        </button>
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
<?php /**PATH C:\DATASAYA\D\laragon\www\cuciMotor\resources\views/form/services.blade.php ENDPATH**/ ?>