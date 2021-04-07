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
										 
										 width:100px;
										 
									 }
									 
									 #menu{
										 
										float:left; 
										margin-left:20px;
										width:25%;
										height:100%;
									 }
									 #see3
									 {
										 text-decoration:none;
										 color;white;
										 
										 
									 }
									 
									 #imp{
										 
										  
										 margin-right:100px;
									 }
									 
									 #imp select{
										
										 width:150px;
										 padding:5px;
										 border-radius:10px;
									 }
									 
</style>
</head>
<body style="">

<div class="header">



</div>

<div class="main">




  <!-- <h4 style="font-family:Comic Sans MS;font-weight:bolder;text-align:center;margin-top:100px">  -->
									 <div id="menu">
									 <h3 style="float:left"><br /><a href="icloud_home.html">Go to Home </a ></h3>
									 
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
									 <a href="perform.php"><input type="button" value="Performances"></input><br /></a>
									 
									 </div>
			<div id="imp">
			<br /><br />
			<h2 style="align:center">Exam Scheduling and Marks Import</h2>
			<hr />
			<form action="exc.php" method="post"  enctype="multipart/form-data">
 <p style="">
			   Academic year :<select name="year">
                
              <option value="20">2019-2020</option>                
               <option value="19">2018-2019</option>
               
               <option value="18">2017-2018</option>
				<option value="17">2016-2017</option>
</select> </p>
<br />
			<p style="float:left;margin-right:20px;">Select class :<select name="cls">
                
              <option value="20">2019-2020</option>                
               <option value="19">2018-2019</option>
               
               <option value="18">2017-2018</option>
				<option value="17">2016-2017</option>
</select> 
			</p>
			<p style=""><select name="divi">
                
              <option value="20">2019-2020</option>                
               <option value="19">2018-2019</option>
               
               <option value="18">2017-2018</option>
				<option value="17">2016-2017</option>
</select> 
			</p>
			<br />
			<p style="">  Select Course:<select name="course">
                
              <option value="Btech">B.Tech</option>                
               <option value="BArch">B.Arch</option>
               
               <option value="MTech">Mtech</option>
				<option value="MCA">MCA</option>
</select></p>
			<br />
			<p style="">  Select Exam Type:<select name="examtype">
                
              <option value="written">Written Exam</option>                
               <option value="Oral">Oral</option>
               
               <option value="Practical">Practical</option>
				<option value="External">External</option>
</select></p>
			<br />
			<p style="">  Select Sub Exam Type:<select name="examsub">
                
              <option value="Class Test">Class Test</option>                
               <option value="Class assign">Class assignment</option>
               
               <option value="assign">Home assignment</option>
				<option value="Groupdis">Group discussion</option>
</select></p>
			
			<br /><div id="final">
			<p style="">  Select Sub Exam Type No:<select name="examsubno" >
                
              <option value="select">Select</option>                
               <option value="Class assign" onclick="show4();">sub exam 1</option>
               
               
</select></p>  
</div>
     <div id="df"></div>
        <div id="see3" ><a href="exld.php">Already scheduled...</a></div>
		
		<div id="see4"><input type="submit" name="link" value="Schedule" ></input></div>
		</form>
			</div>
			
			
			</div>

<div class="footer">
</div>



<script>



</script>

<?php

echo'
<style>
table{
	
	width:100%;
	background-color:DarkCyan;
background-repeat:no-repeat;
background-image:url(\'studyon_header_20161.jpg\');
background-size:cover;
	
}



</style>



';
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
 if($row!=0)
		{
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
				



echo'

<table>
  <tr>
    <th>Academic Year</th>
    <th>Class</th>
	
	<th>Division</th>
    <th>Course</th>
	<th>Exam Type</th>
    <th>Sub Exam type</th>
	<th>Sub Exam type No</th>
    <th>Maximum Marks</th>
	<th>Passing Percent</th>
    <th>Date</th>
	<th>Start time</th>
    <th>End Time</th>
  </tr>
  <tr>
    <td>'.$Year.'</td>
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
	
  </tr>
</table>






';

							  }

		}
?>

</body>



<script>
function show4()
{
var atr=document.getElementById("see4");
var box=document.getElementByTagName("select")[6];
var a=box.getAttributeNode("name").value;
if(a=="Class assign")
document.getElementById("df").innerHTML=atr;

} 
function show3()
{
/*
var box=document.getElementById("final");

if(box.value=="Class assign")
document.getElementById("see4").style.display="block";
*/
}
</script>