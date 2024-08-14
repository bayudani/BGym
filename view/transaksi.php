<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Transaksi</title>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="/Bgym/asset/output.css">
    <link rel="stylesheet" href="/Bgym/asset/output.css">

    <!-- <link rel="stylesheet" href="./asset/output.css"> -->

</head>

<body>
    <!-- Section: Design Block -->


    <div class="font-[sans-serif] bg-white p-4">
        <div class="md:max-w-5xl max-w-xl mx-auto">
            <div class="grid md:grid-cols-2 lg:grid-cols-3 gap-8">
                <div class="lg:col-span-2 max-md:order-1">
                    <h2 class="text-3xl font-extrabold text-gray-800">Pembayaran</h2>
                    <p class="text-gray-800 text-sm mt-4">Isi data diri anda terlebih dahulu.</p>

                    <form class="mt-8 max-w-lg" action="transaksi" method="post">
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
                                <input type="number" placeholder="No WhatsApp Aktif"
                                    name="no_hp" class="px-4 py-3.5 bg-gray-100 text-gray-800 w-full text-sm border rounded-md focus:border-purple-500 focus:bg-transparent outline-none" />
                            </div>
                        </div>

                        <button type="sumbit" class="mt-8 w-40 py-3.5 text-sm bg-primary-700 hover:bg-primary-800 text-white rounded-md  tracking-wide">Bayar</button>
                    </form>
                </div>

                <div class="bg-gray-100 p-6 rounded-md">
                    <h2 class="text-3xl font-extrabold text-gray-800"><?php echo $produk['nama']; ?></h2>
                    <h2 class="text-2xl  text-gray-800">Masa berlaku <span class="text-xl"><?php echo $produk['masa berlaku']; ?> hari</span></h2>

                    <ul class="text-gray-800 mt-8 space-y-4">
                        <li class="flex flex-wrap gap-4 text-sm">Membership<span class="ml-auto font-bold harga">Rp. <?php echo $produk['harga']; ?></span></li>
                        <li class="flex flex-wrap gap-4 text-sm">Promo<span class="ml-auto font-bold">Rp. 0</span></li>
                        <li class="flex flex-wrap gap-4 text-sm">PPN<span class="ml-auto font-bold">Rp. 0</span></li>
                        <li class="flex flex-wrap gap-4 text-sm font-bold border-t-2 pt-4">Total <span class="ml-auto harga">Rp. <?php echo $produk['harga']; ?></span></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>

    <!-- Section: Design Block -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>
    <script src="./asset/script.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>

    

    <script>
        document.querySelector("form").addEventListener("submit", function(event) {
            let isValid = true;

            // Ambil semua input yang harus divalidasi
            const inputs = document.querySelectorAll("input");

            // Periksa setiap input
            inputs.forEach(function(input) {
                if (!input.value.trim()) {
                    input.classList.add("border-red-500"); // Tambahkan border merah jika kosong
                    isValid = false;
                } else {
                    input.classList.remove("border-red-500"); // Hapus border merah jika tidak kosong
                }
            });

            // Jika ada yang kosong, jangan kirim form
            if (!isValid) {
                event.preventDefault();
                Swal.fire({
                icon: 'error',
                title: 'Oops!!',
                text: 'Harap isi semua field',
            })
                // alert("Semua bidang harus diisi.");
            }
        });
    </script>

   

</body>

</html>