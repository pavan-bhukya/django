<?php
session_start();
if($_SERVER['REQUEST_METHOD'] == 'POST')
		  
          {	
		  
		  $mm=$_POST['max-mark'];
		  $pp=$_POST['percent'];
		  $da=$_POST['date'];
$starttime=$_POST['st'];
		  $endtime=$_POST['end'];
		  $fac=$_POST['f'];

		  $ye=$_SESSION["y"];
		  
		  $clas=$_SESSION["c"];
		  $div=$_SESSION["d"];
		  $cour=$_SESSION["cou"];
		  $et=$_SESSION["et"];
		  $se=$_SESSION["se"];
		  $subt=$_SESSION["subt"];
		  $hostname="localhost";
                          $username="root";
                            $password="";
                            $dbn="icloud";
                          $varb=mysqli_connect($hostname,$username,$password,$dbn);
                                mysqli_set_charset($varb,"utf8");
								
								
								
$ins="INSERT INTO `schedule`(`acayear`, `class`, `division`, `exam`, `sub`, `course`, `type`, `Max Marks`, `Passing Percentage`, `Dated`,
 `Starting time`, `Ending time`, `Faculty Member`) VALUES ('$ye','$clas','$div','$et','$se','$cour','$subt','$mm',
 '$pp','$da','$starttime','$endtime','$fac')";		
				
				
				
				mysqli_query($varb,$ins);
								
							echo '
							<div id="see3" ><a href="exld.php">download</a></div>
							
							
							'	;
								
								
		  
		 }
		 
		 
		 
		 
		 ?>