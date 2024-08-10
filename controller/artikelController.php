<?php
require_once './model/artikel.php';

class artikelController
{
    private $artikelModel;

    public function __construct($koneksi)
    {
        $this->artikelModel = new Artikel($koneksi);
    }

    public function getAllArtikel()
    {
        // Mendapatkan 3 artikel dari model
        $articles = $this->artikelModel->getAllArtikel(3);

        // Memformat tanggal untuk setiap artikel
        foreach ($articles as &$article) {
            if (isset($article['date'])) {
                $datetime = new DateTime($article['date']);
                $article['formatted_date'] = $datetime->format('F-d-Y');
            }
            // Membatasi jumlah karakter pada isi artikel
            $isi = $article['isi'];
            $maxLength = 200; // Panjang maksimal karakter yang ditampilkan
            if (strlen($isi) > $maxLength) {
                $excerpt = substr($isi, 0, strrpos(substr($isi, 0, $maxLength), ' ')) . '...';
            } else {
                $excerpt = $isi;
            }
            $article['excerpt'] = $excerpt;
        }

        return $articles;
    }

    public function getAllArtikell() {
        $artikel = $this->artikelModel->GetAllArtikell();
        foreach ($artikel as &$artikels) {
            $isi = $artikels['isi'];
            $max=50; //panjang karaketer
            if (strlen($isi)>$max) {
                $return = substr($isi,0,strrpos(substr($isi,0,$max),' ')).'...';
            }else{
                $return = $isi;
            }
            $artikels['return'] = $return;
        }
        return $artikel;
    }
    
    // artikel by id
    public function getArtikelById($id_artikel){
        $artikel = $this->artikelModel->getArtikelById($id_artikel);
        if ($artikel) {
            include './view/detail_artikel.php';
        }else{
            echo "Artikel tidak ditemukan";
        }
        // return $artikel;
    }

    public function getKategori(){
        $kategori = $this->artikelModel->getKategoriWithCount();
        return $kategori;
    }

   public function getArtikelNew() {
    // Ambil artikel terbaru dari model
    $artikelNew = $this->artikelModel->getArtikelNew();

    // Pastikan ada data yang diambil
    if (isset($artikelNew['date'])) {
        // Buat objek DateTime dengan tanggal dari artikel
        $dateTime = new DateTime($artikelNew['date']);
        // Format tanggal menjadi format yang diinginkan
        $artikelNew['formatted_date'] = $dateTime->format('F d, Y'); // Mengubah format tanggal sesuai kebutuhan
    } else {
        // Jika tidak ada tanggal, set formatted_date ke string kosong atau default
        $artikelNew['formatted_date'] = 'Tanggal tidak tersedia';
    }

    return $artikelNew;
}

}
