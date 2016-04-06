<html>
	<head>
		<title>Cookies</title>
	</head>
	<body>

		<?php // Setting a cookie
			
			// setcookie(name, value, expiration);
			setcookie('test', 45, time()+(60*60*24*7));
		?>

	</body>
</html>