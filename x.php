<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=iso-8859-1" />
<title>MAM INFOTECH BILL</title>
</head>
<body background="cliping/bg5.png">
</br>
<table width="1250" border="0" align="center">
        <tr>
          <td width="211"><img src="cliping/logo.png" alt="l" width="211" height="100" align="left" /></td>
          <td width="973"><strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Corporate      Office Address&nbsp;&nbsp;</strong> <strong> Landline : 04259&mdash; 283038</strong><br />
            <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;MAM      INFOTECH</strong>   <strong>&nbsp;&nbsp;&nbsp;</strong><strong>&nbsp;&nbsp;&nbsp;</strong><strong>&nbsp;&nbsp;&nbsp;</strong><strong>&nbsp;&nbsp;&nbsp;</strong><strong>Hotline : +91 7373825062</strong><br />
            <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;#      3-6 VADASITHUR</strong> <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;E-mail :&nbsp;contact@maminfotech.in</strong><br />
            <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;COIMBATORE</strong> <strong>&nbsp;&nbsp;&nbsp;</strong><strong>&nbsp;&nbsp;&nbsp;</strong><strong>&nbsp;&nbsp;&nbsp;</strong><strong>&nbsp;&nbsp;&nbsp;</strong><strong>&nbsp;&nbsp;&nbsp;</strong><strong>&nbsp;</strong><strong>Website : www.maminfotech.in</strong><br />
          <strong>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;641202</strong> <strong>&nbsp;&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;  www.maminfotech.org</strong></p></td>
          
        </tr>
</table>
      
      <p align="center"><img src="cliping/1.png" width="1250" height="30" /></p>
 </br>
   <table border="0"  align="center" width="1200" height="1000">   

<p>
  <?php
$mob=$_POST['mob'];
$link=mysql_connect("localhost","root");
$db=mysql_select_db('project',$link);
$query="SELECT * FROM billing";
$rt=mysql_query($query);
?>

</p>     
  <?php
while($row=mysql_fetch_array($rt))
{
if($row['mno']==$mob)
{
	echo"</br></br>";
	echo"&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;<strong><u>Cash/Credit Bill</u></strong>";
echo"</br></br>";
echo"<tr>";echo"<td>Folio No";echo"</td>";echo"<td><strong>".$row['foliono'];echo"</td>";echo"<td>Name";echo"</td>";echo"<td><strong>".$row['name'];echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>Registration No";echo"</td>";echo"<td><strong>".$row['ron'];echo"</td>";echo"<td>Mobile No";echo"</td>";echo"<td><strong>".$row['mno'];echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>E-Mail Id";echo"</td>";echo"<td><strong>".$row['em'];echo"</td>";echo"<td>Date";echo"</td>";echo"<td><strong>".$row['date'];echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>Personal Address";echo"</td>";echo"<td><strong>".$row['pa'];echo"</td>";echo"<td>Company Address";echo"</td>";echo"<td><strong>".$row['pea'];echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>";echo"</td>";echo"<td>";echo"</td>";echo"<td>";echo"</td>";echo"<td>";echo"</td>";echo"</tr>";

echo"<tr>";echo"<td><strong>Quantity</strong>";echo"</td>";echo"<td><strong>Particulars</strong>";echo"</td>";echo"<td><strong>Rate</strong>";echo"</td>";echo"<td><strong>Amount</strong>";echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>".$row['q1'];echo"</td>";echo"<td>".$row['p1'];echo"</td>";echo"<td>".$row['r1'];echo"</td>";echo"<td>".$row['a1'];echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>".$row['q2'];echo"</td>";echo"<td>".$row['p2'];echo"</td>";echo"<td>".$row['r2'];echo"</td>";echo"<td>".$row['a2'];echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>".$row['q3'];echo"</td>";echo"<td>".$row['p3'];echo"</td>";echo"<td>".$row['r3'];echo"</td>";echo"<td>".$row['a3'];echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>".$row['q4'];echo"</td>";echo"<td>".$row['p4'];echo"</td>";echo"<td>".$row['r4'];echo"</td>";echo"<td>".$row['a4'];echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>".$row['q5'];echo"</td>";echo"<td>".$row['p5'];echo"</td>";echo"<td>".$row['r5'];echo"</td>";echo"<td>".$row['a5'];echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>".$row['q6'];echo"</td>";echo"<td>".$row['p6'];echo"</td>";echo"<td>".$row['r6'];echo"</td>";echo"<td>".$row['a6'];echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>".$row['q7'];echo"</td>";echo"<td>".$row['p7'];echo"</td>";echo"<td>".$row['r7'];echo"</td>";echo"<td>".$row['a7'];echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>".$row['q8'];echo"</td>";echo"<td>".$row['p8'];echo"</td>";echo"<td>".$row['r8'];echo"</td>";echo"<td>".$row['a8'];echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>".$row['q9'];echo"</td>";echo"<td>".$row['p9'];echo"</td>";echo"<td>".$row['r9'];echo"</td>";echo"<td>".$row['a9'];echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>".$row['q10'];echo"</td>";echo"<td>".$row['p10'];echo"</td>";echo"<td>".$row['r10'];echo"</td>";echo"<td>".$row['a10'];echo"</td>";echo"</tr>";
echo"<tr>";echo"<td>";echo"</td>";echo"<td>";echo"</td>";echo"<td>";echo"</td>";echo"<td>";echo"</td>";echo"</tr>";
echo"<tr>";echo"<td>&nbsp;";echo"</td>";echo"<td>Total Amount";echo"</td>";echo"<td>";echo"</td>";echo"<td><strong>".$row['total'];echo"</td>";echo"</tr>";

echo"<tr>";echo"<td>";echo"</td>";echo"<td>";echo"</td>";echo"<td>";echo"</td>";echo"<td>";echo"</td>";echo"</tr>";
echo"<tr>";echo"<td>Total Amount In Words";echo"</td>";echo"</strong>";echo"<td>";echo"</td>";echo"<td><strong>".$row['words'];echo"</td>";echo"<td>";echo"</td>";echo"</tr>";


}
}

?> 


</table>
<p align="center"><img src="cliping/2.png" width="1250" height="30" /></p>

<p align="center"><strong>For originality please check www.maminfotech.in/originality.html</strong></p>
</body>
</html>
