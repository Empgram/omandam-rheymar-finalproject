<?php
$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"blue"); 

$_POST[('update')] = 'update';
$_GET[('first')]= 'rheymar';
$_POST[('name')]='Omandam';
$_POST[('email')]='email';
$_POST[('password')]='1';
$_GET[('email')]='email';

if(isset($_POST["update"]))
{
 
$query = mysqli_query($con,"UPDATE red1 SET first = 'Rheymar' , name = '$_POST[name]' ,email = '$_POST[email]',
password= '$_POST[password]' WHERE email ='".$_POST['email']."'");

if(!$query){
	echo "<br><br>DATABASE IS NOT UPDATED";
}
else{
	echo"<br><br><br><br>
	Sorry Sir I tried many ways to define the variable but I can't get it. 
	<br> Sorry Sir
	
	
	<br><br><br><br>";
}

echo "<a href='http://127.0.0.1:8000/page'><input align='center'; style='color:white;width:280px;height:50px;background-color:crimson;margin-left:260px;'; type='button' value=' --->  Please Click to here back'/></a>";

}
?>