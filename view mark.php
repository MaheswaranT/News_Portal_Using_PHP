<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body bgcolor="pink">
<?php
$link=mysql_connect("localhost","root");
$db=mysql_select_db('tests',$link);
$query="SELECT * FROM billing";
$rt=mysql_query($query);
?>
<center>
  <h1 align="center">Success  TNPSC and NEET Coaching Institute </h1>
  <h3>Semantic Web Based Government Exam Self Learning Application <a href="index.html"> </a></h3>
<h1>TEST MARK DETAILS</h1>
<table border=3>
<tr><td>USER NAME</td><td>REGISTER NO</td><td>COURSE</td><td>SPECILIZATION</td><td>MARK</td><td>DATE</td></tr>
<?php
while($row=mysql_fetch_array($rt))
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
echo"<td>".$row['place'];
echo"</td>";
echo"<td>".$row['date'];
echo"</td></tr>";
}
?>
</body>
</html>
