<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <style>
         .nav{
background-color: teal;
list-style-type: none;
text-align: center;
margin: 0;
text-decoration: none;
}
.nav li{
display: inline-block;
font-size: 20px;
padding: 10px;}
.nav li a{
text-decoration: none;
color:white;
}
body {
                font-family: 'Nunito', sans-serif; font-family: 'Nunito', sans-serif; background-image: url("./love.jpg");background-size: cover;background-repeat:no-repeat;
            }
    </style>
</head>
<body>
    <?php
    $con= mysqli_connect("localhost", "root", "");
    $mysql = mysqli_select_db($con,"blue"); 
   

    
?>
<div style = "margin-left:350px;width:700px;background-color:crimson;text-align:left;font-size:20px;height:50px;font-weight:bolder;color:white;">Emperial
<ul class="nav" >
    <li ><a link href="https://gmail.google.com/">Gmail</a></li>
<li><a link href="https://www.tiktok.com/login">Tiktok</a></li>
<li><a link href="https://www.facebook.com/">Facebook</a></li>
<li> <a link href="https://www.youtube.com/">Youtube</a></li>
<li> <a link href="https://www.instagram.com/accounts/login/">Instagram</a></li>
<li> <a link href="register">Register</a></li>
<li> <a link href="http://127.0.0.1:8000/">Log out</a></li>
</ul>
<zerotwo>
	

	<div id="main-container"; style=';padding:0;background-color: #ffcce0;width:700px;margin:0 auto;'><center>

    <a10 style ="font-size : 30px;text-align:center; color:black;">Database Record</a10>
        <?php 
        $con= mysqli_connect("localhost", "root", "");
        $mysql = mysqli_select_db($con,"blue"); 
    echo "<table border='1'>
    <tr style='text-decoration:none;background-color:#ffb366   ;font-size:20px'>
           
            <th>FirstName</th>
            <th>LastName</th>
            <th>Email</th>
            <th>Password</th>
            <th>Status</th>
            <th>User_Level</th>
            
            <th></th>
            <th></th>
         </tr>";
         
$query1 = mysqli_query($con, "SELECT * FROM red1 WHERE status = 'Active'") or die(mysqli_error());
    while($row = mysqli_fetch_array($query1)){
        echo "<tr style='text-decoration:none;background-color:#b3d1ff;font-size:20px;text-align:center;'>
        
  
        
        <td>$row[first]</td>
        <td>$row[name]</td>
        <td>$row[email]</td>
        <td>$row[password]</td>
        <td>$row[status]</td>
        <td>$row[userlevel]</td>
      
        <td align='center'><a style='text-decoration:none;background-color:#ffb3b3;' href='update/?email=$row[email]'>Edit</a></td>
        <td align='center'><a style='text-decoration:none;background-color:#ffb3b3;' href='delete/?email=$row[email]'>Delete</a></td>
                </tr>";
    }
    echo "</table><br><br>"
?>





</zerotwo>
</div>

</body>
</html>
