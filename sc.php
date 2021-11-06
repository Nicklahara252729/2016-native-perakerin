<?php
$dbhost = 'localhost';
$dbuser = 'root';
$dbpass = '';
$koneksi = mysql_connect($dbhost, $dbuser, $dbpass);
if(! $koneksi )
{
  die('Gagal Koneksi: ' . mysql_error());
}
$nama=$_POST['nama'];
$email=$_POST['email'];
$comment=$_POST['comment'];
$sql = "INSERT INTO komentar(nama,email,comment,date)
       values('$nama','$email','$comment',NOW())";
mysql_select_db('project',$koneksi);
$tambahdata = mysql_query( $sql, $koneksi );
if(! $tambahdata )
{
  die('Gagal tambah data: ' . mysql_error());
}
header("location:home.php");
?>