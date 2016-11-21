<?php
include 'koneksi/db.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
$tanggal = $_POST['thn']."-".$_POST['bln']."-".$_POST["tgl"];
$tgl_keluar =  date('l, Y-m-d ');
$alamat = $_POST['alamat'];


$query = mysql_query("insert into data_pasien values ('$id','$nama','$jenis_kelamin','$umur','$tanggal','$tgl_keluar','$alamat')") or die (mysql_error());

if($query) {
echo "<script>alert('Berhasil Mendaftar')
window.location='lihat.php'</script>";
}


?>