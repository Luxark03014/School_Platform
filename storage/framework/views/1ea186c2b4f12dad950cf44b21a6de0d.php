<?php $__env->startSection('title', 'Projects List'); ?>
<?php $__env->startSection('content'); ?>
<div class="container mx-auto px-4">
    <h1 class="text-3xl font-bold mb-6 text-blue-600">Projects List</h1>
    <?php if(session('success')): ?>
    <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4" role="alert">
        <?php echo e(session('success')); ?>

    </div>
    <?php endif; ?>
    <a href="<?php echo e(route('projects.create')); ?>" class="bg-blue-500 text-white py-2 px-4 rounded hover:bg-blue-600 transition duration-150 ease-in-out mb-4 inline-block">Create New Project</a>
    <div class="overflow-x-auto bg-white shadow-md rounded-lg">
        <table class="min-w-full leading-normal">
            <thead>
                <tr>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Name</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Description</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Deadline</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">User</th>
                    <th class="px-5 py-3 border-b-2 border-gray-200 bg-gray-100 text-left text-xs font-semibold text-gray-600 uppercase tracking-wider">Actions</th>
                </tr>
            </thead>
            <tbody>
                <?php $__empty_1 = true; $__currentLoopData = $projects; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $project): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); $__empty_1 = false; ?>
                <tr>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><?php echo e($project->name); ?></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><?php echo e(Str::limit($project->description, 50)); ?></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><?php echo e($project->deadline); ?></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm"><?php echo e($project->user->name); ?></td>
                    <td class="px-5 py-5 border-b border-gray-200 bg-white text-sm">
                        <a href="<?php echo e(route('projects.show', $project)); ?>" class="text-blue-600 hover:text-blue-900 mr-2">View</a>
                        <?php if(auth()->user()->role === 'admin'): ?>
                        <a href="<?php echo e(route('projects.edit', $project)); ?>" class="text-yellow-600 hover:text-yellow-900 mr-2">Edit</a>
                       
 

                        <form action="<?php echo e(route('projects.destroy', $project)); ?>" method="POST" class="inline-block">
                            <?php echo csrf_field(); ?>
                            <?php echo method_field('DELETE'); ?>
                            <button type="submit" class="text-red-600 hover:text-red-900" onclick="return confirm('Are you sure you want to delete this project?')">Delete</button>
                        </form>
                        <?php endif; ?>
                    </td>
                </tr>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); if ($__empty_1): ?>
                <tr>
                    <td colspan="5" class="px-5 py-5 border-b border-gray-200 bg-white text-sm text-center">No projects found.</td>
                </tr>
                <?php endif; ?>
            </tbody>
        </table>
    </div>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.app', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\laragon\www\School_Platform\resources\views\projects\index.blade.php ENDPATH**/ ?>