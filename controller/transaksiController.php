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
            if (empty($_POST['nama_lengkap']) || empty($_POST['alamat']) || empty($_POST['no_hp'])) {
                $_SESSION['error'] = 'Harap isi semua field';
                // header("Location:/Bgym");
                echo "<script>
                window.history.back();
                </scrip>";
                exit;
            }
            $result = $this->transaksiModel->createTransaksi($id_user, $id_produk,$nama_lengkap, $alamat, $no_hp, $email);
            $snap_token = $result['snap_token'];
            // include './view/payment.php';
        } else {
            header("login");
        }
    }
}
?>
