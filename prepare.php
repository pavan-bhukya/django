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
										 
										 width:100px;
										 
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

<script src="https://cdn.ckeditor.com/4.15.0/full/ckeditor.js"></script>
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
									 <a href="perform.php"><input type="submit" value="Performances"></input><br /></a>
									 
									 </div>
									<form action="prep.php" method="post" target="_blank" enctype="multipart/form-data">
 
									 <div id="imp">
									 <h3 ><br/><br/>Prepare question paper<hr/></h3>
									 
									 <p style="float:left;margin-right:20px;margin-left:20px">   Course:<select name="course">
                
              <option value="Btech">B.Tech</option>                
               <option value="BArch">B.Arch</option>
               
               <option value="MTech">Mtech</option>
				<option value="MCA">MCA</option>
</select></p>
	            									 <p style="float:left;margin-right:20px;margin-left:20px">  Select Semester:<select name="sem">
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

<p>Date:<input type="date" name="date"> </input></p>
<div class="">
 <h1 style="font-family:Comic Sans MS;color:white;font-weight:bolder;text-align:center;margin-top:100px">Type the questions and allot the marks</h1>
							<!--		<div id="see1"><input type="button" name="link" value="Add question" onclick="show1();"></input></div>
									
									<div id="qu1">
<p style="float:left;margin-right:20px;margin-left:20px">1)<textarea name="q1" rols="50" cols="30" maxlength="300">Question here!!</textarea>
    </p>
	
<p style="float:left;margin-right:20px;margin-left:20px">Enter marks:<input type="number" name="m1"> </input></p>
<p style="float:left;margin-right:20px;margin-left:20px">Difficulty:<select name="diff">

              <option value="E">Easy</option>  
			  <option value="M">Moderate</option>
			  <option value="H">Hard</option>

</select></p>
</div>

<br/><br/><br/> <hr/>   -->
<div id="see2"><input type="button" name="link" value="Add question" onclick="show2();"></input></div>
							
<div id="qu2">							
<p style="float:left;margin-right:20px;margin-left:20px">1)<textarea name="q1" rols="50" cols="30" maxlength="300"></textarea>
    </p>
	
<p style="float:left;margin-right:20px;margin-left:20px">Enter marks:<input type="number" name="m1"> </input></p>
<p style="float:left;margin-right:20px;margin-left:20px">Difficulty:<select name="diff1">

              <option value="E">Easy</option>  
			  <option value="M">Moderate</option>
			  <option value="H">Hard</option>
</select></p>
<p style="float:left;margin-right:10px;margin-left:10px">Question type:<input type="button" name="Mand" value="Mandatory" onclick=""></input>

<input type="button" name="opt" value="Optional" onclick="choice2();"></input></p>
<p style="float:left;margin-right:10px;margin-left:10px">CO Mapping:<select name="Co1">

              
			  <option value="CO1">CO1</option>
			  <option value="CO2">CO2</option>
			  <option value="CO3">CO3</option>
			  <option value="CO4">CO4</option>
			  <option value="CO5">CO5</option>
			  

</select></p>
</div>

<div id="qu2b">							
<p style="float:left;margin-right:20px;margin-left:20px">1b)<textarea name="q1b" rols="50" cols="30" maxlength="300"></textarea>
    </p>
	
<p style="float:left;margin-right:20px;margin-left:20px">Enter marks:<input type="number" name="m1"> </input></p>
<p style="float:left;margin-right:20px;margin-left:20px">Difficulty:<select name="diff1">

              <option value="E">Easy</option>  
			  <option value="M">Moderate</option>
			  <option value="H">Hard</option>
</select></p>

<p style="float:left;margin-right:10px;margin-left:10px">CO Mapping:<select name="Co1">

              
			  <option value="CO1">CO1</option>
			  <option value="CO2">CO2</option>
			  <option value="CO3">CO3</option>
			  <option value="CO4">CO4</option>
			  <option value="CO5">CO5</option>
			  

</select></p>
<input type="button" name="link" value="Add choice question" onclick="choice2();"></input>
</div>


