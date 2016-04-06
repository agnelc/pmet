<html>
	<head>
		<title>Strings</title>
	</head>
	<body>
	<?php
		// Simple string, surrounded by single quotes.
		// (included HTML still works just like HTML when output)
		echo 'Hello World<br />';
		
		// Simple string, surrounded by double quotes. (best practice)
		echo "Hello World<br />";
		
		// Strings can be assigned to variables
		$my_variable = "Hello World";
		echo $my_variable;
		echo "<br />";
		
		// and concatenated with other strings or variables containing strings
		echo $my_variable . " Again";
	?>
	<br />
	<?php
		// PHP will substitute the value of a string for a variable inside double-quotes
		echo "$my_variable Again.<br />";
		
		// curly brackets can help make this substitution clearer
		// sometimes required to help PHP know that it is a variable
		// e.g. "{$hour}am" is clear while $houram is not
		// (best practice)
		echo "{$my_variable} Again.<br />";
		
		// Variable substitution does not take place inside single quotes
		echo '$my_variable Again.<br />';
	?>
	</body>
</html>