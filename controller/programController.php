<?php
require_once './model/program.php';

class ProgramController {
    private $programModel;

    public function __construct($koneksi) {
        $this->programModel = new Program($koneksi);
    }

    public function getAllProgram() {
        return $this->programModel->getAllProgram();
    }

    public function showFormTransaksi($id_produk) {
        $produk = $this->programModel->getProgramById($id_produk);
        include './view/transaksi.php';
    }
}
?>
