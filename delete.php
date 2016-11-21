<?php 
include 'koneksi/db.php';

$id = $_GET['id'];

$query = mysql_query("delete from data_pasien where id='$id'") or die(mysql_error());

if ($query) {
	header('location:lihat.php?message=delete');
}
?>