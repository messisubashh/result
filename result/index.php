
<?php
session_start();
if($_SERVER['REQUEST_METHOD']=='POST')
{
	include_once 'admin/class.user.php';
	$user=new User();
	extract($_POST);
	$user->studentlogin($sid,$password);
}
?>
<!doctype html>
<html>
<head>
<title>Student login</title>
<meta charset="utf-8">
<style>
input{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid red;
    border-radius: 4px;
 background-color: white;
    color: black;
}
</style>
<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
<link rel="stylesheet" href="student/sumee.css">
</head>
<body>
<img src="picture/banner.jpg" alt="messi" title="messi" height="50%" width="100%">
<div class="container">
<div class="row">


</div>

<div class="row">
<div class="col-md-9" align="left"> <h1> This is your login page</h1>
<br>
<img src="picture/network.jpg" alt="messi" title="messi" width="90%">
</br>
</div>

<div class="col-md-3" >
<div class="subash5" >
<form  method="post" name="frm" action="">


<fieldset>
<legend><h2>Student Login</h2></legend>
<table>
<tr>
<td> Username:</td>
<td>
<input type="text" name="sid" required/>
</td>
</tr>
<br/>
<tr>
<td> Password:</td>
<td>
<input type ="password" name="password" required />
</td>
</tr>
<br>
<td></td>
<td>
<input type="submit" name="submit" value="Login"/>
<input type="reset" name="reset" value="clear"/>
</td>
</tr>
</table></fieldset>

</div>
</form>
</div>
</div>

</center>
</body>
</html>



