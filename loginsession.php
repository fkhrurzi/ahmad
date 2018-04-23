<html>
<head>
<title>Login</title>
</head>
<body>
<?php
session_start();
$username =$_POST['username'];
$password =$_POST['password'];
if($username&&$password)
{
	$server='localhost';
	$userid2='root';
	$dbname='fuji';
$conn=mysql_connect("$server","$userid2","");

mysql_select_db("$dbname",$conn) or die (mysql_error());

$query=mysql_query("select*from signup where username='$username'");
$numrows=mysql_num_rows($query);
if($numrows!=0)
{
	while($row=mysql_fetch_assoc($query))
	{
		$dbusername=$row['username'];
		$dbpassword=$row['password'];
	}
	
if($username==$dbusername&&$password==$dbpassword)
{
	$_SESSION['username']=$username;
	header('Location:calc.php');
} 
else
{ echo "<script type='text/javascript'>alert('Your Password is Wrong please try again !');
   window.location='login.php'
   </script>"; }
}// if 2
else
	echo "<script type='text/javascript'>alert(' User tidak berdaftar , daftar sekarang  . ');
   window.location='index.php'
   </script>";
}//if 1
else
{
	echo "<script>alert('Username & Password tidak boleh kosong');
			window.location='login.php'</script>";
}
?>
</body>
</html>