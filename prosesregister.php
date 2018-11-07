<?php
   require_once("koneksi.php");
   $db = new Data;
   $nim = $_POST["nim"];
   $username = $_POST['username'];
   $password = $_POST['password'];

   $cekuser = $db->query("SELECT * FROM akun WHERE username = '$username'");
   if($db->numRow($cekuser) > 0) {
     echo "<div align='center'>Username Sudah Terdaftar! <a href='register.php'>Daftar Ulang</a></div>";
   } else {
     if(!$username || !$password) {
       echo "<div align='center'>Masih ada data yang kosong! <a href='register.php'>Daftar Ulang</a>";
     } else {
       $simpan = $db->query("INSERT INTO mahasiswa VALUES('$nim','','','','','','','','')");
       if ($simpan) {
        $hasil = $db->query("INSERT INTO akun VALUES('','$username','$password', '$nim')");
        if($hasil) {
           echo "<div align='center'>Pendaftaran Sukses, Silahkan <a href='index.php'>Masuk</a></div>";
         } else {
           echo "<div align='center'>Pendaftaran Gagal!</div>";
         } 
       }
        
     }
   }
?>