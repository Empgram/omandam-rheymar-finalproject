<?php


$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"blue"); 

$_POST[('first')]= $_GET[('first')];
$_POST[('name')]= $_GET[('name')];
$_POST[('email')]= $_GET[('email')];
$_POST[('password')]= $_GET[('password')];
$query = mysqli_query($con,"INSERT INTO red1 (first,name,email,password) VALUES ('$_POST[first]','$_POST[name]','$_POST[email]','$_POST[password]')");
if(!$query){
    echo "Alert! Student not added.";
}
else{
    echo "Student successfully added!";
}

echo "<a href='login1'><input type='button' value='Back'/></a>";

?>