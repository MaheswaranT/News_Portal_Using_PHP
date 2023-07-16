<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Untitled Document</title>
<link href="http://fonts.googleapis.com/css?family=Bitter&subset=latin" rel="stylesheet" type="text/css">

<style>


body {  /* webkit adjacent sibling bug fix */
  -webkit-animation: bugfix infinite 1s; 
}

@-webkit-keyframes bugfix { 
  from {padding:0;} 
  to {padding:0;} 
}

label#sidemenutoggler {   /* Main label icon to toggle menu state */
  z-index: 100;
  display: block;
  position: relative;
  font-size: 10px; /* change font size to change label dimensions. Leave width/height below alone */
  width: 3.5em;
  height: 2em;
  top: 0;
  left: 0;
  background: white;
  text-indent: -1000px;
  border: 0.6em solid black; /* border color */
  border-width: 0.6em 0;
  cursor: pointer;
  -webkit-transition: all 0.3s ease-in;
  transition: all 0.3s ease-in; /* transition for animating label */
}


label#sidemenutoggler::before,
label#sidemenutoggler::after {
  /* inner stripes inside label */
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 0.6em;
  top: 50%;
  margin-top: -0.3em;
  left: 0;
  background: black; /* stripes background color. Change to match border color of parent label above */
  -webkit-transform: rotate(0);
  transform: rotate(0);
  -webkit-transition: all 0.3s ease-in;
  transition: all 0.3s ease-in; /* transition for flipping label */
}

#sidemenucheckbox:checked ~ label#sidemenutoggler {
  /* state of main menu label when menu is open  */
  border-color: transparent;
}

#sidemenucheckbox:checked ~ label#sidemenutoggler::before {
  /* state of main menu label::before when menu is open  */
  -webkit-transform: rotate(-45deg);
  transform: rotate(-45deg);
}

#sidemenucheckbox:checked ~ label#sidemenutoggler::after {
  /* state of main menu label::after when menu is open  */
  -webkit-transform: rotate(45deg);
  transform: rotate(45deg);
}

#sidemenucheckbox{ /* main side bar menu style */
	display: none;
}

#rightsidemenu{
	position: fixed;
	top: 0;
	right: 0;
	width: 250px; /* width of menu */
	height: 100%;
	background: #F7D48A; /* background of menu */
  font: bold 1em 'Bitter', sans-serif; /* Use google custom fonts for this menu */
  z-index: 1001;
  -webkit-box-sizing: border-box;
	-moz-box-sizing: border-box;
	box-sizing: border-box;
  visibility: hidden;
  box-shadow: 5px 0 10px rgba(0,0,0,.2);
	-webkit-transform: translate3d(100%,0,0) rotate(-20deg); /* offset and rotate menu. Remove rotate() if desired */
	transform: translate3d(100%,0,0) rotate(-20deg);
}

#rightsidemenu a{
	text-decoration: none;
  color: black;
  text-transform: uppercase;
}

#rightsidemenu ul{
  list-style: none;
  margin: 0;
  padding: 0;
  position: relative;
  display: block;
	text-align: center;
  font-size: 1.5em;
  -webkit-transform: translate3d(0,-20%,0); /* move UL upwards slightly, so it slides down menu opened */
  transform: translate3d(0,-20%,0);
  opacity: 0;
}

#rightsidemenu ul li{
}

#rightsidemenu ul li a{
  padding: 30px 10px;
  display: block;
}

#rightsidemenu ul li a:hover{
  background: #F7AC6A;
  transition: all 0.5s;
  
}
.overlay{
  content: '';
  position: fixed;
  visibility: hidden;
  width: 100%;
  height: 100%;
  background: gray;
  left: 0;
  top: 0;
  opacity: 0;
  z-index: 1000;
  -webkit-transition: opacity .3s, visibility 0s .3s;
  transition: opacity .3s, visibility 0s .3s;
}

.overlay label{
  width: 100%;
  height: 100%;
  left: 0;
  top: 0;
  position: absolute;
}

