<?php
class Produk {
    private $koneksi;
    private $table_name = "produk";

    public $id_produk;
    public $nama;
    public $harga;
    public $masa_berlaku;

    public function __construct($db) {
        $this->koneksi = $db;
    }

    public function getAllProduk() {
        $query = "SELECT * FROM " . $this->table_name;
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        return [];
    }

    public function getProdukById($id_produk) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id_produk = ?";
        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param("i", $id_produk);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>
