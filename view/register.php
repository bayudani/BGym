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
    <!-- <link href="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.min.css" rel="stylesheet" /> -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0/css/all.min.css" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700&display=swap" rel="stylesheet" />
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <!-- <link rel="stylesheet" href="sweetalert2.min.css"> -->
    <link rel="stylesheet" href="./asset/output.css">

</head>

<body>



    <div class="font-[sans-serif] relative">
        
        <div class="h-[240px] font-[sans-serif]">
            <img src="./asset/img/background.png" alt="Banner Image" class="w-full h-full object-cover" />
        </div>

        <div class="relative -mt-40 m-4">
            <form class="bg-white max-w-xl w-full mx-auto shadow-[0_2px_10px_-3px_rgba(6,81,237,0.3)] p-8 rounded-2xl" method="post" action="index.php?action=register">
                <div class="mb-12">
                    <h3 class="text-gray-800 text-3xl font-bold text-center">Register</h3>
                </div>

                <div>
                    <label class="text-gray-800 text-xs block mb-2">Username</label>
                    <div class="relative flex items-center">
                        <input name="username" type="text"  class="w-full bg-transparent text-sm text-gray-800 border-b border-gray-300 focus:border-blue-500 px-2 py-3 outline-none" placeholder="Username"  id="username"/>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-2" viewBox="0 0 24 24">
                            <circle cx="10" cy="7" r="6" data-original="#000000"></circle>
                            <path d="M14 15H6a5 5 0 0 0-5 5 3 3 0 0 0 3 3h12a3 3 0 0 0 3-3 5 5 0 0 0-5-5zm8-4h-2.59l.3-.29a1 1 0 0 0-1.42-1.42l-2 2a1 1 0 0 0 0 1.42l2 2a1 1 0 0 0 1.42 0 1 1 0 0 0 0-1.42l-.3-.29H22a1 1 0 0 0 0-2z" data-original="#000000"></path>
                        </svg>
                    </div>
                </div>

                <div class="mt-8">
                    <label class="text-gray-800 text-xs block mb-2">Email</label>
                    <div class="relative flex items-center">
                        <input name="email" type="text"  class="w-full bg-transparent text-sm text-gray-800 border-b border-gray-300 focus:border-blue-500 px-2 py-3 outline-none" placeholder="example@gmail.com"  id="email"/>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-2" viewBox="0 0 682.667 682.667">
                            <defs>
                                <clipPath id="a" clipPathUnits="userSpaceOnUse">
                                    <path d="M0 512h512V0H0Z" data-original="#000000"></path>
                                </clipPath>
                            </defs>
                            <g clip-path="url(#a)" transform="matrix(1.33 0 0 -1.33 0 682.667)">
                                <path fill="none" stroke-miterlimit="10" stroke-width="40" d="M452 444H60c-22.091 0-40-17.909-40-40v-39.446l212.127-157.782c14.17-10.54 33.576-10.54 47.746 0L492 364.554V404c0 22.091-17.909 40-40 40Z" data-original="#000000"></path>
                                <path d="M472 274.9V107.999c0-11.027-8.972-20-20-20H60c-11.028 0-20 8.973-20 20V274.9L0 304.652V107.999c0-33.084 26.916-60 60-60h392c33.084 0 60 26.916 60 60v196.653Z" data-original="#000000"></path>
                            </g>
                        </svg>
                    </div>
                </div>

                <div class="mt-8">
                    <label class="text-gray-800 text-xs block mb-2">Password</label>
                    <div class="relative flex items-center">
                        <input name="password" type="password"  class="w-full bg-transparent text-sm text-gray-800 border-b border-gray-300 focus:border-blue-500 px-2 py-3 outline-none" placeholder="password" id="password"/>
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-2 cursor-pointer" viewBox="0 0 128 128">
                            <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                        </svg>
                    </div>
                </div>
                <div class="mt-8">
                    <label class="text-gray-800 text-xs block mb-2">Konfirmasi Password</label>
                    <div class="relative flex items-center">
                        <input name="repeat_password" type="password"  class="w-full bg-transparent text-sm text-gray-800 border-b border-gray-300 focus:border-blue-500 px-2 py-3 outline-none" placeholder="password" id="konfirmasi_pass" />
                        <svg xmlns="http://www.w3.org/2000/svg" fill="#bbb" stroke="#bbb" class="w-[18px] h-[18px] absolute right-2 cursor-pointer" viewBox="0 0 128 128">
                            <path d="M64 104C22.127 104 1.367 67.496.504 65.943a4 4 0 0 1 0-3.887C1.367 60.504 22.127 24 64 24s62.633 36.504 63.496 38.057a4 4 0 0 1 0 3.887C126.633 67.496 105.873 104 64 104zM8.707 63.994C13.465 71.205 32.146 96 64 96c31.955 0 50.553-24.775 55.293-31.994C114.535 56.795 95.854 32 64 32 32.045 32 13.447 56.775 8.707 63.994zM64 88c-13.234 0-24-10.766-24-24s10.766-24 24-24 24 10.766 24 24-10.766 24-24 24zm0-40c-8.822 0-16 7.178-16 16s7.178 16 16 16 16-7.178 16-16-7.178-16-16-16z" data-original="#000000"></path>
                        </svg>
                    </div>
                </div>

                <div class="flex items-center mt-8">
                    <input id="remember-me" name="remember-me" type="checkbox" class="h-4 w-4 shrink-0 rounded" />
                    <label for="remember-me" class="ml-3 block text-sm">
                        I accept the <a href="javascript:void(0);" class="text-blue-500 font-semibold hover:underline ml-1">Terms and Conditions</a>
                    </label>
                </div>

                <div class="mt-8">
                    <button type="submit" class="w-full shadow-xl py-2.5 px-5 text-sm font-semibold tracking-wider rounded-md text-white bg-blue-600 hover:bg-blue-700 focus:outline-none transition-all" >
                        Register
                    </button>
                    <p class="text-gray-800 text-sm mt-8 text-center">Already have an account? <a href="login" class="text-blue-500 font-semibold hover:underline ml-1">Login here</a></p>
                </div>
            </form>
        </div>
    </div>

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
                text: '<?php echo $_SESSION['berhasil']; ?>',
            })
        </script>
    <?php unset($_SESSION['berhasil']);
    } ?>

    <?php if (@$_SESSION['gagal']) { ?>
        <script>
            Swal.fire({
                icon: 'warning',
                title: 'Oops!',
                text: '<?php echo $_SESSION['gagal']; ?>',
            })
        </script>
    <?php unset($_SESSION['gagal']);
    } ?>

    <!-- MDB -->
    <!-- <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/mdb-ui-kit/7.3.2/mdb.umd.min.js"></script> -->
    <script src="./asset/script.js"></script>
</body>

</html>