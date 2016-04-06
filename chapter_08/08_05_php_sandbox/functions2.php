<html>
	<head>
		<title>Functions: globals</title>
	</head>
	<body>
	<?php /* global variables in functions
	
		Variables inside a function aren't the same as the variable outside it
		
		Declaring a variable as global "pulls in" the variable 
			as it exists outside the function so that the function can use it.
	*/
	
	// Example using a global variable
	$bar = "outside";
	function foo() {
		global $bar;
		$bar = "inside";
	}
	foo();
	// guess which this will return before you try it
	echo $bar . "<br />";
	
	?>
	<br />
	<?php
	// Example using a local variable, arguments and return values
	$bar = "outside";
	function foo2($var) {
		$var = "inside";
		return $var;
	}
	$bar = foo2($bar);
	echo $bar . "<br />";
	
	// use sparingly for variables which truly are global & need to be accessed many times from many places
	// don't declare globals out of laziness--pass in arguments and return values instead
	?>
	</body>
</html>