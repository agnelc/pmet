<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>

<?php
	$menu_name = mysql_prep($_POST['menu_name']);
	$position = mysql_prep($_POST['position']);
	$visible = mysql_prep($_POST['visible']);
?>
<?php
	$query = "INSERT INTO subjects (
				menu_name, position, visible
			) VALUES (
				'{$menu_name}', {$position}, {$visible}
			)";
	$result = mysql_query($query, $connection);
	if ($result) {
		// Success!
		header("Location: content.php");
		exit;
	} else {
		// Display error message.
		echo "<p>Subject creation failed.</p>";
		echo "<p>" . mysql_error() . "</p>";
	}
?>

<?php mysql_close($connection); ?>