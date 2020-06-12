<?php 
require '../init.php';
?>

<!DOCTYPE html>
<head>
	<meta charset="UTF-8">
	<title>History</title>
</head>
<body>
	<a href="<? echo ROOT . "index.php"?>">Terug naar home</a>
	
	<?php  

	$input = "history?day=2020-05-29&country=usa";

	include "../request.php";
	?>
</body>
</html>
