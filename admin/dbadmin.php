
<?php
session_start();
  $conn = mysqli_connect("localhost", "root", "", "train_project");
if (isset($_SESSION['email'])) {
	header('location: profile.php');
}

  if(!$conn){
	  echo ("Error Connection:".mysqli_connect_error());
  }
  if(isset($_POST['submit'])){
	  $email = $_POST['email'];
	  $password = $_POST['pass'];
	  
   $sql = "select * from admin where email= '$email' and pass = '$password'";
   $result = mysqli_query($conn,$sql);
   $count = mysqli_num_rows($result);
   
   if($count ==1){
	   echo "Login Success";
	   $_SESSION['email']=$email;
	   header('location: main.php');
   }
   else{
	   echo "login failed";
   }
   
  }

?>