#rightsidemenu label#closex{ /* Large x close button inside nav */
  width: 50px;
  height: 50px;
	overflow: hidden;
  display: block;
  position: absolute;
  cursor: pointer;
	text-indent: -1000px;
  z-index: 10;
  top: 0;
  left: 5px;
}


#rightsidemenu label#closex::before,
#rightsidemenu label#closex::after{ /* render large cross inside close button */
  content: "";
  display: block;
  position: absolute;
  width: 100%;
  height: 6px;
  background: black;
  top: 50%;
  margin-top: -3px;
  -ms-transform: rotate(-40deg);
  -webkit-transform: rotate(-40deg);
  transform: rotate(-40deg);
}

#rightsidemenu label#closex::after{ /* render large cross inside close button */
  -ms-transform: rotate(40deg);
  -webkit-transform: rotate(40deg);
  transform: rotate(40deg);
}

#sidemenucheckbox:checked ~ #rightsidemenu{
  visibility: visible;
	-webkit-transform: translate3d(0,0,0);
	transform: translate3d(0,0,0);
  -webkit-transition: -webkit-transform .5s ease-in-out;
  transition: transform .5s ease-in-out;
}

#sidemenucheckbox:checked ~ #rightsidemenu ul{
  -webkit-transform: translate3d(0,50px,0); /* shift menu downwards when revealed */
  transform: translate3d(0,50px,0);
  opacity: 1;
  -webkit-transition: opacity 1s .5s, -webkit-transform 1s .5s;
  transition: opacity 1s .5s, transform 1s .5s;
}

#sidemenucheckbox:checked ~ .overlay{
  opacity: .8;
  visibility: visible;
  -webkit-transition: opacity 0.3s;
  transition: opacity 0.3s;
}

</style>


<script>

document.createElement('nav')

function legacybrowsertoggle(){
	if (!document.getElementsByClassName){ // legacy browsers only
		var mobilemenunav = document.getElementById("rightsidemenu")
		if (mobilemenunav.style.visibility != 'visible')
			mobilemenunav.style.visibility = 'visible'
		else
			mobilemenunav.style.visibility = 'hidden'
	}
}

</script>

<!--[if lte IE 8]>

	<style>

	/* IE8 specific CSS */

	#rightsidemenu label#closex{
		position: static;
		width: auto;
		text-align: center;
		font-size: 2em;
		text-indent: 0;
	}


	</style>


<![endif]-->

</head>

<body background="cliping/images.jpeg">
<input type="checkbox" id="sidemenucheckbox" />

<label id="sidemenutoggler" for="sidemenucheckbox" onClick="legacybrowsertoggle()">Toggle Menu</label>

<nav id="rightsidemenu">

	<ul>
     <li><a href="enroll.html"><span>Generate Bill</span></a></li>
	<li><a href="search.php"><span>Mobile No Search</span></a></li>
    <li><a href="folio search.php"><span>Folio No Based Search</span></a></li>
    <li><a href="name search.php"><span>Name Based Search</span></a></li>
    
						
                        <li><a href="search.php"><span>Acknowledgement</span></a></li>
                        <!--<li><a href="javascript:window.close()"><span>Exit</span></a></li>-->

	</ul>
<label id="closex" for="sidemenucheckbox" onClick="legacybrowsertoggle()">Close</label>
</nav>
	
<div class="overlay"><label for="sidemenucheckbox"></label></div>
<div align="center">
 
  <td width="1250"><table width="1200" border="1">
        <tr>
          <td width="211"><img src="cliping/logo.png" alt="l" width="211" height="100" align="left" /></td>
          <td width="973"><h1 align="center"><strong><font size="300" face="Arial Black, Gadget, sans-serif">MAM INFOTECH</font></strong></h1></td>
        </tr>
      </table>
      <p>&nbsp;</p></td></div>



<p><h1 align="justify" dir="ltr">
  <marquee>
  MAM INFOTECH E- BILLING PORTAL
</marquee></h1>
</p>
<p>&nbsp;</p>
<p>&nbsp;</p>





</body>
</html>
