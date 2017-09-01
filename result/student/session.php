<?php
session_start();
$stid=$_SESSION['stid'];
if($stid==''){
	header("location: ../index.php");
}
?>