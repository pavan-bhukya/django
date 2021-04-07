
<?php
if($_SERVER['REQUEST_METHOD'] == 'POST')
		  
          {	
		  $cou=$_POST['course'];
		  $bs=$_POST['Branch'];
		  $semester=$_POST['sem'];
		          $que1=strip_tags($_POST['q1']);
				 $mark1=$_POST['m1'];
		  $que2=strip_tags($_POST['q2']);
				 $mark2=$_POST['m2'];
		  $que3=$_POST['q3'];
				 $mark3=$_POST['m3'];
		  $que4=$_POST['q4'];
				 $mark4=$_POST['m4'];
		  $que5=$_POST['q5'];
				 $mark5=$_POST['m5'];
				 $da=$_POST['date'];
				 
				 $d1=$_POST['diff1'];
				 $d2=$_POST['diff2'];
				 $d3=$_POST['diff3'];
				 $d4=$_POST['diff4'];
				 $d5=$_POST['diff5'];
				 
				 
				 
				 $c1=$_POST['Co1'];
				 $c2=$_POST['Co2'];
				 $c3=$_POST['Co3'];
				 $c4=$_POST['Co4'];
				 $c5=$_POST['Co5'];
				 
				 $qu1b=$_POST['q1b'];
				 $qu2b=$_POST['q2b'];
				 $qu3b=$_POST['q3b'];
				 $qu4b=$_POST['q4b'];
				 $qu5b=$_POST['q5b'];
				 //$im.='<img src="National_Institute_of_Technology,_Raipur_Logo.png" alt="Nitrr" width="500" height="600"></img>';
		     //echo $que1;
		  $hostname="localhost";
                          $username="root";
                            $password="";
                            $dbn="icloud";
                          $varb=mysqli_connect($hostname,$username,$password,$dbn);
                                mysqli_set_charset($varb,"utf8");
		  
		  $ins="INSERT INTO question(Course,Branch_Subject,Semester,Question1, mark1, Question2, mark2, Question3, mark3, Question4, mark4, Question5, mark5,dif1,dif2,dif3,dif4,dif5,C1,C2,C3,C4,C5,DATE,Question1b,Question2b,Question3b,Question4b,Question5b) VALUES ('$cou','$bs','$semester','$que1','$mark1','$que2','$mark2','$que3','$mark3','$que4','$mark4','$que5','$mark5','$d1','$d2','$d3','$d4','$d5','$c1','$c2','$c3','$c4','$c5','$da','$qu1b','$qu2b','$qu3b','$qu4b','$qu5b')";
				mysqli_query($varb,$ins);
		  
		  require("PDF/fpdf.php");
		  $pdf=new FPDF() ;
		  $pdf->AddPage();
		  $pdf->SetFont("Arial","B",18);
		 
		 $pdf->Image('National_Institute_of_Technology,_Raipur_Logo.png',10,9,30,30,'PNG');
		 $pdf->Cell(190,5,"National Institute Of Technology,Raipur",0,1,'C');
		 //$pdf->Cell(190,5,"Subject: ".$bs,0,1,'C');
		 $pdf->Ln(5);
		 $pdf->SetFont("Times","B",14);
		  $pdf->Cell(190,5,"CSE ".$cou." Sem-".$semester." Internal Examination",0,1,'C');
		  $pdf->Ln(15);
		  $pdf->SetFont("Times","B",15);
		  $pdf->Cell(0,5,"Course : ".$bs."                                  Course Code: IT0444567                      Time : 3 Hrs.",0,1,'L');
		  
		  $pdf->Cell(190,5,"Branch : CSE ".$cou." Sem ".$semester."         Max Marks: 70   ",0,1,'L');
		  
		  $pdf->Cell(190,5,"Date: ".$da,0,1,'L');
		  
		  
		  
		  
		   //$pdf->SetFont("Arial","i",16);
		   //$pdf->Cell(0,20,"Attempt all the questions with neat diagrams or graphs if required.",0,1,'R');
		  
		  $pdf->Cell(0,5,"------------------------------------------------------------------------------------------------------",0,1,'C');
		  $pdf->SetFont("Arial","B",14);
		  $pdf->Cell(130,15,"A",0,0,'C');
		  $pdf->Cell(20,15,"Marks",0,0,'C');
		  $pdf->Cell(20,15,"CO Map",0,0,'C');
		  $pdf->Cell(20,15,"Diff.",0,1,'C');
		  
		 $pdf->SetFont("Arial","",12);
		 $a="1a)".$que1;
		  $pdf->MultiCell(130,4,$a,0,1);
		  
		  $pdf->Cell(150,10,"[".$mark1."]",0,0,'R');
		  $pdf->Cell(20,10,"[".$c1."]",0,0,'C');
		  $pdf->Cell(20,10,"[".$d1."]",0,1,'C');
		  
		  if(!empty($qu1b))
			  
			  {
				  $pdf->Cell(0,15,"OR",0,1,'C');
				  $pdf->MultiCell(130,4,"1b)".$qu1b,0,1);
		  $pdf->Cell(150,10,"[".$mark1."]",0,0,'R');
		  $pdf->Cell(20,10,"[".$c1."]",0,0,'C');
		  $pdf->Cell(20,10,"[".$d1."]",0,1,'C');
				  
				  
			  }
		  //$pdf->SetFont("Arial","B",16);
		  //$pdf->Cell(0,15,"UNIT-2",0,1,'C');
		  $pdf->SetFont("Arial","",12);
		  
		  $pdf->MultiCell(130,4,"2a)".$que2,0,1);
		  $pdf->Cell(150,10,"[".$mark2."]",0,0,'R');
		  $pdf->Cell(20,10,"[".$c2."]",0,0,'C');
		  $pdf->Cell(20,10,"[".$d2."]",0,1,'C');
		  if(!empty($qu2b))
			  
			  {
				  $pdf->Cell(0,15,"OR",0,1,'C');
				  $pdf->MultiCell(130,4,"2b)".$qu2b,0,1);
		  $pdf->Cell(150,10,"[".$mark2."]",0,0,'R');
		  $pdf->Cell(20,10,"[".$c2."]",0,0,'C');
		  $pdf->Cell(20,10,"[".$d2."]",0,1,'C');
				  
				  
			  }
		  
		  $pdf->SetFont("Arial","B",16);
		  //$pdf->Cell(0,15,"UNIT-3",0,1,'C');
		  
		  $pdf->SetFont("Arial","",12);
		  $pdf->MultiCell(130,4,"3)".$que3,0,1);
		  $pdf->Cell(150,10,"[".$mark3."]",0,0,'R');
		  $pdf->Cell(20,10,"[".$c3."]",0,0,'C');
		  $pdf->Cell(20,10,"[".$d3."]",0,1,'C');
		  
		  if(!empty($qu3b))
			  
			  {
				  $pdf->Cell(0,15,"OR",0,1,'C');
				  $pdf->MultiCell(130,4,"3b)".$qu3b,0,1);
		  $pdf->Cell(150,10,"[".$mark3."]",0,0,'R');
		  $pdf->Cell(20,10,"[".$c3."]",0,0,'C');
		  $pdf->Cell(20,10,"[".$d3."]",0,1,'C');
				  
				  
			  }
		  
		 $pdf->SetFont("Arial","B",16);
		 //$pdf->Cell(0,15,"B",0,1,'C');
		  $pdf->SetFont("Arial","",12);
		  $pdf->MultiCell(130,4,"4)".$que4,0,1);
		  $pdf->Cell(150,10,"[".$mark4."]",0,0,'R');
		  $pdf->Cell(20,10,"[".$c4."]",0,0,'C');
		  $pdf->Cell(20,10,"[".$d4."]",0,1,'C');
		  
		  if(!empty($qu4b))
			  
			  {
				  $pdf->Cell(0,15,"OR",0,1,'C');
				  $pdf->MultiCell(130,4,"4b)".$qu4b,0,1);
		  $pdf->Cell(150,10,"[".$mark4."]",0,0,'R');
		  $pdf->Cell(20,10,"[".$c4."]",0,0,'C');
		  $pdf->Cell(20,10,"[".$d4."]",0,1,'C');
				  
				  
			  }
		  //$pdf->Cell(0,15,"OR",0,1,'C');
		  
		  $pdf->SetFont("Arial","B",16);
		  //$pdf->Cell(0,15,"UNIT-5",0,1,'C');
		  $pdf->SetFont("Arial","",12);
		  $pdf->MultiCell(130,4,"5)".$que5,0,1);
		  $pdf->Cell(150,10,"[".$mark5."]",0,0,'R');
		  $pdf->Cell(20,10,"[".$c5."]",0,0,'C');
		  $pdf->Cell(20,10,"[".$d5."]",0,1,'C');
		  if(!empty($qu5b))
			  
			  {
				  $pdf->Cell(0,15,"OR",0,1,'C');
				  $pdf->MultiCell(130,4,"5b)".$qu5b,0,1);
		  $pdf->Cell(150,10,"[".$mark5."]",0,0,'R');
		  $pdf->Cell(20,10,"[".$c5."]",0,0,'C');
		  $pdf->Cell(20,10,"[".$d5."]",0,1,'C');
				  
				  
			  }
		  $pdf->Output();
		  
		  }
		  
		  ?>