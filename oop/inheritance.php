<?php

class Produk
{
  public $judul,
    $penulis,
    $penerbit,
    $harga,
    $jmlHalaman,
    $waktuMain;

  public function __construct(
    $judul = "judul",
    $penulis = "penulis",
    $penerbit = "penerbit",
    $harga  = 0,
    $jmlHalaman = 0,
    $waktuMain = 0
  )                                             // Constructor merupakan sebuah method yang spesial atau method yang khusus yg ada dalam sebuah kelas
  {                                             // Karna constructor adalah method yang otomatis dijalankan ketika sebuay kelas di instansiasi
    $this->judul = $judul;
    $this->penulis = $penulis;
    $this->penerbit = $penerbit;
    $this->harga = $harga;
    $this->jmlHalaman = $jmlHalaman;
    $this->waktuMain = $waktuMain;
  }

  public function getLabel()
  {
    return "$this->penulis, $this->penerbit";   // fungsi dari $this-> untuk mengambil isi dari property yang ada didalam kelas yang bersangkutan ketika dibuat instancenya
  }
  public function getInfoLengkap()
  {
    // Komik : Naruto | Masashi Kishimoto, Shonen Jump (Rp.30000) - 100 Halaman.
    $str = "{$this->tipe} : {$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

    if ($this->tipe == "Komik") {
      $str .= " -{$this->jmlHalaman} Halaman.";
    } else if ($this->tipe == "Game") {
      $str .= " ~ {$this->waktuMain} Jam.";
    }

    return $str;
  }
}

class Komik extends Produk
{
  public function getInfoProduk()
  {
    $str = "Komik : {$this->judul} |  {$this->getLabel()} (Rp. {$this->harga}) - {$this->jmlHalaman} Halaman.";
    return $str;
  }
}


class Game extends Produk
{
  public function getInfoProduk()
  {
    $str = "Game : {$this->judul} |  {$this->getLabel()} (Rp. {$this->harga}) - {$this->waktuMain} Jam.";
    return $str;
  }
}


class CetakInfoProduk
{
  public function cetak(Produk $produk)
  {
    $str = "$produk->judul | {$produk->getLabel()} (Rp.{$produk->harga})";
    return $str;
  }
}


// method adalah function yang ada didalam class
$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100, 0);
$produk2 = new Game("Uncharted", "Neil Drukmann", "Sony Computer", 250000, 0, 50);

echo $produk1->getInfoLengkap();
echo "<br>";
echo $produk2->getInfoLengkap();
