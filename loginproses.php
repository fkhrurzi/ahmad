<?php
mysql_connect("localhost","root","");
mysql_select_db("fuji"); 
?>

<?php

$username=$_POST['username'];
$password=$_POST['password'];

	if($username==""||$password=="")
	{
		?>
		<script type="text/javascript">alert(" Username / Password tidak boleh kosong ")
					 window.location='login.php'</script>";
		<?php
	}else{
		$sql=mysql_query("select * from signup where username='$username' and password='$password' ") or die 
		(mysql_error());
		if($data)
		{
			include("login.php");
		}
		else 
		{
			echo "<script>alert('username dan password salah');
			window.location='calc.php'</script>";
		}
	}
?>