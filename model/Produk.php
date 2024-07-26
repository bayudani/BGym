<?php
class Produk {
    private $koneksi;
    private $table_name = "produk";

    public $id;
    public $name;
    public $price;
    public $duration;

    public function __construct($db) {
        $this->koneksi = $db;
    }

    public function getAllProduk() {
        $query = "SELECT * FROM " . $this->table_name;
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }
}
?>
