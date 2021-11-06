<?php
session_start();
$name=$_POST['name'];
$password=md5($_POST['password']);
mysql_connect('localhost','root','');
mysql_select_db('project');
$query = mysql_query ("select * from login where name='$name' and password='$password'");
$jumlah = mysql_num_rows ($query);
if ($jumlah>0)
{
	$use= mysql_fetch_array($query);
	$_SESSION['status_login']='sudah login';
	$_SESSION['name']=$use['name'];
	header("location:home.php");
}else{
	header("location:gagal.php");
}
?>