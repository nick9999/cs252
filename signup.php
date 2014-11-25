<?php
$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$flag = $_POST['flag'];
$password = $_POST['password'];
$passpass = $_POST['repassword'];

include_once 'connect-db.php';

if(empty($name)||empty($username)||empty($email)||empty($password))
{
	echo "<script>alert('Name, username, email or password field cannot be left empty!!');</script>";
	header('Location: signup.php'); //have to change the name
}
else if(empty($flag))
{
	echo "Cannot determine whether teacher or student<br>";
}
else
{
	if($password!=$passpass)
	{
		echo "<script>alert('Password and confirm password do not match');</script>";
		header('Location: signup.html');		
	}
	$temp = strip_tags(stripslashes($name));
	$check_name = ($temp==$name);
	$temp = strip_tags(stripslashes($username));
	$check_username = ($temp==$username);
	$temp = strip_tags(stripslashes($password));
	$check_pass = ($temp==$password);
	$check_email = filter_var($email,FILTER_VALIDATE_EMAIL);
	if(!$check_name||!$check_username||!$check_pass||$check_email!=$email)
	{
		echo "<script>alert('Name, username, email or password field cannot contain \,< or >!!');</script>";
	}
	else
	{
		echo "<script>alert(\"Username etc feild are full\")</script>";
		$captcha=1;
		$sql = $mysqli->prepare("SELECT * from users where email = ? or username = ?");
		$sql->bind_param('ss', $email, $username);
		$sql->execute();
		$sql->store_result();
		$check_phone=1;
		if($flag=='t')
		{
			$temp = ereg("^[0-9 \-]$",$_POST['phone']);
			if($_POST['phone']!=$temp)
				$check_phone=0;
		}

		if($captcha && $sql->num_rows==0 && $check_phone)
		{
			echo "<script>alert(\"Insert Query Initiated\")</script>";			
			$sql = $mysqli->prepare("INSERT INTO users (name,username,email,password,tors,phone) values (?,?,?,PASSWORD(?),?,?)");
			
			$sql->bind_param('ssssss', $name, $username, $email, $password, $flag, $_POST['phone']);
			if($sql->execute())
			{	
				echo "<script>alert(\"Successfully Registered\")</script>";
				$worked = 1;
				$doc = new DOMDocument();
				$doc->loadHTML("<button onclick=\"window.location='login.php'\">Login</button>");
				echo $doc->saveHTML();
			}
			else
			{
				echo "<script>alert(\"Failure. Try registering again\")</script>";
				$worked=0;
			}
		}
		else if(!$check_phone)
			echo "Please enter correct phone number<br>";
		else
			echo "Username or email already registered.<br>";
	}
}

function checkCaptcha()
{
	session_start();
	$captcha=1;
	if ($_POST["vercode"] != $_SESSION["vercode"] OR $_SESSION["vercode"]=='')  
	{
		echo  '<strong>Incorrect captcha code.</strong>';
		$c=0;
	}
	else
		$c=1;
	return $c; 
}
?>
