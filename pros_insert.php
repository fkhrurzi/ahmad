<?php

    include ('config.php');

    $id=$_POST['id'];
    $t1=$_POST['t1'];
    $t2=$_POST['t2'];
    $t2=$_POST['t2'];
	$jawapan=$_POST['jawapan'];
	$catatan=$_POST['catatan'];

	$i=("insert into jalankerja values ('$id','$t1','$t2','$jawapan','$catatan')");
	
	if(mysql_query($i)){
	header('Location:papar.php');
}
?>