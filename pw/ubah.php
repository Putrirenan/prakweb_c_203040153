<?php
/*
    Renandra Rahadian Putri
    203040153
    https://github.com/Putrirenan/pw2021_203040153
    Pertemuan 11 - 20 September 2022
    Mempelajari mengenai membuat Delete & Update Data
*/
?>

<?php
require 'functions.php';

// jika tidak ada id di url
if (!isset($_GET['id'])) {
  header("Location: index.php");
  exit;
}

// ambil id dari url
$id = $_GET['id'];

// query mahasiswa berdasarkan id
$b = query("SELECT * FROM buku WHERE id = $id");

// cek apakah tombol ubah sudah ditekan
if (isset($_POST['ubah'])) {
  if (ubah($_POST) > 0) {
    echo "<script>
            alert('data berhasil diubah');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal diubah!";
  }
}

?> 

<html lang="en">
  <!DOCTYPE html>
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Ubah Data Buku</title>

</head>

<body>

  <h3>Form Ubah Data Buku</h3>
    <form action="" method="POST">
      <input type="hidden" name="id" value="<?= $b['id']; ?>">
      <ul>
        <li>
          <label>
            Judul Buku :
            <input type="text" name="judul_buku" required value="<?= $b['judul_buku']; ?>">
          </label>
        </li>
        <li>
          <label>
            Penerbit :
            <input type="text" name="penerbit" required value="<?= $b['penerbit']; ?>">
          </label>
        </li>
        <li>
          <label>
            Pengarang :
            <input type="text" name="pengarang" required value="<?= $b['pengarang']; ?>">
          </label>
        </li>
        <li>
          <label>
            Tahun :
            <input type="text" name="tahun" required value="<?= $b['tahun']; ?>">
          </label>
        </li>
        <li>
            <input type="hidden" name="gambar_lama" required value="<?= $b['gambar']; ?>">
          <label>
            Gambar :
            <input type="file" name="gambar" class="gambar" onchange="previewImage()">
          </label>
            <img src="img/<?= $b['gambar']; ?>" width="120" style="display: block;" class="img-Preview">
        </li>
        <li>
          <button type="submit" name="ubah">Ubah Data!</button>
          <button type="submit"><a href="index.php">Kembali</a></button>
        </li>
      </ul>
    </form>

</body>
</html>