<html>
	<head>
		<title>Functions</title>
	</head>
	<body>
	<?php /* User-defined functions
	
		function name($argument1, $argument2 ...) {
		    statement
		}
		
		does NOT require semicolons except after statements
		{} go around function statements

		Functions can call any PHP code, even other functions
		
		Function name can contain letters, numbers, underscores, dashes (no spaces)
		but name must start with a letter or underscore
		Names are case-insenstive but it is better to call them exactly as they were defined
		
		In PHP3, functions must be defined prior to calling them
		In PHP4/5, can appear anywhere (base-level functions are pre-processed)

		Once defined, functions can be called from anywhere
		Once defined, functions can't be redefined
		
		Avoid declaring functions inside functions or conditionals while you are beginner.
		(It's no problem for you to CALL functions from inside funtions though!)
		
	*/ ?>
	
	<?php
		// a simple function
		function say_hello() {
			echo "Hello World!<br />";
		}
		say_hello();
		
		// a function with 1 argument
		function say_hello2($word) {
			echo "Hello {$word}!<br />";
		}
		say_hello2("World");
		// functions must be called with the same number of arguments as were defined
		
		// Functions can be called more than once (that's the point!) with different arguments
		say_hello2("Everyone");
		
	?>
	</body>
</html>