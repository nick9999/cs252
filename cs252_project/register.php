<!DOCTYPE html>
<html>
<head>

	
	 
	 <!-- including css file here-->
    <link rel="stylesheet" href="css1/dialog.css"/>
	
	 <!-- including css & jQuery Dialog UI here-->
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js1/dialog.js"></script>
	<script type="text/javascript" src="js1/dialog1.js"></script>
		
</head>
<body>
	<div class="container">
	   <div class="main">
	      <div id="dialog" title="Teacher Signup">
	         <form action="" method="post">
				<label>Full Name:</label><br/>
				<input type="text" id="name" name="name" ><br/>
				<label>Email:</label><br/>
				<input type="text" id="email" name="email"  ><br/>
				<label>Username:</label><br/>
				<input type="text" id="username" name="username"  ><br/>
				<label>Password:</label><br/>
				<input type="password" id="password" name="password"  ><br/>
				<label>Confirm Password:</label><br/>
				<input type="password" id="repassword" name="repassword"  ><br/>
				<label>Phone Nmber:</label><br/>
				<input type="text" id="phone" name="phone"  ><br/>
				<input type="hidden" name="flag" value='t'>
				<input type="submit" id="submit" value="Submit" />
			  </form>
		  </div>
		  		 
		  <input type="button" id="button2" value="I am Teacher" />
	  </div>

	

	 
	   <div class="main"> 
	      <div id="dialog1" title="Student Signup">
	         <form action="" method="post">
				<label>Full Name:</label><br/>
				<input type="text" id="name" name="name"><br/>
				<label>Email:</label><br/>
				<input type="text" id="email" name="email"><br/>
				<label>Username:</label><br/>
				<input type="text" id="username" name="username"><br/>
				<label>Password:</label><br/>
				<input type="password" id="password" name="password"><br/>
				<label>Confirm Password:</label><br/>
				<input type="password" id="repassword" name="repassword"><br/>
				<input type="hidden" name="flag" value='s'>
				<input type="submit" id="submit1" value="Submit" />
			  </form>
		  </div>
		  		 
		  <input type="button" id="button1" value="I am Student" />
	  </div>
	 		
	<!-- Div Fugo is advertisement div-->
	 	
			
</body>
</html>