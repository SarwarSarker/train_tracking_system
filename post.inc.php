<?php
session_start();
include('includes/connection.php');
    
    $user = $_SESSION['user_id'];
	$query = mysqli_query($conn,"select * from users where user_id = '$user' ");
	$row = mysqli_fetch_array($query);
	if (!$row) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
     }
	$id = $row['user_id'];
	 
	 
	 if(isset($_POST['post'])){
      
	  $train = mysqli_real_escape_string($conn,$_POST['train']);
	  $place= mysqli_real_escape_string($conn,$_POST['place']);
	  $to = mysqli_real_escape_string($conn,$_POST['t_to']);
	  $from = mysqli_real_escape_string($conn,$_POST['t_from']);
         

	 
		 $sql= "insert into post(train,place,t_to,t_from,user_id) values('$train',' $place','$to','$from','$id')";
		 $sql2= "insert into notification(train,place,read_n,user_id) values('$train',' $place','1','$id')";
         
		if($conn->query($sql)&& $conn->query($sql2))
		 {
			  
		     header('location: profile.php');
			             			 
		 }
		 else{
			 $_SESSION['message'] = "Please try Again!.";
			 echo "Error:".$sql. "<br>" .$conn->error;
		 }
	   }

?>	 