<br/><br/><br/><hr/>
<div id="see3"><input type="button" name="link" value="Add question" onclick="show3();"></input></div>
									
<div id="qu3">
<p style="float:left;margin-right:20px;margin-left:20px">2)<textarea name="q2" rols="50" cols="30" maxlength="300"></textarea>
    </p>
	
<p style="float:left;margin-right:10px;margin-left:10px">marks:<input type="number" name="m2"> </input></p>
<p style="float:left;margin-right:10px;margin-left:10px">Difficulty:<select name="diff2">

              <option value="E">Easy</option>  
			  <option value="M">Moderate</option>
			  <option value="H">Hard</option>

</select></p>
<p style="float:left;margin-right:10px;margin-left:10px">Question type:<input type="button" name="Mand" value="Mandatory" onclick=""></input>

<input type="button" name="opt" value="Optional" onclick="choice3();"></input></p>
<p style="float:left;margin-right:10px;margin-left:10px">CO Mapping:<select name="Co2">

              
			  <option value="CO1">CO1</option>
			  <option value="CO2">CO2</option>
			  <option value="CO3">CO3</option>
			  <option value="CO4">CO4</option>
			  <option value="CO5">CO5</option>
			  

</select></p>
</div>

<div id="qu3b">							
<p style="float:left;margin-right:20px;margin-left:20px">1b)<textarea name="q2b" rols="50" cols="30" maxlength="300"></textarea>
    </p>
	
<p style="float:left;margin-right:20px;margin-left:20px">Enter marks:<input type="number" name="m2b"> </input></p>
<p style="float:left;margin-right:20px;margin-left:20px">Difficulty:<select name="diff2b">

              <option value="E">Easy</option>  
			  <option value="M">Moderate</option>
			  <option value="H">Hard</option>
</select></p>

<p style="float:left;margin-right:10px;margin-left:10px">CO Mapping:<select name="Co2b">

              
			  <option value="CO1">CO1</option>
			  <option value="CO2">CO2</option>
			  <option value="CO3">CO3</option>
			  <option value="CO4">CO4</option>
			  <option value="CO5">CO5</option>
			  

</select></p>
<input type="button" name="link" value="Add choice question" onclick="choice3();"></input>
</div>

<br/><br/><br/><hr/>
<div id="see4"><input type="button" name="link" value="Add question" onclick="show4();"></input></div>
									
<div id="qu4">
<p style="float:left;margin-right:20px;margin-left:20px">3)<textarea name="q3" rols="50" cols="30" maxlength="300"></textarea>
    </p>
	
<p style="float:left;margin-right:20px;margin-left:20px">Enter marks:<input type="number" name="m3"> </input></p>
<p style="float:left;margin-right:20px;margin-left:20px">Difficulty:<select name="diff3">

              <option value="E">Easy</option>  
			  <option value="M">Moderate</option>
			  <option value="H">Hard</option>
</select></p>
<p style="float:left;margin-right:10px;margin-left:10px">Question type:<input type="button" name="Mand" value="Mandatory" onclick=""></input>

<input type="button" name="opt" value="Optional" onclick="choice4();"></input></p>
<p style="float:left;margin-right:10px;margin-left:10px">CO Mapping:<select name="Co3">

              
			  <option value="CO1">CO1</option>
			  <option value="CO2">CO2</option>
			  <option value="CO3">CO3</option>
			  <option value="CO4">CO4</option>
			  <option value="CO5">CO5</option>
			  

</select></p>
</div>

<div id="qu4b">							
<p style="float:left;margin-right:20px;margin-left:20px">1b)<textarea name="q3b" rols="50" cols="30" maxlength="300"></textarea>
    </p>
	
<p style="float:left;margin-right:20px;margin-left:20px">Enter marks:<input type="number" name="m3b"> </input></p>
<p style="float:left;margin-right:20px;margin-left:20px">Difficulty:<select name="diff3b">

              <option value="E">Easy</option>  
			  <option value="M">Moderate</option>
			  <option value="H">Hard</option>
</select></p>

