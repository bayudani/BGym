<?php
// File: model/User.php
require './vendor/autoload.php'; // Include Composer's autoloader
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;
use PHPMailer\PHPMailer\Exception;

class User
{
    private $koneksi;

    public function __construct($db)
    {
        $this->koneksi = $db;
    }

    public function getAllUser()
    {
        $query = "SELECT * FROM user";
        $result = mysqli_query($this->koneksi, $query);
        return $result;
    }

    // register
    public function register($email, $username, $password)
    {
        $code_verif = md5($email . time());
        $stmt = $this->koneksi->prepare("INSERT INTO user (email,username,password,code_verif ) VALUES (?,?,?,?)");
        $stmt->bind_param("ssss", $email, $username, $password, $code_verif);
        if ($stmt->execute()) {
            $this->sendVerificationEmail($email,$username, $code_verif);
            return true;
        }
        return false;
    }

    private function sendVerificationEmail($email,$username, $code_verif)
    {
        $mail = new PHPMailer(true);
        try {
            $mail->SMTPDebug = SMTP::DEBUG_SERVER;                      //Enable verbose debug output
            $mail->isSMTP();                                            //Send using SMTP
            $mail->Host       = 'smtp.gmail.com';                     //Set the SMTP server to send through
            $mail->SMTPAuth   = true;                                   //Enable SMTP authentication
            $mail->Username   = 'bgym8705@gmail.com';                     //SMTP username
            $mail->Password   = 'xclg xwqm jvoc fzea';                               //SMTP password
            $mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS;            //Enable implicit TLS encryption
            $mail->Port       = 465;                                    //TCP port to connect to; use 587 if you have set `SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS`

            //Recipients
            $mail->setFrom('from@Brogym.com', 'BroGym registrasi');
            $mail->addAddress($email, $username);     //Add a recipient
             
            //Content
            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Verifikasi email anda';
            $mail->Body    = 'Hai ' . $username. ' Terimakasih sudah mendaftar di brogym, <br> Mohon verifikasi akun anda <a href="http://localhost/BroGym/index.php?action=verify&code=' . $code_verif . '"><strong> di sini</strong></a>.';
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has ben sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error:{$mail->ErrorInfo}";
        }
    }

    // verify code
    public function verifyCode($code){
        $stmt = $this->koneksi->prepare("UPDATE user SET isverif = 1 WHERE code_verif = ? AND isverif = 0");
        $stmt->bind_param("s", $code);
        return $stmt->execute() && $stmt->affected_rows > 0;
    }

    // login(verify user)
    public function verifyUser($username, $password){
        $stmt = $this->koneksi->prepare("SELECT * FROM user WHERE username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password,$user['password'])) {
                return $user;
            }
        }
        return false;

    }
}
