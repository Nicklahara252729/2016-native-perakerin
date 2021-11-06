<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Pendaftaran</title>
<style>
*{
	margin:0;
	padding:0;
}
#a{
	width:495px;
	height:48px;
	background-color: #7c2424;
	color:#fff;
	margin-left:1200px;
	font-family:"Lao UI";
	font-size:18px;
	padding-left:5px;
	padding-top:15px;
}
#b{
	width:500px;
	height:600px;;
	background-color:#fff;
	box-shadow:0px 0px 0px 0px #555555;
	margin-left:1200px;
	margin-top:100px;
	font-family:"Lao UI";
	color:#7c2424;
	font-size:20px;
}
#c{
	border:0px;
	width:450px;
	height:40px;
	font-family:"lao UI";
	font-size:20px;
	color: #7c2424;
	margin-left:27px;
	box-shadow:0px 0px 2px 0px #555555;
}
#d{
	border:0px;
	width:450px;
	height:40px;
	font-family:"lao UI";
	font-size:18px;
	color:#7c2424;
	margin-top:20px;
	box-shadow:0px 0px 2px 0px #555555;
	margin-left:27px;
}
#e{
	background-color:#c9c2c2;
	font-family: "Lao UI";
	width:450px;
	height:40px;
	font-size:25px;
	font-weight:bold;
	border:0px;
	color:#fff;
	margin-top:20px;
	box-shadow:0px 0px 4px 0px #555555;
	margin-left:27px;
}
#e:hover{
	background-color:#7c2424;
}
#e:active{
	background-color:#c9c2c2;
}
#f{
	font-family:"Wolf in the City", "MS Outlook";
	color:#7c2424;
	font-size:95px;
	margin-left:160px;
}
body{
	background-color:#F0F0F0;
}
#g{
	float:right;
	background-color:#fff;
	font-family: "Lao UI";
	font-size:20px;
	width:140px;
	height:35px;
	border:0px;
	margin-right:15px;
	margin-top:-27px;
	border-radius:3px;
}
#g:hover{
	background-color: #F3F3F3;
}
#g:active{
	background-color:#c9c2c2;
}
#h{
	margin-top:10px;
}
#i{
	width:1100px;
	height:800px;
	margin-top:-20px;
	float:left;
	margin-left:20px;
}
#j{
	width:auto;
	height:auto;
}
#k{
	width:320px;
	height:auto;
	margin-left:1600px;
	margin-top:-60px;
}
#l{

	float:left;
	border-radius:30px;
	height:60px;
	width:140px;
}
#p{
	width:120px;
	height:50px;
	margin-top:4px;
	margin-left:0px;
}
#m{
	
	float:left;
	border-radius:30px;
	height:60px;
	width:140px;
}
#o{
	width:120px;
	height:50px;
	margin-top:10px;
	margin-left:0px;
}
#dc{
	width:auto;
	height:auto;
	margin-left:1400px;
	margin-top:200px;
	font-family: "Lao UI";
	color:#7c2424;
	font-size:20px;
}
#q{
	border:0px;
	width:450px;
	height:40px;
	font-family:"lao UI";
	font-size:20px;
	color: #7c2424;
	margin-left:27px;
	box-shadow:0px 0px 2px 0px #555555;
	margin-top:20px;
}
#r{
	border:0px;
	width:450px;
	height:40px;
	font-family:"lao UI";
	font-size:20px;
	color: #7c2424;
	margin-left:27px;
	box-shadow:0px 0px 2px 0px #555555;
	margin-top:20px;
}
#t{
	border:0px;
	width:450px;
	height:40px;
	font-family:"lao UI";
	font-size:20px;
	color: #7c2424;
	margin-left:27px;
	box-shadow:0px 0px 2px 0px #555555;
	margin-top:20px;
}
#y{
	border:0px;
	width:70px;
	height:40px;
	font-family:"lao UI";
	font-size:20px;
	color: #7c2424;
	margin-left:27px;
	box-shadow:0px 0px 2px 0px #555555;
	text-align:center;
	margin-top:20px;
}
#x{
	border:0px;
	width:160px;
	height:40px;
	font-family:"lao UI";
	font-size:20px;
	color: #7c2424;
	margin-left:27px;
	box-shadow:0px 0px 2px 0px #555555;
	text-align:center;
	margin-top:20px;
}
#z{
	border:0px;
	width:100px;
	height:40px;
	font-family:"lao UI";
	font-size:20px;
	color: #7c2424;
	margin-left:27px;
	box-shadow:0px 0px 2px 0px #555555;
	text-align:center;
	margin-top:20px;
}
#v{
	color: #7c2424;
	margin-left:27px;
	box-shadow:0px 0px 2px 0px #555555;
	margin-top:20px;
}
#w{
	margin-top:20px;
	color: #7c2424;
	margin-left:120px;
	box-shadow:0px 0px 2px 0px #555555;
}
</style>
</head>
<body>
<div id="j"><img src="Image/enjoy.png" id="i"/></div>
<div id="b"><p id="f">Mendaftar</p>
<form action="sc2.php" method="POST">
<input type="text" placeholder="Username" name="name" required id="c"><br>
<input type="text" placeholder="E-mail" name="email" required id="d"><br>
<input type="password" placeholder="password" required name="password" id="q" /><br />
<select name="kota" id="r">
<option value="Kota Asal">Kota Asal</option>
  <option value="Banda Aceh">Banda Aceh</option>
  <option value="Medan">Medan</option>
  <option value="Padang">Padang</option>
  <option value="Pekanbaru">Pekanbaru</option>
  <option value="Jambi">Jambi</option>
  <option value="Bengkulu">Bengkulu</option>
  <option value="Palembang">Palembang</option>
  <option value="Riau">Riau</option>
  <option value="Bangka Belitung">Bangka Belitung</option>
  <option value="Bandar Lampung">Bandar Lampung</option>
  <option value="Jakarta">Jakarta</option>
  <option value="Bandung">Bandung</option>
  <option value="Semarang">Semarang</option>
  <option value="Yogyakarta">Yogyakarta</option>
  <option value="Surabaya">Surabaya</option>
  <option value="Pontianak">Pontianak</option>
  <option value="Palangkaraya">Palangkaraya</option>
  <option value="Banjarmasin">Banjarmasin</option>
  <option value="Samarinda">Samarinda</option>
  <option value="Denpasar">Denpasar</option>
  <option value="Mataram">Mataram</option>
  <option value="Kupang">Kupang</option>
  <option value="Ujungpandang">Ujungpandang</option>
  <option value="Palu">Palu</option>
  <option value="Gorontalo">Gorontalo</option>
  <option value="Manado">Manado</option>
  <option value="Kendari">Kendari</option>
  <option value="Sofifi">Sofifi</option>
  <option value="Ambon">Ambon</option>
  <option value="Jayapura">Jayapura</option>
