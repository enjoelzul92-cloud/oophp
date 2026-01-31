<?php 
// membuat class baru yang bernama Produk
class Produk {
    public  $kode_produk,
            $nama_produk,
            $satuan_produk,
            $harga_produk,
            $kategori_produk,
            $status_transaksi;

    public function __construct($kode_produk, $nama_produk, $satuan_produk,
                                $harga_produk, $kategori_produk, $status_transaksi)
                    { 
                    $this->kode_produk = $kode_produk;
                    $this->nama_produk = $nama_produk;
                    $this->satuan_produk = $satuan_produk;
                    $this->harga_produk = $harga_produk;
                    $this->kategori_produk = $kategori_produk;  
                    $this->status_transaksi = $status_transaksi;
                    }

    public function cetakHargaProduk() {
        return "$this->kode_produk, $this->nama_produk, Rp. $this->harga_produk";
    }
}

$produk1 = new Produk("SKU/10001", "Kasino", "Pcs", 5500, "Produk jadi",
                "Jual");
echo $produk1->cetakHargaProduk();




?>