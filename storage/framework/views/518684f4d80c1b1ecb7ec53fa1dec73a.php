<?php $__env->startSection('title', 'Categories'); ?>

<?php $__env->startSection('content'); ?>
    <h1 class="text-3xl font-bold mb-6 mt-5 text-black">Categories</h1>

    <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-6">
        <?php $__currentLoopData = $categories; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $category): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <a href="<?php echo e(route('category.show', $category)); ?>"
            class="block p-6 bg-white rounded-lg shadow hover:shadow-md hover:scale-105 transition-transform duration-200"
            >
                <h2 class="text-lg font-semibold text-black"><?php echo e($category->name); ?></h2>
            </a>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\trabajosPWA\blog-personal\resources\views/category/index.blade.php ENDPATH**/ ?>