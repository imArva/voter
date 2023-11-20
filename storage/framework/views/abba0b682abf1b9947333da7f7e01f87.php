

<?php $__env->startSection('listvote'); ?>
<div class="relative overflow-x-auto shadow-md sm:rounded-lg m-8 h-screen">
    <table class="w-full text-sm text-left text-white">
        <thead class="text-xs bg-primary uppercase dark:text-gray-400">
            <tr>
                <th scope="col" class="px-6 py-3">
                    Title
                </th>
                <th scope="col" class="px-6 py-3">
                    URL
                </th>
            </tr>
        </thead>
        <tbody>
            <tr class="bg-primary border-b">
                <td scope="row" class="px-6 py-4 font-medium whitespace-nowrap">
                    <ul>
                        <li>
                            <a href="">Example Title Vote</a>
                        </li>
                        <li>
                            <a href="">Example Title Vote</a>
                        </li>
                        <li>
                            <a href="">Example Title Vote</a>
                        </li>
                        <li>
                            <a href="">Example Title Vote</a>
                        </li>
                        <li>
                            <a href="">Example Title Vote</a>
                        </li>
                    </ul>
                </td>
                <td class="px-6 py-4">
                    <ul>
                        <li>
                            <a href="">Example Link Vote</a>
                        </li>
                        <li>
                            <a href="">Example Link Vote</a>
                        </li>
                        <li>
                            <a href="">Example Link Vote</a>
                        </li>
                        <li>
                            <a href="">Example Link Vote</a>
                        </li>
                        <li>
                            <a href="">Example Link Vote</a>
                        </li>
                    </ul>
                </td>
            </tr> 
        </tbody>
    </table>
</div>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ACHMAD SURYA SAPUTRA\Website Achmad Surya\voter\voter\resources\views/listvote.blade.php ENDPATH**/ ?>