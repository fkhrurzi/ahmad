<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title> Hasil </title>

<style>
table, th, td{
border: 1px solid black;
border-collapse:collapse;
padding: 10px;
}
td{
	text-align: center;
}

body{
background-image: url('calc.gif');
background-color:lightgrey;
font-family: monospace;
font-size: 20px;
}
.tmbhdata {
	border-radius: 100%;
	background-color: #F54646; 
    border: none;
    color: white;
    padding: 20px;
    text-align: center;
    text-decoration: none;
    display: inline-block;
    font-size: 16px;
    margin: 4px 2px;
    cursor: pointer;
}

</style>

<?php
include('config.php');
$sql="SELECT * from jalankerja";
$result=mysql_query($sql)or die(mysql_error());
?>
<center>
<img src="baek.gif" alt="calculator" style="width:235px;height:228px;"/>    
</center>

<center><table style="width:70%">
    <br><br>
<table border="1" width="950" align="center" cellspacing="2" cellpadding="2">
<tr>
<td align="center" bgcolor="#58D68D"><strong> Id </strong></td>
<td align="center" bgcolor="#58D68D"><strong> Value 1 </strong></td>
<td align="center" bgcolor="#58D68D"><strong> Value 2 </strong></td>
<td align="center" bgcolor="#58D68D"><strong> Jawapan </strong></td>
<td align="center" bgcolor="#58D68D"><strong> Catatan </strong></td>
</tr>

<?php
while ($row=mysql_fetch_array($result))
{
 echo"<tr>";
 echo"<td>".$row["id"]."</td>";
 echo"<td>".$row["t1"]."</td>";
 echo"<td>".$row["t2"]."</td>";
 echo"<td>".$row["jawapan"]."</td>";
 echo"<td>".$row["catatan"]."</td>";
}
 echo"</table>";
 echo"<center>";
 echo"<br>";
?>
</table>
<a href="calc.php"><button class="tmbhdata"> + </button></a>
</br>
</center>
</body>
</head>
</html>