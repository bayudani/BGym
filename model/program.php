<?php
class Program {
    private $koneksi;
    private $table_name = "program";

    

    public function __construct($db) {
        $this->koneksi = $db;
    }

    public function getAllProgram() {
        $query = "SELECT * FROM " . $this->table_name;
        $result = mysqli_query($this->koneksi, $query);
        if ($result) {
            return mysqli_fetch_all($result, MYSQLI_ASSOC);
        }
        return [];
    }

    public function getProgramById($id_program) {
        $query = "SELECT * FROM " . $this->table_name . " WHERE id_program = ?";
        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param("i", $id_program);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>
