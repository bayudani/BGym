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
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" /> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <link rel="stylesheet" href="./asset/output.css">
    <link rel="stylesheet" href="./asset/output.css">

    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script src="./asset/script.js"></script>
    <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->
</head>

<body>

    <!-- Section: Design Block -->
    <div class="font-[sans-serif]">
        <div class="grid lg:grid-cols-2 gap-4 max-lg:gap-12 bg-[url(../asset/img/background.png)] px-8 py-12 h-[320px]">
            <div>
                <a href="javascript:void(0)"><img
                        src="./asset/img/logo.png" alt="logo" class='w-40' />
                </a>
                <div class="max-w-lg mt-16 max-lg:hidden">
                    <h3 class="text-3xl font-bold text-white">Login</h3>
                    <p class="text-sm mt-4 text-white">Lorem ipsum dolor sit amet consectetur adipisicing elit. Hic perspiciatis excepturi quo, adipisci quas natus ipsa eaque dolores ab numquam?</p>
                </div>
            </div>

            <div class="bg-white rounded-xl sm:px-6 px-4 py-8 max-w-md w-full h-max shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] max-lg:mx-auto">
                <form method="post" action="index.php?action=login">
                    <div class="mb-8">
                        <h3 class="text-3xl font-extrabold text-gray-800">Login</h3>
                    </div>
                    <div>
                        <label class="text-gray-800 text-sm mb-2 block">Username</label>
                        <div class="relative flex items-center">
                            <input name="username" type="text" required class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-md outline-blue-600" placeholder="Enter username" />
                            <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-4" viewBox="0 0 24 24">
                                <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                                <path d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z" data-original="#000000"></path>
                            </svg>
                        </div>
                    </div>
                    <div class="mt-4">
                        <label class="text-gray-800 text-sm mb-2 block">Password</label>
                        <div class="relative flex items-center">
                            <input name="password" type="password" required id="pass" class="w-full text-sm text-gray-800 border border-gray-300 px-4 py-3 rounded-md outline-blue-600" placeholder="Enter password" />
                            <button type="button" class="w-[18px] h-[18px] absolute right-4 cursor-pointer" id="btnView" onclick="fnView()">
                                <i class="fa-regular fa-eye w-[18px] h-[18px] absolute right-4 cursor-pointer" ></i>
                            </button>
                        </div>
                    </div>
                    <div class="mt-4 text-right">
                        <a href="" class="text-blue-600 text-sm font-semibold hover:underline">
                            Lupa password?
                        </a>
                    </div>

                    <div class="mt-8">
                        <button type="submit" class="w-full shadow-xl py-3 px-6 text-sm font-semibold rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none">
                            Login
                        </button>
                    </div>
                    <p class="text-sm mt-8 text-center text-gray-800">Belum memiliki akun?<a href="register" class="text-blue-600 font-semibold hover:underline ml-1 whitespace-nowrap">Register</a></p>
                </form>
            </div>
        </div>
    </div>

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
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script> -->
    
</body>

</html>