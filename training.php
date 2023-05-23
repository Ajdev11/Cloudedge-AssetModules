<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Trainiung File</title>
</head>

<body>
	<?php
	 	require_once 'tdata.php';

	 	$mo = new moses;
	 	$we = $mo->test(10, 20);
	 	echo $we;

	?>
</body>
</html>