    
  <?php
    include('includes/connection.php');
  include('homehead.php'); ?>
  <?php 

?>
<style>
form {
    width: 45%;
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}

.input-group {
    margin: 10px 0px 10px 0px;
}
.input-group label {
    display: block;
    text-align: left;
    margin: 3px;
}
.input-group input {
    height: 30px;
    width: 93%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
.input-group select {
    height: 30px;
    width: 83%;
    padding: 5px 10px;
    font-size: 16px;
    border-radius: 5px;
    border: 1px solid gray;
}
</style>
      <div class="container-fluid">
     <div class="row">
    <div class="col-sm-3">
      <?php include_once('sidemanu.php'); ?>
    </div>
    <div class="col-sm-8">
	       <Br>
	      <h1 class="text-center bg-dark text-white">My Post</h1>
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
		   $user = $_SESSION['user_id'];
	$query = mysqli_query($conn,"select * from users where user_id = '$user' ");
	$row = mysqli_fetch_array($query);
	if (!$row) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
     }
	$id = $row['user_id'];
	
	
	   $data = mysqli_query($conn,"select * from post 
		 where user_id='$id' ORDER BY p_id  ");
		 
		  $total = mysqli_num_rows($data);
		  if ($total != 0) {
				
				?>
	            <table class="table text-center table-striped table-hover table-bordered" >
				      <tr class="bg-primary">
					       
					       <th>Train Name</th>
						   <th>Place</th>
						   <th>From</th>
						   <th>To</th>
						   <th>Edit Action</th>
						   <th>Action</th>
					  </tr>
				<?php
				
                
            while($row = mysqli_fetch_assoc($data)) {
			?>
		               <tr>
					           
							   <td><?php echo $row['train'] ;?></td>
							   <td><?php echo $row['place'] ;?></td>
							   <td><?php echo $row['t_from'] ;?></td>
							  <td><?php echo $row['t_to'] ;?></td>
							   <td><button class="btn-info btn"><a href="update.php?id=<?php echo $row['p_id']; ?>">Edit</a></button></td>
							   <td><button class="btn-danger btn"><a href="delete.php?id=<?php echo $row['p_id']; ?>">Delete</a></button>
							   </td>
						     	
						  </tr>
		  <?php
                 }
              } else {
           echo "<h1><center>You haven't posted anything yet.</center></h1>";
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
    
  
 <?php include_once('footer.php'); ?>




