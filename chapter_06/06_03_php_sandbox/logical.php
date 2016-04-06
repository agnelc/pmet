<html>
	<head>
		<title>Logical Expressions</title>
	</head>
	<body>
		<?php /*	if, elseif, else

			if (expression)
				statement;

			does NOT require semicolons except after statements
			{} go around multi-line if-statements
			{} are optional for single-line if-statments but I strongly suggest them
			expressions always evaluate to a boolean value (true/false)
			expressions can use comparison operators (==, !=, >, <, >=, <=)
		*/ ?>

		<?php
			$a = 4;
			$b = 4;
			if ($a > $b) {
				echo "a is larger than b";
			} elseif ($a == $b) {	// if 1st expression is false, elseif performs a 2nd test
				echo "a equals b";
			} else {				// if all expressions are false, else gives an alternative statement
				echo "a is smaller than b";
			}
		?>
	
	</body>
</html>