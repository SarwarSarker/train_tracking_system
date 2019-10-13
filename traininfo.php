 <?php
   include('includes/connection.php'); 
  include_once('header.php');
  
  ?>
    	

	<div class="container-fluid">
     <div class="row">
    <div class="col-sm-3">
      
	  <?php include_once('sidemanu.php'); ?>
    
    </div>
     <div class="col-sm-8">
	      <br>   
          <h1 class="text-center bg-dark text-white">Train Info</h1>
		  <br>
		 
		  <div id="col-lg-5 m-auto"> 
		  <form class="form-inline" action="traininfo.php" method="post">
		   <label  class="mr-sm-2">Train Name:</label>
          <!--  <input type="text" class="form-control mb-2 mr-sm-2"  name="train_name" placeholder="Enter Train Name"> -->
              <select class="form-control mb-2 mr-sm-2" id="train"  name="train_name" placeholder="Enter Train Name" >
        <option></option>
        <option>Subarna Express</option>
        <option>Mohanagar Goduli</option>
        <option>Ekota Express</option>
		<option>Upukol Express</option>
		<option>Jamuna Express </option>
		<option>Egarosindhur Goduli </option>
		<option>Drutojan Express </option>
		<option>Rangpur Express</option>
		<option>Kishorgonj Express</option>
		<option>Silk city express</option>
		<option>Chittra Express</option>
		<option>Sirajgong Express </option>
		<option>Dhumketue Express </option>
		<option>Dolonchapa Express<option>
		<option>Bharamaputra</option>
		<option>Kalani Express</option>
		<option>Agnibina Express</option>
		<option>Moitree Express</option>
	</select>
		  
		  <label  class="mr-sm-2">Location:</label>
         <!--  <input type="text" class="form-control mb-2 mr-sm-2"  name="s_from" placeholder="Starting Station"> -->
            <select class="form-control mb-2 mr-sm-2" id="place"  name="s_from" placeholder="Starting Station">  >
        
        <option></option>
        <option>Dhaka</option>
        <option>Noakhali</option>
		<option>Tarakandi</option>
		<option>Rangpur</option>
		<option>Sylhet</option>
		<option>Dhaka Cantt</option>
		<option>Dhaka Cantonment</option>
		<option>B.B. East</option>
		<option>Dinajpur</option>
		<option>Santahar</option>
		<option>Kisoregonj</option>   
		<option>Khulna</option>
		<option>Dewangong</option>
		<option>Ishurdi</option>
		<option>Chittagong</option>
		<option>Rajshahi</option>
		<option>Kolkata</option>
      </select>
			<br>
			<br>
            <input type="submit" class="btn btn-success" name="info" value="VIEW">
           </form> 
			 </div>
			 
			 
			 <?php
			  include('includes/connection.php');
			  if(isset($_POST['info'])){
				  $tr =  mysqli_real_escape_string($conn,$_POST['train_name']);
				  $pl = mysqli_real_escape_string($conn,$_POST['s_from']);
				  if($tr != "" || $pl != "" ){
					 
					
                 $data = mysqli_query($conn,"select * from intercity  where train_name = '$tr' OR  s_from = '$pl' ORDER BY i_id ");
				  
                 if(mysqli_num_rows($data) > 0) 
				 {
					 ?>
					 <div id='own_posts'>
					 <?php
					 
					 while($row = mysqli_fetch_array($data))
                             {
				 ?>
			             <div class='post'>
						 <br>
						 <div class='row'>
						 
						  <div class='col-sm-2'> </div>
						  <div class='col-sm-1'>
						  <p><img src='img/trainlogo.png' class=' img-circle' width='60px' height='60px'></p>
						 </div>
						 <div class='col-sm-5'>
						<h3><?php echo '<strong>&nbsp;</strong>' .$row['train_name'] ;?></h3>
						 </div>
						  
						 
						 </div>
						 <div class='row'>
						  <div class='col-sm-6'></div>
						  <div class='col-sm-6'></div>
						 </div>
						 <div class='row'>
						 <div class='col-sm-1'></div>
						  <div class='col-sm-4'><h6><?php echo '<strong>Starting Station :&nbsp;</strong>' .$row['s_from'] ;?></h6> </div>
						  <div class='col-sm-1'></div>
						  <div class='col-sm-3'><h6><?php echo '<strong>Departure :&nbsp;</strong>' .$row['f_time'] ;?></h6></div>
						 </div>
						
						 <div class='row'>
						  <div class='col-sm-1'></div>
						  <div class='col-sm-4'><h6><?php echo '<strong>Arival Station :&nbsp;</strong>' .$row['a_to'] ;?></h6> </div>
						  <div class='col-sm-1'></div>
						  <div class='col-sm-3'><h6><?php echo '<strong>Arival Time :&nbsp;</strong>' .$row['t_time'] ;?></h6></div>
						 </div>
						 <div class='row'>
						 <div class='col-sm-1'></div>
						  <div class='col-sm-4'><h6></h6> </div>
						  <div class='col-sm-3'><h6></h6></div>
						  <div class='col-sm-4'></div>
						 </div>
						 <div class='row'>
						  <div class='col-sm-4'><h6></h6> </div>
						  <div class='col-sm-4'><h6></div>
						  <div class='col-sm-4'></div>
						 </div>
						 
						 <div class='row'>
						  <div class='col-sm-4'><h6></h6> </div>
						  <div class='col-sm-4'><h6><?php echo '<strong>OffDay :&nbsp;</strong>' .$row['offday'] ;?></h6></div>
						  <div class='col-sm-4'></div>
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

