<?php
require 'functions.php';

// cek apakah tombol tambah sudah ditekan
if (isset($_POST['tambah'])) {
  if (tambah($_POST) > 0) {
    echo "<script>
            alert('data berhasil ditambahkan');
            document.location.href = 'index.php';
         </script>";
  } else {
    echo "data gagal ditambahkan!";
  }
}

?> 

<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Tambah Data Buku</title>

    <!-- Import Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
    integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">

</head>

<body>

  <h3>Form Tambah Data Buku</h3>

    <form action="" method="POST">
      <ul>
        <li>
          <label>
            Judul Buku:
            <input class="form-control" type="text" name="judul_buku" autofocus required>
          </label>
        </li>
        <li>
          <label>
            Penerbit :
            <input class="form-control" type="text" name="penerbit" required>
          </label>
        </li>
        <li>
          <label>
            Pengarang :
            <input class="form-control" type="text" name="pengarang" required>
          </label>
        </li>
        <li>
          <label>
            Tahun :
            <input class="form-control" type="text" name="tahun" required>
          </label>
        </li>
        <li>
          <label>
              Gambar :
              <input class="form-control" type="file" name="gambar" class="gambar" onchange="previewImage()">
          </label>
            <img src="img/a.png" width="120" style="display: block;" class="img-preview">
        </li>
        <li>
          <button class="link-dark btn btn-sm" type="submit" name="tambah" style=" background-color: #7986cb; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
          <a style=" text-decoration:none; color: white;" href="tambah.php?id=<?= $b['id']; ?>">Tambah Data</a></button>
          <button class="link-dark btn btn-sm" type="submit" name="kembali" style=" background-color: #7986cb; text-shadow: 2px 2px 4px rgba(0, 0, 0, 0.3);">
          <a style=" text-decoration:none; color: white;" href="index.php" >Kembali</a></button>
        </li>
      </ul>
    </form>

</body>
</html>