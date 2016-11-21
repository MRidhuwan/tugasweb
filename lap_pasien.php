<?php
include "koneksi/db.php";
include "cek.php";
ob_start();
$id=$_GET['id'];

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue Office - Service Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2036 Blue Office
http://www.tooplate.com/view/2036-blue-office
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
body {
	background-color: #0F3252;
}
body,td,th {
	font-family: "Comic Sans MS", cursive;
}
</style>
</head>
<body class="subpage">

<div id="tooplate_wrapper">

	<div id="tooplate_sidebar">
		<div id="site_title"><a href="#">Hos<span>Pital</span></a></div>
        
        <div id="home_service">
          <p><img src="images/km.jpg" width="248" height="178" /></p>
          <p>&nbsp;</p>
        </div>
        <div class="sidebar_box sbb_last"><strong>Hospital</strong><br />
            172-168 Curabitur massa ipsum, <br />
            Proin dignissim molestie, 15500<br />
            Venenatis ut turpis<br />
        	<b>Email:</b> <a href="mailto:info@yoursite.com">info@yoursite.com</a>		
		</div>
	</div> <!-- end of sidebar -->
    
    <div id="tooplate_main">
    	
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="about.html">About Us</a></li>
                <li><a href="lap_pasien.php" class="Laporan Transaksi">Laporan Transaksi</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="Logout.php">Logout</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
        
        <div id="content_title_box">
	        <h2>Informasi</h2>
			<p>&nbsp;</p>
        </div>
        <form id="form1" name="form1" method="post" action="cetak.php">
          <p align="center">&nbsp;</p>
          <p align="center">Laporan Data Pasien
            <br />
            <?php
		if(!empty($_GET['message'])&& $_GET['message']=='success'){
			echo '<h4>Berhasil menyimpan data!</h4>';
		}else if(!empty($_GET['message'])&& $_GET['message']=='delete'){
			echo '<h4>Berhasil menghapus data!</h4>';
		}
		?>
          </p>
          <table width="660" height="73" border="1" align="center" style="border-collapse:collapse; background:#FFF;">
            <thead>
              <tr>
                <th width="30">id</th>
                <th width="63">nama</th>
                <th width="82">jenis_kelamin</th>
                <th width="49">umur</th>
                <th width="109">tanggal masuk</th>
                <th width="109">tgl_keluar</th>
                <th width="72">alamat</th>
                <th width="58">Aksi</th>
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
                <td width="145"><div align="center">
                  <a href="edit.php?id=<?php echo $data['id']; ?>"> <img src="images/pensil.png" alt="pensil" width="30" height="31" /></a>|| <a href="delete.php?id=<?php echo $data['id']; ?>"> <img src="images/delete.png" alt="Delete" width="30" height="31" /></a></td>
              </tr>
              <?php
			  $no++;
			  }
?>
            </tbody>
          </table>
          <p>  
            <input type="submit" name="button" id="button" value="Cetak" onClick="popup_print()" />
            <br />
          </p>
        </form>
        <p>&nbsp;</p>
        <!-- end of content -->
    
    </div> <!-- end of content -->
	
    <div class="cleaner"></div>    
</div> <!-- end of wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">

        <a href="index.html">Home</a> | <a href="about.html">About Us</a> | <a href="services.html">Services</a> | <a href="gallery.html">Gallery</a> | <a href="contact.html">Contact</a> <br /><br />
        
        Copyright © 2048 <a href="#">Company Name</a> - Design: <a href="http://www.tooplate.com">tooplate</a>
		
    </div>
</div>

</body>
</html>
<?php
	//}
?>