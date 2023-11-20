

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
                    URL
                </th>
                <th scope="col" class="px-6 py-3">
                    action
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
                    <a href="/voting/<?php echo e($voting->slug); ?>" class="hover:underline">www.voter.com/voting/<?php echo e($voting->slug); ?></a>
                </td>
                <td class="px-6 py-4 text-xl">
                    <a href="/edit/<?php echo e($voting->slug); ?>" class="font-medium text-blue-500 hover:underline"><i class="fa fa-pen-square fa-fw pr-5"></i></a>
                    <button onclick="editUrl('<?php echo e(Crypt::encryptString($voting->id)); ?>', '<?php echo e($voting->slug); ?>')" class="font-medium text-white hover:underline"><i class="fa fa-link fa-fw"></i></button>
                    <a href="/delete/<?php echo e($voting->slug); ?>" class="font-medium text-red-500 hover:underline"><i class="fa fa-trash fa-fw"></i></a>  
                </td>
            </tr>
            <?php endforeach; $__env->popLoop(); $loop = $__env->getLastLoop(); ?>
            
        </tbody>
    </table>
</div>


            
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <?php if(session('deleted')): ?>
        <script>
            Swal.fire({
                title: 'Success',
                text: 'Success deleting data',
                icon: 'success'
            });
        </script>
    <?php endif; ?>
    <script>
        function editUrl(voteId, defval) {
            console.log(voteId);
            Swal.fire({
                title: "Edit URL",
                input: "text",
                inputValue: defval, // Set your default value here
                inputAttributes: {
                    autocapitalize: "off",
                    autocomplete: "off" // Disable autocomplete
                },
                showCancelButton: true,
                confirmButtonText: "Edit",
                showLoaderOnConfirm: true,
                preConfirm: (newUrl) => {
                        // Menggunakan Ajax untuk mengirim data ke server
                        fetch('/api/editurl', {
                            method: 'POST',
                            headers: {
                                'Content-Type': 'application/json',
                            },
                            body: JSON.stringify({
                                votingId: voteId,
                                newUrl: newUrl
                            }),
                        })
                        .then(response => {
                            if (!response.ok) {
                                throw new Error(response.statusText);
                            }
                            return response.json();
                        })
                        .catch(error => {
                            Swal.showValidationMessage(
                                `Request failed: ${error}`
                            );
                        });
                    },
                    allowOutsideClick: () => !Swal.isLoading(),
                })
                .then((result) => {
                    // Handle the result as needed
                    if (result.value) {
                        Swal.fire({
                            title: 'Success',
                            text: 'URL edited successfully',
                            icon: 'success'
                        });

                        setTimeout(function() {
                            location.reload();
                        }, 500);
                    }
            });
        }
    </script>
<?php $__env->stopSection(); ?>
<?php echo $__env->make('layouts.admin', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH C:\Users\revan\OneDrive\Documents\voter\voter\resources\views/mylinks.blade.php ENDPATH**/ ?>