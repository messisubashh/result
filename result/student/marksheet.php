<?php
include_once('session.php');
include_once('../admin/class.user.php');
?>
<?php 
$user=new User();
$c=$_SESSION['stid'];
 $user->getsheet($c);
 ?>

