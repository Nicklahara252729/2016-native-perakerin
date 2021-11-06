<?php include "header-menu.php"; ?>
<link href="CSS/conten.css" rel="stylesheet" type="text/css">
<div id="conten">
<div id="dalam"><style>
#c{
	height:600px;
	width:100%;
	margin-left:0px;
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
#d{
	margin-left:20px;
}
#hh1 {
	text-align:center;
font-family:Arial;
font-size:30px;
height:37px;
margin-top:20px;
width:800px;
background-color:#a61818;
color:#fff;
border-radius:0px 20px 20px 0px;
}
#j{
	width:70%;
	height:400px;
	margin-left:140px;
}
h3{
	font-family:"Lao UI";
}
</style>
<div id="a">
<img src="Image/other/kali-linux-screenshot.png" id="c"></div>
<div id="b">
<h3>Prasyarat Installasi</h3><br />

1.    Minimal space hardisk 10 GB untuk install Kali Linux.<br />
2.    Untuk arsitektur i386 dan amd64, Minimal RAM 512MB.<br />
3.    Support CD-DVD Drive / USB boot<br />

<h3>Persiapan Installasi</h3><br />

1.    Download Kali linux.<br />
2.    Burn ISO Kali Linux ke DVD atau Image Kali Linux Live ke USB.<br />
3.    Pastikan komputer Anda sudah diatur untuk boot dari CD / USB di BIOS</div>
<h3>Prosedur Installasi Kali Linux</h3>
<div id="b">
1.Untuk memulai instalasi, boot dengan media instalasi yang Anda pilih. Anda akan disambut dengan Kali Linux Boot Menu. Pilih salah satu Graphical atau Text-Mode install. Dalam contoh ini, kita memilih GUI install.</div>
<img src="Image/other/01-install-select.png"  id="j"/>
<div id="b">
2.Pilih bahasa pilihan Anda dan kemudian lokasi negara Anda. Anda juga akan diminta untuk mengkonfigurasi keyboard anda dengan keymap yang sesuai. </div>
<img src="Image/other/02-language-select.png"  id="j"/>
<div id="b">
3.Pilih lokasi geografis anda. </div>
<img src="Image/other/03-location.png"  id="j"/>
<div id="b">
4.Installer akan mengcopy images ke hard disk Anda, mengecek interface jaringan Anda, dan kemudian meminta Anda untuk memasukkan nama host untuk sistem anda. Dalam contoh di bawah ini, kita sudah set “Kali” sebagai nama host kita. </div>
<img src="Image/other/05-hostname.png"  id="j"/>
<div id="b">
5.Anda dapat memberikan sebuah nama domain default pada system ini untuk digunakan. </div>
<img src="Image/other/06-domain.png"  id="j"/>
<div id="b">
6.Selanjutnya, masukkan nama lengkap untuk sebuah user non-root untuk system.</div>
<img src="Image/other/07-user.png"  id="j"/>
<div id="b">
7.Sebuah user ID default akan dibuat, berdasarkan nama lengkap yang telah dibuat. Anda dapat merubahnya jika anda menginginkan.</div>
<img src="Image/other/08-username.png"  id="j"/>
<div id="b">
8.Selanjutnya, set zona waktu anda.</div>
<img src="Image/other/09-timezone.png"  id="j"/>
<div id="b">
9.Installer sekarang akan melakukan pengecekan pada disk Anda dan menawarkan empat pilihan. Dalam contoh ini, kami menggunakan seluruh disk pada komputer kita dan tidak mengkonfigurasi LVM (logical volume manager). Pengguna yang berpengalaman dapat menggunakan metode partisi “Manual” untuk pilihan konfigurasi yang lebih rinci. </div>
<img src="Image/other/10-partitionmethod.png"  id="j"/>
<div id="b">
10.Pilih disk untuk dipartisi. </div>
<img src="Image/other/11-selectdisk.png"  id="j"/>
<div id="b">
11.Tergantung pada kebutuhan anda, anda dapat memilih untuk menyimpan semua file dalam sebuah partisi tunggal secara default – atau untuk mempunyai partisi terpisah untuk satu atau lebih direktori tingkat atas. Jika anda tidak yakin mana yang anda pilih, pilihlah “All files in one partition”. </div>
<img src="Image/other/12-partitioningscheme.png"  id="j"/>
<div id="b">
12.Selanjutnya, anda mempunyai kesempatan terakhir untuk melakukan review konfigurasi disk anda sebelum installer membuat perubahan yang tidak dapat dikembalikan. Setelah anda klik Continue, installer akan melanjutkan proses nya dan anda hampir selesai melakukan proses installasi.
</div>
<img src="Image/other/13-finish-partitioning.png"  id="j"/>
<div id="b">
13.Konfigruasi mirror jaringan. Kali menggunakan repositori terpusat untuk mendistribusikan aplikasi-aplikasi. Anda perlu memasukkan informasi proxy yang tepat sesuai yang dibutuhkan.<br /><i>CATATAN! Jika anda pilih “NO” pada layar, anda TIDAK AKAN dapat menginstal paket dari repositori Kali.</i>
</div>
<img src="Image/other/14-networkmirror.png"  id="j"/>
<div id="b">
14.Selanjutnya, install GRUB. </div>
<img src="Image/other/15-install-grub.png"  id="j"/>
<div id="b">
15.Akhirnya, klik Continue untuk reboot kedalam installasi baru Kali anda. </div>
<img src="Image/other/16-install-complete.png"  id="j"/>

</div></div>
<?php include "footer.php";?>