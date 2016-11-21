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
<title>Blue Office - Contact Page</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2036 Blue Office
http://www.tooplate.com/view/2036-blue-office
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
body,td,th {
	color: #333;
}
body {
	background-color: #CCC;
}
</style>
</head>
<body text="#333333" class="subpage">

<div id="tooplate_wrapper">

  <div id="tooplate_sidebar">
    <div id="site_title">
      <form id="form2" name="form2" method="post" action="">
		    <p><img src="images/+.jpg" width="249" height="195" border="4" /></p>
</form>
	    <p><img src="images/km.jpg" width="248" height="178" border="2" /></p>
	    <p><img src="images/Rumah-Sakit-Islam-Jakarta.jpg" width="262" height="183" /></p>
    </div>
<div id="home_service"></div>
	</div> 
	<!-- end of sidebar -->
    
    <div id="tooplate_main">
    	
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.html">Home</a></li>
                <li><a href="daftar.php">daftar</a></li>
                <li><a href="lap_pasien.php">Laporan Transaksi</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="logout.php" class="current">Logout</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
        
        <div id="content_title_box">
	        <h2>Data Pasien</h2>
                <p>form Pendaftaran</p>
        </div>
   
        <div id="tooplate_content">
	        
        	<div class="content_box">
        	  <div id="contact_form">
            
				<h4>Terdaftar<br />
				  <br />
				  <?php 
			if(!empty($_GET['message'])&& $_GET['message']=='succes'){
				echo '<h4>Berhasil menyimpan data</h4>';
			}else if (!empty($_GET['message'])&& $_GET['message']=='delete'){
				echo '<h4>Berhasil menghapus data</h4>';
			}
			?>
				</h4>
				<form id="form1" name="form1" method="post" action="insert.php">
				  <table width="660" height="73" border="1" align="center" style="border-collapse:collapse; background:#FFF;">
				    <thead>
				      <tr>
				        <th width="30">id</th>
				        <th width="63">nama</th>
				        <th width="82">jenis_kelamin</th>
				        <th width="49">umur</th>
				        <th width="109">tanggal masuk</th>
                        <th width="108">tgl_keluar</th>
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
				        <td width="145"><div align="center"> <a href="edit.php?id=<?php echo $data['id']; ?>"> <img src="images/pensil.png" alt="pensil" width="30" height="31" /></a>|| <a href="delete.php?id=<?php echo $data['id']; ?>"> <img src="images/delete.png" alt="Delete" width="30" height="31" /></a></td>
			          </tr>
				      <?php
			  $no++;
			  }
?>
			        </tbody>
			      </table>
		      </form>
				<p>&nbsp;</p>
            </div>
          </div>

        </div> <!-- end of content -->
    
</div> <!-- end of content -->
	
    <div class="cleaner"></div>    
</div> <!-- end of wrapper -->

<div id="tooplate_footer_wrapper">
	<div id="tooplate_footer">

        <a href="index.html">Home</a> | <a href="about.html">About Us</a> | <a href="services.html">Services</a> | <a href="gallery.html">Gallery</a> | <a href="contact.html">Contact</a> <br /><br />
        
        Copyright © 2048 Muhammad Ridhuwan- Design: Belajar</div>
</div>

</body>
</html>
<?php
	//}
?>