<?php

$con = mysqli_connect("localhost","root","","fbdb") or die("Mujhko Ranna ji maaf karna DB connection failed ho gya");

function InsertUser(){
		global $con;
		if (isset($_POST['sign_up']))
		{
			
			$name=$_POST['u_name'];
			$pass=$_POST['u_pass'];
			$email=$_POST['u_email'];
			$country=$_POST['u_country'];
			$gender=$_POST['u_gender'];
			$b_day=$_POST['u_birthday'];
			$date = date("d-m-y");
			$status = "unverified";
			$posts = "No";

	$get_email ="select * from users where user_email ='$email'";
	$run_email =mysqli_query($con,$get_email);
	$check = mysqli_num_rows($run_email);
	
	if ($check==1){
		echo "<script>alert('Pehle bhi kiya hua hai bhai, dusri email id use karo')</script>";
		exit();	

	}
		
	
		}
	} 

?>
