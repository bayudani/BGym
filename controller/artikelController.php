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
                $article['formatted_date'] = $datetime->format('d-m-Y');
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
}
