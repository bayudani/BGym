<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <!-- <link rel="stylesheet" href="./asset/bootstrap/bootstrap.min.css"> -->
     <link rel="stylesheet" href="asset/output.css">
    <title>registrasi</title>
</head>
<body>
    <div class="container d-flex align-content-center mt-4 mx-auto">
        <div class="col px-10 py-16 card shadow-lg text-center">
            <div class="flex align-middle justify-center">

                <img src="asset/img/auth.svg" alt="" class=" w-12">
            </div>
        <?php if (isset($_SESSION['email'])): ?>
                <p>Kami telah mengirimkan email verifikasi, silahkan cek email Anda di <span class="text-bold text-blue-500"><?php echo htmlspecialchars($_SESSION['email']); ?> </span> </p>
            <?php else: ?>
                <p>Email untuk verifikasi tidak ditemukan.</p>
            <?php endif; ?>
        </div>
    </div>
</body>
</html>