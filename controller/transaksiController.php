<?php
require_once './model/transaksi.php';

class TransaksiController {
    private $transaksiModel;

    public function __construct($koneksi) {
        $this->transaksiModel = new Transaksi($koneksi);
    }

    public function prosesTransaksi($id_produk, $nama_lengkap, $alamat, $no_hp) {
        // session_start();

        if (isset($_SESSION['id_user'])) {
            $id_user = $_SESSION['id_user'];
            $email = $_SESSION['email']; // Ambil email dari session
            $result = $this->transaksiModel->createTransaksi($id_user, $id_produk,$nama_lengkap, $alamat, $no_hp, $email);
            $snap_token = $result['snap_token'];
            // include './view/payment.php';
        } else {
            header("location:index.php?action=login");
        }
    }
}
?>
