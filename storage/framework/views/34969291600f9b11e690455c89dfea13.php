<!DOCTYPE html>
<html lang="<?php echo e(str_replace('_', '-', app()->getLocale())); ?>">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Voter | Web</title>
    <link rel="preconnect" href="https://fonts.bunny.net">
    <link href="https://fonts.bunny.net/css?family=figtree:400,600&display=swap" rel="stylesheet" />
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="/assets/css/app-ceab0512.css">
    <link rel="icon" type="image/x-icon" href="/assets/img/logo-voter.png">

    <?php echo app('Illuminate\Foundation\Vite')(['resources/css/app.css', 'resources/js/app.js']); ?>
</head>

<body class="antialiased overflow-x-hidden">

    <nav class="bg-primary w-full z-20 top-0 left-0 text-tertiary">
        <div class="max-w-screen-xl flex flex-wrap items-center justify-between mx-auto p-4">
            <a href="/" class="flex items-center">
                <img src="/assets/img/logo-voter.png" class="h-8 mr-3" alt="Voter Logo" loading="eager">
                <span class="self-center text-tertiary text-2xl font-extrabold whitespace-nowrap text">VOTER</span>
            </a>
            <div class="flex md:order-2">
                <?php if(auth()->guard()->check()): ?>
                    <button id="dropdownDefaultButton" data-dropdown-toggle="dropdown"
                        class="text-tertiary font-medium rounded-lg text-sm px-5 py-2 text-center inline-flex items-center"
                        type="button">
                        <p class="pr-2">PROFILE</p><i class="fa fa-chevron-down"></i>
                    </button>
                    <div id="dropdown" class="z-10 hidden bg-white rounded-lg shadow w-44">
                        <ul class="py-2 text-sm" aria-labelledby="dropdownDefaultButton">
                            <li>
                                <p class="text-secondary font-medium px-3 py-2 text-center"><?php echo e(Auth::user()->username); ?></p>
                                <?php if(auth()->user()->isAdmin): ?>
                                    <a href="/dashboard"
                                        class="block px-4 py-2 text-secondary hover:underline font-medium text-sm text-center mr-3 md:mr-0">Dashboard</a>
                                <?php endif; ?>
                                <?php if(auth()->user()): ?>
                                    <a href="/logout"
                                        class="block mx-2 py-2 bg-primary text-white rounded-lg font-medium text-sm text-center ">Logout</a>
                                <?php endif; ?>
                            </li>
                        </ul>
                    </div>
                <?php else: ?>
                    <a href="/login"
                        class="flex text-secondary bg-tertiary hover:text-primary font-medium rounded-full text-sm px-4 py-2 items-center mr-3 md:mr-0">Login
                        Now</a>
                <?php endif; ?>
                <button data-collapse-toggle="navbar-sticky" type="button"
                    class="inline-flex items-center p-2 w-10 h-10 justify-center text-sm text-gray-500 rounded-lg md:hidden"
                    aria-controls="navbar-sticky" aria-expanded="false">
                    <span class="sr-only">Open main menu</span>
                    <svg class="w-5 h-5 text-tertiary hover:bg-primary rounded-l-full" aria-hidden="true"
                        xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 17 14">
                        <path stroke="currentColor" stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                            d="M1 1h15M1 7h15M1 13h15" />
                    </svg>
                </button>
            </div>
            <div class="items-center justify-between hidden w-full md:flex md:w-auto md:order-1" id="navbar-sticky">
                <ul
                    class="flex flex-col p-4 md:p-0 mt-4 font-medium border rounded-lg bg-tertiary text-secondary md:text-tertiary md:bg-primary md:flex-row md:space-x-8 md:mt-0 md:border-0">
                    <li>
                        <a href="/"
                            class="block py-2 pl-3 pr-4 rounded md:bg-transparen md:p-0 hover:underline mb-2"
                            aria-current="page">Home</a>
                    </li>
                    <?php if(auth()->guard()->check()): ?>
                        <li>
                            <a href="/listvote" class="block py-2 pl-3 pr-4 rounded hover:underline md:p-0 mb-2">Vote</a>
                        </li>
                    <?php endif; ?>
                    <li>
                        <a href="/faq" class="block py-2 pl-3 pr-4 rounded hover:underline md:p-0 mb-2">FAQ</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <?php echo $__env->yieldContent('content'); ?>
    <?php echo $__env->yieldContent('listvote'); ?>
    <?php echo $__env->yieldContent('faq'); ?>

    <footer class="bg-primary text-tertiary">
        <div class="mx-auto w-full max-w-screen-xl p-4 py-6 lg:py-8">
            <div class="md:flex md:justify-between">
                <div class="mb-6 md:mb-0">
                    <a href="/" class="flex items-center">
                        <img src="/assets/img/logo-voter.png" class="h-8 mr-3" alt="FlowBite Logo" />
                        <span class="self-center text-2xl font-semibold whitespace-nowrap">Voter</span>
                    </a>
                </div>
                <div class="grid grid-cols-2 gap-8 sm:gap-6 sm:grid-cols-3">
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-[#5865F2]">Resources</h2>
                        <ul class="font-medium">
                            <li class="mb-4">
                                <a href="mailto:help.voterweb@gmail.com" class="hover:underline">Support</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-[#5865F2]">Follow us</h2>
                        <ul class="font-medium">
                            <li>
                                <a href="https://www.instagram.com/smkn65jakarta.official/" class="hover:underline"
                                    target="_blank">smkn65jakarta.official</a>
                            </li>
                            <li>
                                <a href="https://www.instagram.com/osismpk65jakarta/" class="hover:underline"
                                    target="_blank">osismpk65jakarta</a>
                            </li>
                        </ul>
                    </div>
                    <div>
                        <h2 class="mb-6 text-sm font-semibold uppercase text-[#5865F2]">Legal</h2>
                        <ul class="font-medium">
                            <li>
                                <a href="#" class="hover:underline">Privacy Policy</a>
                            </li>
                            <li>
                                <a href="#" class="hover:underline">Terms &amp; Conditions</a>
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <hr class="my-6 border-tertiary sm:mx-auto lg:my-8" />
            <div class="sm:flex sm:items-center sm:justify-between">
                <span class="text-sm sm:text-center">© 2023 <a href="https://linktr.ee/team_voter65" class="hover:underline" target="_blank">Voter</a>.
                    All Rights Reserved.
                </span>
            </div>
        </div>
    </footer>

    <script src="/assets/js/app-422dbcc3.js"></script>
</body>

</html>
<?php /**PATH C:\Users\revan\OneDrive\Documents\voter\voter\resources\views/layouts/user.blade.php ENDPATH**/ ?>