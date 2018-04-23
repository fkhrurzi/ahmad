<?php
include('config.php');
$username=$_POST['username'];
$password=$_POST['password'];

echo "<br>";

$query="insert into signup values
('$username','$password')";

if($username==""||$password=="")
	{
		echo "<script>alert('Username & Password tidak boleh kosong');
			window.location='index.php'</script>";
		}
else if(mysql_query($query)){
     header('Location:login.php');}
else
    echo "<script type='text/javascript'>alert(' User sudah sedia ada ');
   window.location='login.php'
   </script>"; 
   ?>