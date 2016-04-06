<html>
	<head>
		<title>Numbers: Floating Point Numbers</title>
	</head>
	<body>
		<?php 
			// Floating Point Numbers (floats) are "numbers with a decimal"
			$var1 = 3.14
		?>
		<?php 
			// Floats can occur when two numbers don't divide evenly
			echo 4/3;
		?>
		
		Floating point: <?php echo $myFloat = 3.14; ?><br />
		Round: <?php echo round($myFloat, 1); ?><br />
		Ceiling: <?php echo ceil($myFloat); ?><br />
		Floor: <?php echo floor($myFloat); ?><br />
		
	</body>
</html>