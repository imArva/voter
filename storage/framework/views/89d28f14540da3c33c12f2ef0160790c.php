<?php $__env->startSection('content'); ?>
    <section class="bg-primary">
        <div class="py-8 px-4 mx-auto max-w-screen-xl text-center lg:py-16">
            <h1 class="mb-4 text-4xl font-extrabold tracking-tight leading-none text-tertiary md:text-5xl lg:text-6xl">
                WELCOME TO VOTER</h1>
            <p class="mb-8 text-lg font-normal text-tertiary lg:text-xl sm:px-16 lg:px-48">The Right Choice To Choose
            <div class="flex flex-col space-y-4 sm:flex-row sm:justify-center sm:space-y-0 sm:space-x-4">
                <?php if(auth()->guard()->check()): ?>
                  <?php if(auth()->user()): ?>
                  <a href="/listvote"
                  class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-primary rounded-full bg-tertiary">
                  Vote Now
              </a>
                  <?php endif; ?>
                  <?php else: ?>
                  <a href="/login"
                  class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-primary rounded-full bg-tertiary">
                  Get started
              </a>
                <?php endif; ?>
                <a href="#"
                    class="inline-flex justify-center items-center py-3 px-5 text-base font-medium text-center text-tertiary bg-primary hover:text-primary hover:bg-tertiary rounded-full">
                    Learn more
                </a>
            </div>
        </div>
    </section>

    <div class="bg-tertiary">
      <div class="border-2 border-primary md:bg-primary m-10 md:rounded-3xl rounded-none border-none bg-none">
        <div class="md:flex py-10">
            <div data-aos="fade-up" class="w-full md:w-1/2 p-14 flex justify-center">
                <img class="h-auto max-w-full hidden md:block" src="/assets/img/logo-voter.png" alt="image description">
                <img class="h-auto max-w-full md:hidden" src="/assets/img/logo-voter2.png" alt="image description">
            </div>
            <div data-aos="fade-up" class="w-full md:w-1/2 md:p-10 p-0">
                <h1 class="text-5xl font-bold mb-5 text-primary md:text-tertiary">Why Choose Voter?</h1>
                <p class="text-xl text-primary md:text-tertiary text-justify">Choose Voter for an accessible and secure voting experience. We prioritize the privacy and security of your votes, making participation easy and trustworthy.
                  We value your privacy rights and are committed to safeguarding the confidentiality of every vote you cast. Using state-of-the-art technology, we ensure that your personal information remains protected and free from misuse.
                </p>
            </div>
        </div></div>

        <div class="bg-primary p-10">
            <h1 data-aos="fade-up"
                class="mb-6 text-4xl font-extrabold leading-none tracking-tight text-tertiary md:text-5xl lg:text-6xl text-center">
                THE RIGHT CHOICE TO CHOOSE</h1>
            <p data-aos="fade-up" class="text-lg font-normal text-gray-500 lg:text-xl sm:px-16 xl:px-48 text-center">
                motto that we uphold in every aspect of our service. We are determined to provide a variety of quality and
                useful options to our customers.
            </p>

            <div data-aos="fade-up" class="md:px-80">

                <img class="h-auto w-full" src="assets/img/vote-image.png" alt="image description">

            </div>

        </div>

        <div data-aos="fade-up" class="flex flex-col flex-wrap justify-center items-center pt-20">
            <div class="absolute mb-11">
                <img src="/a188414ce83f2454b9d71a47c3d95909.svg" alt="">
            </div>
            <p class="text-center font-bold text-3xl">How can we help you?</p>
        </div>

        <div data-aos="fade-up" class="flex flex-col flex-wrap justify-center items-center pb-10">
            <a href="mailto:help.voterweb@gmail.com">
                <button type="button"
                class="text-tertiary bg-primary font-medium rounded-full px-20 py-4 text-center mr-2 mb-2 mt-10 flex items-center text-md">
                GET IN TOUCH
            </button>
            </a>
        </div>
    </div>

    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            once: true
        });
    </script>
<?php $__env->stopSection(); ?>

<?php echo $__env->make('layouts.user', \Illuminate\Support\Arr::except(get_defined_vars(), ['__data', '__path']))->render(); ?><?php /**PATH D:\ACHMAD SURYA SAPUTRA\Website Achmad Surya\voter\voter\resources\views/welcome.blade.php ENDPATH**/ ?>