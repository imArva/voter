

<?php $__env->startSection('content'); ?>
    <div class="items-center justify-center flex-col bg-white min-h-screen sm:p-5">
        <div class="bg-primary p-5 sm:p-10">
            <div class="flex flex-col justify-center items-center text-center text-white">
                <div class="max-w-sm font-bold font-sans text-3xl">
                    <?php echo $voting->title; ?>

                </div>
                <div class="max-w-lg mt-5 text-xl">
                    <?php echo $voting->description; ?>

                </div>
            </div>

            <form action="" class="pt-6">
                <div class="grid grid-cols-1 md:grid-cols-3 gap-5">
                    <?php $__currentLoopData = json_decode($voting->body); $__env->addLoop($__currentLoopData); foreach($__currentLoopData as $key => $item): $__env->incrementLoopIndices(); $loop = $__env->getLastLoop(); ?>
                        <div class="my-10">
                            <label
                                class="grid peer-checked:scale-105 peer-checked:shadow-xl mb-6">
                                <img class="object-cover justify-center w-full h-96 md:h-auto md:max-w-xl hover:cursor-pointer"
                                    src="/assets/img/kandidat-1.jpg" alt="">

                                <div class="item px-6 mt-6 mb-2 bg-white" x-data="{ isOpen: false }">
                                    <a href="#" class="flex items-center justify-between text-primary py-2"
                                        @click.prevent="isOpen = true">
                                        <h4 :class="{ 'text-primary font-medium': isOpen == true }">Visi & Misi</h4>
                                        <svg :class="{ 'transform rotate-180': isOpen == true }"
                                            class="w-5 h-5 text-primary" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </a>
                                    <div x-show="isOpen" @click.away="isOpen = false" class="my-3"
                                        :class="{ 'text-primary': isOpen == true }">
                                        <p class="flex text-center">
                                            <?php echo $item->description; ?>

                                        </p>
                                    </div>
                                </div>
                                
                            </label>
                            <div class="grid-cols-none flex justify-center">
                                <button class=" bg-white text-primary font-bold px-14 rounded-full py-3">VOTE</button>
                            </div>
                        </div>
                    <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
                </div>                
            </form>
        </div>
    </div>

    <div id="alpine-devtools" x-data="devtools()" x-show="alpines.length" x-init="start()">

        <script>
            function scrollHandler(element = null) {
                return {
                    height: 0,
                    element: element,
                    calculateHeight(position) {
                        const distanceFromTop = this.element.offsetTop
                        const contentHeight = this.element.clientHeight
                        const visibleContent = contentHeight - window.innerHeight
                        const start = Math.max(0, position - distanceFromTop)
                        const percent = (start / visibleContent) * 100;
                        requestAnimationFrame(() => {
                            this.height = percent;
                        });
                    },
                    init() {
                        this.element = this.element || document.body;
                        this.calculateHeight(window.scrollY);
                    }
                };
            }
        </script>

        <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
    <?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ACHMAD SURYA SAPUTRA\Website Achmad Surya\voter\resources\views/vote.blade.php ENDPATH**/ ?>