<?
// require_once './model/user.php';
require_once './model/produk.php';
require_once './config/koneksi.php';

class ProdukController
{
    private $produkmodel;

    public function __construct($db)
    {
        global $koneksi;
        $this->produkmodel = new Produk($koneksi);
    }
    public function getProduk(){
        $produk = $this->produkmodel->getAllProduk();
        return $produk;
        // include './layout/header.php';
    }
}
?>