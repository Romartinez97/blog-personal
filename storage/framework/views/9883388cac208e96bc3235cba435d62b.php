

<?php $__env->startSection('title', $post->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="max-w-4xl mx-auto bg-white text-black p-6 mt-10 rounded shadow flex gap-6">
        <?php if($post->poster): ?>
            <img src="<?php echo e(asset('storage/album-covers/' . $post->poster)); ?>" 
                alt="<?php echo e($post->title); ?>' album cover"
                class="w-[250px] h-[250px] object-cover rounded">
        <?php endif; ?>

        <div class="flex-1">
            <h1 class="text-3xl font-bold mb-2"><?php echo e($post->title); ?></h1>

            <p class="text-black mb-4">
                Categoría: 
                <a href="<?php echo e(route('category.show', $post->category)); ?>" class="underline">
                    <?php echo e($post->category->name); ?>

                </a>
            </p>

            <?php if (isset($component)) { $__componentOriginal077a61d60611f096a94f8e1725d6bb16 = $component; } ?>
<?php if (isset($attributes)) { $__attributesOriginal077a61d60611f096a94f8e1725d6bb16 = $attributes; } ?>
<?php $component = Illuminate\View\AnonymousComponent::resolve(['view' => 'components.rating-stars','data' => ['rating' => $post->rating]] + (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag ? $attributes->all() : [])); ?>
<?php $component->withName('rating-stars'); ?>
<?php if ($component->shouldRender()): ?>
<?php $__env->startComponent($component->resolveView(), $component->data()); ?>
<?php if (isset($attributes) && $attributes instanceof Illuminate\View\ComponentAttributeBag): ?>
<?php $attributes = $attributes->except(\Illuminate\View\AnonymousComponent::ignoredParameterNames()); ?>
<?php endif; ?>
<?php $component->withAttributes(['rating' => \Illuminate\View\Compilers\BladeCompiler::sanitizeComponentAttribute($post->rating)]); ?>
<?php echo $__env->renderComponent(); ?>
<?php endif; ?>
<?php if (isset($__attributesOriginal077a61d60611f096a94f8e1725d6bb16)): ?>
<?php $attributes = $__attributesOriginal077a61d60611f096a94f8e1725d6bb16; ?>
<?php unset($__attributesOriginal077a61d60611f096a94f8e1725d6bb16); ?>
<?php endif; ?>
<?php if (isset($__componentOriginal077a61d60611f096a94f8e1725d6bb16)): ?>
<?php $component = $__componentOriginal077a61d60611f096a94f8e1725d6bb16; ?>
<?php unset($__componentOriginal077a61d60611f096a94f8e1725d6bb16); ?>
<?php endif; ?>

            <div class="pt-3">
                <?php echo e($post->content); ?>

            </div>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH E:\Repositories\trabajosPWA\blog-personal\resources\views/posts/show.blade.php ENDPATH**/ ?>