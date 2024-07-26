<?php
session_start();
require_once './config/koneksi.php';
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
        require_once './controller/userController.php';
        $controller = new UserController($koneksi);
        if ($_SERVER['REQUEST_METHOD'] === 'POST') {
            $controller->login($_POST['username'], $_POST['password']);
        }
        include './view/login.php';
        break;
    case 'register':
        require_once './controller/userController.php';
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
    case 'profile':
        include './view/profile.php';
        break;
    case 'logout':
        session_destroy();
        header('Location: index.php');
        break;
    case 'verify':
        require_once './controller/userController.php';
        $controller = new UserController($koneksi);
        $controller->verfiy($code);
    case 'product':
        require_once './controller/produkController.php';
        $produkController = new produkController($koneksi);
        $controller->showProduk();

    default:
    // require_once './controller/produkController.php';
    // $controller = new ProdukController($koneksi);
    // // $controller = new ProdukController($koneksi);
    // $produk = $controller->getProduk();
        include './view/home.php';
        break;
}
