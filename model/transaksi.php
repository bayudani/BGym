<?php
require_once './config/midtrans-config.php';
require_once './model/member.php';

class Transaksi
{
    private $koneksi;

    public function __construct($koneksi)
    {
        $this->koneksi = $koneksi;
    }

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
