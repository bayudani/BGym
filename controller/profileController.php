<?php
// require_once './config/koneksi.php';
require_once './model/user.php';
require_once './model/member.php';

class ProfileController{
    private $userModel;
    private $memberModel;

    public function __construct()
    {
        global $koneksi;
        $this->userModel= new User($koneksi);
        $this->memberModel= new Member($koneksi);
    }
    

    public function showProfile() {
        // session_start();
        // if (!isset($_SESSION['login']['status']) || $_SESSION['login']['status'] !== true) {
        //     header("Location:index.php?action=login");
        //     exit();
        // }

        $id_user = $_SESSION['id_user'];
        $user = $this->userModel->getById($id_user);
        $member = $this->memberModel->getById($id_user);
        include './view/profile.php';
    }
}




?>