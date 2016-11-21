<?php
include 'koneksi/db.php';
include 'cek.php';
ob_start();
session_start();

?>

<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue Office - About Our Company</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2036 Blue Office
http://www.tooplate.com/view/2036-blue-office
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
body,td,th {
	color: #0CF;
}
body {
	background-color: #E1E1E1;
}
</style>
</head>
<body class="subpage">

<div id="tooplate_wrapper">

	<div id="tooplate_sidebar">
        <div id="site_title"><a href="#">Blue<span>Office</span></a></div>
        
        <div id="home_service">
        	<div class="home_service_box"><span class="service1"></span><h5><a href="#">Service One</a></h5>Integer sit amet nulla vitae urna porttitor quis et tellus.</div>
            <div class="home_service_box"><span class="service2"></span><h5><a href="#">Service Two</a></h5>
            Morbi lectus erat, tempus ac mattis eu, fringilla id elit.</div>
            <div class="home_service_box"><span class="service3"></span><h5><a href="#">Service Three</a></h5>Nulla quam mi, faucibus non laoreet nec.</div>
        </div>
        
        <div class="sidebar_box">
        	<h4>Newsletter</h4>	
			
			<div id="newsletter_box">
			<form action="#" method="get">			
			Please enter your email address to subscribe our newsletter.<br />
			<input type="text" id="newsletter_email" name="newsletter_email" class="newsletter_email" />				           
            <input type="submit" name="submit_subscribe" id="submit_subscribe" value="Subscribe" />
            </form>
			</div>		
			
            <div class="cleaner"></div>
        </div>
        
      	<div class="sidebar_box sbb_last">
            <strong>Company Name</strong><br />
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
                <li><a href="daftar.php" class="Daftar">Daftar</a></li>
                <li><a href="services.html">Fasilitas</a></li>
                <li><a href="gallery.html">Gallery</a></li>
                <li><a href="logout.php">Logout</a></li>
            </ul>    	
        </div> <!-- end of tooplate_menu -->
        
		<div id="content_title_box">
	        <h2>Data Edit</h2>
			<p>Rumah Sakit ini didirikan untuk Masyarakat yang kurang mampu, silahkan berobat tanpa syarat apapun . </p>
        </div>
        
        <div id="tooplate_content">
        	
          <div class="content_box">
            <div class="image_wrapper image_fl"><img src="images/+.jpg" alt="image" /></div>
              <?php
$id = $_GET['id'];
$query = mysql_query("select * from data_pasien where id='$id'") or die(mysql_error());
		$data = mysql_fetch_array($query);
		
		?>
            <form id="form1" name="form1" method="post" action="update.php">
            <input type="hidden" name="id" value="<?php echo $id; ?>"/>
                <p>Data Terupdate<br />
                </p>
                
<table border="8">
                  <tr>
                    <td>id</td>
                    <td>:</td>
                    <td><input type='text' name='id' id="id" /></td>
                  </tr>
                  <tr>
                    <td>nama</td>
                    <td>:</td>
                    <td><input type='text' name='nama' id='nama' value="<?php echo $data['nama'];?>"></td>
                  </tr>
                  <tr>
                    <td>jenis_kelamin</td>
                    <td><strong>:</strong></td>
                    <td><p>
                      <label>
                        <input type="radio" name="jenis_kelamin" value="L" id="RadioGroup1_2" />
                        Laki-laki</label>
                      <br />
                      <label>
                        <input type="radio" name="jenis_kelamin" value="P" id="RadioGroup1_3" />
                        Perempuan</label>
                      <br />
                    </p></td>
                  </tr>
                  <tr>
                    <td>Umur</td>
                    <td>:</td>
                    <td><input type='text' name='umur' id="umur" value="<?php echo $data['umur'];?>"></td>
                  </tr>
                  <tr>
                    <td>Tanggal Masuk</td>
                    <td>:</td>
                    <td><select name="tgl">
                      <option value="1">01 </option>
                      <option value="2">02 </option>
                      <option value="3">03 </option>
                      <option value="4">04 </option>
                      <option value="5">05 </option>
                      <option value="6">06 </option>
                      <option value="7">07 </option>
                      <option value="8">08 </option>
                      <option value="9">09 </option>
                      <option value="10">10 </option>
                      <option value="11">11 </option>
                      <option value="12">12 </option>
                      <option value="13">13 </option>
                      <option value="14">14 </option>
                      <option value="15">15 </option>
                      <option value="16">16 </option>
                      <option value="17">17 </option>
                      <option value="18">18 </option>
                      <option value="19">19 </option>
                      <option value="20">20 </option>
                      <option value="21">21 </option>
                      <option value="24">24 </option>
                      <option value="25">25 </option>
                      <option value="26">26 </option>
                      <option value="27">27 </option>
                      <option value="28">28 </option>
                      <option value="29">29 </option>
                      <option value="30">30 </option>
                      <option value="31">31 </option>
                    </select>
                      <select name="bln">
                        <option value="">---bulan--- </option>
                        <?php 
						$namabulan=array("jan","feb","mar","apr","mei","jun","jul","aug","sep","okt","nov","des");
						?>
						<?php for($bulan=1; $bulan<=12; $bulan++){
						?>
                        <option value="<?php echo $bulan;?>"><?php echo $namabulan[$bulan-1];?></option> <?php }?>
                        
                      </select>
                      <select name="thn">
                        <option value="2010">2010 </option>
                        <option value="2011">2011 </option>
                        <option value="2012">2012 </option>
                        <option value="2013">2013 </option>
                        <option value="2014">2014 </option>
                        <option value="2015">2015 </option>
                        <option value="2016">2016 </option>
                      </select></td>
                  </tr>
                  <tr>
                  <tr>
                    <td>Tgl_keluar</td>
                    <td>:</td>
                    <td><input type='datepicker' name='tgl_keluar' id="datepicker" value="<?php echo $data['tgl_keluar'];?>"></td>
                  </tr>
                  <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><input type='text' name='alamat' id="alamat" value="<?php echo $data['alamat'];?>"></td>
                  </tr>
                  <tr>
                    <td></td>
                    <td></td>
                    <td><input type='submit' name='button' id= "button" value='Update' /></td>
                  </tr>
                </table>
                <p>                  <br />
                </p>
            </form>
              <p>&nbsp;</p>
            </div>
            
            <div class="content_box cb_last">
              <div class="cleaner"></div>
		  </div>
            
        </div> <!-- end of content -->
    
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
//else {
	//header ('location:index.php');
	//exit();
//}
	//}
ob_flush();
?>