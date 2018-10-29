<?php
function find_all_contact(){
	global $db;

	$sql = "SELECT * FROM contact ";
	$sql .= "ORDER BY id ASC";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	return $result;
}
function find_one_record($id){
	global $db;
  
	$sql = "SELECT * FROM contact ";
	$sql .= "WHERE id='".$id."'";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	$contact=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $contact;
}

function delete_contact($id) {
    global $db;

    $sql = "DELETE FROM contact ";
   $sql .= "WHERE id='" . $id ."'";
    $sql .= "LIMIT 1";
    $result = mysqli_query($db, $sql);

    // For DELETE statements, $result is true/false
    if($result) {
      return true;
    } else {
      // DELETE failed
      echo mysqli_error($db);
      db_disconnect($db);
      exit;
    }
  } 
?>