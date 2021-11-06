<?php
$koneksi=mysql_connect('localhost','root','');
mysql_select_db('project');
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$name=$_POST['name'];
$password=md5($_POST['password']);
$email=$_POST['email'];
$kota=$_POST['kota'];
$alamat=$_POST['alamat'];
$tgllahir=$_POST['tgllahir'];
$bulan=$_POST['bulan'];
$tahun=$_POST['tahun'];
$pria=$_POST['pria'];
$wanita=$_POST['wanita'];
$perintah=mysql_query("insert into login set name='$name',password='$password',email='$email',kota='$kota',alamat='$alamat',tgllahir='$tgllahir',bulan='$bulan',tahun='$tahun',pria='$pria',wanita='$wanita'");
header("location:berhasil.php");
?>