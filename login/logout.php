<?php
Session_start();
session_destroy();


header("location:login.php");
exit;



?>
