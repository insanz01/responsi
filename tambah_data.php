<?php

include "database/config.php";

if (isset($_POST['nama'])) {
  $kode = $_POST['kode'];
  $nama = $_POST['nama'];
  $jam = $_POST['jam'];
  $hari = $_POST['hari'];

  $query = "INSERT INTO praktikum values('$kode', '$nama', '$jam', '$hari')";

  if (mysqli_query($conn, $query)) {
    header('location:index.php');
  } else {
    echo "<script>
            var aksi = alert('Gagal ditambahkan');
            if(aksi) window.location.href = 'http://localhost/tambah.php';
          </script>";
  }
} else {
  echo "<script>
            var aksi = alert('Aksi ini tidak boleh');
            if(aksi) window.location.href = 'http://localhost/index.php';
          </script>";
}
