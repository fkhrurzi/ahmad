<html>
<?php
include ('config.php');
$sql="SELECT * FROM jalankerja";
$data=mysql_query($sql) or die (mysql_error());
?>
<head>
<title> F u j i - C a l c u l a t o r </title> 
</head>
<body bgcolor="lightgrey">	
	
<br>
</br>
<style>
	
body {
	background-image: url('calc.gif');
	font-family: monospace;
	font-size: 20px;
}
.nav {
  overflow: hidden;
  background-color: #ECF0F1  ;
}

.nav a {
  float: right;
  color: white;
  text-align: center;
  padding: 10px 10px;
  text-decoration: none;
  height: 10px;
}

.nav a:hover {
  background-color: transparent;
  color: black;
}

.nav a.active {
  background-color: #ECF0F1  ;
  color: white;
}


.hantar {
    background-color: #BFC9CA  ; 
    color: black; 
    padding: 10px;
    font-size: 15px;
    font-family: monospace;
    border: 2px #F5B7B1;
    border-radius: 5px;
}

.hantar:hover {
    background-color: #E74C3C     ;
    color: white;
}
.senarai {
	float: left;
	background-color: transparent; 
    color: #48C9B0; 
    padding: 10px;
    font-size: 20px;
    font-family: monospace;
    border: 0px;
    border-radius: 5px;
    align-items: left;
}
.senarai:hover {
    background-color: #48C9B0;
    color: white;
}
.out {
	background-color: transparent; 
    color: #48C9B0; 
    padding: 10px;
    font-size: 20px;
    font-family: monospace;
    border: 0px;
    border-radius: 5px;
    align-items: left;
    text-decoration: none;
}
.out:hover {
    background-color: #48C9B0;
    color: white;
    text-decoration: none;

</style>

<center>
<img src="baek.gif" alt="calculator" style="width:235px;height:228px;"/>	
</center>
<div class="nav">

  <br><h1><center> F U J I - C A L C U L A T O R </center></h1>
  <div style="position: absolute; top: 320px; left: 0px;">
  <a href="papar.php"><button class="senarai"> Senarai Jawapan </button></a>
</div>
<div style="position: absolute; top: 320px; right: 0px;">
  <a href="index.php"><button class="out">Sign Out</button></a></br>
</div>
  
</div>	

<form name="f1" action="pros_insert.php" method="post">
<script>
function Add()
{
	var no1,no2,result;
	no1=parseInt(f1.t1.value);
	no2=parseInt(f1.t2.value);
	result=no1+no2;
	f1.jawapan.value=result;
}
function subtract ()
{

	var no1,no2,result;
	no1=parseInt(f1.t1.value);
	no2=parseInt(f1.t2.value);
	result=no1-no2;
	f1.jawapan.value=result;
}
</script>

<center><body>
	
		 <input type="text" name="id" hidden/>
		<br></br>
		First Value : <input type="text" name="t1"/>
		<br></br>
		Second Value : <input type="text" name="t2"/>
		<br></br>
		<input type="button" name="oper" value="+" onclick="Add()">
		<input type="button" name="oper" value="-" onclick="subtract()">
		<input type="button" name="oper" value="*" onclick="f1.jawapan.value=parseInt(f1.t1.value)*parseInt(f1.t2.value)">
		<input type="button" name="oper" value="/" onclick="f1.jawapan.value=parseInt(f1.t1.value)/parseInt(f1.t2.value)">
		<input type="button" name="oper" value="%" onclick="f1.jawapan.value=parseInt(f1.t1.value)%parseInt(f1.t2.value)">
        <br></br>
		Result : <input type="text" name="jawapan" value=""/>
		<br></br>
		Catatan : <input type="text" name="catatan" value=""/>
		<br></br>
		<button class="hantar" type="submit" > Hantar </button>
		<br></br>
    	</form>
    	</body>
		
		<br>
		</br>
		<br>
		</br>
		</center>
		</html>