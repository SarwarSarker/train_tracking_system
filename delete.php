<?php
session_start();
 include('includes/connection.php');

 if(isset($_GET['id'])){
   $id = $_GET['id'];
  $q = mysqli_query($conn,"DELETE from post where p_id = '$id'");

    if($q){
		$_SESSION['message'] = "Post deleted!";
		header('location: mypost.php');
		
	}else{
		echo "worng";
	}
}



?>