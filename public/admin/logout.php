<?php
require_once('../../private/initialize.php');

 unset($_SESSION['name']);

redirect_to(url_for('/admin/login.php'));

?>
