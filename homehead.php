<?php 
 session_start();
 include('includes/connection.php');
 ?>


<!DOCTYPE html>
<html lang="en">
<head>
  <title>TrainTracker BD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/styl.css">
   <link rel="stylesheet" href="css/loginstyle.css">
   <link rel="stylesheet" href="js/jquery-ui.css">

</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-md  navbar-dark">
 <a class="navbar-brand" href="index.php"><h3 class="icon">BD TrainTracker</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">

	<ul class="navbar-nav ">
       
		<li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
      
	  </ul>
	  
	 <ul class="navbar-nav ml-auto"> 
	  
			   <li class="nav-item active ">
			   
			     <a class="nav-link"  href="post.php">Give POST</a>
				 
       
      </li>
	  
	  <?php
	  if(isset($_GET['notf'])){
         $sid = $_GET['notf'];
         		 
	    mysqli_query($conn," UPDATE notification SET read_n = 0 WHERE n_id = '$sid'");
		
		 header("location:nofi_view.php");
	  }?>
	  <?php
		 $data = mysqli_query($conn,"select * from notification  INNER JOIN users ON notification.user_id=users.user_id ORDER BY n_id DESC LIMIT 5 ");
		 $newdata = mysqli_query($conn,"select * from notification  INNER JOIN users ON notification.user_id=users.user_id  where read_n=1");
		  
		  $count = mysqli_num_rows($newdata);
	  
	   ?>
	   <li class="nav-item active">
	       <div class= "dropdown" >
	           <a class="nav-link active" data-toggle="dropdown">
			     Notification <?php if($count>0){ echo "(".$count.")";} ?> <span class="caret"></span></a>
				 <ul class= "dropdown-menu">
				  
				  <?php
				      foreach($data as $value){
				   ?>
				  <?php
						 if($value['read_n'] == '1'){
							 $id = $value['n_id'];
							 
				  ?>
				     <li class="alert-danger"><a href="?notf=<?php echo $value['n_id'];?>"><?php
                      echo "<strong>". $value['uname']."</strong>&nbsp;update&nbsp;a&nbsp;post";?></a></li>
				  <?php
				        }else{
				 ?>
				  <li><a href="nofi_view.php" > <?php echo "<strong>". $value['uname'] ."</strong>&nbsp;update&nbsp;a&nbsp;post" ?></a></li>
				  <?php
						  }
						 }
				  ?>
				  
				 </ul>
 
	       </div>
	  </li>
	  <?php
	      $user = $_SESSION['user_id'];
	$query = mysqli_query($conn,"select * from users where user_id = '$user' ");
	$row = mysqli_fetch_array($query);
	$username=$row['uname'];
	  ?>
	  
	  <li class="nav-item active dropdown ">
       
		   <a class="nav-link" data-toggle="dropdown">
		   <img src='img/1.png' class=' img-circle' width='25px' height='25px'>
			  <?php echo $row['uname'] ; ?></a>
        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
          
		  <a class="dropdown-item" href="mypost.php">My Posts</a>
		  <hr>
          <a class="dropdown-item" href="update_profile.php">Edit Profile</a>
		 
        </div>
      </li>
	         
	  <li class="nav-item active ">
	    
		  <a class="nav-link" href="logout.php">Logout</a> 
		
	  </li>
	  
	</ul>

  </div>  
</nav>
</div> 