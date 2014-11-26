<?php 
session_start();
$name=$_SESSION["username"];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cs252";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
}

$allowedExts = array('jpg');
$filename = $_FILES['file']['name'];
$parts = explode('.', $filename);
$extension = array_pop($parts);
$final_file = array_pop($parts);
//	echo "Filename : ".$filename;
//	echo "If Upload : ".$if_upload;

if(!(in_array($extension,$allowedExts)) || ($_FILES['file']["size"] > 1024*1024))
    echo "This file is not in a permitted format or too large, please try again!";

else
{
	echo "<br>File Read : ".basename( $_FILES['file']['name']);
	$target_path = "/var/www/cs252_project/images/".basename( $_FILES['file']['name']);
	echo "<br>Target Path : ".$target_path."<br>";
	/*if( move_uploaded_file( $_FILES['file']['tmp_name'], $target_path) )
	{	
		echo "<script>alert(\"Profile picture successfully changed\")</script>";
	}
	else
	{
	    echo "<br>There was an error uploading the file, please try again!";
	}*/
}

$updated_Name = $_POST['editName'];
$updated_Email = $_POST['editEmail'];
$updated_Roll = $_POST['editRoll'];
$updated_Phone = $_POST['editPhone'];
/*
* Here check whether the entries are all valid... if not valid, then header to location edit_profile
*/
// echo ' '.$updated_Email.' '.$updated_Roll.' '.$updated_Phone;
$updateSQL = $conn->prepare("update users set name= ? , email= ? , roll= ? , phone= ? where username = ?");
echo $updateSQL->bind_param('sssss', $updated_Name, $updated_Email, $updated_Roll, $updated_Phone, $name);
$updateSQL->execute();
//header("Location:faculty_main.php");

?>