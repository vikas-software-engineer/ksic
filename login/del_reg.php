

<?php
$id = $_GET['id'];

require_once 'connection.php';

$sql = "Delete  from registeration where id ='$id'";
mysqli_query($con,$sql);

header ('location:index.php');
die();


?>