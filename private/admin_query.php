<?php
function find_all_contact(){
	global $db;

	$sql = "SELECT * FROM contact ";
	$sql .= "ORDER BY id ASC";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result;
}
?>