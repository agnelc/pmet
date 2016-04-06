<?php
	session_start();
	/*	session_start() MUST be called before creating, accessing or deleting a session
		session_start() MUST be called before any white space or HTML is output 
			to the browser (unless output buffering has been turned on).
		Says to PHP: get the session cookie from the browser and open up that file for use
			or if no session cookie was found, or no file that matches, create a new one
	*/
?>
<html>
	<head>
		<title>Sessions</title>
	</head>
	<body>
		<?php
			// since a session has been started above, it's available and ready for use
			
			// set values in the session
			$_SESSION['first_name'] = "kevin";
			$_SESSION['last_name'] = "skoglund";
		?>
		
		<?php
			// read values from the session
			$name = $_SESSION['first_name'] . " " . $_SESSION['last_name'];
			echo $name;
		?>
	</body>
</html>