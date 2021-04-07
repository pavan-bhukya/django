<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
		  
          {	
		  
		  $cou=$_POST['course'];
		  $bs=$_POST['Branch'];
		  $semester=$_POST['sem'];
		  $filename=$_FILES["doc"]["name"];
		$tempname = $_FILES["doc"]["tmp_name"];
		$folder="Questions/".$filename;
		
		move_uploaded_file($tempname,$folder);
               $hostname="localhost";
                          $username="root";
                            $password="";
                            $dbn="icloud";
                          $varb=mysqli_connect($hostname,$username,$password,$dbn);
                                mysqli_set_charset($varb,"utf8");
		     
$ins="INSERT INTO upload(course,branch,Sem,pdf) VALUES ('$cou','$bs','$semester','$folder')";
				mysqli_query($varb,$ins);

   //echo $folder;

		  }

?>