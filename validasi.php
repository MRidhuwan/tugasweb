<?php
include "koneksi/db.php";
$username = $_POST['username'];
$password = $_POST['password'];

if(empty($username)){
echo "<script>alert('Username belum di isi')
window.location='login.php'</script>";

} else if (empty($password)) {
echo "<script>alert('Password belum di isi')
window.location='login.php'</script>";
}else{
session_start();
$login = mysql_query("select * from admin_tbl where username='$username' and password=md5('$password')");

if (mysql_num_rows($login)>0){
$_SESSION['username']=$username;
echo "<script>alert('Berhasil Login')
window.location='daftar.php'</script>";
}else{
echo"<script>alert('Username atau password yang anda masukan salah')
window.location='login.php'</script>";
}
}
?>