<!DOCTYPE html>
<html lang="en">
<head>
<title>Developer</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0">
<link rel="stylesheet" href="css/inuit.css">
<link rel="stylesheet" href="css/fluid-grid16-1100px.css">
<link rel="stylesheet" href="css/eve-styles.css">
<link rel="shortcut icon" href="icon.png">
<link rel="apple-touch-icon-precomposed" href="img/icon.png">
<script src="js/respond-min.js"></script>
<script src="js/jquery164min.js"></script>
<script src="js/jquery.flexslider-min.js"></script>
<link rel="stylesheet" href="css/flexslider.css">
<script>
$(window).load(function () {
    $('.flexslider').flexslider({
        animation: "slide",
        directionNav: false,
        keyboardNav: true,
        mousewheel: true
    });
});
</script>
<!--[if lte IE 7]>
<style>
hr { display:block; height:1px; border:0; border-top:1px solid #fff; margin:1em 0; padding:0; }
.grid-4{ width:22% }
</style>
<![endif]-->
</head>

<body bgcolor="a8e7f3">
<div class="wrapper"> <a href="index.html">
  <h1 align="center">Web Based Government Exam Self Learning System</h1>
  </a>
  <div class="social"> <a href="#"><img src="img/facebook.png" width="20" height="20" alt=""></a> <a href="#"><img src="img/twitter.png" width="20" height="20" alt=""></a> <a href="#"><img src="img/linkedin.png" width="20" height="20" alt=""></a> <a href="#"><img src="img/vcard.png" width="20" height="20" alt=""></a> <a href="#"><img src="img/picasa.png" width="20" height="20" alt=""></a> </div>
  <ul id="nav" class="main">
     <li><a href="index.html"><span><strong>Home</strong></span></a></li>
      <li><a href="user login.html"><span><strong>Learner</strong></span></a></li>
    <li><a href="creator login.html"><span><strong>Developer</strong></span></a></li>
			   			
                      
<li><a href="test.html"><span><strong>Take Test</strong></span></a></li>	
  </ul>
</div>
<!--end of wrapper div-->
<div class="clear"></div>
<div class="wrapper">


<center>
<h1>DEVELOPER SEARCH DETAILS</h1>
<table border=3>
<tr><td>DEVELOPER ID</td><td>DEVELOPER NAME</td><td>MOBILE NO</td><td>E-MAIL ID</td><td>ADDRESS</td><td>ABOUT YOU</td><td>PASSWORD</td><td>DATE OF REG</td></tr>

<?php
$date=$_POST['date'];
$link=mysql_connect("localhost","root");
$db=mysql_select_db('govt',$link);
$query="SELECT * FROM developer";
$rt=mysql_query($query);
?>
<?php
while($row=mysql_fetch_array($rt))
{
if($row['date']==$date)
{
echo"<tr>";
echo"<td>".$row['name'];
echo"</td>";
echo"<td>".$row['ron'];
echo"</td>";
echo"<td>".$row['mno'];
echo"</td>";
echo"<td>".$row['em'];
echo"</td>";
echo"<td>".$row['pa'];
echo"</td>";
echo"<td>".$row['pea'];
echo"</td>";
echo"<td>".$row['place'];
echo"</td>";
echo"<td>".$row['date'];
echo"</td></tr>";
}
}
?>
<?php
$date1=$_POST['date1'];
$link=mysql_connect("localhost","root");
$db=mysql_select_db('govt',$link);
$query="SELECT * FROM developer";
$rt=mysql_query($query);
?>
<?php
while($row=mysql_fetch_array($rt))
{
if($row['date']==$date1)
{
echo"<tr>";
echo"<td>".$row['name'];
echo"</td>";
echo"<td>".$row['ron'];
echo"</td>";
echo"<td>".$row['mno'];
echo"</td>";
echo"<td>".$row['em'];
echo"</td>";
echo"<td>".$row['pa'];
echo"</td>";
echo"<td>".$row['pea'];
echo"</td>";
echo"<td>".$row['place'];
echo"</td>";
echo"<td>".$row['date'];
echo"</td></tr>";
}
}
?>
</table>
 <!--end of div grids-->
</div>
<!--end of div wrapper-->
<!--========================================================================== Content Part 1 =====================================================================================--><!--end of wrapper-->
<hr />
<!--========================================================================== Content Part 2 =====================================================================================--><!--end of wrapper-->
<hr />
<!--========================================================================== Content Part 3 =====================================================================================--><!--end of wrapper-->
<!--===================================================  second row of Content Part 3 ================================================--><!--end of wrapper-->
<!--========================================================================== Footer =====================================================================================--><!--end of wrapper-->
</body>
</html>
