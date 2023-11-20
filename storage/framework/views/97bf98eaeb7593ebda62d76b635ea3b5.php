<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <?php echo app('Illuminate\Foundation\Vite')('resources/css/app.css'); ?>
    <title>Voter - Web</title>
</head>

<body>
    <div class="h-screen flex justify-center md:flex md:justify-normal">
        <div
            class="relative overflow-hidden md:flex w-1/2 bg-gradient-to-tr from-primary to-secondary i justify-around items-center hidden">
            <div>
                <h1 class="text-tertiary font-bold text-4xl font-sans">VOTER</h1>
                <p class="text-tertiary mt-1">Your Voice Shapes the Future.</p>
                <a href="/"
                    class="text-center block w-28 bg-tertiary text-primary mt-4 py-2 rounded-full font-bold mb-2">Home</a>
            </div>
            <div class="absolute -bottom-32 -left-40 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8">
            </div>
            <div class="absolute -bottom-40 -left-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8">
            </div>
            <div class="absolute -top-40 -right-0 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
            <div class="absolute -top-20 -right-20 w-80 h-80 border-4 rounded-full border-opacity-30 border-t-8"></div>
        </div>
        <div class="flex md:w-1/2 justify-center py-10 items-center bg-white">
            <form method="POST" action="/login" class="bg-tertiary shadow-2xl p-16 rounded-lg">
                <?php echo csrf_field(); ?>
                <h1 class="text-primary font-bold text-2xl mb-1 text-center md:text-left">Hello Voters!</h1>
                <p class="text-sm font-normal text-gray-600 mb-7 text-center md:text-left">Welcome Back</p>
                <input class=" flex items-center border-1.5 border-gray-300 rounded-2xl p-3.5 w-full mb-4"
                    type="email" name="email" id="" placeholder="Email" />
                <input class=" flex items-center border-1.5 border-gray-300 rounded-2xl p-3.5 w-full" type="password"
                    name="password" id="" placeholder="Password" />
                <button type="submit"
                    class="block w-full bg-primary mt-4 py-2 rounded-2xl text-white font-semibold mb-2">Login</button>
            </form>
        </div>
    </div>
</body>

</html>
<?php /**PATH D:\ACHMAD SURYA SAPUTRA\Website Achmad Surya\voter\voter\resources\views/login.blade.php ENDPATH**/ ?>