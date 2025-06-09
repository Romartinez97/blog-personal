<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="<?php echo e(csrf_token()); ?>">

    <!-- Google Fonts -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Metal+Mania&display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Inter&family=Metal+Mania&display=swap" rel="stylesheet">

    <!-- Scripts -->
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="font-sans text-gray-900 antialiased">

    
    <nav class="bg-gray-950 shadow px-6 py-4 ">
        <div class="container mx-auto flex justify-between items-center">
            <a href="<?php echo e(route('home')); ?>"
                class="text-3xl font-bold font-metal text-white hover:scale-105 transition">Bad Vibrations</a>

            <div class="flex items-center space-x-4">
                <a href="<?php echo e(route('home')); ?>" class="text-white font-sans hover:scale-105 transition">Homepage</a>
                <a href="<?php echo e(route('category.index')); ?>"
                    class="text-white font-sans hover:scale-105 transition">Categories</a>

                <?php if(auth()->guard()->check()): ?>
                    <!-- Dropdown -->
                    <div class="relative" x-data="{ open: false }">
                        <button @click="open = !open" class="text-white hover:scale-105 transition focus:outline-none">
                            <?php echo e(Auth::user()->name); ?>

                        </button>

                        <div x-show="open" @click.away="open = false"
                            class="absolute right-0 mt-2 w-48 bg-gray-900 shadow rounded z-50">
                            <a href="<?php echo e(route('profile.edit')); ?>"
                                class="block px-4 py-2  text-white font-sans hover:scale-105 transition">Profile</a>
                            <form method="POST" action="<?php echo e(route('logout')); ?>">
                                <?php echo csrf_field(); ?>
                                <button type="submit"
                                    class="w-full text-left px-4 py-2  text-white font-sans hover:scale-105 transition">
                                    Log Out
                                </button>
                            </form>
                        </div>
                    </div>
                <?php else: ?>
                    <a href="<?php echo e(route('login')); ?>" class="text-white font-sans hover:scale-105 transition">Log In</a>
                    <a href="<?php echo e(route('register')); ?>" class="text-white font-sans hover:scale-105 transition">Sign Up</a>
                <?php endif; ?>
            </div>
        </div>
    </nav>

    <div class="min-h-screen flex flex-col sm:justify-center items-center pt-6 sm:pt-0 bg-gray-100 dark:bg-grey-50">

        <div
            class="w-full sm:max-w-md mt-6 px-6 py-4 bg-white dark:bg-gray-800 shadow-md overflow-hidden sm:rounded-lg">
            <?php echo e($slot); ?>

        </div>
    </div>

    
    <script src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js" defer></script>
</body>

</html>
<?php /**PATH C:\xampp\htdocs\trabajosPWA\blog-personal\resources\views/layouts/guest.blade.php ENDPATH**/ ?>