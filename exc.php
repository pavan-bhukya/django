<?php
session_start();
 $y = "";
 $c = "";
 $d = "";
 $cou = "";
 $et = "";
 $se = "";$subt = "";
if($_SERVER['REQUEST_METHOD'] == 'POST')
		  
          {	
         $y=$_POST['year'];
		  $c=$_POST['cls'];
		  $d=$_POST['divi'];
$cou=$_POST['course'];
		  $et=$_POST['examtype'];
		  $se=$_POST['examsub'];
$subt=$_POST['examsubno'];
$_SESSION["y"] =$y;
$_SESSION["c"] =$c;
$_SESSION["d"] =$d;
$_SESSION["cou"] =$cou;
$_SESSION["et"] =$et;
$_SESSION["se"] =$se;
$_SESSION["subt"] =$subt;



								
								echo'
								<style>
								#see1{
									
										background-image:url(\'studyon_header_20161.jpg\');
										color:white;
font-size:20px;

								padding-left:500px;}
								p input,p select{
										
										 width:150px;
										 padding:5px;
										 border-radius:10px;
									 }
								#see1 form p input{
										
										 width:150px;
										 padding:5px;
										 border-radius:10px;
									 }
								
								</style>
								
								';
						echo ' <div id="see1"> <br /><br />Exam Schedule<br /><br /><br /><br />		
						
						Year::'.$y.'   Class::'.$c.'    div::'.$d.'<br/> Exam Type:: '.$et.'  Sub Exam type'.$se.'<br/>Sub exam type no::
						'.$subt.'  Subject::'.$cou.'
								
							
							<form action="performance.php" method="post"  enctype="multipart/form-data">
							
							<p>Max marks:<input type="text" name="max-mark"> </input></p>
							
							<p>Passing Percentage:<input type="number" name="percent"> </input></p>
							<p>Regular fee:<input type="text" name="fee"> </input></p>
							<p>Select question paper:<select name="ques">
                
              <option value="select">select</option>                
               
</select> </p>
							
							
							<p>Date:<input type="date" name="date"> </input></p>
							<p>Start time:<input type="text" name="st"> </input></p>
							<p>End time:<input type="text" name="end"> </input></p>
							<p>Faculty Incharge:<input type="text" name="f"> </input></p>
							
							<p><input type="submit" name="max-mark" value="Schedule"> </input></p>
							
							</form>
							
							</div>
							';	
								
								
		  }
?>