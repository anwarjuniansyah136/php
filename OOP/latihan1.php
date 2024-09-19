<?php
class Produk{
    public  $judul = "judul",
            $penulis = "penulis",
            $penerbit = "penerbit",
            $harga = 0;
    
    public function __construct($judul,$penulis,$penerbit,$harga){
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
    public function getLabel(){
        return "$this->penulis,$this->penerbit";
    }
}

// instansiasi
$produk1 = new Produk("naruto","mashashi kinomoto","shonen jump",3000);
?>