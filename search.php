<?php include "header-menu.php"; ?>
<link href="CSS/conten.css" rel="stylesheet" type="text/css">
<div id="conten">
<style>
#a{
	width:150px;
	height:150px;
	float:left;
	margin-top:15px;
	margin-left:10px;
}
#b{
	font-family:"Lao UI";
	font-size:18px;
	color:#030303;
	margin-left:170px;
	width:80%;
	height:150px;
	margin-top:15px;
	margin-bottom:15px;
}
#ca{
	font-size:24px;
	font-weight:bold;
	color:#b00;
}
#d{
	text-decoration:none;
	color:#b00;
}
#d:hover{
	color:#000;
}
#kanan{
	width:100px;
	height:80px;
	margin-top:-70px;
	margin-left:550px;
}
#kiri{
	width:100px;
	height:80px;
	margin-left:300px;
	float:left;
}
</style>
<div id="dalam">
<?php
mysql_connect('localhost','root',''); 
mysql_select_db('project');
$key = $_POST['text'];
$query=mysql_query("select * from cari where cari like '%$key%'");
while($r=mysql_fetch_array($query));
{
	echo"
<div id=b>
".strtoupper($r['text'])."
</div>";
}
?>
</div></div>
<?php include "footer.php";?>
