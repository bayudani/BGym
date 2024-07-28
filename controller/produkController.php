<?php
// require_once './model/user.php';
require_once './model/produk.php';
require_once './config/koneksi.php';

class ProdukController
{
    private $produkmodel;

    public function __construct()
    {
        global $koneksi;
        $this->produkmodel = new Produk($koneksi);
    }
    public function getProduk(){
        return $this->produkmodel->getAllProduk();
        
        // include './layout/header.php';
    }
    
    // transaksi
    public function showFormTransaksi($koneksi){

    }

    public function prosesTransaksi(){
        
    }
}
?>