    
  <?php session_start();
    include('includes/connection.php');
  ?>
 <!DOCTYPE html>
<html lang="en">
<head>
  <title>TrainTracer BD- Admin</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/styl.css">
   <link rel="stylesheet" href="css/loginstyle.css">
   <link rel="stylesheet" href="js/jquery-ui.css">

</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-md  navbar-dark" >
 <a class="navbar-brand" href="index.php"><h3 class="icon">BD TrainTracer</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">

	<ul class="navbar-nav ">
       
		<li class="nav-item active">
            <a class="nav-link" href="index.php">Home</a>
          </li>
      
      <li class="nav-item active">
        <a class="nav-link" href="#contact"></a>
      </li>
       <li class="nav-item active ">
		 <a class="nav-link"  href="del_post.php">View Posts</a>
	   </li>
	  </ul>
	  
	 <ul class="navbar-nav ml-auto"> 
	  
     <li class="nav-item active ">
	    
		  <a class="nav-link" href="ad_logout.php">Logout</a> 
		
	  </li>
	  
	</ul>

  </div>  
</nav>
</div> 

      <div class="container-fluid">
     <div class="row">
    <div class="col-sm-2">
      <?php //include_once('sidemanu.php'); ?>
    </div>
    <div class="col-sm-8">
	       <Br>
	      <h1 class="text-center bg-dark text-white">Users Post</h1>
	         <Br>
			 
			 <?php if (isset($_SESSION['message'])): ?>
	      <div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
	         <Br>
           <?php
		  
	
	
	   $data = mysqli_query($conn,"select * from post inner join users where post.user_id= users.user_id
		  ORDER BY p_id  ");
		 
		  $total = mysqli_num_rows($data);
		  if ($total != 0) {
				
				?>
	            <table class="table text-center table-striped table-hover table-bordered" >
				      <tr class="bg-primary">
					       <th>User Name</th>
					       <th>Train Name</th>
						   <th>Place</th>
						   <th>From</th>
						   <th>To</th>
						  
						   <th>Action</th>
					  </tr>
				<?php
				
                
            while($row = mysqli_fetch_assoc($data)) {
			?>
		               <tr>
					           <td><?php echo $row['uname'] ;?></td>
							   <td><?php echo $row['train'] ;?></td>
							   <td><?php echo $row['place'] ;?></td>
							   <td><?php echo $row['t_from'] ;?></td>
							  <td><?php echo $row['t_to'] ;?></td>
							  <td><button class="btn-danger btn"><a href="ad_delete.php?id=<?php echo $row['p_id']; ?>">Delete</a></button>
							   </td>
						     	
						  </tr>
		  <?php
                 }
              } else {
           echo "<h1><center>Users haven't posted anything yet.</center></h1>";
            }

?>	 
 
        </table>
	    
     <?php
	/*	      $user = $_SESSION['user_id'];
	$query = mysqli_query($conn,"select * from post where user_id = '$user' ");
	$row = mysqli_fetch_array($query);
	
	 */
	 ?>



	 
	 </div>
 
     
	  
	</div>
	
    </div>
    
  





