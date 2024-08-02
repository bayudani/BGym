<?php
class Artikel {
    private $koneksi;
    private $table_name = "artikel";

    

    public function __construct($db) {
        $this->koneksi = $db;
    }

    public function getAllArtikel($limit = 3) {
        $stmt = $this->koneksi->prepare("SELECT * FROM $this->table_name LIMIT ?");
        $stmt->bind_param("i", $limit);
        $stmt->execute();
        $result = $stmt->get_result();
        $articles = $result->fetch_all(MYSQLI_ASSOC);
        $stmt->close();
        return $articles;
    }

    public function getArtikelById($id_artikel) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id_artikel = ?";
        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param("i", $id_artikel);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>
