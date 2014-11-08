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

$sql1="SELECT * FROM  `announcement` ORDER BY DATE DESC ";
$result1 = $conn->query($sql1);
$i=0;
$q=10;
if ($result1->num_rows > 0) 
{   
    //echo $i;
    while(($row = $result1->fetch_assoc()) && ($i < $q)) 
    {
        
        $sql_new = "SELECT student_username FROM " . $row["course_code"]." WHERE student_username='pranjan'  " ;
        $result_new = $conn->query($sql_new);
        
        
            if($result_new->num_rows == 1)
            {
                echo "<br>";
                echo $row["course_code"];
                echo "<br>";
                echo $row["announcement"];
                echo "<br>";
                $i++;
            }
            
    }

}





// $sql = "SELECT course_code , instructor_name FROM course_instructor";
// $result = $conn->query($sql);

// if ($result->num_rows > 0) 
// {
//     while($row = $result->fetch_assoc()) 
//     {
//     	$sql_new = "SELECT student_username FROM " . $row["course_code"];
//     	$result_new = $conn->query($sql_new);
//     	if($result_new->num_rows == 1)
//     	{
//     		echo $row["course_code"];
//     	}
//     }
// }
$conn->close();
?>