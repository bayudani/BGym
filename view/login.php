
<div class="container">
    <h2>Login</h2>
    <?php if (isset($_SESSION['error'])): ?>
        <div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
        <?php unset($_SESSION['error']); ?>
    <?php endif; ?>
    <form method="post" action="index.php?action=login">
        <div class="form-group">
            <label for="username">Username:</label>
            <input type="text" class="form-control" id="username" name="username" required>
        </div>
        <div class="form-group">
            <label for="password">Password:</label>
            <input type="password" class="form-control" id="password" name="password" required>
        </div>
        <button type="submit" class="btn btn-primary">Login</button>
    </form>
</div>

<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <!-- <link rel="stylesheet" href="./asset/bootstrap/bootstrap.min.css"> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" />
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->
</head>

<body>

    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image"  style="
        background-image: url('./asset/img/background.png');
        height: 300px;
        "></div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong " style="
        margin-top: -100px;
        backdrop-filter: blur(30px);
        " >
            <div class="card-body py-5 px-md-5">
                <?php if (isset($_SESSION['error'])) : ?>
                    <div class="alert alert-danger"><?php echo $_SESSION['error']; ?></div>
                    <?php unset($_SESSION['error']); ?>
                <?php endif; ?>
                <div class="row d-flex justify-content-center ">
                    <div class="col-lg-8">
                        <h2 class="fw-bold mb-5">Sign up now</h2>
                        <form method="post" action="index.php?action=login">

                            <!-- username -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="username" class="form-control" name="username" />
                                <label class="form-label" for="username">Username</label>
                            </div>

                            <!-- password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" id="password" class="form-control" name="password" />
                                <label class="form-label" for="password">Password</label>
                            </div>


                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Register
                            </button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Belum memiliki akun?</p>
                                <a type="button" href="index.php?action=register">
                                    <i class="fa-solid fa-right-to-bracket"></i>
                                </a>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Section: Design Block -->


   

    <?php if (@$_SESSION['berhasil']) { ?>
        <script>
            Swal.fire({
                icon: 'success',
                title: 'yeay',
                text: 'cek email verfikikasi',
            })
        </script>
    <?php unset($_SESSION['berhasil']);
    } ?>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>
</body>

</html>

<?php if (@$_SESSION['error']) { ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Gagal',
                text: 'Username atau password salah',
            })
        </script>
    <?php unset($_SESSION['error']);
    } ?>

