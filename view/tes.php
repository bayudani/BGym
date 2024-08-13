<!-- component -->
<link rel="preconnect" href="https://fonts.googleapis.com">
<link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
<link href="https://fonts.googleapis.com/css2?family=Montserrat:wght@400;500;600;700&display=swap" rel="stylesheet">

<link rel="stylesheet" href="../asset/output.css">
<section style="font-family: Montserrat" class=" bg-[#071e34] flex font-medium items-center justify-center h-screen">
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
            Active
        </p>

        <div class="h-1 w-full bg-black mt-8 rounded-full">
            <div class="h-1 rounded-full w-2/5 bg-yellow-500 "></div>
        </div>
        <div class="mt-3 text-white text-sm">
            <span class="text-gray-400 font-semibold">Storage:</span>
            <span>40%</span>
        </div>

    </section>


</section>


<div class="font-[sans-serif] bg-white p-4">
    <div class="md:max-w-5xl max-w-xl mx-auto">
        <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
            <div class="lg:col-span-2 max-md:order-1">
                <h2 class="text-3xl font-extrabold text-gray-800">Pembayaran</h2>
                <p class="text-gray-800 text-sm mt-4">Isi data diri anda terlebih dahulu.</p>

                <form class="mt-8 max-w-lg" action="index.php?action=prosesTransaksi" method="post">
                    <input type="hidden" name="id_produk" value="<?php echo $produk['id_produk']; ?>">

                    <div class="grid gap-4">
                        <div>
                            <input type="text" placeholder="Nama Lengkap"
                                name="nama_lengkap" class="px-4 py-3.5 bg-gray-100 text-gray-800 w-full text-sm border rounded-md focus:border-purple-500 focus:bg-transparent outline-none" />
                        </div>
                        <div>

                            <input type="text" placeholder="Alamat"
                                name="alamat" class="px-4 py-3.5 bg-gray-100 text-gray-800 w-full text-sm border rounded-md focus:border-purple-500 focus:bg-transparent outline-none" />
                        </div>
                        <div>
                            <input type="number" placeholder="No HP"
                                name="no_hp" class="px-4 py-3.5 bg-gray-100 text-gray-800 w-full text-sm border rounded-md focus:border-purple-500 focus:bg-transparent outline-none" />
                        </div>
                    </div>

                    <button type="button" class="mt-8 w-40 py-3.5 text-sm bg-purple-500 text-white rounded-md hover:bg-purple-600 tracking-wide">Bayar</button>
                </form>
            </div>

            <div class="bg-gray-100 p-6 rounded-md">
                <h2 class="text-3xl font-extrabold text-gray-800"><?php echo $produk['nama'];?></h2>

                <ul class="text-gray-800 mt-8 space-y-4">
                    <li class="flex flex-wrap gap-4 text-sm">Membership<span class="ml-auto font-bold"><?php echo $produk['harga']; ?></span></li>
                    <li class="flex flex-wrap gap-4 text-sm">Promo<span class="ml-auto font-bold">Rp. 0</span></li>
                    <li class="flex flex-wrap gap-4 text-sm">PPN<span class="ml-auto font-bold">RP. 0</span></li>
                    <li class="flex flex-wrap gap-4 text-sm font-bold border-t-2 pt-4">Total <span class="ml-auto"><?php echo $produk['harga']; ?></span></li>
                </ul>
            </div>
        </div>
    </div>
</div>