<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Server</title>
	<link rel="stylesheet" href="bootstrap.min.css">
</head>
<body style="background-color: gray;">
	<div class="container bg-white " style="padding: 30px; border-radius: 5px;">
		<center><p style="color:blue; font-size: 22px;">$_SERVER (SUPERGLOBAL ARRAY IN PHP)</p></center>

		<!-- All Values in $_SERVER global array -->	
		<?php 
			$serverVariables = array(
		    'PHP_SELF' => $_SERVER['PHP_SELF'],
		    'SERVER_ADDR' => $_SERVER['SERVER_ADDR'],
		    'SERVER_NAME' => $_SERVER['SERVER_NAME'],
		    'SERVER_SOFTWARE' => $_SERVER['SERVER_SOFTWARE'],
		    'SERVER_PROTOCOL' => $_SERVER['SERVER_PROTOCOL'],
		    'REQUEST_METHOD' => $_SERVER['REQUEST_METHOD'],
		    'REQUEST_TIME' => $_SERVER['REQUEST_TIME'],
		    'QUERY_STRING' => $_SERVER['QUERY_STRING'],
		    'HTTP_HOST' => $_SERVER['HTTP_HOST'],
		    'HTTP_USER_AGENT' => $_SERVER['HTTP_USER_AGENT'],
		    'REMOTE_ADDR' => $_SERVER['REMOTE_ADDR'],
		    'REMOTE_PORT' => $_SERVER['REMOTE_PORT'],
		    'SCRIPT_FILENAME' => $_SERVER['SCRIPT_FILENAME'],
		    'SERVER_ADMIN' => $_SERVER['SERVER_ADMIN'],
		    'SERVER_PORT' => $_SERVER['SERVER_PORT'],
		    'SERVER_SIGNATURE' => $_SERVER['SERVER_SIGNATURE'],
		    'SCRIPT_NAME' => $_SERVER['SCRIPT_NAME'],
		    'REQUEST_URI' => $_SERVER['REQUEST_URI'] );
		
			//Traversing each element of Associative Array.
			foreach ($serverVariables as $key => $value) {
			?>

		<!-- Displaying each Key and Value -->
		<p style="color: red; display: inline;"><?php echo $key.": " ?> </p> <h6 class="text-scondary" style="display: inline;">
			<?php echo " ".$value ?>
		</h6>
		<br>	
		<hr>	
		
		<?php } ?>
	</div>

</body>
</html>