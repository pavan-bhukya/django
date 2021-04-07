<?php
session_start();
 
if($_SERVER['REQUEST_METHOD'] == 'POST')
		  
          {	
		  $y=$_POST['uname'];
		  $p=$_POST['psw'];
		  $plo=$_POST['pl'];
         $ca=$_POST['course'];
		  $co=$_POST['coupon'];
     $dlo=$_POST['dl'];
	 
		  

$_SESSION["y"] =$y;


                         if(!empty($y)  && !empty($p) && !empty($plo) && !empty($dlo) && !empty($ca))

	{
		     if($plo==$dlo)
			 {
		          echo '
			       <script>
				   window.alert("Pickup location and drop location should be different");
				   </script>
			  
			  ';    
			 }
			 
			 else if($co!="FIRST" && $co!="PREMIUM" )
			 {
				 echo '
			       <script>
				   window.alert("Coupon code is wrong!");
				   </script>';
			 }
			 
			 else{
				 
				 
				 echo '<style>
				 h1, h3{
		background-color:orange;  
		 height: 50px; 
		 text-align:center; 
	  }
				 </style>';
				 echo'
				 
				 <form action="func.php" method="post">
      <h1>Happy Ride</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="ph"><strong>Phone No*</strong></label>
        <input type="text" placeholder="Enter your PhoneNo" name="ph" required>
		<br />
        <p>Feedback</p>
  <input type="radio" id="vs" name="feed" value="very satisfied">
  <label for="male">very satisfied</label><br>
  <input type="radio" id="Satisfied" name="feed" value="Satisfied>
  <label for="female">Satisfied</label><br>
  <input type="radio" id="other" name="feed" value="Average">
  <label for="other">Average</label>
  <input type="radio" id="UnSatisfied" name="feed" value="UnSatisfied>
  <label for="female">UnSatisfied</label><br>
  <input type="radio" id="other" name="feed" value="Very UnSatisfied">
  <label for="other">Very UnSatisfied</label>
		<br />
		
		<label for="back"><strong>Tell us how we can improve</strong></label>
        <textarea name="back" rols="50" cols="30" maxlength="300"></textarea>
		<br />
      </div>
      <button type="submit">Submit Feedbaack</button>
      <div class="container" style="background-color: #eee">
        <h3>ALL righst reserved | Powered by Accenture</h3>
        
      </div>
    </form>
				 
				 
				 
				 ';
				 
			 }
		
	}
else 
	


	{
			  echo '
			       <script>
				   window.alert("Plss provide all required fields");
				   </script>
			  
			  ';					
								
								
								
		  }
		  
		  }
?>