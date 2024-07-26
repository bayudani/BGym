<?php

require_once './config/koneksi.php';
require_once './model/User.php';

if (isset($_GET['code'])) {
    $code = $_GET['code'];
    $userModel = new User($koneksi);

    // Verify code
    $stmt = $koneksi->prepare("UPDATE user SET is_verfi = 1 WHERE code_verif = ?");
    $stmt->bind_param("s", $code);

    if ($stmt->execute()) {
        echo "Email verified successfully! You can now <a href='index.php?action=login'>login</a>.";
    } else {
        echo "Verification failed.";
    }
} else {
    echo "Invalid verification code.";
}
?>

