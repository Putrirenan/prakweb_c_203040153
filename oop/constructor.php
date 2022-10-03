<?php

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga;

  // Constructor merupakan sebuah method yang spesial atau method yang khusus yg ada dalam sebuah kelas
  // Karna constructor adalah method yang otomatis dijalankan ketika sebuay kelas di instansiasi

  public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga  = 0)
  {
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
    // fungsi dari $this-> untuk mengambil isi dari property yang ada didalam kelas yang bersangkutan ketika dibuat instancenya
  }
}

// method adalah function yang ada didalam class

$produk1 = new Produk("Naruto", "Masasi Kishimoto", "Shonen Jump", 30000);
$produk2 = new Produk("Uncharted", "Neil Drukmann", "Sony Computer", 250000);
$produk3 = new Produk("Dragon Ball");

echo "Komik : " . $produk1->getLabel();
echo "<br>";
echo "Game : " . $produk2->getLabel();
echo "<br>";
var_dump($produk3);
