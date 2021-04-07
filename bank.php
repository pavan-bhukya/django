<?php
session_start();

?>


<html>
<head>
<title></title>
<style>
body{
	
	background-image:url('studyon_header_20161.jpg');
background-repeat:no-repeat;
height:100%;
background-size:cover;
}
form{
	
	
	text-align:center;
	font-weight:bolder;
}

h3 a{
										 
										 text-decoration:none;
										 color:white;
										 
										 
									 }
									 
									 h3,p{
										 
										 color:white;
									 }
									 
									 #menu input{
										 
										 width:200px;
										 
									 }
									 #menu{
										 
										float:left; 
										margin-left:20px;
										
									 }
									 
									 
									 #imp{
										 
										float:right;  
										 margin-right:100px;
									 }
									 
</style>
</head>
<body style="">

<div class="header">



</div>

<div class="main">



<!--<form action="prep.php" method="post" target="_blank" enctype="multipart/form-data"> -->

   <h1 style="font-family:Comic Sans MS;font-weight:bolder;text-align:center;margin-top:100px">
									 
									 <h3 style="float:left"><br /><a href="icloud_home.html">Go to Home </a ></h3>
									 <hr />
									 <div id="menu">
									 <br /><br /><br /><br /><br /><br />
									 <input type="button" value="Reports"></input><br />
									 <input type="button" value="Examinations"></input><br />
									 <input type="button" value="Assignments"></input><br />
									 <input type="button" value="Online Exam"></input><br />
									 <input type="button" value="Course"></input><br />
									 <input type="button" value="Proctor"></input><br />
									 <input type="button" value="Student"></input><br />
									 <input type="button" value="Attendance"></input><br />
									 <input type="button" value="Apply leave"></input><br />
									 <a href="bank.php"><input type="button" value="Question Bank"></input><br /></a>
									 <input type="button" value="Grieavence complaint "></input><br />
									 <input type="button" value="Time table"></input><br />
									 <input type="button" value="Circular"></input><br />
									 <input type="button" value="Performances"></input><br />
									 
									 </div>
									 
									 <div id="imp">
	
</div>

</div>

<?php

		          
		  $hostname="localhost";
                          $username="root";
                            $password="";
                            $dbn="icloud";
                          $varb=mysqli_connect($hostname,$username,$password,$dbn);
                                mysqli_set_charset($varb,"utf8");

                      $doo="SELECT * FROM question";
		  
		  $catch=mysqli_query($varb,$doo);
		  
		  $row=mysqli_num_rows($catch);
 
 if($row!=0)
		{
			while($r=mysqli_fetch_array($catch))
							  {
								  //$getid=$r['id'];
								    //$getmsg=$r['pdf'];
									$course=$r['Course'];
									$Subject=$r['Branch_Subject'];
									$Sem=$r['Semester'];
									$q1=$r['Question1'];
				 $m1=$r['mark1'];
		  $q2=$r['Question2'];
				 $m2=$r['mark2'];
		  $q3=$r['Question3'];
				 $m3=$r['mark3'];
		  $q4=$r['Question4'];
				 $m4=$r['mark4'];
		  $q5=$r['Question5'];
				 $m5=$r['mark5'];
								 

$d1=$r['dif1'];
				 $d2=$r['dif2'];
				 $d3=$r['dif3'];
				 $d4=$r['dif4'];
				 $d5=$r['dif5'];
				 
				 $t1=$r['typ1'];
				 $t2=$r['typ2'];
				 $t3=$r['typ3'];
				 $t4=$r['typ4'];
				 $t5=$r['typ5'];								 
									
							echo  $course."                "."     ".$Subject."                 ".$Sem ;
                          
							$quer="SELECT * FROM upload WHERE course='".$course."' and branch='".$Subject."' and Sem='".$Sem."' and pdf!=''";
							$c=mysqli_query($varb,$quer);
							$ro=mysqli_num_rows($c);
							
							if($ro!=0)
		      {
			while($rv=mysqli_fetch_array($c))
							  {
							        $a=$rv['pdf'];
									//echo $a;
							         break;
							  }
							  
							  echo "<a href=\"download.php?file=$a\" target=\"_blank\">Download</a> ";
							  
							/* echo ' 
							 <form action=bank.php method="POST"> 
							 
							 
							 
							 <input type="submit" value="Download" onclick="pdf();"/>
							 
							 
							 
							 </form>
							 ';		
							*/		
		}							
							  }
		}

?>

</body>



</html>

