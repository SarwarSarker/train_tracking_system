<?php
   
  include_once('homehead.php');
  
  ?>
      
    	

	<div class="container-fluid">
     <div class="row">
    <div class="col-sm-3">
      
	  <?php include_once('sub_manu.php'); ?>
    
    </div>
     <div class="col-sm-8">
	      <br>   
          <h1 class="text-center bg-dark text-white">Running Train Info</h1>
		  <br>
		  <div id="col-lg-8 m-auto"> 
		  <form class="form-inline" action="runinfo.php" method="post">
           
		   <label  class="mr-sm-2">Train Name:</label>
		   <input type="text" class="form-control mb-2 mr-sm-2"  name="train" placeholder="Enter Train Name">
          
		   
		  <label  class="mr-sm-2">Location:</label>
           <input type="text" class="form-control mb-2 mr-sm-2"  name="t_from" placeholder="Enter Location">
            
			<br>
			<br>
            <input type="submit" class="btn btn-success" name="run" value="VIEW">
           </form> 
			 </div>
			
			 
			 
			  <?php
			  include('includes/connection.php');
			  if(isset($_POST['run'])){
				  $train =  mysqli_real_escape_string($conn,$_POST['train']);
				  $place = mysqli_real_escape_string($conn,$_POST['t_from']);
				  if($train != "" || $place != " " ){
					 
					
                 $data = mysqli_query($conn,"select * from post INNER JOIN users ON post.user_id=users.user_id where train='$train' OR t_from = '$place'" );
				  
                 if(mysqli_num_rows($data) > 0) 
				 {
					 ?>
	    	 <div id='own_posts'>
			<?php
					 
					 while($row = mysqli_fetch_array($data))
                             {
								 ?>
			             <div class='post'>
						 <div class='row'>
						 <div class='col-sm-1'></div>
						  <div class='col-sm-2'>
						  <p><img src='img/1.png' class=' img-circle' width='70px' height='70px'></p>
						 </div>
						 <div class='col-sm-7'>
						<h2><?php echo $row['uname'] ;?></h2>
						<p><?php echo '.Update  post on &nbsp;'. $row['pdate'] ;?></p>
						 </div>
						 
						 </div>
						 
						 <div class='row'>
						 <div class='col-sm-1'></div>
						  <div class='col-sm-8'><h5><?php echo '<strong>Train Name :&nbsp;</strong>' .$row['train'] ;?></h5></div>
						  <div class='col-sm-3'></div>
						 </div>
						 
						
						 <div class='row'>
						  <div class='col-sm-1'></div>
						  <div class='col-sm-6'><h5><?php echo '<strong>Posting Place :&nbsp;</strong>' .$row['place'] ;?></h5></div>
						  <div class='col-sm-5'></div>
						 </div>
						 
						 
						 <div class='row'>
						  <div class='col-sm-1'></div>
						  <div class='col-sm-4'><h6><?php echo '<strong>From :&nbsp;</strong>' .$row['t_from'] ;?></h6> </div>
						  <div class='col-sm-4'><h6><?php echo '<strong>To :&nbsp;</strong>' .$row['t_to'] ;?></h6></div>
						  <div class='col-sm-3'></div>
						 </div>
						 </div>
						 
						  <?php
							 }
				 }	else {echo "<br><h1><center>No Data Found</center></h1>";}				 
			  } 
			  }
			  
		
       ?>
						 </div>
			 
			 
			 
			 
			 </div>
			 
			 

			 
			 
		</div>
	 </div>
	 
  

 <?php include_once('footer.php'); ?>

