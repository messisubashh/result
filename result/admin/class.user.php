<?php
include_once('database.php');
class User extends dbConnect{
public function studentregister($sid,$name,$stsurname,$password,$address,$dob,$roll,$email){
	$sql0="SELECT * from student WHERE stid='$sid'";
	$result0=mysqli_query($this->db,$sql0);
	$user_data0=mysqli_fetch_array($result0);
	$count_row0=$result0->num_rows;
	if($count_row0==0){
		$sql3="INSERT INTO student SET stid='$sid',stname='$name',stsurname='$stsurname',stpassword='$password',staddress='$address',stemail='$email',dob='$dob',roll='$roll'";
	$result=mysqli_query($this->db,$sql3) or die (mysqli_connect_errno()."data cannot be inserted");
	if($result)
	{
	
	echo"data inserted";}
	else{
		
		echo "data already exists";
	}
	
}
}
public function studentlogin($sid,$password){
	//$password=xs5($password);
	$sql2="SELECT stid from student WHERE stid='$sid' and stpassword='$password'";
	//checking if the username is available in the table
	$result=mysqli_query($this->db,$sql2);
	$user_data=mysqli_fetch_array($result);
	$count_row=$result->num_rows;
	if($count_row==1){
		//this login var will use for the sesssion thing
		$_SESSION['login']=true;
		$_SESSION['stid']=$user_data['stid'];
		$_SESSION['stpassword']=$password;
	
		header('Location:student/stdashboard.php');
	}
	else{
			echo "wrong password";
		return false;
	
	}
	}
	public function getremark($a){
	$sql1="SELECT * from marksheet where stid='$a'";
	$result1=mysqli_query($this->db,$sql1);
	$count_row1=$result1->num_rows;
	if($count_row1==1){
    while($row=mysqli_fetch_array($result1)) {
	 $total=(($row['english'])+($row['nepali'])+($row['math'])+($row['social'])+($row['science'])+($row['english_prac'])+($row['social_prac'])+($row['science_prac']));
    	$per=($total/5);
    	if($per>=80)
    	{
    		$div="Distinction";
    		echo"<p><font color=green font face='arial' size='90pt'><b>Congratulations!!!</b></font></p>";
	 echo"<p><font color=black font face='arial' size='5pt'>You have secured ".$div." marks</font></p>";
	 echo"<p><button type='button' style='background-color:green;box-shadow: 0 4px #999'><a href='../student/marksheet.php'>Click here to view marksheet</a></button></p>";
    	}
    	elseif ($per<80&&$per>=60) {
    		$div="First";
    		echo"<p><font color=green font face='arial' size='90pt'><b>Congratulations!!!</b></font></p>";
	 echo"<p><font color=black font face='arial' size='5pt'>You have secured ".$div." marks</font></p>";
	 echo"<p><button type='button' style='background-color:green;box-shadow: 0 4px #999'><a href='../student/marksheet.php'>Click here to view marksheet</a></button></p>";
    	}
    	elseif ($per<60&&$per>=40) {
    		$div="Second";
    		echo"<p><font color=green font face='arial' size='90pt'><b>Congratulations!!!</b></font></p>";
	 echo"<p><font color=black font face='arial' size='5pt'>You have secured ".$div." marks</font></p>";
	 echo"<p><button type='button' style='background-color:green;box-shadow: 0 4px #999'><a href='../student/marksheet.php'>Click here to view marksheet</a></button></p>";
    	}
    	else
    	{
    		$div="Failed";
    	
	 	echo"<p><font color=red font face='arial' size='70pt'>Sorry!!!</font></p>";
	 	echo"<p><font color=black font face='arial' size='5pt'>You have secured ".$div." marks</font></p>";
	 	 echo"<p><a href='../student/marksheet.php'>Click here to view marksheet</a></p>";
	 }
		
}
}
else
{echo "<h1></b>No result found<br/>Please check later...</b></h1>";}
}
public function getdivision($b){
	$sql2="SELECT division from marksheet where stid='$b'";
	$result=mysqli_query($this->db,$sql2);
    while($row=mysqli_fetch_array($result)) {
echo $row['division'];
	 
}		
}
public function getsheet($c){
	$sql2="SELECT * from marksheet INNER JOIN student where student.stid='$c'AND marksheet.stid='$c'";
	$result=mysqli_query($this->db,$sql2);
    while($row=mysqli_fetch_array($result)) {
    	$total=(($row['english'])+($row['nepali'])+($row['math'])+($row['social'])+($row['science'])+($row['english_prac'])+($row['social_prac'])+($row['science_prac']));
    	$per=($total/5);
    	if($per>=80)
    	{
    		$div="Distinction";
    	}
    	elseif ($per<80&&$per>=60) {
    		$div="First";
    	}
    	elseif ($per<60&&$per>=40) {
    		$div="Second";
    	}
    	else
    	{
    		$div="Failed";
    	}
echo "<!DOCTYPE html>
<html>
   <head>
   <link rel='stylesheet' href='../css/bootstrap.min.css'>
      <title>
   	
       </title>
       <style>
      .ram
	  {top-margin:5px;}</style>
   </head>
     <body>
     	<div class='container'>
     	    <div class='row'>
     	         <div class='col-xs-2'><input value='Print' type='button'onclick='window.print()'/>
     	         </div>
     	         <div class='col-xs-8'>
				
     	            <div style='width:100%;background:#F9EECF;border:2px double black;'>
					
     	                  <div class='row'>
                             <div class='col-xs-12'>						  
						  <br></br>
						</div>
						</div>
						<div style='text-align:center;line-height:5px;'><!-- heading text center-->
						<div class='row'><!-- for heading-->
						
     	                    <div class='col-xs-2'>
     	                       logo
     	                    </div>
     	                    <div class='col-xs-8'>
							
							<p>
     	                     <b> GOVERNMENT OF NEPAL<br></br><br></br>
							 MINISTRY OF EDUCATION<br></br><br><br>
							 OFFICE OF THE CONTROLLER OF EXAMINATION</b><br><br/>
							 <b><h5>SCHOOL LEAVING CERTIFICATION EXAMINATION</h5></b></br>
							 MARK-SHEET</p>
							 </div>
							
							 <div class='col-xs-2'> others</div>
							  </div>
							  </div>
							 
							<div style='line-height:5px;'>
							 <div class='row'>
							 <div class='col-xs-12'>
							 <br></br><br></br><br></br>THE MARKS SECURED BY   <b>".$row['stname']."</b> <b>".$row['stsurname']."</b><br></br><br></br><br></br>
							 DATE OF BIRTH <b>".$row['dob']."</b><br></br><br></br><br></br>
							 ROLL <b>".$row['roll']."</b><br></br><br></br><br></br>
							 OF <b>".$row['staddress']."</b><br></br><br></br><br></br>
							 IN ANNUAL S.L.C EXAMINATION OF <b> 2074 B.S </b>ARE GIVEN BELOW<br></br><br></br><br></br>
							 </div>
							 </div>
							 </div>
							 <div class='row'>
							 <div class='col-xs-12'>
							 
							 <table align='center' border='2' cellspacing='0px' cellpadding='0px'>
   <tr style='height:100pt;text-align:'center''>
    <th rowspan='2'>S.N</th>
    <th rowspan='2' style='width:200pt'>Subject</th>
	<th rowspan='2'style='width:50pt'>F.M </th>
	<th rowspan='2'style='width:50pt'> P.M</th>
	<th  colspan='2' style='width:70pt'>Obtained Marks</th>

	<th rowspan='2'style='width:50pt'>Total</th>
   </tr>
   <tr>
  
  <td style='width:50pt'><b>TH</b></td> <td style='width:50pt'><b>PR</b></td> 
   <tr>
     <td> 1<br></br>2<br></br>3<br></br>4<br></br>5</td>
     <td> English<br></br>Nepali<br></br>Math<br></br>Social<br></br>Science</td>
	 <td>100<br></br>100<br></br>100<br></br>100<br></br>100</td>
	 <td>40<br></br>40<br></br>40<br></br>40<br></br>40</td>
	  <td>".$row['english']."<br></br>".$row['nepali']."<br></br>".$row['math']."<br></br>".$row['social']."<br></br>".$row['science']."</td>
	   <td>".$row['english_prac']."<br></br>-<br></br>-<br></br>".$row['social_prac']."<br></br>".$row['science_prac']."</td>
	    <td>".(($row['english'])+($row['english_prac']))."<br></br>".$row['nepali']."<br></br>".$row['math']."<br></br>".(($row['social'])+($row['social_prac']))."<br></br>".(($row['science'])+($row['science_prac']))."</td>   
   </tr>
   <tr>
    <td colspan='2'>Total</td>
	<td>500</td>
		<td>200</td>
			<td>".(($row['english'])+($row['nepali'])+($row['math'])+($row['social'])+($row['science']))."</td>
				<td>".(($row['english_prac'])+($row['social_prac'])+($row['science_prac']))."</td>
				<td>".(($row['english'])+($row['nepali'])+($row['math'])+($row['social'])+($row['science'])+($row['english_prac'])+($row['social_prac'])+($row['science_prac']))."</td>
	
   </table> 
   <br/>
   </div>
   </div>
   <div class='row'>
   <div class='col-xs-6'>
     Total:<b>".(($row['english'])+($row['nepali'])+($row['math'])+($row['social'])+($row['science'])+($row['english_prac'])+($row['social_prac'])+($row['science_prac']))."</b><br/>
	 Percentage:<b>".($total/5)."%</b><br/>
	 Division:<b>".$div."</b><br/><br/>
	 </div>
	 <div class='col-xs-6'>
	 <div style='text-align:'center''>
	    Subash<br/>
		CONTROLLER SIGNATURE
</div>
</div>	
</div>	
</div>
</div>
<div class='col-xs-2'>
     	         </div>
				 </div>
				 </div>
				 </body>
				 </html>
	 
    
							 
							 




     	
    
   ";
}
}
}
?>	