

<?php $__env->startSection('content'); ?>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            
            
<div class="relative overflow-x-auto shadow-md sm:rounded-lg">
    <table class="w-full text-sm text-left text-white">
        <thead class="text-xs bg-primary uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Judul Voting
                </th>
                <th scope="col" class="px-6 py-3">
                    URL Result
                </th>
            </tr>
        </thead>
        <tbody>
            <?php $__currentLoopData = $votings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
            <tr class="bg-primary border-b">
                <th scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                    <?php echo e(strip_tags($voting->title)); ?>

                </th>
                <td class="px-6 py-4">
                    <a href="/result/<?php echo e($voting->slug); ?>" class="hover:underline">www.voter.com/result/<?php echo e($voting->slug); ?></a>
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
</div>


            
        </div>
    </div>


    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/alert.js']); ?>;
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\revan\OneDrive\Documents\voter\voter\resources\views/resultlist.blade.php ENDPATH**/ ?>