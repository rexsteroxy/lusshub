<?php
function insert_contact($name,$email,$subject,$message){
	global $db;

	$sql = "INSERT INTO contact ";
	$sql .= "(name,email,subject,message)";
	$sql .= "VALUES (";
	$sql .= "'" . $name. "',";
	$sql .= "'" . $email. "',";
	$sql .= "'" . $subject. "',";
	$sql .= "'" . $message. "'";
	$sql .= ")";

	$result = mysqli_query($db, $sql);
	confirm_result_set($result);

	if($result){
	echo "<script> alert('Thanks we will get back to you within the next 25 minutes') </script>";
	echo"<script>window.open('sales.php','_self')</script>";
 	 }

	else{
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
}
}

function insert_sales($name,$number,$email,$message){
	global $db;

	$sql = "INSERT INTO sales ";
	$sql .= "(name,number,email,orders)";
	$sql .= "VALUES (";
	$sql .= "'" . $name. "',";
	$sql .= "'" . $number. "',";
	$sql .= "'" . $email. "',";
	$sql .= "'" . $message. "'";
	$sql .= ")";

	$result = mysqli_query($db, $sql);
	confirm_result_set($result);

	if($result){
	echo "<script> alert('Thanks we will get back to you within the next 25 minutes') </script>";
	echo"<script>window.open('sales.php','_self')</script>";
 	 }

	else{
		echo mysqli_error($db);
		db_disconnect($db);
		exit;
}
}