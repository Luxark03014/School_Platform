<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $__env->yieldContent('title', 'School Platform'); ?></title>
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css']); ?>
</head>
<body class="bg-blue-50 font-sans text-gray-900 flex flex-col min-h-screen">

    <nav class="bg-blue-600 text-white shadow-lg">
        <div class="container mx-auto px-4 py-4 flex justify-between items-center">
            <h1 class="text-2xl font-bold">School Platform</h1>
            <ul class="flex space-x-6">
                <li><a href="/" class="hover:text-blue-200 transitison duration-150 ease-in-out">Inicio</a></li>
                <li><a href="<?php echo e(route('projects.index')); ?>" class="hover:text-blue-200 transition duration-150 ease-in-out">Proyectos</a></li>
                
                <form id="logout-form" action="<?php echo e(route('logout')); ?>" method="POST" class="inline">
                    <?php echo csrf_field(); ?>
                    <button type="submit" class="hover:text-blue-200 transition duration-150 ease-in-out">
                        Cerrar Sesión
                    </button>
                </form>
            </ul>
        </div>
    </nav>

 
    <main class="container mx-auto px-4 py-8 flex-grow">
        <?php echo $__env->yieldContent('content'); ?>
    </main>


    <footer class="bg-blue-600 text-white py-6 mt-auto">
        <div class="container mx-auto text-center">
            <p>© 2024 School Platform. Todos los derechos reservados.</p>
        </div>
    </footer>
</body>
</html><?php /**PATH C:\laragon\www\School_Platform\resources\views\layouts\app.blade.php ENDPATH**/ ?>