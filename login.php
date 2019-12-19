<?php
// include "database/config.php";
session_start();

if (isset($_SESSION['sess_id'])) {
  header('location:index.php');
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
            <form action="cek_login.php" method="post" onsubmit="return validasi(this)">
              <div class="form-group">
                <label for="nim">NIM</label>
                <input type="text" class="form-control" id="nim" name="nim" placeholder="Masukan NIM kamu">
                <small id="v_nim" class="text-danger"></small>
              </div>
              <div class="form-group">
                <label for="email">Email</label>
                <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email kamu">
                <small id="v_email" class="text-danger"></small>
              </div>
              <div class="form-group">
                <button type="submit" class="btn btn-primary btn-block">Masuk</button>
              </div>
            </form>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script>
    const validasi = function(x) {
      var v_nim = document.getElementById('v_nim');
      var v_email = document.getElementById('v_email');

      var regex_number = /[0-9]/g
      var regex_char = /[a-zA-Z]/g

      if (x.nim.value == "" || x.nim.value.test(regex_char)) {
        v_nim.innerText = "Bermasalah pada kolom NIM";
        Swal.file('Ops...', 'masih ada yang salah!', 'error');
        return false;
      } else {
        v_nim.innerText = "";
      }

      if (x.email.value == "") {
        v_email.innerText = "Bermasalah pada kolom Email";
        Swal.file('Ops...', 'masih ada yang salah!', 'error');
        return false;
      } else {
        v_email.innerText = "";
      }

      if (syarat == 2) {
        return true;
      } else {
        return false;
      }
    }
  </script>

  <!-- Optional JavaScript -->
  <!-- jQuery first, then Popper.js, then Bootstrap JS -->
  <script src="https://code.jquery.com/jquery-3.4.1.slim.min.js" integrity="sha384-J6qa4849blE2+poT4WnyKhv5vZF5SrPo0iEjwBvKU7imGFAV0wwj1yYfoRSJoZ+n" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js" integrity="sha384-Q6E9RHvbIyZFJoft+2mJbHaEWldlvI9IOYy5n3zV9zzTtmI3UksdQRVvoxMfooAo" crossorigin="anonymous"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js" integrity="sha384-wfSDF2E50Y2D1uUdj0O3uMBJnjuUD4Ih7YwaYd1iqfktj0Uod8GCExl3Og8ifwB6" crossorigin="anonymous"></script>
</body>

</html>