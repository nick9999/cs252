<?php
$comeFrom = $_SERVER['HTTP_REFERER'];
if($comeFrom == "http://localhost/cs252_project/login.php" || $comeFrom == "http://192.168.0.100/cs252_project/login.php")
{
	session_start();
	$username=$_POST['username'];
	$password=$_POST['password'];
	//$flag=0;
	if($username && $password)
	{
		$connect=mysql_connect("localhost","root","root") or die("Unable to connect Database");
		mysql_select_db("cs252");
		// if(mysql_connect_errno())
		// {
		// 	$message = "Failed to connect to database";
		// 	echo "<script type='text/javascript'>alert('$message');</script>";
		// }
		$usernamecheck=mysql_query("SELECT * FROM users WHERE username='$username' ");
		$count=mysql_num_rows($usernamecheck);
		//echo $count;
		if($count!=0)
		{
			//$usernamecheck=mysql_query("SELECT * FROM login WHERE username='$username' ");
			$row=mysql_fetch_assoc($usernamecheck);
			
				$dbusername=$row['username'];
				$dbpassword=$row['password'];
				$tors=$row['tors'];
			if($username==$dbusername && ($password)==$dbpassword)
			{
				$_SESSION['username']=$dbusername;
				//echo "567";
				if($tors='s')
				header("Location:http://localhost/cs252_project/student_main.php");
					//header("Location:./student_main.php")
				else header("Location:http://localhost/cs252_project/teacher_main.php");
				//else header("Location:./teacher_main.php");
			}
			else
			{
				$message = "Incorrect Password";
				echo "<script type='text/javascript'>alert('$message');</script>";
				echo "<script>setTimeout(\"location.href = 'http://localhost/cs252_project/login.php';\",150);</script>";
			}
			
		}
		else
		{
			$message = "User Doesn't Exist";
			echo "<script type='text/javascript'>alert('$message');</script>";
			//echo "<script>setTimeout(\"location.href = 'http://localhost/sanket/login.php';\",150);</script>";
		}
	}
	
}
?>

