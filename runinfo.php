<?php
   
  include_once('header.php');
  
  ?>
      
    	

	<div class="container-fluid">
     <div class="row">
    <div class="col-sm-3">
      
	  <?php include_once('sidemanu.php'); ?>
    
    </div>
     <div class="col-sm-8">
	      <br>   
          <h1 class="text-center bg-dark text-white">Running Train Info</h1>
		  <br>
           <div id="col-lg-5 m-auto"> 
		  <form class="form-inline" action="runinfo.php" method="post">
		   <label  class="mr-sm-2">Train Name:</label>
          <!--  <input type="text" class="form-control mb-2 mr-sm-2"  name="train" placeholder="Enter Train Name"> -->
          <select class="form-control mb-2 mr-sm-2" id="train"  name="train" placeholder="Enter Train Name" >
        <option></option>
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
		  
		  <label  class="mr-sm-2">Location:</label>
          <!-- <input type="text" class="form-control mb-2 mr-sm-2"  name="t_from" placeholder="Starting Station"> -->
            <select class="form-control mb-2 mr-sm-2" id="place"  name="t_from" placeholder="Starting Station">  >
        <option></option>
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
				 // if($train != "" || $place != "" ){
					if($train != "" || $place != "" ){ 
					$data = mysqli_query($conn,"select * from post INNER JOIN users ON post.user_id=users.user_id where train = '$train' OR  t_from = '$place' ORDER BY p_id " );
				  if(mysqli_num_rows($data) > 0) 
				 {
	      
			  
		
       ?>
	    	 <div id='own_posts'>
			  <h1 class="text-center bg-dark text-white" >Running Train Status</h1>
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
			           }else {echo "<br><h1><center>No Data Found</center></h1>";}
					 }
			  }
				  ?>
						 </div>
			 
			 
			 
			 
			 </div>
			 
			 

			 
			 
		</div>
	 </div>
	 
  

 <?php include_once('footer.php'); ?>

