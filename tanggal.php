<style>
#r{
	float:right;
	font-family:"Lao UI";
	font-size:25px;
	margin-right:80px;
	font-weight:bold;
	color:#b00;
}
</style>
<div id="r"><?php
$hari = array ("Minggu","Senin","Selasa","Rabu","Kamis","Jumat","Sabtu");
$bulan = array ("Januari","Februari","Maret","April","Mei","Juni","Juli","Agustus","September","Oktober","November","Desember");
$waktu[0]=$hari[date("w",time())];
$waktu[1]=date("d",time());
$waktu[2]=date("m",time());
$waktu[3]=date("Y",time());
$waktu[4]=date("H",time());
$waktu[5]=date("i",time());
$waktu[6]=date("s",time());
$hariini="$waktu[0]";
$tanggalini="$waktu[1] ".$bulan[$waktu[2]-1]." $waktu[3]";
$jamini="$waktu[4]:$waktu[5]:$waktu[6]";
echo("$hariini, $tanggalini");
?></div>