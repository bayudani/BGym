<!DOCTYPE html>
<html>
<?php
include './config/koneksi.php'
?>

<head>
    <!-- Standard Meta -->
    <meta charset="utf-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0, maximum-scale=1.0">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.6.0/css/all.min.css.css">
    <link rel="stylesheet" href="asset/output.css">

    <!-- Site Properties -->
    <title>Brogym</title>


    <link rel="stylesheet" href="./asset/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

</head>

<body>


    <?php
    include 'layout/header.php'
    ?>



    <div class=" mt-10 mx-auto">
        <!-- cta -->
        <section class="overflow-hidden bg-[url(../asset/img/background.png)] bg-cover bg-top bg-no-repeat h-max">
            <div class="p-8 md:p-12 lg:px-16 lg:py-24">
                <div class="mx-auto max-w-lg text-center">
                    <h2 class="text-2xl font-bold text-white md:text-3xl">
                        Lorem, ipsum dolor sit amet consectetur adipisicing elit
                    </h2>

                    <p class="hidden text-gray-500 sm:mt-4 sm:block">
                        Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quae dolor officia blanditiis
                        repellat in, vero, aperiam porro ipsum laboriosam consequuntur exercitationem incidunt
                        tempora nisi?
                    </p>
                </div>

                <div class="mx-auto mt-8 max-w-xl">
                    <form action="#" class="sm:flex sm:gap-4">
                        <div class="sm:flex-1">
                            <label for="email" class="sr-only">Email</label>

                            <input type="email" placeholder="Email address" class="w-full rounded-md border-gray-200 bg-white p-3 text-gray-700 shadow-sm transition focus:border-white focus:outline-none focus:ring focus:ring-yellow-400" />
                        </div>

                        <button type="submit" class="group mt-4 flex w-full items-center justify-center gap-2 rounded-md bg-rose-600 px-5 py-3 text-white transition focus:outline-none focus:ring focus:ring-yellow-400 sm:mt-0 sm:w-auto">
                            <span class="text-sm font-medium"> Sign Up </span>

                            <svg class="size-5 rtl:rotate-180" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M17 8l4 4m0 0l-4 4m4-4H3" />
                            </svg>
                        </button>
                    </form>
                </div>
            </div>
        </section>
        <!-- end cta -->

        <!-- hero sectio -->
        <section class="bg-white dark:bg-black">
            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-orange-700">Perjalanan <span class="mb-4 text-4xl tracking-tight font-extrabold text-primary-700 dark:text-primary-700">fitnes terjangkau </span> dimulai dari sekarang</h2>
                    <p class="mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Asperiores maxime explicabo voluptatibus sequi quos voluptates. Repellat reiciendis cum maxime perspiciatis unde eaque voluptatem alias sint ut tempora vel, placeat pariatur..</p>
                    <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Similique vero dicta quasi, maiores dolor aut! Pariatur minus possimus unde, modi asperiores veniam doloremque tempora nesciunt?.</p>
                    <div class="mt-5">
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                            Join membership
                            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>

                    </div>

                </div>
                <div class="grid grid-cols-2 gap-4 mt-8">
                    <img class="w-full rounded-lg" src="./asset/img/asset1.jpg" alt="office content 1">
                    <img class="mt-4 w-full lg:mt-10 rounded-lg" src="./asset/img/asset2.jpg" alt="office content 2">
                </div>
            </div>
        </section>
        <!-- end hero section -->


        <!-- cta -->
        <section class="bg-white  text-black">
            <div class="py-8 px-4 mx-auto max-w-screen-xl sm:py-16 lg:px-6">
                <div class="max-w-screen-md mb-8 lg:mb-16">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-stone-950">Designed for business teams like yours</h2>
                    <p class="text-gray-500 sm:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
                </div>
                <div class="space-y-8 md:grid md:grid-cols-2 lg:grid-cols-3 md:gap-12 md:space-y-0">
                    <div>
                        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M3 3a1 1 0 000 2v8a2 2 0 002 2h2.586l-1.293 1.293a1 1 0 101.414 1.414L10 15.414l2.293 2.293a1 1 0 001.414-1.414L12.414 15H15a2 2 0 002-2V5a1 1 0 100-2H3zm11.707 4.707a1 1 0 00-1.414-1.414L10 9.586 8.707 8.293a1 1 0 00-1.414 0l-2 2a1 1 0 101.414 1.414L8 10.414l1.293 1.293a1 1 0 001.414 0l4-4z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-stone-950">Marketing</h3>
                        <p class="text-gray-500 dark:text-gray-400">Plan it, create it, launch it. Collaborate seamlessly with all the organization and hit your marketing goals every month with our marketing plan.</p>
                    </div>
                    <div>
                        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M10.394 2.08a1 1 0 00-.788 0l-7 3a1 1 0 000 1.84L5.25 8.051a.999.999 0 01.356-.257l4-1.714a1 1 0 11.788 1.838L7.667 9.088l1.94.831a1 1 0 00.787 0l7-3a1 1 0 000-1.838l-7-3zM3.31 9.397L5 10.12v4.102a8.969 8.969 0 00-1.05-.174 1 1 0 01-.89-.89 11.115 11.115 0 01.25-3.762zM9.3 16.573A9.026 9.026 0 007 14.935v-3.957l1.818.78a3 3 0 002.364 0l5.508-2.361a11.026 11.026 0 01.25 3.762 1 1 0 01-.89.89 8.968 8.968 0 00-5.35 2.524 1 1 0 01-1.4 0zM6 18a1 1 0 001-1v-2.065a8.935 8.935 0 00-2-.712V17a1 1 0 001 1z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-stone-950">Legal</h3>
                        <p class="text-gray-500 dark:text-gray-400">Protect your organization, devices and stay compliant with our structured workflows and custom permissions made for you.</p>
                    </div>
                    <div>
                        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M6 6V5a3 3 0 013-3h2a3 3 0 013 3v1h2a2 2 0 012 2v3.57A22.952 22.952 0 0110 13a22.95 22.95 0 01-8-1.43V8a2 2 0 012-2h2zm2-1a1 1 0 011-1h2a1 1 0 011 1v1H8V5zm1 5a1 1 0 011-1h.01a1 1 0 110 2H10a1 1 0 01-1-1z" clip-rule="evenodd"></path>
                                <path d="M2 13.692V16a2 2 0 002 2h12a2 2 0 002-2v-2.308A24.974 24.974 0 0110 15c-2.796 0-5.487-.46-8-1.308z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-stone-950">Business Automation</h3>
                        <p class="text-gray-500 dark:text-gray-400">Auto-assign tasks, send Slack messages, and much more. Now power up with hundreds of new templates to help you get started.</p>
                    </div>
                    <div>
                        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M8.433 7.418c.155-.103.346-.196.567-.267v1.698a2.305 2.305 0 01-.567-.267C8.07 8.34 8 8.114 8 8c0-.114.07-.34.433-.582zM11 12.849v-1.698c.22.071.412.164.567.267.364.243.433.468.433.582 0 .114-.07.34-.433.582a2.305 2.305 0 01-.567.267z"></path>
                                <path fill-rule="evenodd" d="M10 18a8 8 0 100-16 8 8 0 000 16zm1-13a1 1 0 10-2 0v.092a4.535 4.535 0 00-1.676.662C6.602 6.234 6 7.009 6 8c0 .99.602 1.765 1.324 2.246.48.32 1.054.545 1.676.662v1.941c-.391-.127-.68-.317-.843-.504a1 1 0 10-1.51 1.31c.562.649 1.413 1.076 2.353 1.253V15a1 1 0 102 0v-.092a4.535 4.535 0 001.676-.662C13.398 13.766 14 12.991 14 12c0-.99-.602-1.765-1.324-2.246A4.535 4.535 0 0011 9.092V7.151c.391.127.68.317.843.504a1 1 0 101.511-1.31c-.563-.649-1.413-1.076-2.354-1.253V5z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-stone-950">Finance</h3>
                        <p class="text-gray-500 dark:text-gray-400">Audit-proof software built for critical financial operations like month-end close and quarterly budgeting.</p>
                    </div>
                    <div>
                        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path d="M7 3a1 1 0 000 2h6a1 1 0 100-2H7zM4 7a1 1 0 011-1h10a1 1 0 110 2H5a1 1 0 01-1-1zM2 11a2 2 0 012-2h12a2 2 0 012 2v4a2 2 0 01-2 2H4a2 2 0 01-2-2v-4z"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-stone-950">Enterprise Design</h3>
                        <p class="text-gray-500 dark:text-gray-400">Craft beautiful, delightful experiences for both marketing and product with real cross-company collaboration.</p>
                    </div>
                    <div>
                        <div class="flex justify-center items-center mb-4 w-10 h-10 rounded-full bg-primary-100 lg:h-12 lg:w-12 dark:bg-primary-900">
                            <svg class="w-5 h-5 text-primary-600 lg:w-6 lg:h-6 dark:text-primary-300" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M11.49 3.17c-.38-1.56-2.6-1.56-2.98 0a1.532 1.532 0 01-2.286.948c-1.372-.836-2.942.734-2.106 2.106.54.886.061 2.042-.947 2.287-1.561.379-1.561 2.6 0 2.978a1.532 1.532 0 01.947 2.287c-.836 1.372.734 2.942 2.106 2.106a1.532 1.532 0 012.287.947c.379 1.561 2.6 1.561 2.978 0a1.533 1.533 0 012.287-.947c1.372.836 2.942-.734 2.106-2.106a1.533 1.533 0 01.947-2.287c1.561-.379 1.561-2.6 0-2.978a1.532 1.532 0 01-.947-2.287c.836-1.372-.734-2.942-2.106-2.106a1.532 1.532 0 01-2.287-.947zM10 13a3 3 0 100-6 3 3 0 000 6z" clip-rule="evenodd"></path>
                            </svg>
                        </div>
                        <h3 class="mb-2 text-xl font-bold dark:text-stone-950">Operations</h3>
                        <p class="text-gray-500 dark:text-gray-400">Keep your company’s lights on with customizable, iterative, and structured workflows built for all efficient teams and individual.</p>
                    </div>
                </div>
            </div>
        </section>
        <!-- cta end -->



        <!-- pricing -->
        <section class="bg-white dark:bg-gray-900" id="membership">
            <div class="py-8 px-4 mx-auto max-w-screen-xl lg:py-16 lg:px-6">
                <div class="mx-auto max-w-screen-md text-center mb-8 lg:mb-12">
                    <h2 class="mb-4 text-4xl tracking-tight font-extrabold text-gray-900 dark:text-white">Designed for business teams like yours</h2>
                    <p class="mb-5 font-light text-gray-500 sm:text-xl dark:text-gray-400">Here at Flowbite we focus on markets where technology, innovation, and capital can unlock long-term value and drive economic growth.</p>
                </div>
                <div class="space-y-8 lg:grid lg:grid-cols-3 sm:gap-6 xl:gap-10 lg:space-y-0">
                    <!-- Pricing Card -->
                    <?php foreach ($produk as $produks) : ?>
                        <div class="flex flex-col p-6 mx-auto max-w-lg text-center text-gray-900 bg-white rounded-lg border border-gray-100 shadow dark:border-gray-600 xl:p-8 dark:bg-gray-800 dark:text-white">
                            <h3 class="mb-4 text-2xl font-semibold"><?php echo $produks['nama']; ?></h3>
                            <p class="font-light text-gray-500 sm:text-lg dark:text-gray-400">Best option for personal use & for your next project.</p>
                            <div class="flex justify-center items-baseline my-8">
                                <span class="mr-2 text-2xl font-extrabold">Rp <?php echo $produks['harga']; ?></span>
                                <span class="text-gray-500 dark:text-gray-400">/month</span>
                            </div>
                            <!-- List -->
                            <ul role="list" class="mb-8 space-y-4 text-left">
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Individual configuration</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>No setup, or hidden fees</span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Team size: <span class="font-semibold">1 developer</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Masa berlaku <span class="font-semibold"><?php echo $produks['masa berlaku']; ?> hari</span></span>
                                </li>
                                <li class="flex items-center space-x-3">
                                    <!-- Icon -->
                                    <svg class="flex-shrink-0 w-5 h-5 text-green-500 dark:text-green-400" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                        <path fill-rule="evenodd" d="M16.707 5.293a1 1 0 010 1.414l-8 8a1 1 0 01-1.414 0l-4-4a1 1 0 011.414-1.414L8 12.586l7.293-7.293a1 1 0 011.414 0z" clip-rule="evenodd"></path>
                                    </svg>
                                    <span>Free updates: <span class="font-semibold">6 months</span></span>
                                </li>
                            </ul>
                            <a href="index.php?action=transaksi&id_produk=<?php echo $produks['id_produk']; ?>" class="text-white bg-primary-600 hover:bg-primary-700 focus:ring-4 focus:ring-primary-200 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:text-white  dark:focus:ring-primary-900">Get started</a>
                        </div>
                    <?php endforeach; ?>


                </div>
            </div>
        </section>
        <!-- end pricing -->
    </div>

    <section class="py-24 px-8">
        <div class="container mx-auto">
            <p class="block antialiased font-sans leading-relaxed text-blue-gray-900 mb-4 font-bold text-lg">
                Pricing Plans
            </p>
            <h1 class="block antialiased tracking-normal font-sans font-semibold text-blue-gray-900 mb-4 !leading-snug lg:!text-4xl !text-2xl max-w-2xl">
                Invest in a plan that's as ambitious as your corporate goals.
            </h1>
            <p class="block antialiased font-sans text-xl leading-relaxed text-inherit mb-10 font-normal !text-gray-500 max-w-xl">
                Compare the benefits and features of each plan below to find the ideal
                match for your business's budget and ambitions.
            </p>
            <div class="grid gap-x-10 gap-y-8 md:grid-cols-2 lg:grid-cols-3 max-w-5xl">
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    <div class="relative bg-clip-border !mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                        <h6 class="block antialiased tracking-normal font-sans text-base leading-relaxed text-blue-gray-900 capitalize font-bold mb-1">
                            starter
                        </h6>
                        <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">
                            Free access for 2 members
                        </p>
                        <h3 class="antialiased tracking-normal font-sans font-semibold leading-snug text-blue-gray-900 !mt-4 flex gap-1 !text-4xl">
                            $<!-- -->129<span class="block antialiased font-sans leading-relaxed text-blue-gray-900 -translate-y-0.5 self-end opacity-70 text-lg font-bold">/<!-- -->year</span>
                        </h3>
                    </div>
                    <div class="p-6 pt-0">
                        <ul class="flex flex-col gap-3 mb-6">
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-900">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    Complete documentation
                                </p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-900">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    Working materials in Sketch
                                </p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-900">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    Integration help
                                </p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-900">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    40GB Cloud storage
                                </p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-900">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    Support team full assist
                                </p>
                            </li>
                        </ul>
                        <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] bg-gradient-to-tr from-gray-900 to-gray-800 block w-full" type="button" data-ripple-light="true">
                            get started
                        </button>
                    </div>
                </div>
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    <div class="relative bg-clip-border !mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                        <h6 class="block antialiased tracking-normal font-sans text-base leading-relaxed text-blue-gray-900 capitalize font-bold mb-1">
                            premium
                        </h6>
                        <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">
                            Free access for 30 members
                        </p>
                        <h3 class="antialiased tracking-normal font-sans font-semibold leading-snug text-blue-gray-900 !mt-4 flex gap-1 !text-4xl">
                            $<!-- -->299<span class="block antialiased font-sans leading-relaxed text-blue-gray-900 -translate-y-0.5 self-end opacity-70 text-lg font-bold">/<!-- -->year</span>
                        </h3>
                    </div>
                    <div class="p-6 pt-0">
                        <ul class="flex flex-col gap-3 mb-6">
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-900">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    Complete documentation
                                </p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-900">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    Working materials in Sketch
                                </p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" stroke-width="2.5" class="h-5 w-5 text-blue-gray-900">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    Integration help
                                </p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" stroke-width="2.5" class="h-5 w-5 text-blue-gray-900">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    40GB Cloud storage
                                </p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="2.5" stroke="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-900">
                                    <path stroke-linecap="round" stroke-linejoin="round" d="M15 12H9m12 0a9 9 0 11-18 0 9 9 0 0118 0z"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    Support team full assist
                                </p>
                            </li>
                        </ul>
                        <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] bg-gradient-to-tr from-gray-900 to-gray-800 block w-full" type="button" data-ripple-light="true">
                            get started
                        </button>
                    </div>
                </div>
                <div class="relative flex flex-col bg-clip-border rounded-xl bg-white text-gray-700 shadow-md">
                    <div class="relative bg-clip-border !mt-4 mx-4 rounded-xl overflow-hidden bg-transparent text-gray-700 shadow-none !m-0 p-6">
                        <h6 class="block antialiased tracking-normal font-sans text-base leading-relaxed text-blue-gray-900 capitalize font-bold mb-1">
                            company
                        </h6>
                        <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal !text-gray-500">
                            Free access for 200 members
                        </p>
                        <h3 class="antialiased tracking-normal font-sans font-semibold leading-snug text-blue-gray-900 !mt-4 flex gap-1 !text-4xl">
                            $<!-- -->399<span class="block antialiased font-sans leading-relaxed text-blue-gray-900 -translate-y-0.5 self-end opacity-70 text-lg font-bold">/<!-- -->year</span>
                        </h3>
                    </div>
                    <div class="p-6 pt-0">
                        <ul class="flex flex-col gap-3 mb-6">
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-900">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    Complete documentation
                                </p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" class="h-5 w-5 text-blue-gray-900">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    Working materials in Sketch
                                </p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" stroke-width="2.5" class="h-5 w-5 text-blue-gray-900">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    Integration help
                                </p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" stroke-width="2.5" class="h-5 w-5 text-blue-gray-900">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    40GB Cloud storage
                                </p>
                            </li>
                            <li class="flex items-center gap-3 text-gray-700">
                                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" fill="currentColor" aria-hidden="true" stroke-width="2.5" class="h-5 w-5 text-blue-gray-900">
                                    <path fill-rule="evenodd" d="M2.25 12c0-5.385 4.365-9.75 9.75-9.75s9.75 4.365 9.75 9.75-4.365 9.75-9.75 9.75S2.25 17.385 2.25 12zm13.36-1.814a.75.75 0 10-1.22-.872l-3.236 4.53L9.53 12.22a.75.75 0 00-1.06 1.06l2.25 2.25a.75.75 0 001.14-.094l3.75-5.25z" clip-rule="evenodd"></path>
                                </svg>
                                <p class="block antialiased font-sans text-sm leading-normal font-normal text-inherit">
                                    Support team full assist
                                </p>
                            </li>
                        </ul>
                        <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg bg-gradient-to-tr from-gray-900 to-gray-800 text-white shadow-md shadow-gray-900/10 hover:shadow-lg hover:shadow-gray-900/20 active:opacity-[0.85] bg-gradient-to-tr from-gray-900 to-gray-800 block w-full" type="button" data-ripple-light="true">
                            get started
                        </button>
                    </div>
                </div>
            </div>
            <p class="block antialiased font-sans text-sm leading-normal text-inherit mt-10 font-normal !text-gray-500">
                You have Free Unlimited Updates and Premium Support on each package. You
                also have 30 days to request a refund.
            </p>
        </div>
    </section>
 


    <section class="py-8 px-8 lg:py-20">
        <div class="container !mx-auto text-center place-content-center grid">
            <p class="block antialiased font-sans leading-relaxed text-blue-gray-900 !font-semibold lg:!text-lg !text-base">
                More than 50+ brands trust us
            </p>
            <h1 class="block antialiased tracking-normal font-sans font-semibold text-blue-gray-900 my-4 !text-2xl !leading-snug lg:!text-3xl">
                Trusted by Leading Brands
            </h1>
            <p class="block antialiased font-sans text-xl font-normal leading-relaxed text-inherit mx-auto max-w-5xl !text-gray-500 lg:px-8 mb-10">
                From innovative startups to Fortune 500 companies, our client list spans a
                spectrum of sectors, each with unique challenges that we've successfully
                navigated.
            </p>
            <div class="flex flex-col md:flex-row gap-6 max-w-6xl mx-auto">
                <div class="flex flex-col items-center justify-center gap-6">
                    <div class="relative flex flex-col bg-clip-border rounded-xl text-gray-700 bg-[#FAFAFA] px-10">
                        <div class="p-6">
                            <img src="https://www.material-tailwind.com/logos/logo-coinbase.svg" alt="logo" class="w-40" />
                            <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal text-gray-500">
                                coinbase.com
                            </p>
                        </div>
                    </div>
                    <div class="relative flex flex-col bg-clip-border rounded-xl text-gray-700 bg-[#FAFAFA] px-10">
                        <div class="p-6">
                            <img src="https://www.material-tailwind.com/logos/logo-amazon.svg" alt="logo" class="w-40" />
                            <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal text-gray-500">
                                amazon.com
                            </p>
                        </div>
                    </div>
                </div>
                <div class="relative flex flex-col bg-clip-border rounded-xl text-gray-700 bg-[#FAFAFA] lg:px-10 justify-center max-w-[18rem] lg:max-w-lg">
                    <div class="p-6 text-center">
                        <img src="https://www.material-tailwind.com/logos/logo-netflix.svg" alt="logo" class="w-40 mx-auto" />
                        <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal text-gray-500 mb-4">
                            netflix.com
                        </p>
                        <p class="block antialiased font-sans text-sm leading-normal text-blue-gray-900 font-normal lg:max-w-[16rem]">
                            “It have broadened our horizons and helped me advance my career. The
                            community is incredibly supportive."
                        </p>
                    </div>
                </div>
                <div class="flex flex-col items-center justify-center gap-6">
                    <div class="relative flex flex-col bg-clip-border rounded-xl text-gray-700 bg-[#FAFAFA] px-10">
                        <div class="p-6">
                            <img src="https://www.material-tailwind.com/logos/logo-spotify.svg" alt="logo" class="w-40" />
                            <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal text-gray-500">
                                spotify.com
                            </p>
                        </div>
                    </div>
                    <div class="relative flex flex-col bg-clip-border rounded-xl text-gray-700 bg-[#FAFAFA] px-10">
                        <div class="p-6">
                            <img src="https://www.material-tailwind.com/logos/logo-google.svg" alt="logo" class="w-40" />
                            <p class="block antialiased font-sans text-sm leading-normal text-inherit font-normal text-gray-500">
                                google.com
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg border border-gray-900 text-gray-900 hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-[0.85] mt-6 mx-auto flex" type="button" data-ripple-dark="true">
            see all projects
        </button>
    </section>











    <?php
    include 'layout/footer.php';
    ?>

    <!-- Swiper JS -->
    <script src="./asset/swiper/swiper-bundle.min.js"></script>
    <script src="./asset/script.js"></script>
    <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', function() {
            document.getElementById('myCartDropdownButton1').click();
        });
    </script>



    <?php if (@$_SESSION['berhasil']) { ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'berhasil',
                text: '<?php echo $_SESSION['berhasil'] ?>',
            })
        </script>
    <?php unset($_SESSION['berhasil']);
    } ?>

</body>

</html>