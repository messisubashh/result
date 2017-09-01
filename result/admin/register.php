<?php
include_once('database.php');
if($_SERVER['REQUEST_METHOD']=='POST')
{
	extract($_POST);
	include_once('class.user.php');
	$user= new User();
    
	$user->studentregister($sid,$name,$stsurname,$password,$address,$dob,$roll,$email);
}
?>

<!doctype html>
<html>
<head>
<title>ADDUSER</title>
<meta charset="utf -8"/>
<meta name="author" content="sumi"/>
<meta name="keyword" content="dashboard,myadmin"/>
<meta name="description" content ="Dashboard by sumi"/>
<meta name="viewport" content="width=device-width,initial-scale=1.0"/>
<link rel="stylesheet" href="subash.css">
<style>
input{
    width: 100%;
    padding: 12px 20px;
    margin: 8px 0;
    box-sizing: border-box;
    border: 2px solid green;
    border-radius: 4px;
 background-color: #85C1E9;
    color: black;
}
</style>
</head>
<body>
<div class="container">
<div class="row">
<div class="col-md-9">
<form method ="post" name="frm" action="" > <fieldset>
<legend><h2>Student Registration</h2> </legend>
<table>
<tr>
<td> <b>Student id</b></td>
<td><input type="text" name="sid" required/></td>
</tr>
<tr>
<td><b>Student Name</b></td>
<td>
<input type="text" name="name" required/>
</td>
<tr> </tr>
</tr>
<tr>
<td><b>Student Surname</b></td>
<td>
<input type="text" name="stsurname" required/>
</td>
<tr> </tr>
</tr>
<tr>
<td><b>Password</b></td>
<td>
<input  type="password"  name="password" required />
</td>
</tr>

<tr>
<td><b>Student Address</b></td>
<td>
<input type="text" name="address" required/>
</td>
<tr> </tr>
</tr>
<tr>
<td><b>Student Date of Birth</b></td>
<td>
<input type="text" name="dob"  placeholder="YYYY-MM-DD"required/>
</td>
<tr> </tr>
</tr>
<tr>
<td><b>Student Roll</b></td>
<td>
<input type="text" name="roll" required/>
</td>
<tr> </tr>
</tr>
<tr>
<td><b>Email</b></td>
<td>
<input  type="email"  name="email" required />
</td>
</tr>

<tr>

<td>
<input type="submit" name="submit" value="Submit"/></td>
<td><input type="reset" name="reset" value="Clear"/>
</td>
</tr>
</fieldset>
</form>
</table>
</div>
</div>
</div>
</body>
</html>