






<?php
session_start();
 echo'
								<style>
								#see1{
									
										background-image:url(\'studyon_header_20161.jpg\');
										color:white;
font-size:20px;

padding-left:500px;
								}
								#see{
									
										background-image:url(\'studyon_header_20161.jpg\');
										color:white;
font-size:20px;


								}
								
								a{
								text-decoration:none;
color:white;
font-size:20px;
font_weight:bold;								
								}
								
								</style>';
								
								echo ' <div id="see">
								<p><br /><a href="perform.php"><input type="submit" value="Go Back>>"> </input></a></p>
     <hr />  </div>';
	 
	 echo ' <div id="see1">
<p>Import Excell<br /><br /></p>


<p>Exam Type:'.$_SESSION["et"].'<br />Class:'.$_SESSION["c"].'<br />Section/Division:'.$_SESSION["d"].'<br />Sub Exam Type:'.$_SESSION["se"].'<br />'.$_SESSION["subt"].'<br />Name of the Subject:'.$_SESSION["cou"].' </p>

<p><a href="excell.php">Download Excell Format...</a><br /></p>



					<form action="exld.php" method="post"  enctype="multipart/form-data">
								
							<p>Upload Excell File<br /><br /></p>
<p>Excell File::<input type="file" name="file"> </input></p>
<p><br /><a href="final.php"><input type="submit" value="submit" name="import"> </input></a></p>
							</form>
							
</div>
';

?>



<?php

echo '<style>
 
 
 table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
  
}
th{
	width:120px;
}


 </style>';
$hostname="localhost";
                          $username="root";
                            $password="";
                            $dbn="icloud";
                          $varb=mysqli_connect($hostname,$username,$password,$dbn);
                                mysqli_set_charset($varb,"utf8");

if(isset($_POST['import'])){
	
	
	$f=$_FILES["file"]["name"];
		$t = $_FILES["file"]["tmp_name"];
	$filename = $_FILES["file"]["tmp_name"];
//echo $f;
//include('$f');
   echo '<iframe src='.$f.' width="1500" height="800"></iframe>';


/*
    if($_FILES["file"]["size"] > 0)
    {
        
        $file = fopen($filename, "r");
		
		
		 while (($col = fgetcsv($file, 10000, ",")) !== FALSE) 
        {
           // echo'<pre>'; print_r($col);
                 //echo $col[0].$col[11];
            $insert = "INSERT INTO excel_detail (roll,stname,code,subject,examtype,lecture,Attr,q1,q2,q3,q4,q5)values('".$col[0]."','".$col[1]."','".$col[2]."','".$col[3]."','".$col[4]."','".$col[5]."','".$col[6]."','".$col[7]."','".$col[8]."','".$col[9]."','".$col[10]."','".$col[11]."')";
            mysqli_query($varb,$insert);
                    echo'
					<table>
  <tr>
    
	<th>'.$col[0].'</th>
	<th>'.$col[1].'</th>
	<th>'.$col[2].'</th>
    <th>'.$col[3].'</th>
	<th>'.$col[4].'</th>
   <th>'.$col[5].'</th>
	<th>'.$col[6].'</th>
	<th >'.$col[7].'</th>
	<th>'.$col[8].'</th>
	<th>'.$col[9].'</th>
	<th>'.$col[10].'</th>
	<th>'.$col[11].'</th>
  </tr>
			</table>		
					';

        }
        //$msg = '<p style="color: green;"> CSV Data inserted successfully</p>';
		
		
	}
	
	
	*/
	
}


?>