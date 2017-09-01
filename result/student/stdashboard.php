<?php
include_once('session.php');
include_once('../admin/class.user.php');
?>
<!DOCTYPE html>
<html>
<head>
<title>Home</title>
<style>
.ram {
	text-align:center;
	
}
.ram a{
	text-decoration: none;
	font-size:20px;
	color:red;
}

.subash ul{
		   list-style-type: none;
            padding: 0;
           width: 8%;
           background-color: #017C98;
            height:50px;
		   margin-top:5px;
		   margin-right:10px;
		}
		
		.subash ul li{
			float:left;
			padding:5px;
			
		}
		.subash ul li a{
			display: block;
    color: #000;
    padding: 8px 16px;
    text-decoration: none;
		}
		.subash ul li a.active {
    background-color: #4CAF50;
    color: white;
}

.ram ul li a:hover:not(.active) {
    background-color: #555;
    color: white;
}
body{
	background-image: url("background.jpg");
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-3"><div class="subash"><ul><li><a href="logout.php">Back</a></li></ul></div>
<br></br>
<br></br>
</div>
</div>
<div class="row">
<div class="col-md-12">
 <div class="ram">

<?php 
$user=new User();
$a=$_SESSION['stid'];
 $user->getremark($a);
 ?>
 
 </div>
 </div>
 </div>
 </div>
 
</body>

</html>
	