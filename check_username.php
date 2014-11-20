<?php
	include_once 'connect-db.php';

	$username = mysql_real_escape_string($_POST['username']);
	$sql = $mysqli->prepare("SELECT * from users where username = ?");
	$sql->bind_param('s', $username);
	$sql->execute();
	$sql->store_result();
	if($sql->num_rows==0)
		echo 1;
	else
		echo 0;
?>
