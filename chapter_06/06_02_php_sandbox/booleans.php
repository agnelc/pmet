<html>
	<head>
		<title>Booleans and NULL</title>
	</head>
	<body>
		<?php
			/*	Booleans are used to represent the concepts of true and false.
				They are most often used for testing if a statement is true or false and 
				they'll play a bigger role when we discuss logical expressions.
				Note that there is a difference between 
					boolean true/false and the strings "true"/"false".
			*/
			$bool1 = true;
			$bool2 = false;
			
			// When booleans are displayed, PHP will attempt to convert them into a string
			// You'll get either "1"/"0" or "1"/"" instead of true/false
		?>
		$bool1: <?php echo $bool1; ?><br />
		$bool2: <?php echo $bool2; ?><br />
		<br />
		<?php
			/*	NULL is used to represent the concept of nothing or the state of being empty
				In the below example three variable have been set, 
					then boolean tests are performed and the results are output as a string
			*/
			$var1 = 3;
			$var2 = "cat";
			$var4 = NULL;
			
			// isset tests whether a variable has been set
			// It returns true or false as a result of the test.
		?>
		$var1 is set: <?php echo isset($var1); // result: true ?><br />
		$var2 is set: <?php echo isset($var2); // result: true ?><br />
		$var3 is set: <?php echo isset($var3); // result: false ?><br />
		<?php unset($var1); ?>
		$var1 is set: <?php echo isset($var1); // result: false ?><br />
		$var2 is set: <?php echo isset($var2); // result: true ?><br />
		$var3 is set: <?php echo isset($var3); // result: false ?><br />
		<br />
		<?php // empty test whether a variable is empty ?>
		$var1 empty: <?php echo empty($var1); // result: true ?><br />
		$var4 empty: <?php echo empty($var4); // result: true ?><br />
	</body>
</html>