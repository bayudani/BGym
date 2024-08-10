<?php
session_start();
require_once './config/koneksi.php';
require_once './config/midtrans-config.php';
require_once './controller/userController.php';
require_once './controller/produkController.php';
require_once './controller/programController.php';
require_once './controller/transaksiController.php';
require_once './controller/artikelController.php';
require_once './controller/profileController.php';

$produkController = new ProdukController($koneksi);
$transaksiController = new TransaksiController($koneksi);
// parameter action 
$action = isset($_GET['action']) ? $_GET['action'] : '';
$code = isset($_GET['code']) ? $_GET['code'] : '';

echo '<!DOCTYPE html>';
echo '<html lang="en">';
echo '<head>';
echo '<meta charset="UTF-8">';
echo '<meta name="viewport" content="width=device-width, initial-scale=1.0">';
// Tambahkan link ke manifest.json
echo '<link rel="manifest" href="manifest.json">';
echo '<meta name="theme-color" content="#317EFB"/>';
echo '<title>BroGym</title>';
echo '</head>';
echo '<body>';


// $valid_actions = ['/','login','register','product','artikel'];
// if (!in_array($action,$valid_actions)) {
//     include './view/404.php';
//     exit();
// }
// jika action diklik
switch ($action) {
    case 'login':
        // require_once './controller/userController.php';
        $controller = new UserController($koneksi);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->login($_POST['username'], $_POST['password']);
        }
        include './view/login.php';
        break;
    case 'register':
        $controller = new UserController($koneksi);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->register($_POST['email'], $_POST['username'], $_POST['password'], $_POST['repeat_password']);
        }
        include './view/register.php';
        break;
    case 'verif':
        include './view/verif.php';
        break;
        // admin
    case 'admin':
        include './view/admin/index.php';
        break;
    case 'profile':
        // if (!isset($_SESSION['login']['status']) || $_SESSION['login']['status'] !== true) {
        //     header("Location: index.php?action=login");
        //     exit();
        // }
        $controller = new ProfileController($koneksi);
        $controller->showProfile();
        break;
    case 'kartu';
        $controller = new ProfileController($koneksi);
        $controller->showProfile();
        break;
    case 'logout':
        session_destroy();
        header('Location: index.php');
        break;
    case 'verify':
        $controller = new UserController($koneksi);
        $controller->verfiy($code);
        break;
        // case 'product & transaksi':
    case 'transaksi':
        if (isset($_GET['id_produk'])) {
            $id_produk = $_GET['id_produk'];
            $produkController->showFormTransaksi($id_produk);
        }
        break;
    case 'prosesTransaksi':
        $controller = new TransaksiController($koneksi);
        $controller->prosesTransaksi($_POST['id_produk'], $_POST['nama_lengkap'], $_POST['alamat'], $_POST['no_hp']);
        break;
    case 'detail':
        $controller = new ProgramController($koneksi);
        $id_program = $_GET['id_program'] ?? 0;
        $controller->getProgramById($id_program);
        break;
        // artikel
    case 'detailArtikel':
        $controller = new artikelController($koneksi);
        $id_artikel = $_GET['id_artikel']??0;
        $controller->getArtikelById($id_artikel);
        break;
    case 'artikel';
        $controller = new artikelController($koneksi);
        $artikel = $controller->getAllArtikell();
        $artikel3 = $controller->getAllArtikel();
        $kategori = $controller->getKategori();
        $new = $controller->getArtikelNew();
        include './view/artikel.php';
        break;
    default:
        $controller = new ProdukController($koneksi);
        $produk = $controller->getAllProduk();
        $controller = new programController($koneksi);
        $program = $controller->getAllProgram();
        $controller = new artikelController($koneksi);
        $artikel = $controller->getAllArtikel();

        include './view/home.php';
        break;
}
echo '<script>';
echo 'if ("serviceWorker" in navigator) {';
echo '  window.addEventListener("load", function() {';
echo '    navigator.serviceWorker.register("sw.js").then(function(registration) {';
echo '      console.log("Service Worker registered with scope:", registration.scope);';
echo '    }, function(error) {';
echo '      console.log("Service Worker registration failed:", error);';
echo '    });';
echo '  });';
echo '}';
echo '</script>';

echo '</body>';
echo '</html>';