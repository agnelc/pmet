<?php
	// This file is the place to store all basic functions

	function confirm_query($result_set) {
		if (!$result_set) {
			die("Database query failed: " . mysql_error());
		}
	}
	
	function get_all_subjects() {
		global $connection;
		$query = "SELECT * 
				FROM subjects 
				ORDER BY position ASC";
		$subject_set = mysql_query($query, $connection);
		confirm_query($subject_set);
		return $subject_set;
	}
	
	function get_pages_for_subject($subject_id) {
		global $connection;
		$query = "SELECT * 
				FROM pages 
				WHERE subject_id = {$subject_id} 
				ORDER BY position ASC";
		$page_set = mysql_query($query, $connection);
		confirm_query($page_set);
		return $page_set;
	}
?>