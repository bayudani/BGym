<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>kartu</title>
    <link rel="stylesheet" href="./asset/output.css">
</head>

<body>
    <div class="w-full px-4">
        <div class="bg-white shadow-md rounded-lg overflow-hidden mb-4">
            <div class="bg-white px-4 py-2">
                <h2 class="font-semibold text-lg text-gray-700">Detail Membership</h2>
            </div>
            <div class="px-4 py-4">
                <?php if ($member) : ?>
                    <section class="w-64 m  ml-10 bg-white rounded-2xl px-8 py-6 shadow-lg">
                        <div class="flex items-center justify-star">
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
                            <h2 class="text-gray-700 font-bold text-2xl tracking-wide"><?php echo $member['Nama_lengkap']; ?></h2>
                        </div>
                        <p class="text-emerald-400 font-semibold mt-2.5">
                            Berlaku sampai <br> <span><?php echo $member['expired_at']; ?></span>
                        </p>




                    </section>


                    </section>
                <?php else : ?>
                    <div class="mb-4">
                        <a href="index.php" class="inline-flex items-center px-4 py-2 border border-transparent text-sm font-medium rounded-md shadow-sm text-gray-700 bg-indigo-600 hover:bg-indigo-700 focus:outline-none focus:ring-2 focus:ring-offset-2 focus:ring-indigo-500">
                            Daftar Member
                        </a>
                    </div>
                <?php endif; ?>
            </div>
        </div>
    </div>

    <script>
        window.print();
    </script>
</body>

</html>