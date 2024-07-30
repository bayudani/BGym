<?php
session_start();
require_once './config/koneksi.php';
require_once './config/midtrans-config.php';
require_once './controller/userController.php';
require_once './controller/produkController.php';
require_once './controller/transaksiController.php';

$produkController = new ProdukController($koneksi);
$transaksiController = new TransaksiController($koneksi);
// parameter action 
$action = isset($_GET['action']) ? $_GET['action'] : '';
$code = isset($_GET['code']) ? $_GET['code'] : '';

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
        // require_once './controller/userController.php';
        $controller = new UserController($koneksi);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->register($_POST['email'], $_POST['username'], $_POST['password'], $_POST['repeat_password']);
        }
        include './view/register.php';
        break;
        break;
    case 'verif':
        include './view/verif.php';
        break;
        // admin
    case 'admin':
        include './view/admin/index.php';
        break;
    case 'profile':
        include './view/profile.php';
        break;
    case 'logout':
        session_destroy();
        header('Location: index.php');
        break;
    case 'verify':
        // require_once './controller/userController.php';
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

    default:
        // require_once './controller/produkController.php';
        $controller = new ProdukController($koneksi);
        $produk = $controller->getAllProduk();
        include './view/home.php';
        break;
}
