<?php
include "database/config.php";
session_start();

if (!isset($_SESSION['sess_id'])) {
  header('location:login.php');
}

$query = "SELECT * FROM praktikum";
$sql = mysqli_query($conn, $query);

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">

  <title>Hello, world!</title>
</head>

<body>
  <div class="container py-4">
    <div class="row py-3">
      <div class="col-10 mx-auto">
        <a href="tambah.php" class="btn btn-primary float-right">Tambah KRS</a>
      </div>
    </div>
    <div class="row">
      <div class="col-10 mx-auto">
        <table class="table table-striped">
          <thead>
            <th>Kode Praktikum</th>
            <th>Nama Praktikum</th>
            <th>Jam Praktikum</th>
            <th>Hari Praktikum</th>
            <th>Aksi</th>
          </thead>
          <tbody>
            <?php if ($sql) : ?>
              <?php while ($data = mysqli_fetch_array($sql)) : ?>
                <tr>
                  <td><?= $data['kode_praktikum'] ?></td>
                  <td><?= $data['nama_praktikum'] ?></td>
                  <td><?= $data['jam_praktikum'] ?></td>
                  <td><?= $data['hari_praktikum'] ?></td>
                  <td>
                    <a href='hapus.php?id=$data[kode_praktikum]' class="badge badge-danger badge-small">Hapus</a>
                  </td>
                </tr>
              <?php endwhile; ?>
            <?php else : ?>
              <tr>
                <td colspan=5>Tidak ada data</td>
              </tr>
            <?php endif; ?>
          </tbody>
        </table>
      </div>
    </div>
  </div>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>