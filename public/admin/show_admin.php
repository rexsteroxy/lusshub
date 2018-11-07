<?php
require_once('../../private/initialize.php');
$page_title = "show admins";
include(SHARED_PATH . "/admin_header.php");
$id = $_GET['id'] ?? 'welcome';

$admin = find_one_admin($id);
 

  
?>
<div id="content">
 <div class="actions">
      <a class="action" href="<?php echo url_for('/admin/view_admin.php')?>">back to list</a>
</div>

<div class="admin show">

    <h1>admin: <?php echo 'welcome'.'  '. h($admin['name']); ?></h1>

    <div class="attributes">
      <dl>
        <dt>Name</dt>
        <dd><?php echo h($admin['name']); ?></dd>
      </dl>
      <dl>
        <dt>Email</dt>
        <dd><?php echo h($admin['email']); ?></dd>
      </dl>
      <dl>
        <dt>Password</dt>
        <dd><?php echo h($admin['password']); ?></dd>
      </dl>
      
        <dt>Time</dt>
        <dd><?php echo $admin['time'] ; ?></dd>
      </dl>
    </div>

  </div>

</div>


<?php include(SHARED_PATH . "/admin_footer.php");?>