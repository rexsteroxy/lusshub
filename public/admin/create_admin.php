<?php
require_once('../../private/initialize.php');
$page_title = "admin_homepage";
include_once(SHARED_PATH .'/admin_header.php');

if(is_post_request()){

  $name = $_POST['name'] ?? '';
  $email = $_POST['email'] ?? '';
  $password = $_POST['password'] ?? '';
  $confirm_password = $_POST['password_2'] ?? '';


  $result=insert_admin($name,$email,$password,$confirm_password);
  
 }

?>

    <div id="content">
      <a class="back-link" href="<?php echo url_for('/admin/view_admin.php'); ?>">&laquo; Back to List</a>

  <div class="admin edit">
    <h1>Create New Admin</h1>

    

    <form action="<?php echo url_for('/admin/create_admin.php'); ?>" method="post">
      <dl>
        <dt>Name</dt>
        <dd><input type="text" name="name" /></dd>
      </dl>
      <dl>
        <dt>Email</dt>
        <dd><input type="text" name="email" /></dd>
      </dl>
      <dl>
        <dt>Password</dt>
        <dd><input type="password" name="password" /></dd>
      </dl>
      <dl>
        <dt> Confirm_Password</dt>
        <dd><input type="password" name="password_2" /></dd>
      </dl>
     
      <div id="operations">
        <input type="submit"  value="Submit" />
      </div>
    </form>

  </div>
 
    </div>

<?php include_once(SHARED_PATH .'/admin_footer.php');?>