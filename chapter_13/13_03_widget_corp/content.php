<?php require_once("includes/connection.php"); ?>
<?php require_once("includes/functions.php"); ?>
<?php
	if (isset($_GET['subj'])) {
		$sel_subject = get_subject_by_id($_GET['subj']);
		$sel_page = NULL;
	} elseif (isset($_GET['page'])) {
		$sel_subject = NULL;
		$sel_page = get_page_by_id($_GET['page']);
	} else {
		$sel_subject = NULL;
		$sel_page = NULL;
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
			echo "<li";
			if ($subject["id"] == $sel_subject['id']) { echo " class=\"selected\""; }
			echo "><a href=\"content.php?subj=" . urlencode($subject["id"]) . 
				"\">{$subject["menu_name"]}</a></li>";
			$page_set = get_pages_for_subject($subject["id"]);
			echo "<ul class=\"pages\">";
			while ($page = mysql_fetch_array($page_set)) {
				echo "<li";
				if ($page["id"] == $sel_page['id']) { echo " class=\"selected\""; }
				echo "><a href=\"content.php?page=" . urlencode($page["id"]) .
					"\">{$page["menu_name"]}</a></li>";
			}
			echo "</ul>";
		}

		?>
			</ul>
		</td>
		<td id="page">
		<?php if (!is_null($sel_subject)) { // subject selected ?>
			<h2><?php echo $sel_subject['menu_name']; ?></h2>
		<?php } elseif (!is_null($sel_page)) { // page selected ?>
			<h2><?php echo $sel_page['menu_name']; ?></h2>
			<div class="page-content">
				<?php echo $sel_page['content']; ?>
			</div>
		<?php } else { // nothing selected ?>
			<h2>Select a subject or page to edit</h2>
		<?php } ?>
		</td>
	</tr>
</table>
<?php require("includes/footer.php"); ?>
