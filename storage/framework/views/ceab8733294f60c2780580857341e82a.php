<?php $__env->startSection('title', 'Inicio'); ?>

<?php $__env->startSection('content'); ?>
  <h1 class="text-2xl font-bold mb-4">Todos los posts</h1>

  <?php $__empty_1 = true; $__currentLoopData = $posts; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $post): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
    <div class="mb-6 p-4 border rounded">
      <h2 class="text-xl font-semibold"><?php echo e($post->title); ?></h2>
      <p class="text-sm text-gray-600">
        Categoría: 
        <a href="<?php echo e(route('categories.show', $post->category)); ?>" class="underline">
          <?php echo e($post->category->name); ?>

        </a>
      </p>
      <p class="mt-2"><?php echo e(Str::limit($post->content, 150)); ?></p>
    </div>
  <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
    <p>No hay posts para mostrar.</p>
  <?php endif; ?>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.main', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\trabajosPWA\blog-personal\resources\views/home.blade.php ENDPATH**/ ?>