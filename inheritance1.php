<?php
class Produk {
    public  $judul,
            $penulis,
            $penerbit,
            $harga,
            $jmlHalaman,
            $waktuMain,
            $tipe
            ;

    public function __construct($judul, $penulis, $penerbit, $harga, $jmlHalaman, $waktuMain, $tipe) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
        $this->jmlHalaman = $jmlHalaman;
        $this->waktuMain = $waktuMain;
        $this->tipe = $tipe;
    }

    public function getLebel() {
        return "$this->penulis, $this->penerbit";
    }

    public function tampilDetail() {
        $str = "{$this->tipe} : {$this->judul} | {$this->getLebel()} (Rp. {$this->harga})";
        if($this->tipe == "Komik") {
            $str .= " - {$this->jmlHalaman} Halaman.";
        } else if ($this->tipe == "Game") {
            $str .= " ~ {$this->waktuMain} Jam.";
        } return $str;
    }
}

class CetakInfoProduk {
    public function Cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLebel()}, (Rp. {$produk->harga})";
        return $str;
        }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Produk("Uncharted", "Nail Druckmann", "Sony Computer", 250000, 0, 50, "Game");

echo $produk1->tampilDetail();
echo "<br>";
echo $produk2->tampilDetail();



?>