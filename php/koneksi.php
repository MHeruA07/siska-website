<?php
  $servername = "localhost";
  $database = "siska";
  $username = "root";
  $password = "";
  // Create connection
  $conn = mysqli_connect($servername, $username, $password, $database);
  // Check connection
  if (!$conn) {
        die("Koneksi Database Gagal : " . mysqli_connect_error());
  }

  echo "Koneksi Sukses!";
?>
