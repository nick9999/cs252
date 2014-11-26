<?php 
session_start();
echo "checkpoint 1";
$name=$_SESSION["username"];
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cs252";
echo "checkpoint 2";
$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

echo "checkpoint 3";
$updated_Name = $_POST['editName'];
$updated_Email = $_POST['editEmail'];
$updated_Roll = $_POST['editRoll'];
$updated_Phone = $_POST['editPhone'];
/*
* Here check whether the entries are all valid... if not valid, then header to location edit_profile
*/
echo "checkpoint 4";
// echo ' '.$updated_Email.' '.$updated_Roll.' '.$updated_Phone;
$updateSQL = $conn->prepare("update users set name= ? , email= ? , roll= ? , phone= ? where username = ?");
echo "checkpoint 5";
echo $updateSQL->bind_param('sssss', $updated_Name, $updated_Email, $updated_Roll, $updated_Phone, $name);
echo "checkpoint 6";
$updateSQL->execute();
echo "checkpoint 7";
header("Location:faculty_main.php");

?>