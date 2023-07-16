<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>Untitled Document</title>
</head>

<body>
<?php
$link=mysql_connect("localhost","root");
$db=mysql_select_db('rcasit',$link);
$query="SELECT * FROM mark ";
$rt=mysql_query($query);
?>
<center>
<h1>VIEW MARKS</h1>
<table border=3>
<tr><td>Project Id/Code</td><td>Project Theme</td><td>Project Level</td><td>Project Category</td><td>Creativity & Imagination(20)</td><td>Orginality & Innovation(15)</td><td>Scientific Thought/Principle/Apporach(15)</td><td>Technical Skill/workmanship/skill(15)</td><td>Utility for Society/Scalability(15)</td><td>Economic/Durability/Portability(10)</td><td>Presentation(10)</td><td>Total(100)</td></tr>
<?php
while($row=mysql_fetch_array($rt))
{
echo"<tr>";
echo"<td>".$row['id'];
echo"</td>";
echo"<td>".$row['the'];
echo"</td>";
echo"<td>".$row['level'];
echo"</td>";
echo"<td>".$row['cat'];
echo"</td>";
echo"<td>".$row['cre'];
echo"</td>";
echo"<td>".$row['org'];
echo"</td>";
echo"<td>".$row['tho'];
echo"</td>";
echo"<td>".$row['ski'];
echo"</td>";
echo"<td>".$row['ss'];
echo"</td>";
echo"<td>".$row['dp'];
echo"</td>";
echo"<td>".$row['pre'];
echo"</td>";
echo"<td>".$row['tot'];
echo"</td></tr>";
}
?>
</body>
</html>
