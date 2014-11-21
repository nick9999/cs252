<?php
	define("HOST", "localhost"); // The host you want to connect to.
	define("USER", "root"); // The database username.
	define("PASSWORD", "raunak"); // The database password.
	define("DATABASE", "cs252"); // The database name.

$mysqli = new mysqli(HOST, USER, PASSWORD, DATABASE);
if ($mysqli->connect_error) {
    header("Location: ../error.php?err=Unable to connect to MySQL");
    exit();
}
