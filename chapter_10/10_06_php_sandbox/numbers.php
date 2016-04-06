<html>
	<head>
		<title>Numbers</title>
	</head>
	<body>
		<?php
			$var1 = 3;
			$var2 = 4;
		?>
		
		Basic Math: <?php echo ((1 + 2 + $var1) * $var2) / 2 - 5; ?><br />
		<br />
		
		<?php // You can perform math operations directly on values ?>
		+=: <?php $var2 += 4; echo $var2; ?><br />
		-=: <?php $var2 -= 4; echo $var2; ?><br />
		*=: <?php $var2 *= 3; echo $var2; ?><br />
		/=: <?php $var2 /= 4; echo $var2; ?><br />
		<br />
		
		Increment: <?php $var2++; echo $var2; ?><br />
		Decrement: <?php $var2--; echo $var2; ?><br />
		
	</body>
</html>