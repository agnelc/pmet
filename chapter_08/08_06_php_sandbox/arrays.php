<html>
	<head>
		<title>Arrays</title>
	</head>
	<body>
		<?php $array1 = array(4,8,15,16,23,42); ?>
		<?php echo $array1[0]; ?>
		<?php $array2 = array(6,"fox", "dog", array("x", "y", "z")); ?>
		<?php echo $array2[3][1]; ?>
		<?php $array2[3] = "cat"; ?>
		<br />
		<?php echo $array2[3]; ?>
		<br />
		<?php $array3 = array("first_name" => "Kevin", "last_name" => "Skoglund"); ?>
		<?php echo $array3["first_name"] . " " . $array3["last_name"]; ?><br />
		<?php $array3["first_name"] = "Larry"; ?>
		<?php echo $array3["first_name"] . " " . $array3["last_name"]; ?>
		<br />
		<pre><?php print_r($array2); ?></pre>
	</body>
</html>