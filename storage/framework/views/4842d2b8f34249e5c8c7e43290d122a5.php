

<?php $__env->startSection('content'); ?>

 <!-- Start profile Card -->

 <div class="p-4 sm:ml-64">
    <div class="p-4 mt-14">
        <div class="grid grid-cols-1 md:grid-cols-3">
            <!-- card 1 -->
                <div class="p-4 max-w-sm">
                    <a href="/new">
                    <div class="flex rounded-3xl h-auto bg-purple-600 p-8 flex-col">
                        <div class="flex items-center mb-3">
                            <div
                                class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-white text-purple-600 flex-shrink-0">
                                <i class="fa fa-plus fa-fw"></i>
                            </div>
                            <h2 class="text-white dark:text-white text-lg font-medium">New Vote Link</h2>
                        </div>
                        <div class="flex flex-col justify-between flex-grow">
                            <div class="mt-3 text-white inline-flex items-center">View page
                                <i class="fa fa-arrow-right fa-fw px-2"></i>
                            </div>
                        </div>
                    </div>
                    </a>
                </div>
        
            <!-- card 2 -->
            <div class="p-4 max-w-sm">
                <a href="/mylinks">
                <div class="flex rounded-3xl h-auto bg-blue-500 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div
                            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-white text-blue-500 flex-shrink-0">
                            <i class="fa fa-link fa-fw"></i>
                        </div>
                        <h2 class="text-white dark:text-white text-lg font-medium">Vote Link</h2>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <div class="mt-3 text-white inline-flex items-center">View page
                            <i class="fa fa-arrow-right fa-fw px-2"></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        
            <!-- card 3 -->
            <div class="p-4 max-w-sm">
                <a href="/result">
                <div class="flex rounded-3xl h-auto bg-blue-900 p-8 flex-col">
                    <div class="flex items-center mb-3">
                        <div
                            class="w-8 h-8 mr-3 inline-flex items-center justify-center rounded-full bg-white text-blue-900 flex-shrink-0">
                            <i class="fa fa-chart-line fa-fw"></i>
                        </div>
                        <h2 class="text-white dark:text-white text-lg font-medium">Result</h2>
                    </div>
                    <div class="flex flex-col justify-between flex-grow">
                        <div class="mt-3 text-white inline-flex items-center">View page
                            <i class="fa fa-arrow-right fa-fw px-2"></i>
                        </div>
                    </div>
                </div>
                </a>
            </div>
        </div>
    </div>
 </div>
<!-- End profile Card -->


    
    
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ACHMAD SURYA SAPUTRA\Website Achmad Surya\voter\resources\views/dashboard.blade.php ENDPATH**/ ?>