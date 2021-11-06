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
	width:100%
}
</style>
<div id="a">
<img src="Image/other/disk-usage-windows_01.jpeg" id="c"></div>
<div id="b">
&nbsp;&nbsp;&nbsp;&nbsp;Komputer kamu sering hang? Kalo Windows emang sering gitu sih.. Kecuali kalau kamu menggunakan Windows 8.x atau Windows 10, tapi beberapa orang masih mengalami hal ini ketika menggunakan sistem operasi tersebut. Jadi kenapa komputer kamu sering hang?<br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;Usut punya usut, ternyata sistem drive kamu berjalan dengan 100%. Tentu ini sangat tidak benar.. Versi terbaru Windows memiliki masalah dengan drive yang bekerja lebih keras, sehingga memperlambar sistem operasi. Masalah ini berpengaruh pada HDD dan SSD. </div>
<div id="b">
<h3>Kinerja Lambat? Check Disk Usage Terlebih Dahulu</h3>
&nbsp;&nbsp;&nbsp;&nbsp;Masalah kinerja kebanyakan terjadi dikarenakan Search (Windows+Q) untuk menemukan file dan program, atau apapun yang ada di drive kamu.<br /><br />
<img src="Image/other/disk-usage-windows_02.jpeg" id="j" />
&nbsp;&nbsp;&nbsp;&nbsp;Untuk mengetahui apakah permasalahannya dari sini, kamu bisa mengetahuinya dengan menekan Ctrl+Alt+Del dan pilih Task Manager. Tapi perlu kamu perhatikan, perlu waktu yang agak lama untuk membuka Task Manager karena kinerja komputer yang lemot.Pada tab pertama pilih Processes, kemudian klik kolom Disk. Jika kamu memiliki masalah dengan drive performance, akan muncul nilai 100% dan bewarna merah.Untuk mengatasi masalah ini, kamu punya beberapa solusi yang bisa dilakukan.<br /><br />
<h3>1# – Mungkin Ada Malware yang Bersarang di Komputer Kamu</h3>

&nbsp;&nbsp;&nbsp;&nbsp;Seperti kebanyakan masalah komputer lemot, hal pertama yang harus dilakukan adalah memastikan kalau komputer kamu belum terkena malware. Software antivirus harus bisa menangani masalah ini, entah itu gratis atau pun berbayar. Setidaknya antivirus bawaan Windows, Windows Defender sudah bisa menangani masalah ini kalau sering diupdate, meskipun drive terbebani karena proses scanning.<br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;Jika ancaman ditemukan, maka segera hapus mereka dan restart komputer, sebelum proses scanning diteruskan. Mudah-mudahan dengan cara ini masalah dapat terselesaikan, jika tidak terselesaikan coba cara di bawah ini.<br /><br />
 
<h3>2# – Matikan Windows Search untuk Meningkatkan Disk Performance</h3>

&nbsp;&nbsp;&nbsp;&nbsp;Kemungkinan masalah yang terjadi selanjutnya adalah Windows Search. Ada sebuah bug dari Windows 10 dan Windows 8 yang disebut dengan “search loop” yang meningkatkan load pada system drive.<br /><br />

&nbsp;&nbsp;&nbsp;&nbsp;Untuk menghentikan hanya untuk sesaat saja sampai Windows reboot, buka Command Prompt (Admin) dengan mengklik kiri pada Start Menu dan ketikkan perintah seperti di bawah ini:<br />

<b><i>net.exe stop “Windows search”</i></b>

&nbsp;&nbsp;&nbsp;&nbsp;Untuk mematikan Windows Search atau Indexing secara permanen, tekan Win+R dan ketikkan service.msc, tekan Enter. Pada window Service, temukan dan buka Windows Search sehingga akan terbuka Windows Search Properties. Di bawah Startup type, pilih Disabled. Disini kamu juga bisa klik Stop untuk menghentikan service. Klik Ok untuk menyimpan pengaturan.<br /><br />
<img src="Image/other/disk-usage-windows_03.jpeg" id="j" />
Setelah beberapa saat mematikan Windows Search, kinerja Windows 8.x atau Windows 10 akan meningkat. Jika tidak kamu bisa melanjutkan cara di bawah ini.<br /><br />
<h3>3# – Disable XX Service</h3>
&nbsp;&nbsp;&nbsp;&nbsp;Untuk beberapa alasan, xx service menjadi salah satu masalah kinerja disk yang membuat komputer lemot di Windows 8.x dan Windows 10. Untuk mengatasi masalah ini, buka Command Prompt dan ketikkan perintah:<br />

<b><i>net.exe stop superfetch</i></b><br />
<img src="Image/other/disk-usage-windows_04.jpeg" id="j" />
Sekali lagi, butuh beberapa saat untuk meningkatkan kembali kinerja komputer kamu. Kamu juga harus menjalankan Check Disk di Command Prompt:<br />
<b><i>chkdsk.exe /f /r</i></b><br />

&nbsp;&nbsp;&nbsp;&nbsp;Kamu akan diberitahukan kalau komputer harus reboot untuk menyelesaikan Check Disk, jadi pastikan kamu mengeluarkan semua aplikasi dan menyimpan data terselebih dahulu.Jika cara di atas masih juga belum menyelesaikan masalah komputer kamu, ada kemungkinan bahwa hal lain yang menyebabkan masalah ini.<br /><br />
 
<h3>4# – Coba Cek Flash</h3>

&nbsp;&nbsp;&nbsp;&nbsp;Saat ini kita sudah jarang sekali melihat flash, ini dikarenakan ia menjadi salah satu aspek paling rentan, terjadi banyak serangan berasal dari Flash. Hal ini tampaknya menjadi salah satu penyebab paling umum untuk hard disk usage 100% pada Windows 10 dan versi awal Windows, ketika kamu menggunakan browser Chrome.<br />

<b><i>chrome://plugins</i></b><br />

Kamu akan melihat plugin flash player dari sini, ia terpasang untuk melihat video atau game flash.
<img src="Image/other/disk-usage-windows_05.jpeg" id="j" />
Klik tombol Disable dari Adobe Flash Player hingga ia bewarna abu-abu. Tunggu beberapa saat dan cek Task Manager. Masalah kinerja pada system drive akan teratasi. Coba restart ulang Chrome jika masalah ini masih terus berlanjut.<br /><br />

<h3>Disk Usage Selalu 100%??</h3>

&nbsp;&nbsp;&nbsp;&nbsp;Sederhananya jika komputer kamu selalu menampilkan disk usage 100% bahkan ketika kamu sudah menggunakan semua cara di atas, maka masalah sebenarnya ada pada hardware yang kamu gunakan. Beberapa waktu yang lalu WinPoin juga mengalami masalah ini, disk usage selalu 100%. Kami berspekulasi kalau hardisk yang rusak atau adanya bad sector, ternyata PSU yang rusak.<br /><br />
<img src="Image/other/disk-usage-windows_06.jpeg" id="j" />
Mungkin hardisk kamu sudah berumur dan waktunya ganti, atau kabel yang harus diganti. Alternatifnya, mungkin ada masalah yang berhubungan dengan Windows defrag tool. Jika komputer kamu mencoba untuk defrag hardisk, tapi kamu menggunakan SSD, ini adalah masalah yang serius. Kamu bisa menyelesaikan masalah ini dengan Task Scheduler (Win+Q, masukan task scheduler) dan disable semua task scheduled disk defrag.
</div>
</div></div>
<?php include "footer.php";?>