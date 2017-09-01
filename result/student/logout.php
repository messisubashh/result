<?php
session_start();
$q=$_GET['q'];
$_SESSION['login']=FALSE;
session_destroy();
header("location: ../index.php");
?>