<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php include("includes/header.php"); ?>
<table id="structure">
	<tr>
		<td id="navigation">
		<?php
		// 3. Perform database query
		$result = mysql_query("SELECT * FROM subjects", $connection);
		if (!$result) {
			die("Database query failed: " . mysql_error());
		}

		// 4. Use returned data
		while ($row = mysql_fetch_array($result)) {
			echo $row["menu_name"]." ".$row["position"]."<br />";
		}

		?>
		</td>
		<td id="page">
			<h2>Content Area</h2>
			
		</td>
	</tr>
</table>
<?php require("includes/footer.php"); ?>
