<?php
// include "database/config.php";
session_start();

if (!isset($_SESSION['sess_id'])) {
  header('location:login.php');
}

?>
<!doctype html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
  <script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>

  <title>Hello, world!</title>
</head>

<body>
  <div class="container py-4">
    <div class="row">
      <div class="col-7 mx-auto">
        <div class="card">
          <div class="card-body">
            <form action="tambah_data.php" method="post">
              <div class="form-group">
                <label for="kode">Kode Praktikum</label>
                <input type="text" class="form-control" id="kode" name="kode" placeholder="Masukan Kode praktikum">
                <small id="v_kode" class="text-danger"></small>
              </div>
              <div class="form-group">
                <label for="nama">Nama Praktikum</label>
                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama kamu">
                <small id="v_nama" class="text-danger"></small>
              </div>
              <div class="form-group">
                <label for="jam">Jam Praktikum</label>
                <input type="time" class="form-control" id="jam" name="jam">
                <small id="v_jam" class="text-danger"></small>
              </div>
              <div class="form-group">
                <label for="hari">Hari Praktikum</label>
                <select name="hari" id="hari" class="form-control">
                  <option value="Senin">Senin</option>
                  <option value="Selasa">Selasa</option>
                  <option value="Rabu">Rabu</option>
                  <option value="Kamis">Kamis</option>
                  <option value="Jumat">Jumat</option>
                  <option value="Sabtu">Sabtu</option>
                  <option value="Minggu">Minggu</option>
                </select>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Tambah</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    // const validasi = function(x) {
    //   var v_nim = document.getElementById('v_nim');
    //   var v_email = document.getElementById('v_email');

    //   var regex_number = /[0-9]/g
    //   var regex_char = /[a-zA-Z]/g

    //   if (x.nim.value == "" || x.nim.value.test(regex_char)) {
    //     v_nim.innerText = "Bermasalah pada kolom NIM";
    //     Swal.file('Ops...', 'masih ada yang salah!', 'error');
    //     return false;
    //   } else {
    //     v_nim.innerText = "";
    //   }

    //   if (x.email.value == "") {
    //     v_email.innerText = "Bermasalah pada kolom Email";
    //     Swal.file('Ops...', 'masih ada yang salah!', 'error');
    //     return false;
    //   } else {
    //     v_email.innerText = "";
    //   }

    //   if (syarat == 2) {
    //     return true;
    //   } else {
    //     return false;
    //   }
    // }
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>