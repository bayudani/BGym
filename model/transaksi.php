<?php
require_once './config/midtrans-config.php';
require_once './config/smtp-config.php';
require_once './model/member.php';

require './vendor/autoload.php'; // Include Composer's autoloader
require './config/smtp-config.php';
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

 function sendEmail($to,$subject,$body){
    global $smtpHost, $smtpAuth, $smtpUsername, $smtpPassword, $smtpSecure, $smtpPort;
    $mail = new PHPMailer(true);
    try {
        $mail->SMTPDebug = SMTP::DEBUG_OFF;                      //Enable verbose debug output
        $mail->isSMTP();                                            //Send using SMTP
        $mail->Host       = $smtpHost;                     //Set the SMTP server to send through
        $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
        $mail->Username   = $smtpUsername;                     //SMTP username
        $mail->Password   = $smtpPassword;                               //SMTP password
        $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
        $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

        //Recipients
        $mail->setFrom('no-reply@Brogym.com', 'BroGym');
        $mail->addAddress($to);     //Add a recipient

        //Content
        $mail->isHTML(true);                                  //Set email format to HTML
        $mail->Subject = $subject;
        $mail->Body    = $body;
        // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

        $mail->send();
        return true;
    } catch (Exception $e) {
        return false;
        echo "Message could not be sent. Mailer Error:{$mail->ErrorInfo}";
    }
}
class Transaksi
{
    private $koneksi;

    public function __construct($koneksi)
    {
        $this->koneksi = $koneksi;
    }

    // kirim notif email
   
    public function createTransaksi($id_user, $id_produk, $nama_lengkap, $alamat, $no_hp, $email)
    {
        $query = "INSERT INTO transaksi (id_user, id_produk) VALUES (?, ?)";
        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param("ii", $id_user, $id_produk);
        $stmt->execute();
        $transaksi_id = $stmt->insert_id;

        $query = "SELECT tanggal FROM transaksi WHERE id_transaksi = ?";
        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param("i", $transaksi_id);
        $stmt->execute();
        $result = $stmt->get_result();
        $transaksi = $result->fetch_assoc();
        $tanggal_mulai = $transaksi['tanggal'];


        // Mengambil data produk
        $query = "SELECT * FROM produk WHERE id_produk = ?";
        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param("i", $id_produk);
        $stmt->execute();
        $result = $stmt->get_result();
        $produk = $result->fetch_assoc();

        $order_id = $transaksi_id . '-' . time();
        // Membuat data transaksi untuk Midtrans
        $params = array(
            'transaction_details' => array(
                'order_id' => $order_id,
                'gross_amount' => $produk['harga'],
            ),
            'customer_details' => array(
                'first_name' => $nama_lengkap,
                // 'last_name' => "",
                'email' => $email,
                'phone' => $no_hp,
            ),
        );

        $snapToken = \Midtrans\Snap::getSnapToken($params);
        // $snapToken = \Midtrans\Snap::getSnapToken($params);
        echo "<script src='https://app.sandbox.midtrans.com/snap/snap.js' data-client-key='SB-Mid-client-vW80JDrJAPuuVX_4'></script>";
        echo "<script>
                snap.pay('$snapToken', {
                    onSuccess: function(result) {
                        console.log(result);
                        window.location.href = 'index.php?action=membership';
                    },
                    onPending: function(result) {
                        console.log(result);
                        window.location.href = 'index.php?';
                    },
                    onError: function(result) {
                        console.log(result);
                        window.location.href = 'index.php?';
                    }
                });
              </script>";
        $member = new Member($this->koneksi);
        $id_member = $member->generateMemberID();
        $expired_at = date('Y-m-d H:i:s', strtotime("+{$produk['masa berlaku']} days"));
        $member->createMember($id_member, $id_user, $nama_lengkap, $alamat, $no_hp, $expired_at);

        // kirim notif
        $subject = "Selamat, Anda telah menjadi member BroGym!";
        $body = "Selamat $nama_lengkap. Anda sekarang telah menjadi member di BroGym. Keanggotaan Anda akan berakhir pada $expired_at.";
        sendEmail($email, $subject, $body);
        return array('transaksi_id' => $transaksi_id, 'snap_token' => $snapToken);
    }

    public function getTransaksiById($id_transaksi,$transaksi)
    {
        $query = "SELECT * FROM transaksi WHERE id_transaksi = ?";
        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param("i", $id_transaksi);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();   

    }
}
