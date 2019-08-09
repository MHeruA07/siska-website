<?php
  if(isset($_POST['submit'])){
    include 'koneksi.php';

    $jurusan = $_POST['jurusan'];
    $subkelas = $_POST['jml_sub_kelas'];

    $sql = "INSERT INTO Kelas (name, lastname) VALUES ('Thom', 'Vial')";

    if (mysqli_query($conn, $sql)) {
          echo "Data baru telah ditambahkan";
    } else {
          echo "Error : " . $sql . "<br>" . mysqli_error($conn);
    }

    mysqli_close($conn);
  }
?>
