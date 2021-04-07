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

h3,p{
										 
										 color:white;
									 }
									 
									  #menu{
										 
										float:left; 
										margin-left:20px;
										
									 }
									 #menu input{
										 
										 width:200px;
										 
									 }
									 #menu{
										 
										float:left; 
										margin-left:20px;
										
									 }
</style>
</head>
<body style="">

<div class="header">



</div>

<div class="main">



<form action="viewit.php" target="_blank" method="post" enctype="multipart/form-data"><h1 style="font-family:Comic Sans MS;font-weight:bolder;text-align:center;margin-top:100px">
									 
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
									 <h3>View question paper</h3>
									 
									 <p style="float:left;margin-right:20px;margin-left:20px">  Course:<select name="course">
                
              <option value="Btech">B.Tech</option>                
               <option value="BArch">B.Arch</option>
               
               <option value="MTech">Mtech</option>
				<option value="MCA">MCA</option>
</select></p>
	            									 <p style="float:left;margin-right:20px;margin-left:20px">   Semester:<select name="sem">
                <optgroup label="Btech">
              <option value="1">1</option>                
               <option value="2">2</option>
               
               <option value="3">3</option>
				<option value="4">4</option>
				<option value="5">5</option>
				<option value="6">6</option>
				<option value="7">7</option>
				<option value="8">8</option>
				</optgroup>
				<optgroup label="Mtech">
				<option value="11">1</option>                
               <option value="12">2</option>
               
               <option value="21">3</option>
				<option value="22">4</option>
				</optgroup>
</select></p>
	<p style="float:left;margin-right:20px;margin-left:20px">Branch and subject:<select name="Branch">
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



<br /><br />

<input type="submit" name="submit" value="Download paper" />
</form>



</div>

<div class="footer">
</div>

</body>
</html>