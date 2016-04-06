<html>
	<head>
		<title>Reading Cookies</title>
	</head>
	<body>
		<?php // Reading the value of a cookie
			
			// give $var1 a default value
			$var1 = 0;
			// if cookie with name 'test' exists then set $var1 to its value
			if (isset($_COOKIE['test'])) {
				$var1 = $_COOKIE['test'];
			}
			echo $var1;
		?>

		<?php // Deleting a cookie
		
			// set cookie value to 0 and expiration to the distant past
			setcookie('test', 0, time()-(60*60*24*7));
		 ?>

	</body>
</html>