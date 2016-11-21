
<?php
include 'koneksi/db.php';
include 'cek.php';
ob_start();
?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<style type="text/css">
body {
	background-color: #09F;
}
body,td,th {
	font-size: 16px;
	font-family: "Comic Sans MS", cursive;
}
</style>
</head>

<body onload="window.print() ">
<p align="center">Laporan Data Pasien Terupdate</p>
<table width="773" height="73" border="9" align="center" style="border-collapse:collapse; background:#FFF;">
  <thead>
    <tr>
      <th width="25">id</th>
      <th width="47">nama</th>
      <th width="106">jenis_kelamin</th>
      <th width="45">umur</th>
      <th width="93">tanggal masuk</th>
      <th width="100">tgl_keluar</th>
      <th width="65">alamat</th>
      <th width="132">Aksi</th>
    </tr>
  </thead>
  <?php
			  $query=mysql_query("select * from data_pasien");	
			  $no=1;
			  while($data = mysql_fetch_array($query)){
					  
			  ?>
  <tbody>
    <tr>
      <td><div align="center"> <?php echo $no; ?></div></td>
      <td><div align="center"> <?php echo $data['nama']; ?></div></td>
      <td><div align="center"> <?php echo $data['jenis_kelamin']; ?></div></td>
      <td><div align="center"> <?php echo $data['umur']; ?></div></td>
      <td><div align="center"> <?php echo $data['tanggal']; ?></div></td>
      <td><div align="center"> <?php echo $data['tgl_keluar']; ?></div></td>
      <td><div align="center"> <?php echo $data['alamat']; ?></div></td>
      <td width="132"><div align="center">
        <a href="edit.php?id=<?php echo $data['id']; ?>"> <img src="images/pensil.png" alt="pensil" width="30" height="31" /></a>|| <a href="delete.php?id=<?php echo $data['id']; ?>"> <img src="images/delete.png" alt="Delete" width="30" height="31" /></a></td>
    </tr>
    <?php
			  $no++;
			  }
?>
  </tbody>
</table>
<p>Dicetak :
 <?php
$tanggal = mktime(date("m"), date("d"), date("Y"));
echo "<b>" .date("d-m-Y", $tanggal). "</br>";
date_default_timezone_set('Asia/Jakarta');
$jam=date("H:i:s");
echo " Pukul : <b>" .$jam. ""."</br>";
$a = date("H");
?>
</p>
</body>
</html>