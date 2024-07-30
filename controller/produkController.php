<?php
require_once './model/produk.php';

class ProdukController {
    private $produkModel;

    public function __construct($koneksi) {
        $this->produkModel = new Produk($koneksi);
    }

    public function getAllProduk() {
        return $this->produkModel->getAllProduk();
    }

    public function showFormTransaksi($id_produk) {
        $produk = $this->produkModel->getProdukById($id_produk);
        include './view/transaksi.php';
    }
}
?>
