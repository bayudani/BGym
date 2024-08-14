<?php
// File: model/User.php
require './vendor/autoload.php'; // Include Composer's autoloader
require './config/smtp-config.php';

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
            $this->sendVerificationEmail($email, $username, $code_verif);
            return true;
        }
        return false;
    }

    private function sendVerificationEmail($email, $username, $code_verif)
    {
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
            $mail->setFrom('from@Bgym.com', 'Bgym registrasi');
            $mail->addAddress($email, $username);     //Add a recipient


            $mail->isHTML(true);                                  //Set email format to HTML
            $mail->Subject = 'Verifikasi email anda';
            $mail->Body    = '
                <!DOCTYPE html>
                <html lang="id">
                <head>
                    <meta charset="UTF-8">
                    <meta name="viewport" content="width=device-width, initial-scale=1.0">
                    <title>Verifikasi Email</title>
                    <style>
                        body {
                            font-family: Arial, sans-serif;
                            background-color: #f4f4f4;
                            color: #333;
                            margin: 0;
                            padding: 0;
                        }
                        .container {
                            width: 100%;
                            max-width: 600px;
                            margin: 0 auto;
                            background-color: #ffffff;
                            padding: 20px;
                            border-radius: 8px;
                            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
                        }
                        h1 {
                            color: #007bff;
                        }
                        p {
                            font-size: 16px;
                            line-height: 1.5;
                        }
                        a {
                            color: #007bff;
                            text-decoration: none;
                        }
                        a:hover {
                            text-decoration:none;
                        }
                        .button {
                            display: inline-block;
                            padding: 10px 20px;
                            margin-top: 20px;
                            background-color: #007bff;
                            color: #ffffff;
                            text-align: center;
                            border-radius: 5px;
                            text-decoration: none;
                            font-weight: bold;
                        }
                    </style>
                </head>
                <body>
                
                    <div class="container">
                        <h1>Hai, ' . $username . '!</h1>
                        <p>Terimakasih sudah mendaftar di Bgym. Mohon verifikasi akun Anda dengan mengklik tombol di bawah ini:</p>
                        <a href="http://localhost/Bgym/index.php?action=verify&code=' . $code_verif . '" class="button">Verifikasi Akun</a>
                        <p>Jika Anda tidak merasa mendaftar, abaikan email ini.</p>
                        <p>Salam,<br>Tim Bgym</p>
                    </div>
                </body>
                </html>';
            // $mail->AltBody = 'This is the body in plain text for non-HTML mail clients';

            $mail->send();
            echo 'Message has ben sent';
        } catch (Exception $e) {
            echo "Message could not be sent. Mailer Error:{$mail->ErrorInfo}";
        }
    }

    // verify code
    public function verifyCode($code)
    {
        $stmt = $this->koneksi->prepare("UPDATE user SET isverif = 1 WHERE code_verif = ? AND isverif = 0");
        $stmt->bind_param("s", $code);
        return $stmt->execute() && $stmt->affected_rows > 0;
    }

    // login(verify user)
    public function verifyUser($username, $password)
    {
        $stmt = $this->koneksi->prepare("SELECT * FROM user WHERE username=?");
        $stmt->bind_param("s", $username);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            if (password_verify($password, $user['password'])) {
                return $user;
            }
        }
        return false;
    }
    public function isEmailRegistered($email)
    {
        $stmt = $this->koneksi->prepare("SELECT * FROM user WHERE email=?");
        $stmt->bind_param("s", $email);
        $stmt->execute();
        $result = $stmt->get_result();
        if ($result->num_rows > 0) {
            $user = $result->fetch_assoc();
            return $user;
        }
        return false;
    }

    public function getById($id_user)
    {
        $query = "SELECT * FROM user WHERE id_user =?";
        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param("i", $id_user);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
