    <?php
    // File: controller/UserController.php
    // session_start();
    // echo 'Current directory: ' . __DIR__ . '<br>';
    // echo 'Path to User.php: ' . realpath('../model/User.php') . '<br>';
    require_once './model/user.php';
    require_once './model/produk.php';
    require_once './config/koneksi.php'; // Include file konfigurasi



    class UserController
    {
        // private $user;
        private $usermodel;

        public function __construct()
        {
            global $koneksi; // Gunakan koneksi global
            // $this->user = new User($koneksi);
            $this->usermodel = new User($koneksi);
        }

        public function index()
        {
            $users = $this->usermodel->getAllUser();
            // header("location:./?page=absen");
            include './layout/header.php'; // Memuat view dengan data
        }


        public function register($email, $username, $password, $repeat_password)
        {

            // Pengecekan apakah email sudah terdaftar
            if ($this->usermodel->isEmailRegistered($email)) {
                $_SESSION['gagal'] = 'Email ini sudah terdaftar. Silakan gunakan email lain.';
                header("Location:register");
                exit();
            }
            if ($password  === $repeat_password) {
                $hashed_password = password_hash($password, PASSWORD_DEFAULT);
                if ($this->usermodel->register($email, $username, $hashed_password)) {
                    $_SESSION['berhasil'] = 'Akun Anda telah terdaftar';
                    $_SESSION['email'] = $email;
                    header("Location:index.php?action=verif");
                    exit();
                } else {
                    $_SESSION['gagal'] = 'Terjadi kesalahan saat mendaftar.';
                    header("Location: register");
                    exit();
                }
            } else {
                $_SESSION['gagal'] = 'Password tidak sama';
                header("Location:register");
                exit();
            }
        }

        // verify(kirim code ke email)
        public function verfiy($code)
        {
            if ($this->usermodel->verifyCode($code)) {
                $_SESSION['berhasil'] = 'Email Anda telah diverifikasi';
                header("Location:/Bgym");
                exit();
            } else {
                $_SESSION['gagal'] = 'Kode verifikasi salah';
                header("Location:register");
                exit();
            }
        }

        // login
        public function login($username, $password)
        {
            $user = $this->usermodel->verifyUser($username, $password);
            if ($user) {
                if ($user['isverif'] == 1) {
                    $_SESSION['user'] = $user;
                    $_SESSION['id_user'] = $user['id_user'];
                    $_SESSION['username'] = $user['username'];
                    $_SESSION['email'] = $user['email'];
                    $_SESSION['login_status'] = true;
                    $_SESSION['login']['level'] = $user['level'];

                    // Redirect based on user level
                    if ($user['level'] === 'admin' || $user['level'] === 'admin artikel') {
                        header("Location: index.php?action=admin");
                    } else {
                        header("Location:/Bgym"); // Redirect user to index.php
                    }
                    exit();
                } else {
                    $_SESSION['error'] = 'Email anda belum terverifikasi';
                    header("Location:login");
                    exit();
                }
            } else {
                $_SESSION['error'] = 'Username or password incorrect.';
                header("Location:login");
                exit();
            }
        }
        public function logout()
        {
            header("location:Bgym ");
            session_destroy();
        }
    }
