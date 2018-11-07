<?php
require_once('../../private/initialize.php');

if(!isset($_GET['id'])){
  redirect_to(url_for('/admin/index.php'));
}

$id = $_GET['id'];


if(is_post_request()){
  $admin=[];
$admin['name'] = $_POST['name'] ?? '';
$admin['email'] = $_POST['email'] ?? '';
$admin['password']= $_POST['password'] ?? '';

$result = edith_admin($admin,$id);
redirect_to(url_for('/admin/show_admin.php?id=' .$id));

}else{
  $admin = find_one_admin($id);

    $admin_set = find_all_admin();
    $admin_count = mysqli_num_rows($admin_set);
    mysqli_free_result($admin_set);
}



?>

<?php $page_title = ' edit admin'; ?>
<?php include(SHARED_PATH . '/admin_header.php'); ?>

<div id="content">

  <a class="back-link" href="<?php echo url_for('/admin/view_admin.php'); ?>">&laquo; Back to List</a>

  <div class="admin edit">
    <h1>Edit admins</h1>

    

    <form action="<?php echo url_for('/admin/edit_admin.php?id='. h(u($id))); ?>" method="post">
      <dl>
        <dt>Name</dt>
        <dd><input type="text" name="name" value="<?php echo h($admin['name']) ?>"/></dd>
      </dl>
      <dl>
        <dt>Email</dt>
        <dd><input type="text" name="email" value="<?php echo h($admin['email']) ?>"/></dd>
      </dl>
      <dl>
        <dt>Password</dt>
        <dd><input type="text" name="password" value="<?php echo h($admin['password']) ?>"/></dd>
      </dl>
     
      <div id="operations">
        <input type="submit"  value="Edit admin" />
      </div>
    </form>

  </div>
 
</div>

<?php include(SHARED_PATH . '/admin_footer.php'); ?>
