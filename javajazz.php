<?php include "header-menu.php"; ?>
<link href="CSS/conten.css" rel="stylesheet" type="text/css">
<div id="conten">
<div id="dalam"><style>
#java{
	width:100%;
	height:600px;
	background-color:#fff;
	margin-top:0px;
	margin-right:10px;
}
#sld{
	margin-top:45px;
}
#mg { 
max-width:100%; 
height: auto; 
} 
ul,ol { 
list-style-type: none; 
} 
.kontainer { 
margin:10% auto; 
position: relative; 
overflow: hidden; 
} 
.sld, ul.sld li img{ 
width:100%;  
height: 300px; 
}
ul.sld { 
position: absolute; 
display: block; 
width:800%;  
}
.kapsion { 
position: absolute; 
background-color: rgba(0,0,0,0.5); 
bottom:0; 
padding:10px; 
color:#fff; 
left: 0; 
right: 0; 
}
ul.sld li { 
display: inline-block; 
float: left; 
-webkit-box-sizing:border-box; 
-moz-box-sizing:border-box; 
ox-sizing:border-box; 
-webkit-transition: -webkit-transform ease-out; 
-moz-transition: -moz-transform 2000ms; 
transition: -webkit-transform 2000ms, transform 2000ms; 
} 
ul.sld li.sld-1 { 
left: 0%; 
} 
ul.sld li.sld-2 { 
left: 100%; 
}
ul.sld li.sld-3 { 
left: 200%; 
} 
ul.sld li.sld-4 { 
left: 300%; 
} 
ul.sld li.sld-5 { 
left: 400%; 
} 
ul.sld li.sld-6 { 
left: 500%; 
} 
ul.sld li.sld-7 { 
left: 600%; 
} 
ul.sld li.sld-8 { 
left: 700%; 
} 
#nav-1:checked ~ ul.sld li{ 
-webkit-transform: translateX(0%); 
-moz-transform: translateX(0%); 
transform: translateX(0%); 
} 
#nav-2:checked ~ ul.sld li{ 
-webkit-transform: translateX(-100%); 
-moz-transform: translateX(-100%); 
transform: translateX(-100%); 
} 
#nav-3:checked ~ ul.sld li { 
-webkit-transform: translateX(-200%); 
-moz-transform: translateX(-200%); 
transform: translateX(-200%); 
} 
#nav-4:checked ~ ul.sld li { 
-webkit-transform: translateX(-300%); 
-moz-transform: translateX(-300%); 
transform: translateX(-300%); 
} 
#nav-5:checked ~ ul.sld li { 
-webkit-transform: translateX(-400%); 
-moz-transform: translateX(-400%); 
transform: translateX(-400%); 
} 
#nav-6:checked ~ ul.sld li { 
-webkit-transform: translateX(-500%); 
-moz-transform: translateX(-500%); 
transform: translateX(-500%); 
} 
#nav-7:checked ~ ul.sld li { 
-webkit-transform: translateX(-600%); 
-moz-transform: translateX(-600%); 
transform: translateX(-600%); 
} 
#nav-8:checked ~ ul.sld li { 
-webkit-transform: translateX(-700%); 
-moz-transform: translateX(-700%); 
transform: translateX(-700%); 
} 
.radio-navx { 
display: none; 
} 
.nav-arrowx { 
position: absolute; 
top:45%; 
width:50px; 
height: 50px; 
} 
.nav-nextx { 
right:10px; 
} 
.nav-prevx { 
left:10px; 
} 
.nav-arrowx label 
{ 
-webkit-transition:all 0.3s; 
-moz-transition:all 0.3s; 
transition:all 0.3s; 
background-color: rgba(0,0,0,0.3); 
color: #fff; 
border-radius: 50%; 
display: block; 
position: absolute; 
padding:15px 20px; 
cursor: context-menu; 
z-index: 1; 
opacity: 0; 
font-weight: bold; 
line-height: 1; 
}
.kontainer:hover .nav-arrowx label{ 
background-color: rgba(0,0,0,0.7); 
}  
#navx-1:checked ~ .nav-prevx label.navx-8, 
#navx-1:checked ~ .nav-nextx label.navx-2, 
#navx-2:checked ~ .nav-prevx label.navx-1, 
#navx-2:checked ~ .nav-nextx label.navx-3, 
#navx-3:checked ~ .nav-prevx label.navx-2, 
#navx-3:checked ~ .nav-nextx label.navx-4,
#navx-4:checked ~ .nav-prevx label.navx-3, 
#navx-4:checked ~ .nav-nextx label.navx-5, 
#navx-5:checked ~ .nav-prevx label.navx-4, 
#navx-5:checked ~ .nav-nextx label.navx-6,
#navx-6:checked ~ .nav-prevx label.navx-5, 
#navx-6:checked ~ .nav-nextx label.navx-7,
#navx-7:checked ~ .nav-prevx label.navx-6, 
#navx-7:checked ~ .nav-nextx label.navx-8,
#navx-8:checked ~ .nav-prevx label.navx-7, 
#navx-8:checked ~ .nav-nextx label.navx-1
{ z-index: 2; opacity: 1; }

