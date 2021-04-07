<html>
<head>
<title></title>
<style>
body{
	
	background-image:url('studyon_header_20161.jpg');
background-repeat:no-repeat;

}

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

                             $que=mysqli_query($varb,"SELECT * FROM register WHERE Userfirst='".$user_id."'");
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
									 
									 echo '
									 <style>
									 
									 h3 a{
										 
										 text-decoration:none;
										 color:white
										 
										 
									 }
									 
									 
									 </style>
									 
									 
									 
									 
									 ';
						
									 echo '<h3 style="text-align:center"><br /><a href="icloud_home.html">Go to Home</h3>';
									 echo '<h3 style="text-align:center;text-color:white;text-decoration:none;"><br /><a href="prepare.php" >Prepare question paper</a></h3>';
									 
									 echo '<h3 style="text-align:center"><br /><a href="prepared.php">Upload question paper</a></h3>';
									 
									 //work here!!!!!!!!!!
								/*	 echo '<form action=" " method="post" enctype="multipart/form-data"><h1 style="font-family:Comic Sans MS;font-weight:bolder;text-align:center;margin-top:100px">
									 
									 
									 <h3>Prepare question paper</h3>
									 
									 <p>  Select Course:<select name="course">
                
              <option value="Btech">B.Tech</option>                
               <option value="BArch">B.Arch</option>
               
               <option value="MTech">Mtech</option>
				<option value="MCA">MCA</option>
</select></p>
	            
	<p>Select Branch and subject:<select name="Branch">
                <optgroup label="CS & IT">
              <option value="DS">Datastructure</option>  
			  <option value="OOPS">OOPS</option>
			  <option value="Algo">Algorithms</option>
			  <option value="DBMS">DBMS</option>
			  <option value="TOC">TOC</option>
			  </optgroup>
			    <optgroup label="ECE">
				<option value="semi">semiconductor</option>  
			  <option value="EDC">EDC</option>
			  <option value="Microprocessor">Microprocessor</option>
			  <option value="Microcontroller">Microcontroller</option>
			
				</optgroup>
				<optgroup label="EEE">				
				<option value="Electric devices">Electric devices</option>  
			  <option value="magnet">Magnetism</option>
			  <option value="Circuit analysis">Circuit analysis</option>
			  <option value="Power">Power electronics</option>
                     </optgroup> 
<optgroup label="Mechanical">
<option value="Strength of materials">Strength of materials</option>  
			  <option value="S&D">Statics & DYNAMICS</option>
                
</select></p>

 <h1 style="font-family:Comic Sans MS;font-weight:bolder;text-align:center;margin-top:100px">Type the questions and allot the marks</h1>
									 
<p><textarea name="q1" rols="50" cols="30" maxlength="300">Question here!!</textarea>
    </p>
	
<p>Enter marks:<input type="number" name="m1"> </input></p>
<p><textarea name="q2" rols="50" cols="30" maxlength="300">Question here!!</textarea>
    </p>
	
<p>Enter marks:<input type="number" name="m2"> </input></p>
<p><textarea name="q3" rols="50" cols="30" maxlength="300">Question here!!</textarea>
    </p>
	
<p>Enter marks:<input type="number" name="m3"> </input></p>
<p><textarea name="q4" rols="50" cols="30" maxlength="300">Question here!!</textarea>
    </p>
	
<p>Enter marks:<input type="number" name="m4"> </input></p>
<p><textarea name="q5" rols="50" cols="30" maxlength="300">Question here!!</textarea>
    </p>
	
<p>Enter marks:<input type="number" name="m5"> </input></p>




                                      </form>
									  
									 ';*/
									 
								 } 
								  else{
									  echo '<h1 style="font-family:Comic Sans MS;font-weight:bolder;text-align:center;margin-top:100px;">Please check your password!!</h1>';
									  echo '<h3 style="text-align:center"><br /><a href="login_f.php">Login again!</a></h3>';
								  }
								  
							  }
							  else{
								  
								  echo '<h1 style="text-align:center;font-family:verdana;margin-top:100px">Please enter a valid email_id</h1>';
								  echo '<h3 style="text-align:center;text-decoration:none"><a href="login_f.php">Login again!</a></h3>';
							  }
							    
						  }
						  else{
							  
							 echo '<h2 style="text-align:center;font-family:verdana;margin-top:100px"> You have not been registered yet!!</h2>'; 
							  echo '<h3 style="text-align:center;text-decoration:none"><a href="facultysignup.php">Pls register here</a></h3>';
							  
						  }


					  }
                      else{
						  echo '<h2 style="text-align:center;font-family:verdana;margin-top:100px;">Please input all the fields!!!<br /><a href="login_f.php" />Login again</a></h2>';
						  
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
<?php


?>

