<div>
    <div <?php echo e($attributes->merge(['class' => 'p-4 mb-4 text-sm  rounded-lg' . $class])); ?> role="alert">
        <span class="font-medium"><?php echo e($title ?? '¡Cuidado!'); ?></span> <?php echo e($slot); ?>.
    </div>
</div>
<?php /**PATH C:\xampp\htdocs\trabajosPWA\blog-personal\resources\views/components/alert.blade.php ENDPATH**/ ?>