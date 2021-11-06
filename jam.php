<style>
.jam {
font-family: "Lao UI";
font-weight : bold;
font-size : 35px;
color:#b00;
position : relative;
margin-left:170px;
}
</style>
<div class="jam" id="tempatjam"><script language="JavaScript">
function tampilkanjam()
{
var waktu = new Date();
var jam = waktu.getHours();
var menit = waktu.getMinutes();
var detik = waktu.getSeconds();
var teksjam = new String();
if ( menit <= 9 )
menit = "0" + menit;
if ( detik <= 9 )
detik = "0" + detik;
teksjam = jam + ":" + menit + ":" + detik;
tempatjam.innerHTML = teksjam;
setTimeout ("tampilkanjam()",1000);
}
window.onload = tampilkanjam
</script></div>