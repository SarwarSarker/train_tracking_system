<?php
session_start();
 include('includes/connection.php');
 
 if (isset($_POST['update'])) {
	
	$id = $_POST['p_id'];


	$train = $_POST['train'];
	$place = $_POST['place'];
	$from = $_POST['t_from'];
	$to = $_POST['t_to'];

	$sql = "UPDATE post SET p_id='$id', train='$train', place='$place' , t_from='$from', t_to='$to' WHERE p_id='$id' ";
	
	if (!$sql) {
    printf("Error: %s\n", mysqli_error($conn));
    exit();
     }
	  $query = mysqli_query($conn,$sql); 
	  
		   $_SESSION['message'] = "Post updated!"; 
	     header('location: mypost.php');
            		   
        
	
  
    
}
 
 ?>   
 

   
   <!DOCTYPE html>
<html lang="en">
<head>
  <title>TrainTracer BD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
  <link rel="stylesheet" href="css/styl.css">
    <link rel="stylesheet" href="css/loginstyle.css">
   <link rel="stylesheet" href="js/jquery-ui.css">
    <style>
	 form {
   
    margin: 50px auto;
    text-align: left;
    padding: 20px; 
    border: 1px solid #bbbbbb; 
    border-radius: 5px;
}
	 </style>


</head>
<body>
    <div class="wrapper" id="sideManu">	
  
     
    
	 <div class="container-fluid" id="qw">
	 <div class="row"> 
	 <div  class="col-sm-4">
	 </div>
	 <div id="update_post" class="col-sm-4">
	 <br>
	 <br>
  <h2>Update Post</h2>
  <br>
    <?php
	      $id = $_GET['id'];
	$query = mysqli_query($conn,"select * from post where p_id = '$id' ");
	$row = mysqli_fetch_array($query);
	
	  ?>
  <form action="update.php" method="post">

  <div class="form-group">
     <input type="hidden" name="p_id" value="<?php echo $row['p_id']; ?>">
      <label for="train">Train Name:</label>
      <select class="form-control" id="train"  name="train"  required>
        <option><?php echo $row['train'];?></option>
        <option>Turag Commuter</option>
        <option>Titash Commuter</option>
        <option>Jumuna Express</option>
		<option>Balaka Commuter</option>
		<option>Chattalla</option>
		<option>Chitra Express</option>
		<option>Dewangonj Commuter</option>
		<option>Egaro Sindur Provati</option>
		<option>Jamalpur Commuter</option>
		<option>Rajshahi Express</option>
		<option>Surma Mail</option>
		<option>Tista Express</option>
		<option>Chattagram Mail</option>
		<option>Brahmaputra Express<option>
	 </select>
    </div>
   <div class="form-group">
      <label for="place">Posting Place:</label>
	  
      <select class="form-control" id="place"  name="place" value="<?php echo $name; ?>" required >
        <option><?php echo $row['place'];?></option>
        <option>Tongi</option>
        <option>Airport</option>
        <option>Tejgaon</option>
		<option>kamalapur</option>
		<option>Arikhola</option>
		<option>Banani</option>
		<option>Bimanbandar</option>
		<option>Dhaka Cantonment</option>
		<option>Joydebpur</option>
		<option>Kamlapur</option>
		<option>Kaoraid</option>
		<option>Mouchak</option>
		<option>Pubail</option>
		<option>Rajendrapur</option>
		<option>Sripur</option>
		<option>Chittagong</option>
		<option>Rajshahi</option>
      </select>
    </div>
	
     <div class="form-group">
      <label for="t_from">From:</label>
	  
      <input type="text" class="form-control" id="t_from" value="<?php echo $row['t_from']; ?>" name="t_from" required>
    </div>
	 <div class="form-group">
      <label for="t_to">To :</label>
      <input type="text" class="form-control" id="t_to" value="<?php  echo $row['t_to']; ?>" name="t_to" required>
    </div>
	 
		 <br>
    <button type="submit" class="btn btn-primary" name="update">Submit</button>
  </form>
</div>
	
	</div>
	</div>
	</div>
	<br>
	<br>
 
 
 
 <script type="text/javascript" src="js/jquery-1.12.4.js"></script>
<script type="text/javascript" src="js/jquery-ui.js"></script>
<script type="text/javascript" src="js/jquery-3.2.1.slim.min.js"></script>
<script type="text/javascript" src="js/popper.min.js" ></script>
<script type="text/javascript" src="js/bootstrap.min.js"></script>


</body>


