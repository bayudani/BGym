<?php
class Member {
    private $koneksi;

    public function __construct($koneksi) {
        $this->koneksi = $koneksi;
    }

    public function createMember($id_member, $id_user, $nama_lengkap, $alamat, $no_hp, $expired_at) {
        $query = "INSERT INTO member (id_member, id_user, Nama_lengkap, Alamat_member, No_HP, expired_at) VALUES (?, ?, ?, ?, ?, ?)";
        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param("sissss", $id_member, $id_user, $nama_lengkap, $alamat, $no_hp, $expired_at);
        $stmt->execute();
        return $stmt->insert_id;
    }

    public function generateMemberID() {
        $prefix = "member";
        $unique = false;
        while (!$unique) {
            $randomNumber = str_pad(rand(1, 9999), 4, '0', STR_PAD_LEFT);

            $id_member = $prefix . $randomNumber;
            $query = "SELECT COUNT(*) as count FROM member WHERE id_member = ?";
            $stmt = $this->koneksi->prepare($query);
            $stmt->bind_param("s", $id_member);
            $stmt->execute();
            $result = $stmt->get_result()->fetch_assoc();
            if ($result['count'] == 0) {
                $unique = true;
            }
        }
        return $id_member;
    }

    public function getById($id_user){
        $query = "SELECT * FROM member WHERE  id_user=?";
        $stmt = $this->koneksi->prepare($query);
        $stmt->bind_param("i", $id_user);
        $stmt->execute();
        $result = $stmt->get_result();
        return $result->fetch_assoc();
    }
}
?>
