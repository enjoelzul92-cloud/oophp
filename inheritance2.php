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
        return $str;
    }
}

class Komik extends Produk {
    public function getInfoProduk() {
        $str = "{$this->tampilDetail()} - {$this->jmlHalaman} Halaman.";
        return $str;
    }
}

class Game extends Produk {
    public function getInfoProduk() {
        $str = "{$this->tampilDetail()} ~ {$this->waktuMain} Jam.";
        return $str;
    }
}

class CetakInfoProduk {
    public function Cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLebel()}, (Rp. {$produk->harga})";
        return $str;
        }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0, "Komik");
$produk2 = new Game("Uncharted", "Nail Druckmann", "Sony Computer", 250000, 0, 50, "Game" );

echo $produk1->getInfoProduk();
echo "<br>";
echo $produk2->getInfoProduk();



?>