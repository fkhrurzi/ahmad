<html>
<?php
include ('config.php');
$sql="SELECT * FROM jalankerja";
$data=mysql_query($sql) or die (mysql_error());
?>
<head>
<title> L o g - I n </title> 
</head>
<body bgcolor="lightgrey">  
    <form name="" action="loginsession.php" method="post">
<br>
</br>
<style>
    
body {
    background-image: url('calc.gif');
    font-family:"Arial";
}
p {
    width: 400px;
    border: 2px solid black;
    outline:  #48C9B0   solid 10px;
    margin: 20px;    
    padding: 20px;
    text-align: center;
    font-family: monospace;
    font-size: 17px;
}
body a {
    text-decoration: none;
    color: #48C9B0;
}
.save{
    background-color: white; 
    color: black; 
    font-size: 15px;
    font-family: monospace;
    padding: 10px;
    border: 2px solid #76D7C4;
    border-radius: 5px;
}

.save:hover {
    background-color: #76D7C4;
    color: white;
}
h1{
    font-family: monospace;
    font-size: 30px;
}
</style>
<center>
<img src="baek.gif" alt="calculator" style="width:235px;height:228px;"/>    
</center>
<h1><center> F U J I - C A L C U L A T O R </center></h1>

<br>
<center><p><body>
    
        <br>
        Username : <input type="text" name="username"/>
        <br></br>
        Password : <input type="password" name="password"/>
        <br></br>
        
        <button class="save" type="submit" > Sign In </button> 
        <br>
        <br> Create an Account ? Click <a href="index.php"> here </a>
        </form> 
        </body>
        
        
        </center>
        </html>