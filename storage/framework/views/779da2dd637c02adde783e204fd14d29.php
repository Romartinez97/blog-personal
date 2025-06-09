<?php $__env->startSection('title', $post->title); ?>

<?php $__env->startSection('content'); ?>
    <div class="max-w-4xl mx-auto bg-white text-black p-6 mt-10 rounded shadow flex gap-6">
        <?php if($post->poster): ?>
            <img src="<?php echo e(asset('storage/album-covers/' . $post->poster)); ?>" alt="<?php echo e($post->title); ?>' album cover"
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

    <div class="mt-8 border-t pt-8">
        <h2 class="text-2xl font-bold text-black mb-4">Comments</h2>

        <?php if(auth()->guard()->check()): ?>
            <form action="<?php echo e(route('comments.store', $post)); ?>" method="POST" class="mb-6">
                <?php echo csrf_field(); ?>
                <textarea name="content" rows="3" class="w-full border rounded p-2 text-black"
                    placeholder="Write your comment..." required></textarea>
                <button type="submit" class="mt-2 bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
                    Leave a comment
                </button>
            </form>
        <?php else: ?>
            <p class="mb-6 text-gray-600">
                <a href="<?php echo e(route('login')); ?>" class="text-blue-500 hover:underline">Log in</a>
                or
                <a href="<?php echo e(route('register')); ?>" class="text-blue-500 hover:underline">sign in</a>
                to join the conversation.
            </p>
        <?php endif; ?>

        <div class="space-y-4">
            <?php $__currentLoopData = $post->comments()->latest()->get(); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $comment): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                <div class="bg-gray-50 text-gray-800 p-4 rounded">
                    <div class="flex justify-between items-start">
                        <div class="font-semibold"><?php echo e($comment->user->name); ?></div>
                        <div class="text-sm text-gray-500">
                            <?php echo e($comment->created_at->diffForHumans()); ?>

                        </div>
                    </div>
                    <p class="mt-2 text-gray-700"><?php echo e($comment->content); ?></p>
                </div>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
        </div>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.app', array_diff_key(get_defined_vars(), ['__data' => 1, '__path' => 1]))->render(); ?><?php /**PATH C:\xampp\htdocs\trabajosPWA\blog-personal\resources\views/posts/show.blade.php ENDPATH**/ ?>