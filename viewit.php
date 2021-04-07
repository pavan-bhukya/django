
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
		  
          {	
		  $cou=$_POST['course'];
		  $bs=$_POST['Branch'];
		  $semester=$_POST['sem'];
		          
		  $hostname="localhost";
                          $username="root";
                            $password="";
                            $dbn="icloud";
                          $varb=mysqli_connect($hostname,$username,$password,$dbn);
                                mysqli_set_charset($varb,"utf8");
		  
		  $doo="SELECT * FROM question WHERE Course='".$cou."' and Branch_Subject='".$bs."' and Semester='".$semester."'";
		  
		  $catch=mysqli_query($varb,$doo);
		  
		  $row=mysqli_num_rows($catch);
		  
		  if($row!=0)
		{
			while($r=mysqli_fetch_array($catch))
							  {
								  //$getid=$r['id'];
								    //$getmsg=$r['pdf'];
									
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
									
							  }
							  
							  //if($getid==$find)
							  //{
								  //echo $getid;
								/*  echo '<h2 style="text-align:center;font-size:30px;margin-top:100px">The pdfpath  is '.$q1.'</h2>';
								  echo '<h2 style="text-align:center;font-size:30px;margin-top:100px">The pdfpath  is '.$m1.'</h2>';
								  
								  echo '<h2 style="text-align:center;font-size:30px;margin-top:100px">The pdfpath  is '.$q3.'</h2>';
								*/  
							//}
							  require("PDF/fpdf.php");
		  $pdf=new FPDF();
		  $pdf->AddPage();
		  $pdf->SetFont("Arial","B",16);
		 
		  $pdf->Cell(180,10,"Course:".$cou,1,1,'C');
		  $pdf->Cell(90,10,"Subject: ".$bs,1,0);
		  $pdf->Cell(90,10,"SEMESTER:".$semester,1,1);
		  $pdf->Cell(110,30,"Questions",1,0);
		  $pdf->Cell(30,30,"Marks",1,0);
		  $pdf->Cell(30,30,"LEVEL:",1,0);
		  $pdf->Cell(30,30,"TYPE:",1,1);
		  $pdf->Cell(110,30,"1)".$q1,1,0);
		  $pdf->Cell(30,30,$m1,1,0);
		  $pdf->Cell(30,30,$d1,1,0);
		  $pdf->Cell(30,30,$t1,1,1);
		  $pdf->Cell(110,30,"2)".$q2,1,0);
		  $pdf->Cell(30,30,$m2,1,0);
		  $pdf->Cell(30,30,$d2,1,0);
		  $pdf->Cell(30,30,$t2,1,1);
		  $pdf->Cell(110,30,"3)".$q3,1,0);
		  $pdf->Cell(30,30,$m3,1,0);
		  $pdf->Cell(30,30,$d3,1,0);
		  $pdf->Cell(30,30,$t3,1,1);
		  $pdf->Cell(110,30,"4)".$q4,1,0);
		  $pdf->Cell(30,30,$m4,1,0);
		  $pdf->Cell(30,30,$d4,1,0);
		  $pdf->Cell(30,30,$t4,1,1);
		  $pdf->Cell(110,30,"5)".$q5,1,0);
		  $pdf->Cell(30,30,$m5,1,0);
		  
		  $pdf->Cell(30,30,$d5,1,0);
		  $pdf->Cell(30,30,$t5,1,1);
		  
		  
		  $pdf->Output();
				
		}
		
		
		  }
		  //echo $doo;
		  ?>
