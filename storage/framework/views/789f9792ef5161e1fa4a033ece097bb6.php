

<?php $__env->startSection('content'); ?>
    <div class="p-4 sm:ml-64">
        <div class="p-4 mt-14">
            <section class="max-w-4xl p-6 mx-auto bg-primary rounded-md shadow-md">
                <h1 class="text-xl font-bold text-white capitalize dark:text-white">New Vote Link</h1>
                <form method="POST" action="/newlink">
                    <?php echo csrf_field(); ?>
                    <div class="grid grid-cols-1 gap-6 mt-4">
                        <div>
                            <label class="text-white dark:text-gray-200" for="username">Judul vote</label>
                            <input id="title" type="text" placeholder="Judul vote kamu" name="title"
                                class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" required autocomplete="off">
                        </div>
                        <div>
                            
                            <label for="slug" class="block mb-2 text-sm font-medium text-white dark:text-white">Custom URL</label>
                            <input type="text" id="slug" name="slug" aria-describedby="helper-text-explanation" class="block w-full px-4 py-2 mt-2 text-gray-700 bg-white border border-gray-300 rounded-md dark:bg-gray-800 dark:text-gray-300 dark:border-gray-600 focus:border-blue-500 dark:focus:border-blue-500 focus:outline-none focus:ring" placeholder="Your Custom URL" required autocomplete="off">
                            <p id="helper-text-explanation" class="mt-2 text-sm text-white">www.voter.com/<span id="url"></span></p>

                        </div>
                    </div>
                    <div class="flex justify-end mt-6">
                        <button
                            class="px-6 py-2 leading-5 text-white transition-colors duration-200 transform border border-white rounded-md hover:bg-white hover:text-primary focus:outline-none">Create</button>
                    </div>
                </form>
            </section>
        </div>
    </div>

    <script>
        let url = document.getElementById('url');
        let slug = document.getElementById('slug');
        let title = document.getElementById('title');

        slug.addEventListener('input', () => {
            let text = slug.value;
            text = text.replace(/ /g, '-')
            url.innerHTML = text.toLowerCase();
        });

        title.addEventListener('keyup', () => {
            let text = title.value;
            text = text.replace(/ /g, '-')
            slug.value = text.toLowerCase();
            url.innerHTML = text.toLowerCase();
        });
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\revan\OneDrive\Documents\voter\voter\resources\views/newlink.blade.php ENDPATH**/ ?>