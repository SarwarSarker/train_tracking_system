<?php
session_start();
include('includes/connection.php');
         if(isset($_POST['Sign_up'])){

	  $username = mysqli_real_escape_string($conn,$_POST['uname']);
	  $phone = mysqli_real_escape_string($conn,$_POST['phone']);
	  $password = mysqli_real_escape_string($conn,$_POST['pass']);
	  $email = mysqli_real_escape_string($conn,$_POST['email']);
	  
  $check_email = "select * from users where email='$email'";
	  $mng = mysqli_query($conn,$check_email);
	  $check= mysqli_num_rows($mng);
	  
	  if(strlen($password)<6)
	  {
		  $_SESSION['message'] = "Password should be mininmum 6 characters!"; 
	       header('location: signup.php');
		 	exit();
	  }
	  if($check==1)
	  {
		 $_SESSION['message'] = "Email already exist try another!"; 
	       header('location: signup.php');
		 	exit();	 
	  }
	  $sql = "insert into users(uname,phone,pass,email) values('$username','$phone','$password','$email')";
	  
	  if ($conn->query($sql))
	  {
		   		   
		 // echo "<script>alert('Congratulation $username, your account has been created successfully.')</script>";
		   //echo "<script>window.open('login.php','_self')</script>";
		   header('location: login.php');
            		   
         }else
	  {
		  $_SESSION['message'] = "Registation failed, try again.";
		  
		  echo "Error:".$sql ."<br>". $conn->error;
	  }
	 }
?>
