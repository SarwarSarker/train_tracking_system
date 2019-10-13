<?Php
session_start();
include('includes/connection.php');

 if(isset($_POST['Login'])){
	 //include('dbsignup.inc.php');
	 
	 $email = mysqli_real_escape_string($conn,$_POST['email']);
	 $pass = mysqli_real_escape_string($conn,$_POST['pass']);
	 
	      
		 $query = "SELECT * from users where email = '$email' AND pass='$pass'";
		 $result = mysqli_query($conn, $query); 
         $resultCheck = mysqli_num_rows($result); 
		 if($resultCheck < 1){
		 $_SESSION['message'] = "Email does not exist OR Password Wrong!"; 
	       header('location: login.php');			
		 exit();			 
		 }else{
			 if($row = mysqli_fetch_assoc($result)){
				$_SESSION['user_id'] = $row['user_id'];
				$_SESSION['user_name'] = $row['uname'];
				$_SESSION['user_phone'] = $row['phone'];
				$_SESSION['user_pass'] = $row['pass'];
				$_SESSION['user_email'] = $row['email'];
				
				header('location: profile.php');
				
             exit();
			 }
		 }
	}else{
	   header("Location: index.php");
   }










?>