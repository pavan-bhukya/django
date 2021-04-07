<html>
<head>
<title></title>
<style>


</style>
</head>
<body style="">

<div class="header">



</div>

<div class="main">
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
{	
   $Userf=$_POST['name'];
   
   $Usere=$_POST['email'];
   $Userg=$_POST['gender'];
   $Userpas=$_POST['pass'];

echo $Userf;
       if(!empty($Userf)  && !empty($Usere) && !empty($Userg) && !empty($Userpas))

	{
              $hostname="localhost";
              $username="root";
              $password="";
              $dbn="icloud";
              $varb=mysqli_connect($hostname,$username,$password,$dbn);
                mysqli_set_charset($varb,"utf8");

				
				$ins="INSERT INTO registration_s(Userfirst,Useremail,Usergender,Userpas) VALUES ('$Userf','$Usere','$Userg','$Userpas')";
				mysqli_query($varb,$ins);
				echo"<h1 style=\"text-align:center;font-family:verdana\"><br />hii  \".$Userf.\"  You have successfully registered!!!</h1>";
		        //echo "   <h1 style=\"text-align:center;font-family:verdana\">Return to <a href=\"icloud_home.html\"> Home</a></h1>";
				echo '<h3 style="text-align:center;font-family:Comic Sans MS">Now login <a href="login_s.php">here</a></h3>';
				
	}
	else{
		
		echo '<h2 style="text-align:center;font-family:verdana;margin-top:100px;">Please input all the fields!!!<br /><a href="studentsignup.php" />Register again</a></h2>';
		
	}
	
}
else{
	echo "<h2 style=\"text-align:center;font-family:verdana\">No forms have been submitted</h2>";
	
    }


?>
</div>

<div class="footer">
</div>

</body>
</html>