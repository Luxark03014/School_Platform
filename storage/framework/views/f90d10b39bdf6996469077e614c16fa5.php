<?php $__env->startSection('title', 'Project Details'); ?>
<?php $__env->startSection('content'); ?>
<div class="bg-white shadow-md rounded-lg p-6 max-w-2xl mx-auto">
    <h1 class="text-3xl font-bold mb-4 text-blue-600"><?php echo e($project->name); ?></h1>
    <div class="space-y-4">
        <p><span class="font-semibold text-gray-700">Description:</span> <?php echo e($project->description); ?></p>
        <p><span class="font-semibold text-gray-700">Deadline:</span> <?php echo e($project->deadline); ?></p>
        <p><span class="font-semibold text-gray-700">User:</span> <?php echo e($project->user->name); ?></p>
    </div>
    <a href="<?php echo e(route('projects.index')); ?>" class="mt-6 inline-block bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-150 ease-in-out">Back to Projects</a>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\School_Platform\resources\views\projects\show.blade.php ENDPATH**/ ?>