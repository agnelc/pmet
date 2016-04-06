<html>
	<head>
		<title>String Functions</title>
	</head>
	<body>

		<?php
			$firstString = "The quick brown fox";
			$secondString = " jumped over the lazy dog.";
		?>
		<?php
			// Concatentation
			$thirdString = $firstString;
			$thirdString .= $secondString;
			echo $thirdString;
		?>
		<br />
		Lowercase: <?php echo strtolower($thirdString); ?><br />
		Uppercase: <?php echo strtoupper($thirdString); ?><br />
		Uppercase first-letter: <?php echo ucfirst($thirdString); ?><br />
		Uppercase words: <?php echo ucwords($thirdString); ?><br />
		<br />
		Length: <?php echo strlen($thirdString); ?><br />
		Trim: <?php echo $fourthString = $firstString . trim($secondString); ?><br />
		Find: <?php echo strstr($thirdString, "brown"); ?><br />
		Replace by string: <?php echo str_replace("quick", "super-fast", $thirdString); ?><br />

	</body>
</html>