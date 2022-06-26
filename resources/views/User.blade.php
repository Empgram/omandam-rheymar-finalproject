<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Term and Condition</title>
</head>
<body>
<center> <div style = "background-color:crimson;text-align:left;font-size:20px;height:30px;font-weight:bolder;color:white;">Emperial</div></center>
<?php


$con= mysqli_connect("localhost", "root", "");
$mysql = mysqli_select_db($con,"blue"); 
$_POST['uname']=$_GET[('uname')];
$_POST['pwd']=$_GET[('pwd')];
$query = mysqli_query($con,"SELECT email, password, userlevel FROM red1 WHERE email='".$_POST['uname']."'");

if($query)
{
	while($row = mysqli_fetch_array($query))
	{		
		if($row['password'] == $_POST['pwd'])
		{
		
		// echo $row['user_level'];
			if($row['userlevel'] == "User")
			{
              
                echo"<div align='center' style='color:black;background-color:azure;'> Terms of service<br><br>


                Meta builds technologies and services that enable people to<br>
                connect with each other, build communities and grow businesses. <br>
                These Terms govern your use of Facebook, Messenger and the other<br>
                 products, features, apps, services, technologies and software that<br>
                  we offer (the Meta Products or Products), except where we expressly<br>
                   state that separate terms (and not these) apply. These Products are<br>
                   provided to you by Meta Platforms, Inc.<br><br>
                
                We don't charge you to use Facebook or the other products
                <br> and services covered by these Terms. Instead, businesses <br>
                and organisations pay us to show you ads for their products<br>
                 and services. By using our Products, you agree that we can show<br>
                  you ads that we think will be relevant to you and your interests.<br>
                   We use your personal data to help determine which ads to show you.<br><br>
                
                We don't sell your personal data to advertisers, and we don't share<br> information
                 that directly identifies you (such as your name, email addres<br>s or other contact information)
                 with advertisers unless you give us specific<br> permission. Instead, advertisers can tell 
                 us things such as the kind  of<br> audience that they want to see their ads, and we show those ads
                  to people<br> who may be interested. We provide advertisers with reports about the <br> performance of 
                  their ads that help them understand how people <br>are interacting with their content. See Section 2 <br>
                  below to learn more.<br><br>
                
                Our Data Policy explains how we collect and use your personal data to determine<br> some of the ads
                 that you see and provide all of the other services described below. You can also<br> go to your
                  settings at any time to review the privacy choices that you have about how we use<br> your data.<br><br> </div>";
                echo "<a href='page'><input align='center'; style='color:white;width:280px;height:50px;background-color:crimson;margin-left:260px;'; type='button' value=' --->  Please Click to here continue'/></a>";
                echo "<a href='http://127.0.0.1:8000/'><input align='center'; style='color:white;width:280px;height:50px;background-color:crimson;margin-left:260px;'; type='button' value=' --->  Home'/></a>";
			}
			else{
        echo "<div align='center' style='color:black;background-color:azure;font-size:30px'><br><br><br>Password
        Incorrect!<br>Please make sure that your credincial is correct <br><br><br></div>";	
       echo "<a href='login1'><div align='center' style='color:black;background-color:azure;height:430px'><input style='color:white;width:100px;height:40px;background-color:crimson;text-align:center;font-size:20px;' type='button' value='Back'/></div></a>";
			}
		}
		else
		{
      echo "<div align='center' style='color:black;background-color:azure;font-size:30px'><br><br><br>Username
      Incorrect!<br>Please make sure that your credincial is correct <br><br><br></div>";	
     echo "<a href='login1'><div align='center' style='color:black;background-color:azure;height:430px'><input style='color:white;width:100px;height:40px;background-color:crimson;text-align:center;font-size:20px;' type='button' value='Back'/></div></a>";
		}
    }
    
    $query = mysqli_query($con,"SELECT email, password, userlevel FROM red1 WHERE password='".$_POST['pwd']."'");

if($query)
{
    while($row = mysqli_fetch_array($query))
    
    {
        if($row['email'] == $_POST['uname'])
		{
		
		// echo $row['user_level'];
			if($row['userlevel'] == "User")
			{
				
               
			}
			else{
				echo "<div align='center' style='color:black;background-color:azure;font-size:30px'><br><br><br>Username
             Incorrect!<br>Please make sure that your credincial is correct <br><br><br></div>";	
            echo "<a href='login1'><div align='center' style='color:black;background-color:azure;height:430px'><input style='color:white;width:100px;height:40px;background-color:crimson;text-align:center;font-size:20px;' type='button' value='Back'/></div></a>";
			}
		}
		else
		{
			echo "<div align='center' style='color:black;background-color:azure;font-size:30px'><br><br><br>Username
             Incorrect!<br>Please make sure that your credincial is correct <br><br><br></div>";	
            echo "<a href='login1'><div align='center' style='color:black;background-color:azure;height:430px'><input style='color:white;width:100px;height:40px;background-color:crimson;text-align:center;font-size:20px;' type='button' value='Back'/></div></a>";
		}
	
	}
}}

?>

</table>




</body>
</html>