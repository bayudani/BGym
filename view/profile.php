<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profile</title>
    <!-- <link href="https://cdn.jsdelivr.net/npm/tailwindcss@2.2.19/dist/tailwind.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="./asset/output.css">
    <!-- <link href="https://cdn.jsdelivr.net/npm/daisyui@4.12.10/dist/full.min.css" rel="stylesheet" type="text/css"> -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
</head>

<body class="bg-[#20354b]">
    <ul class="flex items-center justify-start ml-10 font-[sans-serif] space-x-4 mt-4">
        <li class="text-white text-base cursor-pointer">
            <a href="index.php">Home</a>
        </li>
        <li>
            <svg xmlns="http://www.w3.org/2000/svg" class="fill-gray-400 w-3.5 -rotate-90" viewBox="0 0 24 24">
                <path fill-rule="evenodd" d="M11.99997 18.1669a2.38 2.38 0 0 1-1.68266-.69733l-9.52-9.52a2.38 2.38 0 1 1 3.36532-3.36532l7.83734 7.83734 7.83734-7.83734a2.38 2.38 0 1 1 3.36532 3.36532l-9.52 9.52a2.38 2.38 0 0 1-1.68266.69734z" clip-rule="evenodd" data-original="#000000"></path>
            </svg>
        </li>
       
        <li class="text-gray-800 text-base font-bold cursor-pointer">
            Profile
        </li>
    </ul>

    <!-- profile -->
    <div class="container mx-auto px-4 mt-10 bg-[#20354b]" id="content">
        <div class="flex flex-wrap -mx-4">
            <div class="w-full md:w-1/3 px-4">
                <div class="bg-[#20354b] shadow-md rounded-lg overflow-hidden mb-4">
                    <div class="bg-[#20354b] px-4 py-2">
                        <h2 class="font-semibold text-lg text-white">Profile Picture</h2>
                    </div>
                    <div class="px-4 py-4 text-center">
                        <img class="inline-block h-40 w-40 rounded-full" src="./asset/img/profile (1).png" alt="foto profile" />
                    </div>
                </div>
            </div>
            <div class="w-full md:w-2/3 px-4">
                <div class="bg-[#20354b] shadow-md rounded-lg overflow-hidden mb-4">
                    <div class="bg-[#20354b] px-4 py-2">
                        <h2 class="font-semibold text-lg text-white">Detail akun</h2>
                    </div>
                    <div class="px-4 py-4">
                        <form>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700" for="username">Username</label>
                                <input class="mt-1 block w-full h-10 bg-[#20354b] border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm text-white" id="username" type="text" value="<?php echo $user['username']; ?>" readonly />
                            </div>
                            <div class="mb-4">
                                <label class="block text-sm font-medium text-gray-700" for="email">Email</label>
                                <input class=" text-white mt-1 block w-full h-10 bg-[#20354b] border border-gray-300 rounded-md shadow-sm focus:ring-indigo-500 focus:border-indigo-500 sm:text-sm" id="email" type="text" value="<?php echo $user['email']; ?>" readonly />
                            </div>
                            <a type="button" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500" href="editProfile.php">
                                Edit profile
                            </a>
                        </form>
                    </div>
                </div>
            </div>

            <!-- memebrship -->
            <div class="w-full px-4">
                <div class="bg-[#20354b] shadow-md rounded-lg overflow-hidden mb-4">
                    <div class="bg-[#20354b] px-4 py-2">
                        <h2 class="font-semibold text-lg text-white">Detail Membership</h2>
                    </div>
                    <div class="px-4 py-4">
                        <?php if ($member) : ?>
                            <section class="w-64 mx-auto bg-[#20354b] rounded-2xl px-8 py-6 shadow-lg">
                                <div class="flex items-center justify-between">
                                    <span class="text-gray-400 text-sm"><?php echo $member['id_member']; ?></span>
                                    <span class="text-emerald-400">
                                        <svg xmlns="http://www.w3.org/2000/svg" class="h-6 w-6" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 12h.01M12 12h.01M19 12h.01M6 12a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0zm7 0a1 1 0 11-2 0 1 1 0 012 0z" />
                                        </svg>
                                    </span>
                                </div>
                                <div class="mt-6 w-fit mx-auto">
                                    <?php
                                    // Buat kode QR yang hanya berisi id_member
                                    $kode = $member['id_member'];
                                    require_once('./phpqrcode/qrlib.php');
                                    $filePath = "kode_" . $member['id_member'];
                                    QRcode::png($kode, $filePath, "M", 4, 4); // Parameter ukuran dan margin disesuaikan
                                    ?>
                                    <img src="<?php echo htmlspecialchars($filePath, ENT_QUOTES, 'UTF-8'); ?>" alt="kode" class="mt-1 block w-24">
                                </div>

                                <div class="mt-8 ">
                                    <h2 class="text-white font-bold text-2xl tracking-wide"><?php echo $member['Nama_lengkap']; ?></h2>
                                </div>
                                <p class="text-emerald-400 font-semibold mt-2.5">
                                    Berlaku sampai <br> <span><?php echo $member['expired_at']; ?></span>
                                </p>

                                
                                

                            </section>


                            </section>
                        <?php else : ?>
                            <div class="mb-4">
                                <a href="index.php" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-white bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                                    Daftar Member
                                </a>
                            </div>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>

</html>