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
    <link rel="stylesheet" href="./asset/style.css">
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <script src="./asset/script.js"></script> -->
    <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->
</head>

<body>

    <!-- Section: Design Block -->
    <section class="text-center">
        <!-- Background image -->
        <div class="p-5 bg-image" style="
        background-image: url('./asset/img/background.png');
        height: 300px;
        "></div>
        <!-- Background image -->

        <div class="card mx-4 mx-md-5 shadow-5-strong " style="
        margin-top: -100px;
        backdrop-filter: blur(30px);
        ">
            <div class="card-body py-5 px-md-5">

                <div class="row d-flex justify-content-center ">
                    <div class="col-lg-8">
                        <a href="index.php">
                            <h2 class="fw-bold mb-5 text-black">Login</h2>
                        </a>
                        <form method="post" action="index.php?action=login">

                            <!-- username -->
                            <div data-mdb-input-init class="form-outline mb-4">
                                <input type="text" id="username" class="form-control" name="username" />
                                <label class="form-label" for="username">Username</label>
                            </div>

                            <!-- password input -->
                            <div data-mdb-input-init class="pw form-outline mb-4">
                                <input type="password" id="pass" class="form-control" name="password" />
                                <label class="form-label" for="password">Password</label>
                                <!-- <button type="button" class="btnView" id="btnView" title="lihat password" onclick="fnView()">
                                    <i class="fa-regular fa-eye-slash"></i>
                                </button> -->
                            </div>


                            <!-- Submit button -->
                            <button type="submit" class="btn btn-primary btn-block mb-4">
                                Login
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




    <?php if (@$_SESSION['error']) { ?>
        <script>
            Swal.fire({
                icon: 'error',
                title: 'Oops!!',
                text: '<?php echo $_SESSION['error']; ?>',
            })
        </script>
    <?php unset($_SESSION['error']);
    } ?>

    <!-- MDB -->
    <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script>
    <script>
        function fnView() {
            const passwordField = document.getElementById("pass");
            const eyeIcon = document.getElementById("btnView");

            if (passwordField.value.length > 0 && passwordField.type === "password") {
                passwordField.type = "text";
                eyeIcon.innerHTML = '<i class="fa-regular fa-eye"></i>';
                eyeIcon.title = 'sembunyikan password';
            } else {
                passwordField.type = "password";
                eyeIcon.innerHTML = '<i class="fa-regular fa-eye-slash"></i>';
                eyeIcon.title = 'lihat password';
            }
        }
    </script>
</body>

</html>