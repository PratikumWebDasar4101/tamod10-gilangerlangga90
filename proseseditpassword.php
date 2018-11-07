<?php
require_once("koneksi.php");

$db = new Data;

$password	 		= $_POST["password"];
$sql 				= "UPDATE akun SET password='$password' WHERE id=$id";
if ($db->query($sql)) {
    echo "Password anda berhasil diubah! <br>";
}else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}
echo "Silahkan klik <a href='dashboard.php' style='text-decoration: none;'>disini</a> untuk kembali ke Dashboard ";
?> 