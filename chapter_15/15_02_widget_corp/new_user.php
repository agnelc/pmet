<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	include_once("includes/form_functions.php");
	
	// START FORM PROCESSING
	if (isset($_POST['submit'])) { // Form has been submitted.

	} else { // Form has not been submitted.
		$username = "";
		$password = "";
	}
?>
<?php include("includes/header.php"); ?>
<table id="structure">
	<tr>
		<td id="navigation">
			<a href="staff.php">Return to Menu</a><br />
			<br />
		</td>
		<td id="page">
			<h2>Create New User</h2>
			<?php if (!empty($message)) {echo "<p class=\"message\">" . $message . "</p>";} ?>
			<?php if (!empty($errors)) { display_errors($errors); } ?>
			<form action="new_user.php" method="post">
			<table>
				<tr>
					<td>Username:</td>
					<td><input type="text" name="username" maxlength="30" value="<?php echo htmlentities($username); ?>" /></td>
				</tr>
				<tr>
					<td>Password:</td>
					<td><input type="password" name="password" maxlength="30" value="<?php echo htmlentities($password); ?>" /></td>
				</tr>
				<tr>
					<td colspan="2"><input type="submit" name="submit" value="Create user" /></td>
				</tr>
			</table>
			</form>
		</td>
	</tr>
</table>
<?php include("includes/footer.php"); ?>