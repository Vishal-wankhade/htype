<?php
session_start(); //Start the current session
session_unset();
session_destroy(); //Destroy it! So we are logged out now
header("location:loginadmin.php?msg=Successfully Logged out"); // Move back to login.php with a logout message
exit();
?>