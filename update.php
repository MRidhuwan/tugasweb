<?php
include 'koneksi/db.php';

$id = $_POST['id'];
$nama = $_POST['nama'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$umur = $_POST['umur'];
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
$tanggal = $_POST['thn']."-".$_POST['bln']."-".$_POST["tgl"];
$tgl_keluar = date("Y-m-d, h:i:s");
$alamat = $_POST['alamat'];


$query = mysql_query("update data_pasien set nama='$nama',jenis_kelamin='$jenis_kelamin',umur='$umur',tanggal='$tanggal',tgl_keluar='$tgl_keluar',alamat='$alamat' where id='$id'") or die (mysql_error());

if($query) {
echo "<script>alert('Berhasil Update')
window.location='lihat.php'</script>";
}


?>