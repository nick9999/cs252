<?php

$name = $_POST['name'];
$username = $_POST['username'];
$email = $_POST['email'];
$flag = $_POST['flag'];
$password = $_POST['password'];
$passpass = $_POST['repassword'];

$mysqli = new mysqli("localhost","root","root","cs252");

if(empty($name) || empty($username) || empty($email) || empty($password) || empty($passpass))
{
	echo "<script>alert(\'Name, username, email or password field cannot be left empty!!\');</script>";
	header('Location: register.php');
}
else if(empty($flag))
{
	echo "<script>alert('Cannot determine whether teacher or student');</script>";
}
else
{
	if($password!=$passpass)
	{
		echo "<script>alert('Password and confirm password do not match');</script>";
		header('Location: register.php');
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
		$sql = $mysqli->prepare("SELECT * from users where email = ? or username = ?");
		$sql->bind_param('ss', $email, $username);
		$sql->execute();
		$sql->store_result();

		if($sql->num_rows==0)
		{
			$sql = $mysqli->prepare("INSERT INTO users (name,username,email,password,tors,phone) values (?,?,?,PASSWORD(?),?,?)");
			
			$sql->bind_param('ssssss', $name, $username, $email, $password, $flag, $_POST['phone']);
			if($sql->execute())
			{
				echo "<script>alert(\"Successfully Registered\")</script>";
				header('Location: register.php');
			}
			else
			{
				echo "<script>alert(\"Failure. Try registering again\")</script>";
			}
		}
		else
		{
			echo "<script>alert(\"Username Already Exist\")</script>";
			header('Location: register.php');
		}

	}
}
?>
