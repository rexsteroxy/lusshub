<?php
//for the contact pages
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
  //this is for the sales code

  function find_all_sales(){
	global $db;

	$sql = "SELECT * FROM sales ";
	$sql .= "ORDER BY id ASC";
	$sale = mysqli_query($db, $sql);
	confirm_result_set($sale);
	return $sale;
}

function find_one_order($id){
	global $db;
  
	$sql = "SELECT * FROM sales ";
	$sql .= "WHERE id='".$id."'";
	$result = mysqli_query($db, $sql);
	confirm_result_set($result);
	$order=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $order;
}

function delete_order($id) {
    global $db;

    $sql = "DELETE FROM sales ";
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

  ///this is for the admin area cod

function find_all_admin(){
  global $db;

  $sql = "SELECT * FROM admin ";
  $sql .= "ORDER BY id ASC";
  $admin = mysqli_query($db, $sql);
  confirm_result_set($admin);
  return $admin;
}

function find_one_admin($id){
  global $db;
  
  $sql = "SELECT * FROM admin ";
  $sql .= "WHERE id='".$id."'";
  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  $admin=mysqli_fetch_assoc($result);
    mysqli_free_result($result);
    return $admin;
}

function delete_admin($id) {
    global $db;

    $sql = "DELETE FROM admin ";
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

  function validate_admin($admin) {
    $errors = [];

    // admin_name
    if(is_blank($admin['name'])) {
      $errors[] = "Name cannot be blank.";
    } elseif(!has_length($admin['name'], ['min' => 2, 'max' => 255])) {
      $errors[] = "Name must be between 2 and 255 characters.";
    }

   

    return $errors;
  }

function edith_admin($admin,$id){

  global $db;

  $errows = validate_admin($admin);
  if(!empty($errows)){
    return $errows;
  }

  $sql = "UPDATE admin SET ";
  $sql .= "name='" . $admin['name']."',";
  $sql .= "email='" . $admin['email']."',";
  $sql .= "password='" . $admin['password']."'";
  $sql .= "WHERE id='" . $id ."'";
  $sql .= "LIMIT 1";


  $result = mysqli_query($db, $sql);
  confirm_result_set($result);
  if($result){
    return true;
  }else{
    echo mysqli_error($db);
      db_disconnect($db);
      exit;
  }
  }
function insert_admin($admin){
  global $db;

$errows = validate_admin($admin);
 if(!empty($errows)){
    return $errows;
  }

  $sql = "INSERT INTO admin ";
  $sql .= "(name,email,password,confirm_password)";
  $sql .= "VALUES (";
  $sql .= "'" . $admin['name']. "',";
  $sql .= "'" . $admin['email']. "',";
  $sql .= "'" . $admin['password']. "',";
  $sql .= "'" . $admin['confirm_password']. "'";
  $sql .= ")";

  $result = mysqli_query($db, $sql);
  confirm_result_set($result);

  if($result){
  echo "<script> alert('Registeration Successful') </script>";
  echo"<script>window.open('view_admin.php','_self')</script>";
   }

  else{
    echo mysqli_error($db);
    db_disconnect($db);
    exit;
}
}


?>