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
                 $user_id=$_POST['uname'];
				 $user_pass=$_POST['psw'];

                      if(!empty($user_id) && !empty($user_pass))
					  {

                           $hostname="localhost";
                          $username="root";
                            $password="";
                            $dbn="icloud";
                          $varb=mysqli_connect($hostname,$username,$password,$dbn);
                                mysqli_set_charset($varb,"utf8");

                             $que=mysqli_query($varb,"SELECT * FROM registration_s WHERE Userfirst='".$user_id."'");
                          $r=mysqli_num_rows($que);
						  if($r!=0)
						  {
							  while($row=mysqli_fetch_array($que))
							  {
								  $id=$row['Userfirst'];
								  $passc=$row['Userpas'];
								  
							  }
							  if($id==$user_id)
							  {
								 if($passc==$user_pass){
									 echo '<h1 style="font-family:Comic Sans MS;font-weight:bolder;text-align:center;margin-top:100px">You have successfully logged in to your account</h1>';
									 echo '<h3 style="text-align:center"><br /><a href="icloud_home.html">Go to Home</h3>';
									 echo '<h3 style="text-align:center"><br /><a href="view.php">View question paper</h3>';
									 
									 
									 
								 } 
								  else{
									  echo '<h1 style="font-family:Comic Sans MS;font-weight:bolder;text-align:center;margin-top:100px;">Please check your password!!</h1>';
									  echo '<h3 style="text-align:center"><br /><a href="login_s.php">Login again!</a></h3>';
								  }
								  
							  }
							  else{
								  
								  echo '<h1 style="text-align:center;font-family:verdana;margin-top:100px">Please enter a valid email_id</h1>';
								  echo '<h3 style="text-align:center;text-decoration:none"><a href="login_s.php">Login again!</a></h3>';
							  }
							    
						  }
						  else{
							  
							 echo '<h2 style="text-align:center;font-family:verdana;margin-top:100px"> You have not been registered yet!!</h2>'; 
							  echo '<h3 style="text-align:center;text-decoration:none"><a href="studentsignup.php">Pls register here</a></h3>';
							  
						  }


					  }
                      else{
						  echo '<h2 style="text-align:center;font-family:verdana;margin-top:100px;">Please input all the fields!!!<br /><a href="login_s.php" />Login again</a></h2>';
						  
					  }

		  }
     else{
		 
		 echo '<h3>You have not submitted your response</h3>';
	 }


?>
</div>

<div class="footer">
</div>

</body>
</html>