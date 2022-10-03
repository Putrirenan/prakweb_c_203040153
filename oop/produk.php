<?php

class Produk
{
  public $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga = 0;

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";
    // fungsi dari $this-> untuk mengambil isi dari property yang ada didalam kelas yang bersangkutan ketika dibuat instancenya
  }
}

// method adalah function yang ada didalam class

// $produk1 = new Produk();
// $produk1->judul = "Naruto";

// var_dump($produk1);

// $produk2 = new Produk();
// $produk2->judul = "Uncharted";
// $produk2->tambahProperty = "Reree";
// var_dump($produk2);

// instance dalam kelas produk :komik
$produk3 = new Produk();
$produk3->judul = "Naruto";
$produk3->penulis = "Masasi Kishimoto";
$produk3->penerbit = "Shonen Jump";
$produk3->harga = "30000";

// instance dalam kelas produk :game
$produk4 = new Produk();
$produk4->judul = "Uncharted";
$produk4->penulis = "Neil Druckmann";
$produk4->penerbit = "Sony Computer";
$produk4->harga = "250000";

echo "Komik : " . $produk3->getLabel();
echo "<br>";
echo "Game : " . $produk4->getLabel();
