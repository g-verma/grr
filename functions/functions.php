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
			
//checking wheather email already existing or not
	$get_email ="select * from users where user_email ='$email'";
	$run_email =mysqli_query($con,$get_email);
	$check = mysqli_num_rows($run_email);
	
	if ($check==1){
		echo "<script>alert('Email already registered')</script>";
		exit();	}
		
	if(strlen($pass)<8){ echo "<script>alert('Minimum 8 character password')</script>";
		exit();	}
		
	if(strlen($name)<5){ echo "<script>alert('Minimum 5 character username')</script>";
		exit();	}	
		
// this else is used for inserting values to database and script tag is used to give popup		
	else {
		$insert ="insert into users (user_name,user_pass,user_email,user_country,user_gender,user_b_day,user_image,register_date,last_login,status,posts) values ('$name','$pass','$email','$country','$gender','$b_day','default.jpg','$date','$date','$status','$posts') ";	
		
		$run_insert = mysqli_query($con,$insert);
			
			if($run_insert){ echo "<script>alert('Successfully registered')</script>"; }
		}
		
	
		}
	} 

?>
