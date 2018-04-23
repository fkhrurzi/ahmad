<?php

    include ('config.php');

    $username=$_POST['username'];
    $pass=$_POST['pass'];

	$i=("insert into signup values ('$username','$pass')");
	if(mysql_query($i)){
	header('Location:index.php');

}
?>