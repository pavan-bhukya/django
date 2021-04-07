<?php
session_start();

$output='';

		  
		  
		  
		  $hostname="localhost";
                          $username="root";
                            $password="";
                            $dbn="icloud";
                          $varb=mysqli_connect($hostname,$username,$password,$dbn);
                                mysqli_set_charset($varb,"utf8");

                      $doo="SELECT * FROM schedule";
		  
		  $catch=mysqli_query($varb,$doo);
		  
		  $row=mysqli_num_rows($catch);
 echo '<hr /><br /><br /><br /><br />';
 
 echo '<style>
 
 
 table, th, td {
  border: 1px solid black;
  border-collapse: collapse;
}

table tr td select {
  
  -moz-appearance: none;
  
  -webkit-appearance: none;
}


table tr td select::-ms-expand {
  display: none;
}
 
 </style>';
 if($row!=0)
		{
			
			$output.='
			
			<table>
  <tr>
    
	<th>Roll No</th>
	<th>Student Name</th>
	<th>Sub code</th>
    <th>Subject</th>
	<th>Exam Type</th>
   <th>Lecture By</th>
	<th>Attributes</th>
	<th style="width:50px;">Q1</th>
	<th>Q2</th>
	<th>Q3</th>
	<th>Q4</th>
	<th>Q5</th>
  </tr>
  
  <tr>
  
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
 <td></td>
  <td>CO1</td>
    <td style="color:red;"><select style="-moz-appearance: none;
  
  -webkit-appearance: none;" name="co11" ><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select name="co12"><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select style="-moz-appearance: none;
  
  -webkit-appearance: none;"><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
  
  
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  <td>CO2</td>
 <td><select name="co21"><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
  <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
  
  </tr>
  
  <tr>
  <td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  <td>CO3</td>
 <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
  <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
  
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  <td>CO4</td>
 <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
  <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
  
  </tr>
  
  <tr>
  <td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  <td>CO5</td>
 <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
  <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
   <td><select><option value="S">Strong</option><option value="M">Moderate</option><option value="W">Weak level</option> </select></td>
  
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  <td>Max Marks</td>
    <td></td><td></td><td></td><td></td><td></td>
  </tr>
  
  <tr>
  <td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  <td>Question Type</td>
 <td><select><option value="M">Mandatory</option><option value="O">Optional</option></select> </td>
  <td><select><option value="M">Mandatory</option><option value="O">Optional</option></select> </td>
  <td><select><option value="M">Mandatory</option><option value="O">Optional</option></select> </td>
  <td><select><option value="M">Mandatory</option><option value="O">Optional</option></select> </td>
  <td><select><option value="M">Mandatory</option><option value="O">Optional</option></select> </td>
  
  </tr>
  <tr>
  <td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  <td>Blooms Level</td>
 <td><select><option value="1">1</option><option value="1.2">1.2</option><option value="1.4">1.4</option><option value="1..5">1.5</option><option value="1.8">1.8</option><option value="2">2</option></select> </td>
  <td><select><option value="1">1</option><option value="1.2">1.2</option><option value="1.4">1.4</option><option value="1..5">1.5</option><option value="1.8">1.8</option><option value="2">2</option></select> </td>
  <td><select><option value="1">1</option><option value="1.2">1.2</option><option value="1.4">1.4</option><option value="1..5">1.5</option><option value="1.8">1.8</option><option value="2">2</option></select> </td>
  <td><select><option value="1">1</option><option value="1.2">1.2</option><option value="1.4">1.4</option><option value="1..5">1.5</option><option value="1.8">1.8</option><option value="2">2</option></select> </td>
  <td><select><option value="1">1</option><option value="1.2">1.2</option><option value="1.4">1.4</option><option value="1..5">1.5</option><option value="1.8">1.8</option><option value="2">2</option></select> </td>
  
  </tr>
  
  <tr>
  <td>16118001</td>
  <td>Abhishek</td>
  <td>ET044667</td>
  <td>Semiconductors & Communication</td>
  <td>PP</td>
  <td>Written/oralexam-1</td>
  <td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <td>16118002</td>
  <td>Bhukya pavan</td>
  <td>ET044667</td>
  <td>Semiconductors & Communication</td>
  <td>PP</td>
  <td>Written/oralexam-1</td>
  <td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <td>16118003</td>
  <td>Balasadi Dharmateja</td>
  <td>ET044667</td>
  <td>Semiconductors & Communication</td>
  <td>PP</td>
  <td>Written/oralexam-1</td>
  <td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <td>16118004</td>
  <td>Dhanunjai</td>
  <td>ET044667</td>
  <td>Semiconductors & Communication</td>
  <td>PP</td>
  <td>Written/oralexam-1</td><td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <td>16118005</td>
  <td>samuel</td>
  <td>ET044667</td>
  <td>Semiconductors & Communication</td>
  <td>PP</td>
  <td>Written/oralexam-1</td><td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <td>16118006</td>
  <td>Johnson</td>
  <td>ET044667</td>
  <td>Semiconductors & Communication</td>
  <td>PP</td>
  <td>Written/oralexam-1</td><td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <td>16118007</td>
  <td>Pavan kalyan</td>
  <td>ET044667</td>
  <td>Semiconductors & Communication</td>
  <td>PP</td>
  <td>Written/oralexam-1</td><td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <td>16118008</td>
  <td>Chiranjeevi</td>
  <td>ET044667</td>
  <td>Semiconductors & Communication</td>
  <td>PP</td>
  <td>Written/oralexam-1</td><td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <td>16118009</td>
  <td>Nagarjuna</td>
  <td>ET044667</td>
  <td>Semiconductors & Communication</td>
  <td>PP</td>
  <td>Written/oralexam-1</td><td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <td>16118010</td>
  <td>Karanam Dheeraj Krishna</td>
  <td>ET044667</td>
  <td>Semiconductors & Communication</td>
  <td>PP</td>
  <td>Written/oralexam-1</td><td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  </tr>
  <tr>
  <td>16118011</td>
  <td>Veerababu bandaru</td>
  <td>ET044667</td>
  <td>Semiconductors & Communication</td>
  <td>PP</td>
  <td>Written/oralexam-1</td><td></td>
  <td></td>
  <td></td><td></td>
  <td></td>
  <td></td>
  </tr>
  ';
  
			while($r=mysqli_fetch_array($catch))
							  {
								  //$getid=$r['id'];
								    //$getmsg=$r['pdf'];
									$course=$r['course'];
									$Year=$r['acayear'];
									$Class=$r['class'];
									$Division=$r['division'];
				 $Exam_type=$r['exam'];
		  $subtype=$r['sub'];
				 $typeno=$r['type'];
		  $mm=$r['Max Marks'];
				 $pp=$r['Passing Percentage'];
		  $date=$r['Dated'];
				 $st=$r['Starting time'];
		  $et=$r['Ending time'];
				 $fac=$r['Faculty Member'];
				
				/*$output.='
				<tr>
    <td>'.$Year.'</td>
	
	<td></td>
    <td>'.$Class.'</td>
	<td>'.$Division.'</td>
    <td>'.$course.'</td>
	<td>'.$Exam_type.'</td>
    <td>'.$subtype.'</td>
	<td>'.$typeno.'</td>
    <td>'.$mm.'</td>
	<td>'.$pp.'</td>
    <td>'.$date.'</td>
	<td>'.$st.'</td>
    <td>'.$et.'</td>
	 
  </tr>';*/
				
							  }
		  
		  $output.='</table>';
		  header('Content-Type: application/vnd.ms-excel'); 
header('Content-Disposition: attachment;filename="results.xls"'); 
header('Pragma: no-cache');
header('Expires: 0');
		  echo $output;
		  
		  }
		  
		  
		  
		  
		  ?>