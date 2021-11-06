<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Nick's Project</title>
<link href="CSS/header.css" rel="stylesheet" type="text/css" />
<link href="CSS/diva&amp;b.css" rel="stylesheet" type="text/css" />
<link href="CSS/jam.css" rel="stylesheet" type="text/css" />
</head>

<body>
<div id="main">
  <div id="header">
  <div id="atas"><img src="Image/Logo-Telkom-Indonesia-transparent-background.png" width="190" height="60" id="src" />
  <form action="search.php" method="POST">
  <input name="text" type="text" placeholder="Masukkan Keyword" id="text"/>
  <input name="text" type="submit" value="Search" id="search" />
  </form>
  <form action="logout.php" method="POST">
  <input type="submit" id="s" value="Log Out" title="Keluar"/>
  </form>
  <form action="userprofil.php" method="POST">
  <?php
  session_start();
  if($_SESSION['status_login']=='')
  {
	  header("location:sorry.php");
  }
  ?>
  <input type="submit" id="m" title="<?php echo $_SESSION['name'];?>" value="<?php echo $_SESSION['name'];?>" /></form></div>
  <div id="tengah">
  <a href="indihome.php"><img src="Image/wcc002081.png" id="o"/></a>
  <a href="perbedaanbackkali.php"><img src="Image/other/dual-boot-kali-01.png" id="q" /></a>
  <a href="tipstriklinux.php"><img src="Image/other/Happy-Birthday-Linux.jpg" id="p" /></a>
  <a href="windows.php"><img src="Image/other/win10.jpg"  id="w" /></a>
  <a href="rpl2.php"><img src="Image/rpl2.png" id="w" /></a></div>
  <div id="bawah">
  <a href="telkom.php">Telkom</a>
  <a href="image.php">Image</a>
  <a href="struktur.php">Struktur</a>
  <a href="pelayanan.php">Pelayanan</a>
  <a href="vm.php">Visi Misi</a>
  <?php include "tanggal.php";?></div>
  </div>
  <div id="container">
  <div id="menu">
  <div id="sub"><img src="Image/home-house-silhouette-icon-building.png" id="sb"/><a href="home.php">Home</a><div id="pp"><hr width="260px" /></div></div>
  <div id="sub2"><div id="insub2"><div id="i"><img src="Image/menu.png" id="satu" />Menu</div></div><div id="isb2"><?php include"submenu.php";?></div><div id="pp2"></div></div>
  <div id="sub3"><div id="insub3"><div id="ii"><img src="Image/9.png" id="dua"/>SMK Negeri 9</div></div><div id="isb2"><?php include"submenu2.php";?></div><div id="pp3"></div></div>
  <div id="sub4"><div id="insub4"><div id="iii"><img src="Image/infoadmin.png" id="tiga"/>Info Admin</div></div><div id="isb3"><?php include"submenu3.php";?></div><div id="pp4"></div></div></div>
  <div id="ic">
  <div id="jam"><div id="clock"><?php include"jam.php"; ?></div></div>
  <div id="iklan"><div id="ik"><img src="Image/most.png" id="icm" />Most Popular Today</div><div id="slide"><div class="container"> 
<input type="radio" name="slide" class="radio-nav" id="nav-1" checked/> <input type="radio" name="slide" class="radio-nav" id="nav-2"/> 
<input type="radio" name="slide" class="radio-nav" id="nav-3"/>
<input type="radio" name="slide" class="radio-nav" id="nav-4"/>
<input type="radio" name="slide" class="radio-nav" id="nav-5"/>
<input type="radio" name="slide" class="radio-nav" id="nav-6"/>
<input type="radio" name="slide" class="radio-nav" id="nav-7"/>
<input type="radio" name="slide" class="radio-nav" id="nav-8"/>
<ul class="slide"> <li class="slide-1"> <a href="office.php"><img src="Image/other/microsoft-office_01.jpg"/> 
<div class="caption">Tips, Triks & Petunjuk Office 2013</div></a> 
</li> 
<li class="slide-2"> <a href="nvidia.php">
<img src="Image/other/maxresdefault.jpg"/>
<div class="caption">Nvidia merilis VGA Titan Z</div></a> 
</li> 
<li class="slide-3"> <a href="tampilanwin10.php"><img src="Image/other/tampilan win 10.jpg"/>
<div class="caption">Fakta Menarik Tentang Windows 10</div></a> 
</li> 
<li class="slide-4"> <a href="kitkat.php"><img src="Image/other/KitKat.jpg"/>
<div class="caption">Kelebihan & Kekurangan Android Kitkat</div></a> 
</li> 
<li class="slide-5"> <a href="diskusage.php"><img src="Image/other/disk-usage-windows_01.jpeg"/>
<div class="caption">How to Fix Disk Usege 100% on Windows</div></a> 
</li> 
<li class="slide-6"> <a href="installkalilinux.php"><img src="Image/other/01-install-select.png"/>
<div class="caption">How to Install Kali Linux</div></a> 
</li> 
<li class="slide-7"> <a href="apple.php"><img src="Image/other/applemusicandroid_0.jpg"/>
<div class="caption">Apple akan merilis Apple Music untuk android</div></a>
</li> 
<li class="slide-8"> <a href="javajazz.php">
<img src="Image/other/java.jpg"/> 
<div class="caption">Java Jazz Festival 2016</div></a> 
</li> 
</ul><div class="nav-arrow nav-next"> 
<label class="nav-1" for="nav-1">></label> 
<label class="nav-2" for="nav-2">></label> 
<label class="nav-3" for="nav-3">></label> 
<label class="nav-4" for="nav-4">></label> 
<label class="nav-5" for="nav-5">></label>
<label class="nav-6" for="nav-6">></label>
<label class="nav-7" for="nav-7">></label>
<label class="nav-8" for="nav-8">></label>
</div> 
<div class="nav-arrow nav-prev"> 
<label class="nav-1" for="nav-1"><</label> 
<label class="nav-2" for="nav-2"><</label> 
<label class="nav-3" for="nav-3"><</label> 
<label class="nav-4" for="nav-4"><</label> 
<label class="nav-5" for="nav-5"><</label> 
<label class="nav-6" for="nav-6"><</label> 
<label class="nav-7" for="nav-7"><</label> 
<label class="nav-8" for="nav-8"><</label> 
</div> 
</div></div></div>
  <div id="comment"><div id="ct"><img src="Image/comment.png" id="imc" />Comment</div><div id="op">
<form action="sc.php" method="POST"><br />
Nama:<br /><input name="nama" type="text" id="txt" title="Nama belum diisi!" required /><br>
Email:<br /><input name="email" type="text" id="txt" title="Email belum diisi"required /><br>
Komentar:<br><textarea name="comment" rows="6" cols="50" id="tt" required></textarea><br>
<input name="tombol" value="Kirim" type="submit" id="no">
</form><br /><?php include"publishcomment.php";?></div></div></div></div>