<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Blue Office - Free Website Templates</title>
<meta name="keywords" content="" />
<meta name="description" content="" />
<!--
Template 2036 Blue Office
http://www.tooplate.com/view/2036-blue-office
-->
<link href="tooplate_style.css" rel="stylesheet" type="text/css" />

<style type="text/css">
body,td,th {
	font-family: "Comic Sans MS", cursive;
	font-size: 14px;
	color: #0CF;
}
body {
	background-color: #CCC;
}
</style>
</head>
<body bgcolor="#00CCFF" class="home">

<div id="tooplate_wrapper">

	<div id="tooplate_sidebar">
		<div id="site_title"><a href="#">Ridhuwan</a></div>
        
        <div id="home_service"><img src="images/km.jpg" width="250" height="178" /></div>
        
        <div class="sidebar_box">
        	<h4>CALL Center</h4>	
			
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
            <strong>Muhammad Ridhuwan<br />
             PABUARAN ,TANGERANG <br />
            15200<br />
            
       	Email: <a href="mailto:ridhuwan@gmail.com">info@yoursite.com</a>		    </strong></div>
	</div> <!-- end of sidebar -->
    
  <div id="tooplate_main">
    	
        <div id="tooplate_menu">
            <ul>
                <li><a href="index.html" class="current">Home</a></li>
                <li><a href="daftar.php">Daftar</a></li>
                <li><a href="gallery.html">gallery</a></li>
                <li><a href="services.html">services</a></li>
                <li><a href="logout.php">Logout</a></li>
               
            </ul>    	
        </div> <!-- end of tooplate_menu -->
        
    <div id="featured_project">
        <h1>FORM PASIEN<br />
   	    </h1>
      <img src="images/RS.jpg" width="340" height="117" />
      <form id="form1" name="form1" method="post" action="insert.php">
        <table>
          <tr>
            <td>id</td>
            <td>:</td>
            <td><input type='text' name='id' id="id" /></td>
          </tr>
          <tr>
            <td>nama</td>
            <td>:</td>
            <td><input type='text' name='nama' id="nama" /></td>
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
            <td><input type='text' name='umur' id="umur" /></td>
          </tr>
          <tr>
            <td>Tanggal Masuk</td>
            <td>:</td><td><select name="tgl">
      <option value=1>01
        <option value=2>02
        <option value=3>03
        <option value=4>04
        <option value=5>05
        <option value=6>06
        <option value=7>07
        <option value=8>08
        <option value=9>09
        <option value=10>10
        <option value=11>11
        <option value=12>12
        <option value=13>13
        <option value=14>14
        <option value=15>15
        <option value=16>16
        <option value=17>17
        <option value=18>18
        <option value=19>19
        <option value=20>20
        <option value=21>21
        <option value=24>24
        <option value=25>25
        <option value=26>26
        <option value=27>27
        <option value=28>28
        <option value=29>29
        <option value=30>30
        <option value=31>31
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
          <option value=2010>2010
          <option value=2011>2011
          <option value=2012>2012
          <option value=2013>2013
          <option value=2014>2014
          <option value=2015>2015
          <option value=2016>2016
      </select></td>
           
          </tr>
          <tr>
            <td>Alamat</td>
            <td>:</td>
            <td><input type='text' name='alamat' id="alamat" /></td>
          </tr>
          <tr>
            <td></td>
            <td></td>
            <td><input type='submit' value='Simpan' /></td>
          </tr>
        </table>
      </form>
      
    </div> 
        <!-- end of featured project --><!-- end of content -->
    
    </div> 
    <!-- end of content -->
	
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