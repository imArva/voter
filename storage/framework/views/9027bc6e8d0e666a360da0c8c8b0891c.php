

<?php $__env->startSection('listvote'); ?>
    <div class="flex m-8 h-96 items-center justify-center">
        <?php $__currentLoopData = $votings; $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $voting): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
        <div
            class="w-full  p-4 bg-primary border border-gray-200 rounded-lg shadow sm:p-8 dark:bg-gray-800 dark:border-gray-700">
            <div class="grid grid-cols-1 md:grid-cols-2 text-center text-white">
                <div class="title py-5">
                    <h5 class="text-xl font-bold">Title</h5>
                    <hr class="py-4">
                    <p><?php echo e(strip_tags($voting->title)); ?></p>
                </div>
                <div class="Url py-5">
                    <h5 class="text-xl font-bold">URL</h5>
                    <hr  class="py-4">
                    <a href="/voting/<?php echo e($voting->slug); ?>" class="text-blue-500 underline">www.voter.com/<?php echo e($voting->slug); ?></a>
                </div>
                
            </div>
        </div>
        <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
    </div>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ACHMAD SURYA SAPUTRA\Website Achmad Surya\voter\resources\views/listVoteUser.blade.php ENDPATH**/ ?>