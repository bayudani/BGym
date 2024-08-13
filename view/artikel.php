<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <!-- <link href="../asset/ouput.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="../asset/output.css">

    <title>BayGym</title>
</head>

<body>
    <?php
    include 'layout/headerArtikel.php'
    ?>
    <div class="bg-gray-100">
        <!-- featured -->
        <div class="max-w-5xl mx-auto pt-10 pb-10">
            <ul class="flex flex-wrap -mx-2 overflow-hidden">
                <?php foreach ($artikel3 as $artikels) : ?>
                    <li class="my-2 px-2 w-full overflow-hidden md:w-1/3 lg:w-1/3 xl:w-1/3">
                        <a href="index.php?action=detailArtikel&id_artikel=<?php echo $artikels['id_artikel']; ?>">
                            <div class="mx-2 flex items-center justify-center bg-gray-300 bg-cover bg-center relative rounded overflow-hidden" style="height:400px; background-image:url(asset/image/<?php echo $artikels['foto']; ?>)">
                                <div class="absolute w-full h-full bg-black z-10 opacity-50"></div>
                                <div class="relative z-20 text-center p-5">
                                    <span class="inline-block text-white uppercase text-xs tracking-wide"><?php echo $artikels['kategori']; ?></span>
                                    <h2 class="text-white font-semibold font-serif text-xl my-5"><?php echo $artikels['judul']; ?></h2>
                                    <span class="inline-block text-xs text-white font-sans"><?php echo $artikels['formatted_date']; ?></span>
                                </div>
                            </div>
                        </a>
                    </li>
                <?php endforeach; ?>
            </ul>
        </div>
    </div>
    <main class="max-w-5xl mx-auto pb-10 pt-10">
        <div class="flex flex-wrap overflow-hidden">
            <div class="w-full overflow-hidden md:w-4/6 lg:w-4/6 xl:w-4/6">
                <div class="mr-2 md:mr-4 ml-2">
                    <div class="pb-10">
                        <!-- first post -->
                        <div>
                            <img class="w-full h-auto rounded" src="https://images.unsplash.com/photo-1539635278303-d4002c07eae3?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=770&q=80" alt="">
                            <h2 class="text-gray-900 font-serif text-3xl my-5 font-thin"><a href="./article-details.html">How To Make More Travel By Doing Less</a></h2>
                            <span class="text-xs text-gray-800 font-thin block mb-5">By Page. December 02, 2019</span>
                            <p class="text-gray-900 font-thin tracking-wider leading-loose">Far far away, behind the word mountains, far from the countries Vokalia and Consonantia, there live the blind texts. Separated they live in Bookmarksgrove right at the coast...</p>
                            <a href="./article-details.html" class="inline-block pt-5 text-sm font-medium tracking-wider">Read More...</a>
                        </div>
                    </div>
                    <?php foreach (array_chunk($artikel, 2) as $row): ?>
                        <div class="flex flex-wrap overflow-hidden mb-10">
                            <?php foreach ($row as $index => $artikel): ?>
                                <div class="w-1/2 overflow-hidden <?php echo $index === 0 ? 'pr-2 md:pr-4' : 'pl-2 md:pl-4'; ?>">
                                    <div>
                                        <img class="w-full h-auto rounded" src="asset/image/<?php echo $artikel['foto']; ?>" alt="">
                                        <h2 class="text-gray-900 font-thin font-serif text-xl my-5"><a href="index.php?action=detailArtikel&id_artikel=<?php echo $artikel['id_artikel']; ?>"><?php echo $artikel['judul'] ?></a></h2>
                                        <p class="text-gray-900 font-thin tracking-wider leading-loose"><?php echo $artikel['return']; ?></p>
                                        <a href="index.php?action=detailArtikel&id_artikel=<?php echo $artikel['id_artikel']; ?>" class="inline-block pt-5 text-sm font-medium tracking-wider">Read More...</a>
                                    </div>
                                </div>
                                <!-- <div class="w-1/2 overflow-hidden pl-2 md:pl-4">
                            <div>
                                <img class="w-full h-auto rounded" src="https://images.unsplash.com/photo-1530789253388-582c481c54b0?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=340&q=80" alt="">
                                <h2 class="text-gray-900 font-thin font-serif text-xl my-5"><a href="./article-details.html">Use Travel To Make Someone Fall In Love With You</a></h2>
                                <p class="text-gray-900 font-thin tracking-wider leading-loose">Far far away, behind the word mountains, far from the countries...</p>
                                <a href="./article-details.html" class="inline-block pt-5 text-sm font-medium tracking-wider">Read More...</a>
                            </div>
                        </div> -->
                            <?php endforeach; ?>
                        </div>
                    <?php endforeach; ?>

                    <!-- <div class="flex flex-wrap overflow-hidden mb-10">
                        <div class="w-1/2 overflow-hidden pr-2 md:pr-4">
                            <div>
                                <img class="w-full h-auto rounded" src="https://images.unsplash.com/photo-1488190211105-8b0e65b80b4e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=340&q=80" alt="">
                                <h2 class="text-gray-900 font-thin font-serif text-xl my-5"><a href="./article-details.html">What Google Teach About Travel</a></h2>
                                <p class="text-gray-900 font-thin tracking-wider leading-loose">Far far away, behind the word mountains, far from the countries...</p>
                                <a href="./article-details.html" class="inline-block pt-5 text-sm font-medium tracking-wider">Read More...</a>
                            </div>
                        </div>
                        <div class="w-1/2 overflow-hidden pl-2 md:pl-4">
                            <div>
                                <img class="w-full h-auto rounded-" src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=340&q=80" alt="">
                                <h2 class="text-gray-900 font-thin font-serif text-xl my-5"><a href="./article-details.html">The Hidden Mystery Behind Travel</a></h2>
                                <p class="text-gray-900 font-thin tracking-wider leading-loose">Far far away, behind the word mountains, far from the countries...</p>
                                <a href="./article-details.html" class="inline-block pt-5 text-sm font-medium tracking-wider">Read More...</a>
                            </div>
                        </div>
                    </div> -->
                </div>

                <!-- repeat repeat repeat -->

                <!-- repeat repeat repeat -->
            </div>

            <div class="w-full overflow-hidden md:w-2/6 lg:w-2/6 xl:w-2/6">
                <!-- sidebar -->
                <div class="ml-2 md:ml-4 mr-2">
                    <div class="mt-20 sm:mt-0 text-center">
                        <div class="w-64 h-64 rounded-full mx-auto bg-cover bg-center bg-no-repeat" style="background-image:url(https://images.unsplash.com/photo-1422568374078-27d3842ba676?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=340&q=800)"></div>
                        <h2 class="font-light text-xl my-5">BayGym</h2>
                        <p class="text-gray-900 font-thin tracking-wider leading-loose">Lorem ipsum dolor sit amet consectetur adipisicing elit. Officia temporibus eaque optio quasi autem mollitia vitae ea, voluptas eum velit.</p>
                    </div>
                    <div class="mt-20">
                        <h2 class="font-light text-xl mb-5 text-center">Search the blog</h2>
                        <div class="relative border rounded-sm overflow-hidden">
                            <form action="">
                                <input class="w-full relative p-5 font-light text-gray-900 border-0" type="text" name="s" id="" placeholder="Search...">
                                <button type="submit" class="bg-transparent border-0 absolute right-0 px-5 py-5 top-2">
                                    <span class="block w-5">
                                        <svg class="fill-current" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 512 512">
                                            <path d="M495 466.2L377.2 348.4c29.2-35.6 46.8-81.2 46.8-130.9C424 103.5 331.5 11 217.5 11 103.4 11 11 103.5 11 217.5S103.4 424 217.5 424c49.7 0 95.2-17.5 130.8-46.7L466.1 495c8 8 20.9 8 28.9 0 8-7.9 8-20.9 0-28.8zm-277.5-83.3C126.2 382.9 52 308.7 52 217.5S126.2 52 217.5 52C308.7 52 383 126.3 383 217.5s-74.3 165.4-165.5 165.4z" />
                                        </svg>
                                    </span>
                                </button>
                            </form>
                        </div>
                    </div>
                    <div class="mt-10 bg-gray-100 rounded-sm p-5">
                        <div class="pb-6">
                            <div class="w-10 mx-auto mt-6 text-gray-900">
                                <svg class="fill-current" viewBox="-1 0 512 512" xmlns="http://www.w3.org/2000/svg">
                                    <path d="M505.668 246.465c-.89-.906-54.297-54.309-55.668-55.68V55c0-30.328-24.672-55-55-55H115C84.672 0 60 24.672 60 55v135.785C.379 250.406 0 248.301 0 257v210c0 24.813 20.188 45 45 45h420c24.813 0 45-20.188 45-45V257c0-3.855-1.54-7.71-4.332-10.535zm-35.992 6.426L450 262.73v-29.516zM115 30h280c13.785 0 25 11.215 25 25v222.73l-120 60V197c0-8.285-6.715-15-15-15H135c-8.285 0-15 6.715-15 15v95.73l-30-15V55c0-13.785 11.215-25 25-25zm155 257.973l-66.68-44.453a15.004 15.004 0 00-15.027-.938L150 261.73V212h120zm-120 7.297l43.922-21.961L270 324.027v28.703l-15 7.5-105-52.5zm-90-32.54l-19.676-9.84L60 233.216zM465 482H45c-8.27 0-15-6.73-15-15V281.27l218.293 109.148a15.008 15.008 0 0013.414 0L480 281.27V467c0 8.27-6.73 15-15 15zm0 0" />
                                    <path d="M195 91h120c8.285 0 15-6.715 15-15s-6.715-15-15-15H195c-8.285 0-15 6.715-15 15s6.715 15 15 15zm0 0M135 151h240c8.285 0 15-6.715 15-15s-6.715-15-15-15H135c-8.285 0-15 6.715-15 15s6.715 15 15 15zm0 0M375 181h-30c-8.285 0-15 6.715-15 15s6.715 15 15 15h30c8.285 0 15-6.715 15-15s-6.715-15-15-15zm0 0M375 241h-30c-8.285 0-15 6.715-15 15s6.715 15 15 15h30c8.285 0 15-6.715 15-15s-6.715-15-15-15zm0 0" />
                                </svg>
                            </div>
                            <h2 class="font-light text-xl mb-2 text-center pt-5 text-gray-900">Subscribe to our newsletter</h2>
                            <span class="block text-center text-gray-900 font-thin tracking-wider leading-loose text-xs italic">Get the news right in your inbox!</span>
                            <form action="">
                                <div class="bg-white border border-gray-400 mt-5 rounded-sm overflow-hidden">
                                    <input class="bg-transparent w-full p-3" type="text" name="name" id="" placeholder="First Name">
                                </div>
                                <div class="bg-white border border-gray-400 mt-3 rounded-sm overflow-hidden">
                                    <input class="bg-transparent w-full p-3" type="email" name="email" id="" placeholder="Email Address">
                                </div>
                                <div class="mt-3 text-gray-900 font-thin tracking-wider leading-loose text-xs italic">
                                    <span class="inline-block pr-1">
                                        <input type="checkbox" name="" id="privacy-check">
                                    </span>
                                    <label for="privacy-check">By checking this you agree to our <a href="" class="text-orange-500">Privacy Policy</a>.</label>
                                </div>
                                <button type="submit" class="w-full rounded-sm bg-gray-900 text-white tracking-widest text-sm uppercase font-medium py-3 mt-5">Subscribe</button>
                            </form>
                        </div>
                    </div>
                    <div class="mt-10">
                        <h2 class="font-light text-xl mb-5 text-gray-900 text-center">Categories</h2>
                        <?php foreach ($kategori as $kategoris): ?>
                            <ul>
                                <li class="flex"><a href="" class="text-gray-900 font-thin font-serif text-lg py-2 block flex-1"><?php echo $kategoris['kategori']; ?></a><span class="text-gray-700 text-lg font-thin p-2"><?php echo $kategoris['jumlah']; ?></span></li>

                            </ul>
                        <?php endforeach; ?>
                    </div>
                    <div class="mt-10">
                        <h2 class="font-light text-xl mb-5 text-gray-900 text-center">Artikel terbaru</h2>
                        <ul>

                            <?php foreach ($new as $news): ?>
                                <li class="mb-3">
                                    <a href="detailartikel/<?php echo $news['id_artikel']; ?>" class="flex">
                                        <div class="w-1/3">
                                            <img class="rounded" src="asset/image/<?php echo $news['foto']; ?>" alt="artikel">
                                        </div>
                                        <div class="w-2/3 p-2">
                                            <h3 class="text-gray-900 font-thin font-serif mb-2"><?php echo $news['judul']; ?></h3>
                                            <span class="text-xs text-gray-800 font-thin block mb-5">
                                                <?php echo  $news['date']?>
                                            </span>
                                        </div>
                                    </a>
                                </li>
                            <?php endforeach; ?>
                            <!-- <li class="mb-3">
                                <a href="./article-details.html" class="flex">
                                    <div class="w-1/3">
                                        <img class="rounded" src="https://images.unsplash.com/photo-1469474968028-56623f02e42e?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="">
                                    </div>
                                    <div class="w-2/3 p-2">
                                        <h3 class="text-gray-900 font-thin font-serif mb-2">The Hidden Mystery Behind Travel</h3>
                                        <span class="text-xs text-gray-800 font-thin block mb-5">October 22, 2019</span>
                                    </div>
                                </a>
                            </li>
                            <li class="mb-3">
                                <a href="./article-details.html" class="flex">
                                    <div class="w-1/3">
                                        <img class="rounded" src="https://images.unsplash.com/photo-1488646953014-85cb44e25828?ixlib=rb-1.2.1&ixid=MnwxMjA3fDB8MHxwaG90by1wYWdlfHx8fGVufDB8fHx8&auto=format&fit=crop&w=100&q=80" alt="">
                                    </div>
                                    <div class="w-2/3 p-2">
                                        <h3 class="text-gray-900 font-thin font-serif mb-2">Do You Make These Simple Mistakes...</h3>
                                        <span class="text-xs text-gray-800 font-thin block mb-5">October 10, 2019</span>
                                    </div>
                                </a>
                            </li> -->
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center">
            <button class="rounded-sm bg-gray-900 text-white tracking-widest text-sm uppercase font-medium py-3 mt-5 px-5">Load more articles</button>
        </div>
    </main>
    <footer class="bg-gray-100 text-center sm:text-left">
        <div class="max-w-5xl mx-auto pb-10 pt-10 text-gray-900">
            <ul>
                <li class="inline-block"><a class="block font-semibold px-3" href="./index.html">Home</a></li>
                <li class="inline-block"><a class="block font-semibold px-3" href="./categories.html">Categories</a></li>
                <li class="inline-block"><a class="block font-semibold px-3" href="./about.html">About</a></li>
            </ul>
            <div class="sm:flex px-3">
                <div class="w-full sm:w-1/2">
                    <h4 class="font-bold text-2xl font-serif pt-10">Raalhu</h4>
                    <span class="block pt-1 text-xs tracking-wider font-light">&copy;2019 Raalhu. All rights reserved.</span>
                </div>
                <div class="w-full sm:w-1/2 text-center md:text-right mt-10 sm:mt-0">
                    <a href="" title="Facebook" class="inline-block w-6 mr-2">
                        <svg class="fill-current" viewBox="-110 1 511 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M180 512H98.008c-13.695 0-24.836-11.14-24.836-24.836V302.227H25.336C11.64 302.227.5 291.082.5 277.39v-79.246c0-13.696 11.14-24.836 24.836-24.836h47.836v-39.684c0-39.348 12.355-72.824 35.726-96.805C132.375 12.73 165.184 0 203.778 0l62.53.102c13.672.023 24.794 11.164 24.794 24.835v73.579c0 13.695-11.137 24.836-24.829 24.836l-42.101.015c-12.84 0-16.11 2.574-16.809 3.363-1.152 1.31-2.523 5.008-2.523 15.223v31.352h58.27c4.386 0 8.636 1.082 12.288 3.12 7.88 4.403 12.778 12.727 12.778 21.723l-.031 79.247c0 13.687-11.141 24.828-24.836 24.828h-58.47v184.941C204.84 500.86 193.696 512 180 512zm-76.813-30.016h71.633V288.79c0-9.144 7.442-16.582 16.582-16.582h66.727l.027-68.883h-66.758c-9.14 0-16.578-7.437-16.578-16.582v-44.789c0-11.726 1.192-25.062 10.043-35.086 10.696-12.117 27.551-13.515 39.301-13.515l36.922-.016V30.109l-57.332-.093c-62.024 0-100.566 39.703-100.566 103.609v53.117c0 9.14-7.438 16.582-16.579 16.582H30.516v68.883h56.093c9.141 0 16.579 7.438 16.579 16.582zM266.25 30.117h.004zm0 0" />
                        </svg>
                    </a>
                    <a href="" title="Twitter" class="inline-block w-6 mr-2">
                        <svg class="fill-current" viewBox="0 0 512.001 512.001" xmlns="http://www.w3.org/2000/svg">
                            <path d="M373.406 0H138.594C62.172 0 0 62.172 0 138.594V373.41C0 449.828 62.172 512 138.594 512H373.41C449.828 512 512 449.828 512 373.41V138.594C512 62.172 449.828 0 373.406 0zm108.578 373.41c0 59.867-48.707 108.574-108.578 108.574H138.594c-59.871 0-108.578-48.707-108.578-108.574V138.594c0-59.871 48.707-108.578 108.578-108.578H373.41c59.867 0 108.574 48.707 108.574 108.578zm0 0" />
                            <path d="M256 116.004c-77.195 0-139.996 62.8-139.996 139.996S178.804 395.996 256 395.996 395.996 333.196 395.996 256 333.196 116.004 256 116.004zm0 249.976c-60.64 0-109.98-49.335-109.98-109.98 0-60.64 49.34-109.98 109.98-109.98 60.645 0 109.98 49.34 109.98 109.98 0 60.645-49.335 109.98-109.98 109.98zm0 0M399.344 66.285c-22.813 0-41.367 18.559-41.367 41.367 0 22.813 18.554 41.371 41.367 41.371s41.37-18.558 41.37-41.37-18.558-41.368-41.37-41.368zm0 52.719c-6.258 0-11.352-5.094-11.352-11.352 0-6.261 5.094-11.351 11.352-11.351 6.261 0 11.355 5.09 11.355 11.351 0 6.258-5.094 11.352-11.355 11.352zm0 0" />
                        </svg>
                    </a>
                    <a href="" title="Instagram" class="inline-block w-6">
                        <svg class="fill-current" viewBox="0 -45 512 512" xmlns="http://www.w3.org/2000/svg">
                            <path d="M194.816 422.71c-85.453 0-152.992-14.929-185.304-40.952l-.63-.508-.57-.57C.638 373-1.877 362.926 1.418 353.043l.3-.82c4-10.004 13.802-16.739 24.423-16.801 21.859-.379 40.984-2.985 58.34-8.043-27.684-12.875-46.915-35.168-58.356-67.434-3.848-10.062-.527-21.218 8.34-27.87 2.187-1.645 4.66-2.887 7.277-3.72-15.383-17.757-26.746-37.964-33.11-59.335l-.198-.665-.137-.68c-2.16-10.808 2.672-21.921 11.527-26.706 3.715-2.133 7.75-3.239 11.801-3.332-4.367-9.407-7.543-19.063-9.426-28.778-5.226-26.921-.914-53.91 12.813-80.214l3.175-6.352a17.759 17.759 0 0113.004-9.563 17.76 17.76 0 0115.356 4.958l5.785 5.792c45.703 47.915 86.64 70.649 157.418 86.204 3.16-27.168 14.906-52.422 33.855-72.297C286.156 13.738 316.27.469 348.398.016h.211c23.442 0 52.52 13.382 70.106 22.82 15.086-4.938 33.262-12.582 52.12-20.664 8.825-4.14 19.704-2.246 26.642 4.691 6.8 6.801 8.687 16.39 5.078 25.711a126.223 126.223 0 01-4.657 11.227c2.582 1.183 4.946 2.789 6.942 4.785 6.035 6.035 8.55 15.48 6.406 24.066l-.23.817c-7.227 23.289-21.11 42.258-39.47 54.164C468.48 290.918 345.52 422.71 194.817 422.71zM38.305 365.036c30.449 17.227 88.476 27.649 156.511 27.649 65.41 0 127.137-28.082 173.805-79.075 47.05-51.41 72.961-119.68 72.961-192.234v-.816c0-6.57 3.617-12.567 9.438-15.653C462.828 98.652 472.39 88 478.61 74.38c-6.415 1.012-12.934-1.563-16.93-6.93a17.621 17.621 0 01-.13-20.957 97.453 97.453 0 006.692-10.59c-16.285 6.84-31.75 12.973-45.176 17.047-4.878 1.477-10.316.899-14.773-1.59-23.902-13.316-46.164-21.277-59.586-21.316-49.527.758-89.797 43.176-89.797 94.605 0 5.317-2.36 10.301-6.465 13.68a17.646 17.646 0 01-14.672 3.695c-81.609-16.078-129.968-40.187-180.257-90.722-7.207 17.27-9.176 34.664-5.844 51.84 3.379 17.398 12.367 34.832 25.996 50.414 5.18 5.914 5.867 14.375 1.71 21.05-4.14 6.653-12.01 9.762-19.577 7.735-5.914-1.586-11.352-3.668-16.508-6.344 10.504 22.816 28.57 43.918 51.281 59.48 6.582 4.512 9.332 12.922 6.692 20.454-2.645 7.543-10.032 12.398-18.016 11.804-8.7-.644-16.406-2.296-23.5-5.082 12.734 25.934 33.082 40.203 64.43 45.657a17.72 17.72 0 0114.465 14.668 17.714 17.714 0 01-9.2 18.43c-26.718 14.163-55.922 21.765-91.14 23.628zm0 0" />
                        </svg>
                    </a>
                </div>
            </div>
        </div>
    </footer>
</body>

</html>