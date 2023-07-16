<!DOCTYPE html>
<html lang="en">
<head>
<title>Material</title>
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
  </a>
  
   <h1 align="center">Web Based Government Exam Self Learning System  </h1>
  <div class="social"> <a href="#"><img src="img/facebook.png" width="20" height="20" alt=""></a> <a href="#"><img src="img/twitter.png" width="20" height="20" alt=""></a> <a href="#"><img src="img/linkedin.png" width="20" height="20" alt=""></a> <a href="#"><img src="img/vcard.png" width="20" height="20" alt=""></a> <a href="#"><img src="img/picasa.png" width="20" height="20" alt=""></a> </div>
  <ul id="nav" class="main">
     <li><a href="index.html"><span><strong>Home</strong></span></a></li>
      <li><a href="user login.html"><span><strong>Learner</strong></span></a></li>
    <li><a href="creator login.html"><span><strong>Developer</strong></span></a></li>
			  			
                      
<li><a href="test.html"><span><strong>Test</strong></span></a></li>
<li><a href="links.html"><span><strong>Links</strong></span></a></li>	
  </ul>
</div>
<!--end of wrapper div-->
<div class="clear"></div>
<div class="wrapper">
  <p align="center"><font size="+3">File Material Module</font></p>
  <p align="right"><a href="http:\\localhost\xampp\Govt Exam\data"> Click to download File</a></p>
 <?php
 // Connect to the database
 $dbLink = new mysqli('localhost', 'root', '', 'exam');
 if(mysqli_connect_errno()) {
 die("MySQL connection failed: ". mysqli_connect_error())
;
 }

 // Query for a list of all existing files
 $sql = 'SELECT  `appname`, `appmime`, `appsize`, `appdata`, `appcreated` FROM `file`';
 $result = $dbLink->query($sql);

 // Check if it was successfull
 if($result) {
 // Make sure there are some files in there
 if($result->num_rows == 0) {
 echo '<p>There are no files in the database</p>';
 }
 else {
 // Print the top of a table
 echo '<table width="100%" border="1">
 <tr>

 <td><b>Title</b></td>
 <td><b>File Type</b></td>
 <td><b>File Size</b></td>
<td><b>Time</b></td>

 </tr>';

 // Print each file
 while($row = $result->fetch_assoc()) {
 echo "
 <tr>
 <td>{$row['appname']}</td>
 <td>{$row['appmime']}</td>
 <td>{$row['appsize']}</td> 
<td>{$row['appcreated']}</td>

 </tr>";
 }

 // Close table
 echo '</table>';
 }

 // Free the result
 $result->free();
}
 else
 {
 echo 'Error! SQL query failed:';
 echo "<pre>{$dbLink->error}</pre>";
 }

 // Close the mysql connection
 $dbLink->close();
 ?>
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
