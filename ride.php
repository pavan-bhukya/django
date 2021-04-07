<!DOCTYPE html>
<html>
  <head>
    <title>Simple login form</title>
    <link href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700" rel="stylesheet">
    <style>
      
      form {
      border: 5px solid #f1f1f1;
      }
      input[type=text], input[type=password] ,select {
      width: 500px;
      padding: 16px 8px;
      margin: 8px 0;
      display: inline-block;
      border: 1px solid #ccc;
      box-sizing: border-box;
      }
      button {
      background-color: #8ebf42;
      color: white;
      padding: 14px 0;
      margin: 10px 0;
      border: none;
      cursor: grabbing;
      width: 100%;
      }
      
      button:hover {
      opacity: 0.8;
      }
      h1, h3{
		background-color:orange;  
		 height: 50px; 
		 text-align:center; 
	  }
      
      
    </style>
  </head>
  <body>
    <form action="func.php" method="post">
      <h1>Happy Ride</h1>
      <div class="formcontainer">
      <hr/>
      <div class="container">
        <label for="uname"><strong>Name*</strong></label>
        <input type="text" placeholder="Enter your name" name="uname" required>
		<br />
        <label for="psw"><strong>Phone No*</strong></label>
        <input type="text" placeholder="Enter your PhoneNo" name="psw" required>
		<br />
		<label for="psw"><strong>Pickup Location*</strong></label>
        <input type="text" placeholder="Enter pickup location" name="pl" required>
		<br />
		<label for="psw"><strong>Drop Location*</strong></label>
        <input type="text" placeholder="Enter drop location" name="dl" required>
		<br />
		<label for="course"><strong>Category</strong></label>
		<select name="course">
                
              <option value="Micro">Micro</option>                
               <option value="Mini">Mini</option>
               
               <option value="Sedan">Sedan</option>
				
</select></p>
		<label for="coupon"><strong>Coupon Code</strong></label>
        <input type="text" placeholder="Enter coupon code if available" name="coupon" >
		<br />
      </div>
      <button type="submit">Ride now</button>
      <div class="container" style="background-color: #eee">
        <h3>ALL righst reserved | Powered by Accenture</h3>
      </div>
    </form>
  </body>
</html>