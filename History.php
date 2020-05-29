<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>History</title>
</head>
<body>
	<a href="index.php">Terug naar home</a>
	
	<?php  
	require 'init.php';

	$input = "history?day=2020-05-29&country=usa";

	include "request.php";
	?>
</body>
</html>
