<?php

$con= mysqli_connect("localhost", "root", "");
        $mysql = mysqli_select_db($con,"blue"); 
    
        $query = mysqli_query($con,"Update red1 SET status='delete' WHERE email ='".$_GET['email']."'") or die(mysqli_error());

if(!$query){
	echo "Record not deleted!";
}
else{
	echo"Record successfully deleted";
}

echo "<a href='http://127.0.0.1:8000/page'><input align='center'; style='color:white;width:280px;height:50px;background-color:crimson;margin-left:260px;'; type='button' value=' --->  Please Click to here continue'/></a>";
?>