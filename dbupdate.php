<?php
//session_start();
include('includes/connection.php');
 
     if(isset($_POST['update'])){

	  $username = mysqli_real_escape_string($conn,$_POST['uname']);
	  $phone = mysqli_real_escape_string($conn,$_POST['phone']);
	  $password = mysqli_real_escape_string($conn,$_POST['pass']);
	  $email = mysqli_real_escape_string($conn,$_POST['email']);
	  

	  if(strlen($password)<6)
	  {
		  echo "<script>alert('Password should be mninmum 6 characters!')</script>";
		   echo "<script>window.open('update_profile.php','_self')</script>"; 
		  exit();
	  }
	  
	  $check_email = "select * from users where email='$email'";
	  $mng = mysqli_query($conn,$check_email);
	  $check= mysqli_num_rows($mng);
	  
	  if($check==1)
	  {
		 echo "<script>alert('Email already exist try another')</script>";
        echo "<script>window.open('update_profile.php','_self')</script>"; 
          exit();		 
	  }
	  $id= $_SESSION['user_id'];
	  $sql = "UPDATE users SET uname='$username',phone='$phone' , pass='$password',email='$email' WHERE user_id='$id' ";
	  
	  
	  if ($conn->query($sql))
	  {
		  echo "<script>window.open('profile.php','_self')</script>"; 

	  }else
	  {
		  echo "<script>alert('Not Update, try again.')</script>";
		  echo "Error:".$sql ."<br>". $conn->error;
	  }
	 }

?>
