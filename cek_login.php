<?php
session_start();
include "database/config.php";

if (isset($_POST['nim'])) {
  $nim = $_POST['nim'];
  $email = $_POST['email'];

  $query = "SELECT * FROM user WHERE nim = '$nim' AND email = '$email'";

  $sql = mysqli_query($conn, $query);
  $data = mysqli_fetch_object($sql);

  if ($data) {
    $_SESSION['sess_id'] = $data->nim;

    header('location:index.php');
  } else {
    echo "<script>
            var aksi = alert('Kombinasi nim dan email salah!');
            if(aksi) window.location.href = 'http://localhost/responsi/login.php';
          </script>";
  }
} else {
  echo "<script>
          var aksi = alert('Invalid Request');
          if(aksi) window.location.href = 'http://localhost/responsi/login.php';
        </script>";
}
