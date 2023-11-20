

<?php $__env->startSection('content'); ?>

    <div class="flex items-center justify-center flex-col bg-[#E5E5E5] min-h-screen sm:p-5">
        <!-- main card -->
        <div class="bg-[#F4F5FA] p-5 sm:p-10 rounded-xl">
            <!-- headers content-->
            <div class="flex flex-col justify-center items-center text-center">
                <div class="max-w-sm font-bold font-sans">
                    <?php echo $voting->title; ?>

                </div>
                <div class="font-light max-w-lg mt-5 text-sm">
                    <?php echo $voting->description; ?>

                </div>
            </div>


            <form action="" class="pt-6">

                <?php $__currentLoopData = json_decode($voting->body); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                    
                    <div>
                        <input class="hidden peer" type="radio" name="vote" value="<?php echo e($key); ?>" id="<?php echo e($key); ?>">
                        <label for="<?php echo e($key); ?>" class="flex flex-col items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 peer-checked:border-blue-800 peer-checked:border-2 peer-checked:shadow-xl mb-6">
                            <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://lh4.googleusercontent.com/c_c_GgS9htQeI4XL9UPbh2zeCdqdZvkFZhyD3vxjVl_7ZSlpT83vcOoVfs_awtkduIF1c3BbavyHi8fk3wbxs2qKEOa1zu0i0HWwVRVMZ92HnzUT7TCeQvRN_FHIBbvHHa_YvlVcuWbtSvxoBaXL6E7gP-kggg" alt="">
                            <div class="flex flex-col justify-between p-4 leading-normal">
                                <div class="mb-2 text-2xl font-bold tracking-tight text-gray-900 dark:text-white"><?php echo $item->title; ?></div>
                                <div class="mb-3 font-normal text-gray-700 dark:text-gray-400">
                                   <?php echo $item->description; ?>

                                </div>
                            </div>
                        </label>
                    </div>
                <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>



                

                <div class="flex justify-center">
                    <button class=" bg-slate-900 text-white px-14 rounded-full py-3">Submit</button>
                </div>

            </form>

            
            


        </div>
    </div>

    

<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ACHMAD SURYA SAPUTRA\Website Achmad Surya\voter\voter\resources\views/vote.blade.php ENDPATH**/ ?>