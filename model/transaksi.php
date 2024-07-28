<?php
require_once './vendor/autoload.php';
require_once './config/midtrans_config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class Transaksi{
    private $koneksi;
    private $table_name = "transaksi";
    private $transaksi_id;

    public function __construct($db){
        $this->koneksi = $db;
    }
}
?>