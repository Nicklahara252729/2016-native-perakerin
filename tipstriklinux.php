<?php include "header-menu.php"; ?>
<link href="CSS/conten.css" rel="stylesheet" type="text/css">
<div id="conten">
<div id="dalam"><style>
#c{
	height:500px;
	width:70%;
	margin-left:150px;
}
#b{
	margin-top:10px;
	font-family:"Lao UI";
	color:#000000;
	text-align: justify;
	width:945px;
	margin:0 auto;
	margin-bottom:5px;
}
#b:first-letter{
	margin-top:10px;
	font-size:95px;
	color:#b00;
	float:left;
}
#d{
	margin-left:20px;
}
#hh1 {
font-family:Arial;
font-size:30px;
height:37px;
margin-top:20px;
width:900px;
background-color:#a61818;
color:#fff;
border-radius:0px 20px 20px 0px;
}
#j{
	width:100%;
}
</style>
<div id="a">
<img src="Image/other/ubuntu-logo.jpg" id="c"></div>
<div id="hh1">Tricks Mengembalikan GRUB Linux yang Hilang Lewat Terminal</div>
<div id="b">
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Bagi Anda pengguna sistem operasi Linux khususnya Ubuntu, tentunya pernah mengalami masalah Ubuntu Anda yang tidak mau booting. Hal itu disebabkan hilangnya GRUB pada Ubuntu Anda, GRUB merupakan file booting di sistem operasi Linux. Jika pada Windows biasa disebut MBR. Hilang atau rusaknya GRUB biasanya disebabkan karena proses booting dan shutdown yang tidak sempurna, virus, terhapus sengaja, atau tertimpa MBR ketika Anda memperbaiki Windows Anda ( bagi pengguna Dual Boot system ). Kali ini Penulis akan berbagi salah satu solusi untuk mengatasi GRUB yang hilang karena tertimpa MBR Windows. Hal yang perlu disiapkan terlebih dahulu adalah CD installer Ubuntu atau Flashdisk Bootable yang tentunya telah dibuat sebelumnya. Untuk versi penggunaan ubuntu Anda bisa menyesuaikan dengan ubuntu yang sama versinya atau diatasnya.<br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Anda bisa masuk pada bios perangkat computer milik Anda untuk mengatur First Boot komputer menjadi installer Ubuntu Anda. Anda akan melihat beberapa pilihan Lalu pilih Try Ubuntu, Hal ini dimaksudkan Anda tidak perlu lagi melakukan instalasi ulang ubuntu. Setelah berhasil masuk ke desktop utama Ubuntu, buka terminal. Jika Anda menggunakan desktop environment Gnome atau Unity, untuk lebih cepatnya kita dapat menekan Ctrl + Alt + T secara bersamaan.<br/><br />
<img src="Image/other/installer.png" id="j"><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ketikan  sudo su , untuk masuk sebagai superuser di komputer Anda. kemudian tekan enter. Penggunaan super user ditujukan mendapatkan seluruh akses pada sistem operasi milik Anda<br /><br />
<img src="Image/other/1.png" id="j"><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Lalu cari di partisi manakah Ubuntu Anda di install sebelumnya, Jika Anda menggunakan ubuntu versi terbaru Anda bisa saja menggunakan GParted ataupun dengan mengetik perintah  fdisk –l, Keduanya pada dasarnya merupakan tools yang sama, namun hanya berbeda formatnya saja Antara GUI dan command line. Pada tutorial ini Penulis menggunakan fdisk -l, umumnya partisi yang telah terinstal sistem operasi linux sistemnya adalah linux. Pada komputer penulis, partisi yang telah terinstal ubuntu ada di partisi /dev/sda2<br /><br />
<img src="Image/other/2.png" id="j"><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Ketika telah menemukan partisi tempat installasi linux maka silahkan untuk melakukan mount partisi tersebut dengan mengetikan mount /dev/sda2 /mnt pada terminal.<br/><br />
<img src="Image/other/3.png" id="j"><br /><br />
&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Jika perintah mount /dev/sda2 /mnt pada terminal berhasil maka tidak akan ada pesan yang ditampilkan, setelah itu install grub di partisi yang telah termount tadi dengan mengetikan grub-install –root-directory /mnt /dev/sda.<br /><br />
<img src="Image/other/4.png" id="j"><br /><br />
Untuk melakukan berhasil atau tidak, ketikan update-grub untuk mengupdate list grub Anda agar terdapat dua pilihan sistem operasi  saat komputer pertama kali dinyalakan. Untuk mencobanya reboot komputer Anda, dan atur First Bootnya pada pilihan  Harddisk.</i></b></div>
</div></div>
<?php include "footer.php";?>