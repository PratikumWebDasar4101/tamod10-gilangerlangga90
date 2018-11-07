<?php
session_start();
   require_once("koneksi.php");
   $db = new Data;

    $nim = $_SESSION['nim'];

    $hasil = "DELETE FROM mahasiswa WHERE nim=$nim";

    if ($db->query($hasil)) {
      session_destroy();
        header("location: index.php");

    }else {

        echo "Error: " . $sql . "<br?" . mysqli_error($conn);

    }

?>