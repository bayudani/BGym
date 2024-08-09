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
    <!-- <link rel="stylesheet" href="asset/output.css"> -->
    <link rel="stylesheet" href="./asset/output.css">


    <!-- Site Properties -->
    <title>Brogym</title>


    <link rel="stylesheet" href="./asset/swiper/swiper-bundle.min.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    <style>
        .swiper {
            width: 100%;
            padding-top: 50px;
            padding-bottom: 50px;
        }

        .swiper-slide {
            background-position: center;
            background-size: cover;
            width: 300px;
            height: 300px;
        }

        .swiper-slide img {
            display: block;
            width: 100%;
        }
    </style>
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
                    <h2 class="text-white md:text-5xl text-3xl font-bold mb-8">Selamat Datang di <span class="text-yellow-500">BayGym</span></h2>
                    <p class="text-lg text-center text-gray-200 mb-10">Bangun Badan impian anda dengan Lebih menyenangkan</p>
                    <a href="index.php?action=login" class="mt-92 text-base font-semibold py-2.5 px-5   bg-rose-600  text-white transition focus:outline-none focus:ring focus:ring-yellow-400 rounded">
                        Get started
                    </a>
                </div>

            </div>
        </section>
        <!-- end cta -->

        <!-- hero sectio -->
        <section class="bg-white dark:bg-black">
            <div class="gap-16 items-center py-8 px-4 mx-auto max-w-screen-xl lg:grid lg:grid-cols-2 lg:py-16 lg:px-6">
                <div class="font-light text-gray-500 sm:text-lg dark:text-gray-400">
                    <h2 class="text-orange-600 lg:text-6xl md:text-5xl text-3xl font-extrabold mb-6 md:!leading-[56px]"><span class="text-white line">Bangun</span> Badan Impian <span class="text-white">Anda</span> di BayGym</h2>
                    <h4 class="text-white mt-6 text-2xl leading-relaxed">Mulai dari <span class="font-bold text-red-300	">Rp.200.000</span> </h4>
                    <p>Akses semua fasilitas yang di tawarkan</p>
                    <div class="mt-5">
                        <a href="#" class="inline-flex items-center justify-center px-5 py-3 mr-3 text-base font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900">
                            Join membership
                            <svg class="w-5 h-5 ml-2 -mr-1" fill="currentColor" viewBox="0 0 20 20" xmlns="http://www.w3.org/2000/svg">
                                <path fill-rule="evenodd" d="M10.293 3.293a1 1 0 011.414 0l6 6a1 1 0 010 1.414l-6 6a1 1 0 01-1.414-1.414L14.586 11H3a1 1 0 110-2h11.586l-4.293-4.293a1 1 0 010-1.414z" clip-rule="evenodd"></path>
                            </svg>
                        </a>

                    </div>

                </div>
                <div class="swiper mySwiper">
                    <div class="swiper-wrapper">
                        <div class="grid grid-cols-2 gap-4 mt-8 swiper-slide">
                            <img class="w-full rounded-lg" src="./asset/img/asset1.jpg" alt="office content 1">
                            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="./asset/img/asset2.jpg" alt="office content 2">
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-8 swiper-slide">
                            <img class="w-full rounded-lg" src="./asset/img/asset1.jpg" alt="office content 1">
                            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="./asset/img/asset2.jpg" alt="office content 2">
                        </div>
                        <div class="grid grid-cols-2 gap-4 mt-8 swiper-slide">
                            <img class="w-full rounded-lg" src="./asset/img/asset1.jpg" alt="office content 1">
                            <img class="mt-4 w-full lg:mt-10 rounded-lg" src="./asset/img/asset2.jpg" alt="office content 2">
                        </div>
                    </div>
                    <div class="swiper-pagination"></div>
                </div>
            </div>
        </section>

        <div class="grid lg:grid-cols-2 items-center gap-10 my-4 bg-white lg:max-w-5xl max-w-xl mx-auto font-[sans-serif] p-4">
            <div class="max-lg:text-center">
                <h2 class="text-gray-800 text-4xl max-sm:text-2xl font-extrabold mb-6">Kenapa harus BayGym?</h2>
                <p class="text-gray-600 text-sm">BayGym mengerti bahwa kenyamanan adalah kunci untuk pengalaman fitness yang optimal. Oleh karena itu, kami menyediakan Beberapa fasilitas yang membuat pengalaman latihan anda nyaman.</p>
            </div>

            <div class="grid sm:grid-cols-2 gap-2 mx-auto w-full">
                <div class="text-center hover:shadow-md transition-all duration-300 rounded-xl p-6 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 576 512" class="fill-blue-600 w-12 inline-block bg-blue-100 p-3 rounded-full"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M575.8 255.5c0 18-15 32.1-32 32.1l-32 0 .7 160.2c0 2.7-.2 5.4-.5 8.1l0 16.2c0 22.1-17.9 40-40 40l-16 0c-1.1 0-2.2 0-3.3-.1c-1.4 .1-2.8 .1-4.2 .1L416 512l-24 0c-22.1 0-40-17.9-40-40l0-24 0-64c0-17.7-14.3-32-32-32l-64 0c-17.7 0-32 14.3-32 32l0 64 0 24c0 22.1-17.9 40-40 40l-24 0-31.9 0c-1.5 0-3-.1-4.5-.2c-1.2 .1-2.4 .2-3.6 .2l-16 0c-22.1 0-40-17.9-40-40l0-112c0-.9 0-1.9 .1-2.8l0-69.7-32 0c-18 0-32-14-32-32.1c0-9 3-17 10-24L266.4 8c7-7 15-8 22-8s15 2 21 7L564.8 231.5c8 7 12 15 11 24z" />
                    </svg>
                    <h3 class="text-gray-800 text-base font-bold mt-4 mb-2">Ruangan ber Ac</h3>
                    <p class="text-gray-600 text-sm">Semua ruang latihan di BayGym dilengkapi dengan pendingin udara untuk memastikan Anda berlatih dengan nyaman di segala kondisi cuaca.</p>
                </div>

                <div class="text-center hover:shadow-md transition-all duration-300 rounded-xl p-6 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="w-12 inline-block bg-blue-100 p-3 rounded-full" viewBox="0 0 682.667 682.667">
                        <defs>
                            <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                <path d="M0 512h512V0H0Z" data-original="#000000" />
                            </clipPath>
                        </defs>
                        <g fill="none" class="stroke-blue-600" stroke-linecap="round" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="40" clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                            <path d="M256 492 60 410.623v-98.925C60 183.674 137.469 68.38 256 20c118.53 48.38 196 163.674 196 291.698v98.925z" data-original="#000000" />
                            <path d="M178 271.894 233.894 216 334 316.105" data-original="#000000" />
                        </g>
                    </svg>
                    <h3 class="text-gray-800 text-base font-bold mt-4 mb-2">Kemanan</h3>
                    <p class="text-gray-600 text-sm">Ruangan latihan dipenuhi dengan CCTV untuk menjaga keamanan anda serta meminimaliris aksi pencurian</p>
                </div>

                <div class="text-center hover:shadow-md transition-all duration-300 rounded-xl p-6 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" class="fill-blue-600 w-12 inline-block bg-blue-100 p-3 rounded-full" viewBox="0 0 512.001 512.001">
                        <path d="M271.029 0c-33.091 0-61 27.909-61 61s27.909 61 61 61 60-27.909 60-61-26.909-61-60-61zm66.592 122c-16.485 18.279-40.096 30-66.592 30-26.496 0-51.107-11.721-67.592-30-14.392 15.959-23.408 36.866-23.408 60v15c0 8.291 6.709 15 15 15h151c8.291 0 15-6.709 15-15v-15c0-23.134-9.016-44.041-23.408-60zM144.946 460.404 68.505 307.149c-7.381-14.799-25.345-20.834-40.162-13.493l-19.979 9.897c-7.439 3.689-10.466 12.73-6.753 20.156l90 180c3.701 7.423 12.704 10.377 20.083 6.738l19.722-9.771c14.875-7.368 20.938-25.417 13.53-40.272zM499.73 247.7c-12.301-9-29.401-7.2-39.6 3.9l-82 100.8c-5.7 6-16.5 9.6-22.2 9.6h-69.901c-8.401 0-15-6.599-15-15s6.599-15 15-15h60c16.5 0 30-13.5 30-30s-13.5-30-30-30h-78.6c-7.476 0-11.204-4.741-17.1-9.901-23.209-20.885-57.949-30.947-93.119-22.795-19.528 4.526-32.697 12.415-46.053 22.993l-.445-.361-21.696 19.094L174.28 452h171.749c28.2 0 55.201-13.5 72.001-36l87.999-126c9.9-13.201 7.2-32.399-6.299-42.3z" data-original="#000000" />
                    </svg>
                    <h3 class="text-gray-800 text-base font-bold mt-4 mb-2">Komunitas yang solid</h3>
                    <p class="text-gray-600 text-sm">Bergabunglah dengan komunitas gym kami yang ramah dan mendukung. Anda akan bertemu dengan orang-orang dengan minat yang sama dan dapat saling memotivasi untuk mencapai hasil terbaik.</p>
                </div>

                <div class="text-center hover:shadow-md transition-all duration-300 rounded-xl p-6 w-full">
                    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="fill-blue-600 w-12 inline-block bg-blue-100 p-3 rounded-full"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                        <path d="M96 64c0-17.7 14.3-32 32-32l32 0c17.7 0 32 14.3 32 32l0 160 0 64 0 160c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-64-32 0c-17.7 0-32-14.3-32-32l0-64c-17.7 0-32-14.3-32-32s14.3-32 32-32l0-64c0-17.7 14.3-32 32-32l32 0 0-64zm448 0l0 64 32 0c17.7 0 32 14.3 32 32l0 64c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 64c0 17.7-14.3 32-32 32l-32 0 0 64c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-160 0-64 0-160c0-17.7 14.3-32 32-32l32 0c17.7 0 32 14.3 32 32zM416 224l0 64-192 0 0-64 192 0z" />
                    </svg>
                    <h3 class="text-gray-800 text-base font-bold mt-4 mb-2">Alat yang lengkap</h3>
                    <p class="text-gray-600 text-sm">Di BayGym, Anda akan menemukan fasilitas yang lengkap untuk memenuhi kebutuhan kebugaran Anda</p>
                </div>
            </div>
        </div>
        <!-- end hero section -->


        <!-- program section -->
        <div class="max-w-3xl max-md:max-w-xl mx-auto p-4 font-[sans-serif]">
            <h2 class="text-gray-800 text-3xl font-extrabold text-center">Pilih Program Latihan Anda</h2>
            <div class="mt-16 space-y-10">
                <?php foreach ($program as $programs) : ?>
                    <a href="index.php?action=detail&id_program=<?php echo $programs['id_program']; ?>" class="grid md:grid-cols-2 gap-14">
                        <div>
                            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 640 512" class="w-10 mb-6 bg-gray-100 p-2 rounded-md"><!--!Font Awesome Free 6.6.0 by @fontawesome - https://fontawesome.com License - https://fontawesome.com/license/free Copyright 2024 Fonticons, Inc.-->
                                <path d="M96 64c0-17.7 14.3-32 32-32l32 0c17.7 0 32 14.3 32 32l0 160 0 64 0 160c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-64-32 0c-17.7 0-32-14.3-32-32l0-64c-17.7 0-32-14.3-32-32s14.3-32 32-32l0-64c0-17.7 14.3-32 32-32l32 0 0-64zm448 0l0 64 32 0c17.7 0 32 14.3 32 32l0 64c17.7 0 32 14.3 32 32s-14.3 32-32 32l0 64c0 17.7-14.3 32-32 32l-32 0 0 64c0 17.7-14.3 32-32 32l-32 0c-17.7 0-32-14.3-32-32l0-160 0-64 0-160c0-17.7 14.3-32 32-32l32 0c17.7 0 32 14.3 32 32zM416 224l0 64-192 0 0-64 192 0z" />
                            </svg>
                            <h3 class="text-gray-800 text-xl font-semibold mb-3"><?php echo $programs['nama']; ?></h3>
                            <p class="text-gray-600 text-sm leading-relaxed"><?php echo $programs['keterangan']; ?></p>
                        </div>

                        <div class="h-[230px]">
                            <img src="asset/image/<?php echo $programs['foto']; ?>" alt="gambar" class="w-full h-full object-cover rounded-xl">
                        </div>
                    </a>
                <?php endforeach; ?>

            </div>
        </div>

        <!-- membership -->
        <section class="mt-10">
            <div class="max-w-7xl max-sm:max-w-md mx-auto p-4 font-[sans-serif]">
                <div class="text-center">
                    <h2 class="text-black text-3xl font-bold mb-4">Join membership sekarang</h2>
                    <p class="text-slate-500 text-sm">Change your plant according your needs</p>
                </div>

                <div class="grid lg:grid-cols-4 sm:grid-cols-2 gap-8 mt-16">
                    <?php
                    $colors = ['border-red-500', 'border-blue-500', 'border-green-500', 'border-yellow-500'];
                    // font
                    $fontColors = ['text-red-200', 'text-blue-200', 'text-green-200', 'text-orange-500'];
                    foreach ($produk as $index => $produks) :
                        $colorClass = $colors[$index % count($colors)];
                        $fontColorClass = $fontColors[$index % count($fontColors)];

                    ?>
                        <label for="radio" class="bg-white cursor-pointer py-8 px-4 text-center rounded-md shadow-[0_0px_8px_0px_rgba(34,46,165,0.2)] border-t-4 <?php echo $colorClass; ?> transition-all hover:-translate-y-1 relative">
                            <div class="flex items-center absolute right-2 top-2">
                                <input id="radio" type="radio" name="value1" class="w-5 h-5 hidden peer" />
                                <div class="relative flex items-center justify-center p-1 peer-checked:before:hidden before:block before:absolute before:w-full before:h-full before:bg-white w-6 h-6 cursor-pointer border-2 border-orange-500 rounded-full overflow-hidden">
                                    <span class="bg-orange-500 rounded-full w-3 h-3"></span>
                                </div>
                            </div>
                            <div>
                                <h3 class="text-xl font-semibold <?php echo $fontColorClass; ?>"><?php echo $produks['nama']; ?></h3>
                                <p class="text-white text-xs mt-1"><?php echo $produks['masa berlaku'] ?> hari</p>
                            </div>
                            <div class="mt-6">
                                <h3 class="text-gray-900 text-4xl font-semibold harga">Rp.<?php echo $produks['harga']; ?></h3>
                                <p class="text-gray-300 text-xs mt-1">1 Month</p>
                            </div>
                            <div class="mt-10">
                                <?php if (isset($_SESSION['login_status']) && $_SESSION['login_status']) : ?>

                                    <a href="index.php?action=transaksi&id_produk=<?php echo $produks['id_produk']; ?>" class="font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 px-5 py-3">Join membership</a>
                                <?php else : ?>
                                    <a href="index.php?action=login" class="font-medium text-center text-white rounded-lg bg-primary-700 hover:bg-primary-800 focus:ring-4 focus:ring-primary-300 dark:focus:ring-primary-900 px-5 py-3">Join membership</a>
                                <?php endif; ?>
                            </div>
                        </label>
                    <?php endforeach; ?>
                </div>
                <!-- <div class="mt-12">
                    <h4 class="text-gray-800 text-xl font-bold mb-4"><span class="text-blue-500">Premium</span> Plan Includes</h4>
                    <ul class="space-y-4">
                        <li class="flex items-center text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" class="mr-4 fill-green-500" viewBox="0 0 24 24">
                                <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                            </svg>
                            50 Image generations
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" class="mr-4 fill-green-500" viewBox="0 0 24 24">
                                <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                            </svg>
                            500 Credits
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" class="mr-4 fill-green-500" viewBox="0 0 24 24">
                                <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                            </svg>
                            Monthly 100 Credits Free
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" class="mr-4 fill-green-500" viewBox="0 0 24 24">
                                <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                            </svg>
                            Customer Support
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" class="mr-4 fill-green-500" viewBox="0 0 24 24">
                                <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                            </svg>
                            Dedicated Server
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" class="mr-4 fill-green-500" viewBox="0 0 24 24">
                                <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                            </svg>
                            Priority Generations
                        </li>
                        <li class="flex items-center text-sm text-gray-600">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" class="mr-4 fill-green-500" viewBox="0 0 24 24">
                                <path d="M9.707 19.121a.997.997 0 0 1-1.414 0l-5.646-5.647a1.5 1.5 0 0 1 0-2.121l.707-.707a1.5 1.5 0 0 1 2.121 0L9 14.171l9.525-9.525a1.5 1.5 0 0 1 2.121 0l.707.707a1.5 1.5 0 0 1 0 2.121z" data-original="#000000" />
                            </svg>
                            50GB Cloud Storage
                        </li>
                    </ul>
                </div> -->
            </div>

        </section>

        <!-- blog -->
        <div class="bg-white font-[sans-serif] my-20">
            <div class="max-w-7xl mx-auto">
                <div class="text-center">
                    <h2 class="text-3xl font-extrabold text-[#333] inline-block relative after:absolute after:w-4/6 after:h-1 after:left-0 after:right-0 after:-bottom-4 after:mx-auto after:bg-pink-400 after:rounded-full">LATEST BLOGS</h2>
                </div>
                <div class="grid grid-cols-1 md:grid-cols-2 lg:grid-cols-3 gap-6 mt-16 max-md:max-w-lg mx-auto">
                    <?php foreach ($artikel as $artikels) : ?>
                        <div class="bg-white cursor-pointer rounded overflow-hidden shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] relative group">
                            <img src="asset/image/<?php echo $artikels['foto']; ?>" alt="Blog Post 1" class="w-full h-96 object-cover" />
                            <div class="p-6 absolute bottom-0 left-0 right-0 bg-white opacity-90">
                                <span class="text-sm block text-gray-600 mb-2"><?php echo $artikels['formatted_date']; ?></span>
                                <a href="index.php?action=artikel" class="text-xl font-bold text-[#333]"><?php echo $artikels['judul']; ?></a>
                                <div class="h-0 overflow-hidden group-hover:h-16 group-hover:mt-4 transition-all duration-300">
                                    <p class="text-gray-600 text-sm"><?php echo  $artikels['excerpt']; ?></p>
                                </div>
                            </div>
                        </div>
                    <?php endforeach; ?>

                </div>
                <button class="align-middle select-none font-sans font-bold text-center uppercase transition-all disabled:opacity-50 disabled:shadow-none disabled:pointer-events-none text-xs py-3 px-6 rounded-lg border border-gray-900 text-gray-900 hover:opacity-75 focus:ring focus:ring-gray-300 active:opacity-[0.85] mt-6 mx-auto flex" type="button" data-ripple-dark="true">
                    Lihat selengkapnya
                </button>
            </div>
        </div>


       

        <?php
        include 'layout/footer.php';
        ?>

        <!-- Swiper JS -->
        <script src="./asset/swiper/swiper-bundle.min.js"></script>
        <script src="./asset/script.js"></script>
        <script src="./node_modules/flowbite/dist/flowbite.min.js"></script>
        <script>

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