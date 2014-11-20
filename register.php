<!DOCTYPE html>
<html>
<head>
    <link rel="stylesheet" href="css/dialog.css"/>
	<link href="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/themes/ui-darkness/jquery-ui.css" rel="stylesheet">
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>
	<script src="http://ajax.googleapis.com/ajax/libs/jqueryui/1.9.2/jquery-ui.min.js"></script>
	<script type="text/javascript" src="js/dialog.js"></script>
	<script type="text/javascript" src="js/dialog1.js"></script>

	<script type="text/javascript">
		$(document).ready(function() 
		{
			var min_chars = 5;
			var characters_error = 'Minimum amount of chars is 5';
			var checking_html = 'Checking...';

			$('#check_username_availability').click(function(){
				if($('#username').val().length < min_chars)
					$('#username_availability_result').html(characters_error);
				else
				{
					$('#username_availability_result').html(checking_html);
					check_availability();
				}
			});
	  	});

		function check_availability()
		{
				var username = $('#username').val();
				$.post("check_username.php", { username: username },
					function(result){
						if(result == 1)
							$('#username_availability_result').html(username + ' is Available');
						else
							$('#username_availability_result').html(username + ' is not Available');
				});
		}
	</script>
</head>
<body>
	<div class="container">
	   <div class="main">
	      <div id="dialog" title="Teacher Signup">
	         <form action="signup.php" method="post">
				<label>Full Name:</label><br/>
				<input type="text" id="name" name="name" ><br/>
				<label>Email:</label><br/>
				<input type="email" id="email" name="email"  ><br/>	
				<!-- <input type="text" id="email" name="email"  ><br/>	-->
				<label>Username:</label><br/>
				<input type="text" id="username" name="username"  ><br/>

				<input type='button' id='check_username_availability' value='Check Availability'>  
				<div id='username_availability_result'></div> 

				<label>Password:</label><br/>
				<input type="password" id="password" name="password"  ><br/>
				<label>Confirm Password:</label><br/>
				<input type="password" id="repassword" name="repassword"  ><br/>
				<label>Phone Nmber:</label><br/>
				<input type="text" id="phone" name="phone"  ><br/>
				<input type='hidden' name='flag' value='T' />
				<input type="submit" id="submit" value="Submit" />
			  </form>
		  </div>
		  		 
		  <input type="button" id="button2" value="I am Teacher" />
	  </div>

	

	 
	   <div class="main"> 
	      <div id="dialog1" title="Student Signup">
	         <form action="signup.php" method="post">
				<label>Full Name:</label><br/>
				<input type="text" id="name" name="name"><br/>
				<label>Email:</label><br/>
				<input type="email" id="email" name="email"  ><br/>	
				<!-- <input type="text" id="email" name="email"  ><br/>	-->
				<label>Username:</label><br/>
				<input type="text" id="username" name="username"><br/>

				<input type='button' id='check_username_availability' value='Check Availability'>  
				<div id='username_availability_result'></div> 

				<label>Password:</label><br/>
				<input type="password" id="password" name="password"><br/>
				<label>Confirm Password:</label><br/>
				<input type="password" id="repassword" name="repassword"><br/>
				<input type='hidden' name='flag' value='S' />
				<input type="submit" id="submit1" value="Submit" />
			  </form>
		  </div>
		  		 
		  <input type="button" id="button1" value="I am Student" />
	  </div>
</body>
</html>
