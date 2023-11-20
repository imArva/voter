

<?php $__env->startSection('content'); ?>

    <link href="/assets/css/quill.snow.css" rel="stylesheet">
    <script src="/assets/js/quill.js"></script>
    <div class="sm:py-8 sm:ml-64">
        <div class="flex items-center justify-center  mt-14">
            
            
            <input id="voting-id" type="hidden" value="<?php echo e(Crypt::encryptString($voting->id)); ?>">
            <!-- main card -->
            <div class="bg-[#F4F5FA] p-10 rounded-xl lg:w-2/3">
                <!-- headers content-->
                <div class="flex flex-col justify-center items-center text-center">
                    <div class="group w-full">
                        <div id="title" contenteditable="true" class="w-full text-center border-b-2 focus:border-b-secondary focus:outline-none">
                            <h1 class="ql-align-center"><?php echo $voting->title; ?></h1>
                        </div>
                        <div id="title-toolbar" class="w-full border-none group-focus-within:block hidden"> 
    
                            <button class="ql-bold"></button>
                            <button class="ql-italic"></button>
                            <button class="ql-underline"></button>
                            <button class="ql-link"></button>
                            <select class="ql-align">
                                <option selected=""></option>
                                <option value="center"></option>
                                <option value="right"></option>
                                <option value="justify"></option>
                            </select>
                            
                            
                          
                        </div>
                    </div>
                    
                    <div class="group w-full">

                        <div id="description" contenteditable="true" class="w-full border-b-2 focus:border-b-secondary focus:outline-none ease-in-out">
                            <?php echo $voting->description; ?>

                        </div>
                        <div id="desc-toolbar" class="w-full border-none group-focus-within:block hidden"> 

                            <button class="ql-bold"></button>
                            <button class="ql-italic"></button>
                            <button class="ql-underline"></button>
                            <button class="ql-link"></button>
                            <select class="ql-align">
                                <option selected=""></option>
                                <option value="center"></option>
                                <option value="right"></option>
                                <option value="justify"></option>
                            </select>
                            <button class="ql-list" value="ordered" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line> <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line> <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path> <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path> <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path> </svg></button>
                            <button class="ql-list" value="bullet" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line> <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line> </svg></button>
                            
                          
                        </div>

                    </div>
                </div>


                <div class="pt-6">

                    
                    <div id="cardss">
                        <?php
                            $cid = 1;
                        ?>
                        <?php if($voting->body != null): ?>
                            
                            <?php $__currentLoopData = json_decode($voting->body); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                            
                                <label for="" class="cards flex flex-col w-full items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-6">
                                    <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://lh4.googleusercontent.com/c_c_GgS9htQeI4XL9UPbh2zeCdqdZvkFZhyD3vxjVl_7ZSlpT83vcOoVfs_awtkduIF1c3BbavyHi8fk3wbxs2qKEOa1zu0i0HWwVRVMZ92HnzUT7TCeQvRN_FHIBbvHHa_YvlVcuWbtSvxoBaXL6E7gP-kggg" alt="">
                                    <div class="flex flex-col justify-between p-4 w-full leading-normal">
                                        <div class="w-full group">
            
                                            <div id="t-<?php echo e($key); ?>" contenteditable="true" contenteditable="true" class="no-p w-full max-w-full text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-2 border-b-2 focus:border-b-secondary focus:outline-none">
                                                <?php echo $item->title; ?>

                                            </div>
                                            <div id="t-t-<?php echo e($key); ?>" class="w-full border-none group-focus-within:block hidden "> 
                
                                                <button class="ql-underline"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-link"></button>
                                                <select class="ql-align">
                                                    <option selected=""></option>
                                                    <option value="center"></option>
                                                    <option value="right"></option>
                                                    <option value="justify"></option>
                                                </select>
                                                
                                                
                                              
                                            </div>
                                        </div>
                                        <div class="w-full group">
                                            <div id="d-<?php echo e($key); ?>" contenteditable="true" class="no-p mb-3 w-full min-w-full max-w-full text-gray-700 border-b-2 focus:border-b-secondary focus:outline-none">
                                                <?php echo $item->description; ?>

                                                
                                            </div>
                                            <div id="d-t-<?php echo e($key); ?>" class="w-full border-none group-focus-within:block hidden"> 
            
                                                <button class="ql-bold"></button>
                                                <button class="ql-italic"></button>
                                                <button class="ql-underline"></button>
                                                <button class="ql-link"></button>
                                                <select class="ql-align">
                                                    <option selected=""></option>
                                                    <option value="center"></option>
                                                    <option value="right"></option>
                                                    <option value="justify"></option>
                                                </select>
                                                <button class="ql-list" value="ordered" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line> <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line> <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path> <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path> <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path> </svg></button>
                                                <button class="ql-list" value="bullet" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line> <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line> </svg></button>
                                                
                                              
                                            </div>
                                        </div>
                                        <script>
                                            new Quill(`#t-<?php echo e($key); ?>`, {
                                             theme: 'snow',
                                             placeholder: 'Add description',
                                             modules: {
                                                 toolbar: {
                                                     container: `#t-t-<?php echo e($key); ?>`,
                                                 }
                                             }
                                           });
                                           new Quill(`#d-<?php echo e($key); ?>`, {
                                             theme: 'snow',
                                             placeholder: 'Add description',
                                             modules: {
                                                 toolbar: {
                                                     container: `#d-t-<?php echo e($key); ?>`,
                                                 }
                                             }
                                           });
                                       </script>
                                        
                                    </div>

                                    
                                </label>

                                <?php
                                    $cid = $key;
                                ?>
                            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                        
                        <?php else: ?>

                            <label for="" class="cards flex flex-col w-full items-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-6">
                                <img class="object-cover w-full rounded-t-lg h-96 md:h-auto md:w-48 md:rounded-none md:rounded-l-lg" src="https://lh4.googleusercontent.com/c_c_GgS9htQeI4XL9UPbh2zeCdqdZvkFZhyD3vxjVl_7ZSlpT83vcOoVfs_awtkduIF1c3BbavyHi8fk3wbxs2qKEOa1zu0i0HWwVRVMZ92HnzUT7TCeQvRN_FHIBbvHHa_YvlVcuWbtSvxoBaXL6E7gP-kggg" alt="">
                                <div class="flex flex-col justify-between p-4 w-full leading-normal">
                                    <div class="w-full group">
        
                                        <div id="t-1" contenteditable="true" contenteditable="true" class="no-p w-full max-w-full text-2xl font-bold tracking-tight text-gray-900 dark:text-white mb-2 border-b-2 focus:border-b-secondary focus:outline-none">
                                            <h1>This is title</h1>
                                        </div>
                                        <div id="t-t-1" class="w-full border-none group-focus-within:block hidden "> 
            
                                            <button class="ql-underline"></button>
                                            <button class="ql-italic"></button>
                                            <button class="ql-link"></button>
                                            <select class="ql-align">
                                                <option selected=""></option>
                                                <option value="center"></option>
                                                <option value="right"></option>
                                                <option value="justify"></option>
                                            </select>
                                            
                                            
                                          
                                        </div>
                                    </div>
                                    <div class="w-full group">
                                        <div id="d-1" contenteditable="true" class="no-p mb-3 w-full min-w-full max-w-full text-gray-700 border-b-2 focus:border-b-secondary focus:outline-none">
                                            <p>This is Description</p>
                                            
                                        </div>
                                        <div id="d-t-1" class="w-full border-none group-focus-within:block hidden"> 
        
                                            <button class="ql-bold"></button>
                                            <button class="ql-italic"></button>
                                            <button class="ql-underline"></button>
                                            <button class="ql-link"></button>
                                            <select class="ql-align">
                                                <option selected=""></option>
                                                <option value="center"></option>
                                                <option value="right"></option>
                                                <option value="justify"></option>
                                            </select>
                                            <button class="ql-list" value="ordered" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="7" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="7" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="7" x2="15" y1="14" y2="14"></line> <line class="ql-stroke ql-thin" x1="2.5" x2="4.5" y1="5.5" y2="5.5"></line> <path class="ql-fill" d="M3.5,6A0.5,0.5,0,0,1,3,5.5V3.085l-0.276.138A0.5,0.5,0,0,1,2.053,3c-0.124-.247-0.023-0.324.224-0.447l1-.5A0.5,0.5,0,0,1,4,2.5v3A0.5,0.5,0,0,1,3.5,6Z"></path> <path class="ql-stroke ql-thin" d="M4.5,10.5h-2c0-.234,1.85-1.076,1.85-2.234A0.959,0.959,0,0,0,2.5,8.156"></path> <path class="ql-stroke ql-thin" d="M2.5,14.846a0.959,0.959,0,0,0,1.85-.109A0.7,0.7,0,0,0,3.75,14a0.688,0.688,0,0,0,.6-0.736,0.959,0.959,0,0,0-1.85-.109"></path> </svg></button>
                                            <button class="ql-list" value="bullet" type="button"><svg viewBox="0 0 18 18"> <line class="ql-stroke" x1="6" x2="15" y1="4" y2="4"></line> <line class="ql-stroke" x1="6" x2="15" y1="9" y2="9"></line> <line class="ql-stroke" x1="6" x2="15" y1="14" y2="14"></line> <line class="ql-stroke" x1="3" x2="3" y1="4" y2="4"></line> <line class="ql-stroke" x1="3" x2="3" y1="9" y2="9"></line> <line class="ql-stroke" x1="3" x2="3" y1="14" y2="14"></line> </svg></button>
                                            
                                          
                                        </div>
                                    </div>
                                </div>
                                <script>
                                  let quill_t_1 = new Quill('#t-1', {
                                    theme: 'snow',
                                    placeholder: 'Add description',
                                    modules: {
                                        toolbar: {
                                            container: '#t-t-1',
                                        }
                                    }
                                  });
                                  let quill_d_1 = new Quill('#d-1', {
                                    theme: 'snow',
                                    placeholder: 'Add description',
                                    modules: {
                                        toolbar: {
                                            container: '#d-t-1',
                                        }
                                    }
                                  });
                                </script>
                               
                            </label>

                        
                        <?php endif; ?>
                    </div>

                    <div id="add-card" class="hover:cursor-pointer flex flex-col items-center justify-center bg-white border border-gray-200 rounded-lg shadow md:flex-row md:max-w-xl hover:bg-gray-100 dark:border-gray-700 dark:bg-gray-800 dark:hover:bg-gray-700 mb-6">
                        
                        <div class="flex justify-between items-center p-4 leading-normal">
                            <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
                                <path stroke-linecap="round" stroke-linejoin="round" d="M12 4.5v15m7.5-7.5h-15" />
                            </svg>  
                        </div>
                    </div>

                   
                </div>
                <div id="savelink" class="flex justify-center">
                    <button id="saveLinkBtn" class=" bg-slate-900 text-white px-14 rounded-full py-3">Save</button>
                </div>
            </div>
        </div>
    </div>

    <style>
        .no-p .ql-editor{
            padding: 0px !important;
            max-width: 95% !important; /* Adjust the value to your desired maximum width */
            width: 95% !important;
        }
    </style>

    <script>
        window.data = <?php echo json_encode([
            'cid' => $cid
        ]); ?>

    </script>

    

    <?php echo app('Illuminate\Foundation\Vite')(['resources/js/editlink.js']); ?>;
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ACHMAD SURYA SAPUTRA\Website Achmad Surya\voter\voter\resources\views/editlink.blade.php ENDPATH**/ ?>