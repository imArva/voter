<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Voter - Dashboard</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/app-a2b04cd8.css">
    <link rel="icon" type="image/x-icon" href="/assets/img/logo-voter.png">
    
    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css','resources/js/app.js']); ?>
</head>

<body class="antialiased overflow-x-hidden">


    <nav class="fixed top-0 z-50 w-full bg-primary text-white border-b border-tertiary">
        <div class="px-3 py-3 lg:px-5 lg:pl-3">
            <div class="flex items-center justify-between">
                <div class="flex items-center justify-start">
                    <button data-drawer-target="logo-sidebar" data-drawer-toggle="logo-sidebar"
                        aria-controls="logo-sidebar" type="button"
                        class="inline-flex items-center p-2 text-sm text-gray-500 rounded-lg sm:hidden hover:bg-gray-100 focus:outline-none focus:ring-2 focus:ring-gray-200 dark:text-gray-400 dark:hover:bg-gray-700 dark:focus:ring-gray-600">
                        <span class="sr-only">Open sidebar</span>
                        <svg class="w-6 h-6" aria-hidden="true" fill="currentColor" viewBox="0 0 20 20"
                            xmlns="http://www.w3.org/2000/svg">
                            <path clip-rule="evenodd" fill-rule="evenodd"
                                d="M2 4.75A.75.75 0 012.75 4h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 4.75zm0 10.5a.75.75 0 01.75-.75h7.5a.75.75 0 010 1.5h-7.5a.75.75 0 01-.75-.75zM2 10a.75.75 0 01.75-.75h14.5a.75.75 0 010 1.5H2.75A.75.75 0 012 10z">
                            </path>
                        </svg>
                    </button>
                    <a href="/" class="flex ml-2 md:mr-24">
                        <img src="/assets/img/logo-voter.png" class="h-8 mr-3" alt="Voter Logo" />
                        <span
                            class="self-center text-xl font-semibold sm:text-2xl whitespace-nowrap dark:text-white">Voter</span>
                    </a>
                </div>
                <div class="flex items-center">
                    <div class="flex items-center mr-10">
                        <div>
                            <button type="button"
                                class="flex text-sm bg-gray-800 rounded-full focus:ring-4 focus:ring-gray-300 dark:focus:ring-gray-600"
                                aria-expanded="false" data-dropdown-toggle="dropdown-user">
                                <span class="sr-only">Open user menu</span>
                                <img class="w-8 h-8 rounded-full"
                                    src="https://flowbite.com/docs/images/people/profile-picture-5.jpg"
                                    alt="user photo">
                            </button>
                        </div>
                        <div class="z-50 hidden my-4 text-base list-none bg-tertiary divide-y divide-gray-100 rounded shadow dark:bg-gray-700 dark:divide-gray-600"
                            id="dropdown-user">
                            <div class="px-4 py-3" role="none">
                                <p class="text-sm text-gray-900 dark:text-white" role="none">
                                    <?php echo e(auth()->user()->username); ?>

                                </p>
                                <p class="text-sm font-medium text-gray-900 truncate dark:text-gray-300" role="none">
                                    <?php echo e(auth()->user()->nis); ?>

                                </p>
                            </div>
                            <ul class="py-1" role="none">
                                <li>
                                    <a href="/"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Viw Page</a>
                                </li>
                                <li>
                                    <a href="/logout"
                                        class="block px-4 py-2 text-sm text-gray-700 hover:bg-gray-100 dark:text-gray-300 dark:hover:bg-gray-600 dark:hover:text-white"
                                        role="menuitem">Log out</a>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </nav>

    <aside id="logo-sidebar"
        class="bg-primary fixed top-0 left-0 z-40 w-64 h-screen pt-20 transition-transform -translate-x-full border-t border-tertiary sm:translate-x-0"
        aria-label="Sidebar">
        <div class="h-full px-3 pb-4 overflow-y-auto bg-primary text-white">
            <ul class="space-y-2 font-medium">
                <li>
                    <a href="/dashboard"
                        class="flex items-center p-2 rounded-lg hover:text-[#23252A] group hover:bg-white transition-all">
                        <i class="fa fa-border-all fa-fw"></i>
                        <span class="ml-3">Dashboard</span>
                    </a>
                </li>
                <li>
                    <a href="/new"
                        class="flex items-center p-2 rounded-lg hover:text-[#23252A] group hover:bg-white transition-all">
                        <i class="fa fa-plus fa-fw"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">New vote link</span>
                    </a>
                </li>
                <li>
                    <a href="/mylinks"
                        class="flex items-center p-2 rounded-lg hover:text-[#23252A] group hover:bg-white transition-all">
                        <i class="fa fa-link fa-fw"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Vote links</span>
                    </a>
                </li>
                <li>
                    <a href="/result"
                        class="flex items-center p-2 rounded-lg hover:text-[#23252A] group hover:bg-white transition-all">
                        <i class="fa fa-chart-line fa-fw"></i>
                        <span class="flex-1 ml-3 whitespace-nowrap">Result</span>
                    </a>
                </li>
            </ul>
        </div>
    </aside>

    <?php echo $__env->yieldContent('content'); ?>

    <script src="/assets/js/app-422dbcc3.js"></script>
</body>

</html><?php /**PATH D:\ACHMAD SURYA SAPUTRA\Website Achmad Surya\voter\resources\views/layouts/admin.blade.php ENDPATH**/ ?>