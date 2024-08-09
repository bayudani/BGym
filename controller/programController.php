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

    public function getProgramById($id_program){
        $program = $this->programModel->getProgramById($id_program);
        if ($program) {
            include './view/detail_program.php';
        } else {
            echo "Artikel tidak ditemukan.";
        }
    }
}
?>
