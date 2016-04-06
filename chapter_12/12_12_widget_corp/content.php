<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	if (isset($_GET['subj'])) {
		$sel_subj = $_GET['subj'];
		$sel_page = "";
	} elseif (isset($_GET['page'])) {
		$sel_subj = "";
		$sel_page = $_GET['page'];
	} else {
		$sel_subj = "";
		$sel_page = "";
	}
?>
<?php include("includes/header.php"); ?>
<table id="structure">
	<tr>
		<td id="navigation">
			<ul class="subjects">
		<?php
		$subject_set = get_all_subjects();
		while ($subject = mysql_fetch_array($subject_set)) {
			echo "<li><a href=\"content.php?subj=" . urlencode($subject["id"]) . 
				"\">{$subject["menu_name"]}</a></li>";
			$page_set = get_pages_for_subject($subject["id"]);
			echo "<ul class=\"pages\">";
			while ($page = mysql_fetch_array($page_set)) {
				echo "<li><a href=\"content.php?page=" . urlencode($page["id"]) .
					"\">{$page["menu_name"]}</a></li>";
			}
			echo "</ul>";
		}

		?>
			</ul>
		</td>
		<td id="page">
			<h2>Content Area</h2>
			<?php echo $sel_subj; ?><br />
			<?php echo $sel_page; ?><br />
		</td>
	</tr>
</table>
<?php require("includes/footer.php"); ?>