</select><br />
<input type="text" placeholder="Alamat" required id="t" name="alamat" /><br />
<select name="tgllahir" id="y">
  <option value="1">1</option>
  <option value="2">2</option>
  <option value="3">3</option>
  <option value="4">4</option>
  <option value="5">5</option>
  <option value="6">6</option>
  <option value="7">7</option>
  <option value="8">8</option>
  <option value="9">9</option>
  <option value="10">10</option>
  <option value="11">11</option>
  <option value="12">12</option>
  <option value="13">13</option>
  <option value="14">14</option>
  <option value="15">15</option>
  <option value="16">16</option>
  <option value="17">17</option>
  <option value="18">18</option>
  <option value="19">19</option>
  <option value="20">20</option>
  <option value="21">21</option>
  <option value="22">22</option>
  <option value="23">23</option>
  <option value="24">24</option>
  <option value="25">25</option>
  <option value="26">26</option>
  <option value="27">27</option>
  <option value="28">28</option>
  <option value="29">29</option>
  <option value="30">30</option>
  <option value="31">31</option>
</select>
<select name="bulan" id="x">
          <option value="Januari">Januari</option>
          <option value="Februari">Februari</option>
          <option value="Maret">Maret</option>
          <option value="April">April</option>
          <option value="Mei">Mei</option>
          <option value="Juni">Juni</option>
          <option value="Juli">Juli</option>
          <option value="Agustus">Agustus</option>
          <option value="September">September</option>
          <option value="Oktober">Oktober</option>
          <option value="November">November</option>
          <option value="Desember">Desember</option>
        </select>
         <select name="tahun" id="z">
          <option value="1990">1990</option>
          <option value="1991">1991</option>
          <option value="1992">1992</option>
          <option value="1993">1993</option>
          <option value="1994">1994</option>
          <option value="1995">1995</option>
          <option value="1996">1996</option>
          <option value="1997">1997</option>
          <option value="1998">1998</option>
          <option value="1999">1999</option>
          <option value="2000">2000</option>
          <option value="2001">2001</option>
          <option value="2002">2002</option>
          <option value="2003">2003</option>
          <option value="2004">2004</option>
          <option value="2005">2005</option>
          <option value="2006">2006</option>
          <option value="2007">2007</option>
          <option value="2008">2008</option>
          <option value="2009">2009</option>
          <option value="2010">2010</option>
          <option value="2011">2011</option>
          <option value="2012">2012</option>
          <option value="2013">2013</option>
          <option value="2014">2014</option>
          <option value="2015">2015</option>
        </select><br />
<input type="checkbox" name="pria" value="Pria"  id="v"/> Pria
<input type="checkbox" name="wanita" value="Wanita" id="w" /> Wanita<br />
<input type="submit" id="e" name="submit" value="Mendaftar"></form>
</div>
<div id="a">SUDAH MENDAFTAR ? BURUAN MASUK
<form action="index.php" method="POST">
<input type="submit" name="submit" value="Masuk" id="g" /></form></div>
<div id="dc">&copy;Nico Gawa Lahara</div>
<div id="k">
<div id="l"><img src="Image/Logo-Telkom-Indonesia-transparent-background 1.png" id="p" /></div>
<div id="m"><img src="Image/LOGO2.png" id="o"/></div>
</body>
</html>