<p style="float:left;margin-right:10px;margin-left:10px">CO Mapping:<select name="Co3b">

              
			  <option value="CO1">CO1</option>
			  <option value="CO2">CO2</option>
			  <option value="CO3">CO3</option>
			  <option value="CO4">CO4</option>
			  <option value="CO5">CO5</option>
			  

</select></p>
<input type="button" name="link" value="Add choice question" onclick="choice4();"></input>
</div>

<br/><br/><br/><hr/>
<div id="see5"><input type="button" name="link" value="Add question" onclick="show5();"></input></div>
									
<div id="qu5">
<p  style="float:left;margin-right:20px;margin-left:20px">4)<textarea name="q4" rols="50" cols="30" maxlength="300"></textarea>
    </p>
	
<p style="float:left;margin-right:20px;margin-left:20px">Enter marks:<input type="number" name="m4"> </input></p>
<p style="float:left;margin-right:20px;margin-left:20px">Difficulty:<select name="diff4">

              <option value="E">Easy</option>  
			  <option value="M">Moderate</option>
			  <option value="H">Hard</option>
</select></p>

<p style="float:left;margin-right:10px;margin-left:10px">Question type:<input type="button" name="Mand" value="Mandatory" onclick=""></input>

<input type="button" name="opt" value="Optional" onclick="choice5();"></input></p>
<p style="float:left;margin-right:10px;margin-left:10px">CO Mapping:<select name="Co4">

              
			  <option value="CO1">CO1</option>
			  <option value="CO2">CO2</option>
			  <option value="CO3">CO3</option>
			  <option value="CO4">CO4</option>
			  <option value="CO5">CO5</option>
			  

</select></p>
</div>

<div id="qu5b">							
<p style="float:left;margin-right:20px;margin-left:20px">1b)<textarea name="q4b" rols="50" cols="30" maxlength="300"></textarea>
    </p>
	
<p style="float:left;margin-right:20px;margin-left:20px">Enter marks:<input type="number" name="m4b"> </input></p>
<p style="float:left;margin-right:20px;margin-left:20px">Difficulty:<select name="diff4b">

              <option value="E">Easy</option>  
			  <option value="M">Moderate</option>
			  <option value="H">Hard</option>
</select></p>

<p style="float:left;margin-right:10px;margin-left:10px">CO Mapping:<select name="Co4b">

              
			  <option value="CO1">CO1</option>
			  <option value="CO2">CO2</option>
			  <option value="CO3">CO3</option>
			  <option value="CO4">CO4</option>
			  <option value="CO5">CO5</option>
			  

</select></p>
<input type="button" name="link" value="Add choice question" onclick="choice5();"></input>
</div>

<br/><br/><br/><hr/>


<div id="see6"><input type="button" name="link" value="Add question" onclick="show6();"></input></div>
									
<div id="qu6">
<p  style="float:left;margin-right:20px;margin-left:20px">5)<textarea name="q5" rols="50" cols="30" maxlength="300"></textarea>
    </p>
	
<p style="float:left;margin-right:20px;margin-left:20px">Enter marks:<input type="number" name="m5"> </input></p>
<p style="float:left;margin-right:20px;margin-left:20px">Difficulty:<select name="diff5">

              <option value="E">Easy</option>  
			  <option value="M">Moderate</option>
			  <option value="H">Hard</option>
</select></p>

<p style="float:left;margin-right:10px;margin-left:10px">Question type:<input type="button" name="Mand" value="Mandatory" onclick=""></input>

<input type="button" name="opt" value="Optional" onclick="choice6 ();"></input></p>
<p style="float:left;margin-right:10px;margin-left:10px">CO Mapping:<select name="Co5">

              
			  <option value="CO1">CO1</option>
			  <option value="CO2">CO2</option>
			  <option value="CO3">CO3</option>
			  <option value="CO4">CO4</option>
			  <option value="CO5">CO5</option>
			  

</select></p>
</div>   

<div id="qu6b">							
<p style="float:left;margin-right:20px;margin-left:20px">1b)<textarea name="q5b" rols="50" cols="30" maxlength="300"></textarea>
    </p>
	
