<!-- for logout page -->
<?php
session_start();
echo "<script type='text/jadvascript'>window.location.replace('php\function\admin_login.ph');</script>";
session_destroy();


 ?>
