<?php
session_start();
$nim = $_SESSION["nim"];
 ?>

<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<table align="center">
	<form method="POST" action="proseseditpassword.php">
	<tr>
		<td colspan="3" align="center"> <h3> Silahkan Edit Password Anda Disini! </h3> </td>
	</tr>

	<tr>
		<td> Password Baru </td>
		<td> : </td>
		<td> <input type="password" name="password"></td>
	</tr>
</table>
</body>
</html>