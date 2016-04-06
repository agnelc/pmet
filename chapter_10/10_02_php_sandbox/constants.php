<html>
	<head>
		<title>Constants</title>
	</head>
	<body>
		<?php
			/*	Constants can't change their values after being defined
				Constant names use all capital letters and no dollar sign
			*/
			
			// Assignment to a variable
			$max_width = 980;
			// Assignment to a constant
			define("MAX_WIDTH", 980);
			
			// Referencing the value of a constant
			echo MAX_WIDTH; echo "<br />";
			
			// Trying to change a constant will give an error:
			// MAX_WIDTH += 1;
			
			// But changing a variable will not.
			$max_width += 1;
			echo $max_width;
			
/*
Note that once a page is returned, a constant CAN be redefined by another PHP page.
For example:
Browser Request 1 -> page1.php -> SIZE defined as 10 -> PHP page finishes -> Page 1 Returned
Browser Request 2 -> page2.php -> SIZE defined as 20 -> PHP page finishes -> Page 2 Returned

SIZE must remain 10 throughout page1.php, 
	but when the 2nd request comes in SIZE is not defined
*/
		?>
	</body>
</html>