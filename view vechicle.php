<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body background="cliping/images.jpeg">
<?php
$link=mysql_connect("localhost","root");
$db=mysql_select_db('vechicle',$link);
$query="SELECT * FROM vechicle";
$rt=mysql_query($query);
?>
<center>
<h1>VECHICLE DETAILS</h1>
<table border=3>
<tr><td>REGISTRATION NO</td><td>OWNER NAME</td><td>VECHICLE NAME</td><td>MOBILE NO</td><td>E-MAIL ID</td><td>PRESENT ADDRESS</td><td>PERMANENT ADDRESS</td>><td>PARKED AREA</td><td>DATE</td></tr>
<?php
while($row=mysql_fetch_array($rt))
{
echo"<tr>";
echo"<td>".$row['foliono'];
echo"</td>";
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
?>
</body>
</html>
