<?php
$filepath = $_GET['file'];
$filedir = "/var/www/cs252_project/uploads/".$filepath;
echo $filedir;
if (file_exists($filedir))
{
	$contents = file_get_contents($filedir);
	header('Content-Type: ' . mime_content_type($filedir));
	echo $contents;
}
else
{
	echo "The file you are looking for does not exist<br>";
}
?>