<p style="float:left;margin-right:20px;margin-left:20px">Enter marks:<input type="number" name="m5b"> </input></p>
<p style="float:left;margin-right:20px;margin-left:20px">Difficulty:<select name="diff5b">

              <option value="E">Easy</option>  
			  <option value="M">Moderate</option>
			  <option value="H">Hard</option>
</select></p>

<p style="float:left;margin-right:10px;margin-left:10px">CO Mapping:<select name="Co5b">

              
			  <option value="CO1">CO1</option>
			  <option value="CO2">CO2</option>
			  <option value="CO3">CO3</option>
			  <option value="CO4">CO4</option>
			  <option value="CO5">CO5</option>
			  

</select></p>
<input type="button" name="link" value="Add choice question" onclick="choice6();"></input>
</div>

<script src="ckeditor/ckeditor.js"></script>

<script>
//CKEDITOR.replace('q1');
//document.getElementById("qu1").style.display="none";
 CKEDITOR.replace('q1');
CKEDITOR.replace('q1b');CKEDITOR.replace('q2b');CKEDITOR.replace('q3b');CKEDITOR.replace('q4b');CKEDITOR.replace('q5b');
document.getElementById("qu2").style.display="none";
document.getElementById("qu2b").style.display="none";
document.getElementById("qu3b").style.display="none";document.getElementById("qu4b").style.display="none";document.getElementById("qu5b").style.display="none";
document.getElementById("qu6b").style.display="none";
CKEDITOR.replace('q2');

document.getElementById("qu3").style.display="none";
CKEDITOR.replace('q3');

document.getElementById("qu4").style.display="none";


CKEDITOR.replace('q4');
document.getElementById("qu5").style.display="none";
CKEDITOR.replace('q5');
document.getElementById("qu6").style.display="none";


</script>
<br /><br /><br />
<input type="submit" name="submit" value="Submit paper" />
</div>
                                      </form>

</div>

</div>

<div class="footer">
</div>

</body>

<script>

//var a;
/*
function show()
{
	var box=document.getElementById("qu1");
	if(box.style.display=="none")
	{
		box.style.display="block";
		
	}
	else{
		box.style.display="none";
	}
}
*/

function choice2()
{var box1b=document.getElementById("qu2b");

	if(box1b.style.display=="none")
	{
		box1b.style.display="block";
		
	}
	else{
		box1b.style.display="none";
	}
	
}

function choice3()
{var box3b=document.getElementById("qu3b");

	if(box3b.style.display=="none")
	{
		box3b.style.display="block";
		
	}
	else{
		box3b.style.display="none";
	}
	
}
function choice4()
{var box4b=document.getElementById("qu4b");

	if(box4b.style.display=="none")
	{
		box4b.style.display="block";
		
	}
	else{
		box4b.style.display="none";
	}
	
}
function choice6()
{var box1b=document.getElementById("qu6b");

	if(box1b.style.display=="none")
	{
		box1b.style.display="block";
		
	}
	else{
		box1b.style.display="none";
	}
	
}

function choice5()
{var box1b=document.getElementById("qu5b");

	if(box1b.style.display=="none")
	{
		box1b.style.display="block";
		
	}
	else{
		box1b.style.display="none";
	}
	
}

function show2()
{
	var box1=document.getElementById("qu2");
	if(box1.style.display=="none")
	{
		box1.style.display="block";
		
	}
	else{
		box1.style.display="none";
	}
}
function show3()
{
	var box2=document.getElementById("qu3");
	if(box2.style.display=="none")
	{
		box2.style.display="block";
		
	}
	else{
		box2.style.display="none";
	}
}

function show4()
{
	var box3=document.getElementById("qu4");
	if(box3.style.display=="none")
	{
		box3.style.display="block";
		
	}
	else{
		box3.style.display="none";
	}
}

function show5()
{
	var box4=document.getElementById("qu5");
	if(box4.style.display=="none")
	{
		box4.style.display="block";
		
	}
	else{
		box4.style.display="none";
	}
}

function show6()
{
	var box5=document.getElementById("qu6");
	if(box5.style.display=="none")
	{
		box5.style.display="block";
		
	}
	else{
		box5.style.display="none";
	}
}
</script>

</html>