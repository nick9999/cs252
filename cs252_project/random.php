<?php
$servername = "localhost";
$username = "root";
$password = "root";
$dbname = "cs252";

$conn = new mysqli($servername, $username, $password, $dbname);
if ($conn->connect_error) 
{
    die("Connection failed: " . $conn->connect_error);
} 

$sql = "SELECT course_code , instructor_name , course_name FROM course_instructor";
$result = $conn->query($sql);

if ($result->num_rows > 0) 
{
	// echo "Hiii<br>";
    while($row = $result->fetch_assoc()) 
    {
    	$sql_new = "SELECT student_username FROM " . $row['course_code'] ." WHERE student_username='nikhilp'";
    	$result_new = $conn->query($sql_new);
    	if($result_new->num_rows == 1)
    	{
    		echo $row['course_code'];
    		echo "<br>";
    		echo $row['course_name'];
    		echo "</br>";
    		echo $row['instructor_name'];
    		echo "</br>";
    	}
    }
}
$conn->close();
?>