</style>
<div id="java"><div id="sld"><div class="kontainer"> 
<input type="radio" name="sld" class="radio-navx" id="navx-1" checked/> <input type="radio" name="sld" class="radio-navx" id="navx-2"/> 
<input type="radio" name="sld" class="radio-navx" id="navx-3"/>
<input type="radio" name="sld" class="radio-navx" id="navx-4"/>
<input type="radio" name="sld" class="radio-navx" id="navx-5"/>
<input type="radio" name="sld" class="radio-navx" id="navx-6"/>
<input type="radio" name="sld" class="radio-navx" id="navx-7"/>
<input type="radio" name="sld" class="radio-navx" id="navx-8"/>
<ul class="sld"> 
<li class="sld-1"> <a href="office.php"><img src="Image/other/microsoft-office_01.jpg" id="mg"/> 
<div class="kapsion">Tips, Triks & Petunjuk Office 2013</div></a> 
</li> 
<li class="sld-2"> <a href="nvidia.php">
<img src="Image/other/maxresdefault.jpg" id="mg"/>
<div class="kapsion">Nvidia merilis VGA Titan Z</div></a> 
</li> 
<li class="sld-3"> <a href="tampilanwin10.php"><img src="Image/other/tampilan win 10.jpg" id="mg"/>
<div class="kapsion">Fakta Menarik Tentang Windows 10</div></a> 
</li> 
<li class="sld-4"> <a href="kitkat.php"><img src="Image/other/KitKat.jpg" id="mg"/>
<div class="kapsion">Kelebihan & Kekurangan Android Kitkat</div></a> 
</li> 
<li class="sld-5"> <a href="diskusage.php"><img src="Image/other/disk-usage-windows_01.jpeg" id="mg"/>
<div class="kapsion">How to Fix Disk Usege 100% on Windows</div></a> 
</li> 
<li class="sld-6"> <a href="installkalilinux.php"><img src="Image/other/01-install-select.png" id="mg"/>
<div class="kapsion">How to Install Kali Linux</div></a> 
</li> 
<li class="sld-7"> <a href="apple.php"><img src="Image/other/applemusicandroid_0.jpg" id="mg"/>
<div class="kapsion">Apple akan merilis Apple Music untuk android</div></a>
</li> 
<li class="sld-8"> <a href="javajazz.php">
<img src="Image/other/java.jpg" id="mg"/> 
<div class="kapsion">Java Jazz Festival 2016</div></a> 
</li> 
</ul><div class="nav-arrowx nav-nextx"> 
<label class="navx-1" for="navx-1">></label> 
<label class="navx-2" for="navx-2">></label> 
<label class="navx-3" for="navx-3">></label> 
<label class="navx-4" for="navx-4">></label> 
<label class="navx-5" for="navx-5">></label>
<label class="navx-6" for="navx-6">></label>
<label class="navx-7" for="navx-7">></label>
<label class="navx-8" for="navx-8">></label>
</div> 
<div class="nav-arrowx nav-prevx"> 
<label class="navx-1" for="navx-1"><</label> 
<label class="navx-2" for="navx-2"><</label> 
<label class="navx-3" for="navx-3"><</label> 
<label class="navx-4" for="navx-4"><</label> 
<label class="navx-5" for="navx-5"><</label> 
<label class="navx-6" for="navx-6"><</label> 
<label class="navx-7" for="navx-7"><</label> 
<label class="navx-8" for="navx-8"><</label> 
</div> 
</div></div></div>
 <a href="update.php"><img src="Image/kiri.png" id="kiri"/></a>
</div></div>
<?php include "footer.php";?>