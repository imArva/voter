

<?php $__env->startSection('faq'); ?>
    <section class="bg-tertiary">
        <div class="container max-w-4xl px-6 py-10 mx-auto">
                <div class="p-2 rounded">
                    <div class="flex flex-col md:flex-row">
                        <div class="md:w-1/3 p-4 text-sm">

                            <div class="sticky inset-x-0 top-0 left-0">

                                <div class="text-3xl text-pr mb-8">Frequently asked questions.</div>
                                <div class="text-xs text-gray-600">See our FAQ for more details</div>

                            </div>
                        </div>
                        <div class="md:w-2/3">
                                <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                    <a href="#" class="flex items-center justify-between"
                                        @click.prevent="isOpen = true">
                                        <h4 :class="{ 'text-primary font-medium': isOpen == true }">Lorem Ipsum ?</h4>
                                        <svg :class="{ 'transform rotate-180': isOpen == true }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </a>
                                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                        :class="{ 'text-gray-600': isOpen == true }">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>

                                <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                    <a href="#" class="flex items-center justify-between"
                                        @click.prevent="isOpen = true">
                                        <h4 :class="{ 'text-primary font-medium': isOpen == true }">Lorem Ipsum ?</h4>
                                        <svg :class="{ 'transform rotate-180': isOpen == true }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </a>
                                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                        :class="{ 'text-gray-600': isOpen == true }">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>

                                <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                    <a href="#" class="flex items-center justify-between"
                                        @click.prevent="isOpen = true">
                                        <h4 :class="{ 'text-primary font-medium': isOpen == true }">Lorem Ipsum ?</h4>
                                        <svg :class="{ 'transform rotate-180': isOpen == true }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </a>
                                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                        :class="{ 'text-gray-600': isOpen == true }">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>

                                <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                    <a href="#" class="flex items-center justify-between"
                                        @click.prevent="isOpen = true">
                                        <h4 :class="{ 'text-primary font-medium': isOpen == true }">Lorem Ipsum ?</h4>
                                        <svg :class="{ 'transform rotate-180': isOpen == true }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </a>
                                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                        :class="{ 'text-gray-600': isOpen == true }">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>

                                <div class="item px-6 py-6" x-data="{ isOpen: false }">
                                    <a href="#" class="flex items-center justify-between"
                                        @click.prevent="isOpen = true">
                                        <h4 :class="{ 'text-primary font-medium': isOpen == true }">Lorem Ipsum ?</h4>
                                        <svg :class="{ 'transform rotate-180': isOpen == true }"
                                            class="w-5 h-5 text-gray-500" fill="none" stroke-linecap="round"
                                            stroke-linejoin="round" stroke-width="2" viewBox="0 0 24 24"
                                            stroke="currentColor">
                                            <path d="M19 9l-7 7-7-7"></path>
                                        </svg>
                                    </a>
                                    <div x-show="isOpen" @click.away="isOpen = false" class="mt-3"
                                        :class="{ 'text-gray-600': isOpen == true }">
                                        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor
                                            incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis
                                            nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat.
                                            Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu
                                            fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in
                                            culpa qui officia deserunt mollit anim id est laborum.</p>
                                    </div>
                                </div>

                        </div>
                    </div>
                </div>

            <div x-data="scrollHandler(document.getElementById('the-article'))" x-cloak aria-hidden="true" @scroll.window="calculateHeight(window.scrollY)"
                class="fixed h-screen w-1 hover:bg-gray-200 top-0 left-0 bg-gray-300">
                <div :style="`max-height:${height}%`" class="h-full bg-primary"></div>
            </div>

            <div id="alpine-devtools" x-data="devtools()" x-show="alpines.length" x-init="start()">
            </div>
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
        </div>
    </section>

    <script src="https://cdn.jsdelivr.net/gh/alpinejs/alpine@v2.x.x/dist/alpine.js" defer></script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ACHMAD SURYA SAPUTRA\Website Achmad Surya\voter\voter\resources\views/faq.blade.php ENDPATH**/ ?>