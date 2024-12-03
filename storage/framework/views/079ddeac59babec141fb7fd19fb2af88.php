<?php $__env->startSection('title', 'Edit Project'); ?>
<?php $__env->startSection('content'); ?>
<div class="max-w-2xl mx-auto bg-white p-8 rounded-lg shadow-md">
    <h1 class="text-3xl font-bold mb-6 text-blue-600">Edit Project</h1>
    <form action="<?php echo e(route('projects.update', $project->id)); ?>" method="POST">
        <?php echo csrf_field(); ?>
        <?php echo method_field('PUT'); ?>
        <div class="mb-4">
            <label for="name" class="block text-gray-700 font-bold mb-2">Project Name:</label>
            <input type="text" name="name" id="name" value="<?php echo e($project->name); ?>" 
                   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                   required>
        </div>
        <div class="mb-4">
            <label for="description" class="block text-gray-700 font-bold mb-2">Description:</label>
            <textarea name="description" id="description" rows="4" 
                      class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                      required><?php echo e($project->description); ?></textarea>
        </div>
        <div class="mb-4">
            <label for="deadline" class="block text-gray-700 font-bold mb-2">Deadline:</label>
            <input type="date" name="deadline" id="deadline" value="<?php echo e($project->deadline); ?>" 
                   class="w-full border border-gray-300 rounded-md p-3 focus:ring-2 focus:ring-blue-500 focus:outline-none" 
                   required>
        </div>
        <button type="submit" 
                class="w-full bg-blue-600 text-white py-3 rounded-lg font-semibold hover:bg-blue-700 transition duration-150 ease-in-out">
            Update Project
        </button>
    </form>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\School_Platform\resources\views/projects/edit.blade.php ENDPATH**/ ?>