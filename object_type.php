<?php
class Produk {
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;

    public function __construct($judul, $penulis, $penerbit, $harga) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }

    public function getLebel() {
        return "$this->penulis, $this->penerbit";
    }

}

class CetakInfoProduk {
    public function Cetak(Produk $produk) {
        $str = "{$produk->judul} | {$produk->getLebel()}, (Rp. {$produk->harga})";
        return $str;
        }
}

$produk1 = new Produk("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Nail Druckmann", "Sony Computer", 250000);


echo "komik : " . $produk1->getLebel();
echo "<br>";
echo "Game : " . $produk2->getLebel();
echo "<br>";
$infoProduk1 = new CetakInfoProduk();
echo $infoProduk1->Cetak($produk1);

?>