<?php
// session_start();
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
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
                        <form method="post" action="index.php?action=register">
                            <!-- 2 column grid layout with text inputs for the first and last names -->
                            <div class="row">
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="email" id="email" class="form-control" name="email" />
                                        <label class="form-label" for="email">Email</label>
                                    </div>
                                </div>
                                <div class="col-md-6 mb-4">
                                    <div data-mdb-input-init class="form-outline">
                                        <input type="text" id="username" class="form-control" name="username" />
                                        <label class="form-label" for="username">Username</label>
                                    </div>
                                </div>
                            </div>

                            <!-- pw -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" id="Password" class="form-control" name="password" />
                                <label class="form-label" for="Password">Password</label>
                                
                            </div>

                            <!-- Password input -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="password" id="form3Example4" class="form-control" name="repeat_password" />
                                <label class="form-label" for="form3Example4">Konfirmasi password</label>
                            </div>

                            <!-- Checkbox -->
                            <!-- <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="form2Example33" checked />
                                <label class="form-check-label" for="form2Example33">
                                    Subscribe to our newsletter
                                </label>
                            </div> -->

                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Register
                            </button>

                            <!-- Register buttons -->
                            <div class="text-center">
                                <p>Sudah memiliki akun?</p>
                                <a type="button" href="index.php?action=login">
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


    <!-- <div class="container">
        <h2>Register</h2>
        
        <form method="post" action="index.php?action=register">
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="email" class="form-control" id="email" name="email">
            </div>
            <div class="form-group">
                <label for="username">Username:</label>
                <input type="text" class="form-control" id="username" name="username">
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="password" class="form-control" id="password" name="password">
            </div>
            <div class="form-group">
                <label for="repeat_password">Confirm Password:</label>
                <input type="password" class="form-control" id="repeat_password" name="repeat_password">
            </div>
            <button type="submit" class="btn btn-primary">Register</button>
        </form>

    </div> -->

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