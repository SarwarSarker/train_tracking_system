
  <?php 
   
   include('includes/connection.php'); 
  include_once('homehead.php');
  
  ?>
 
	 <!--  <img src="img/disused-railway-line-3401954_960_720.png" class="img-responsive">-->
   
    <div class="container-fluid">
     <div class="row">
    <div class="col-sm-3">
      <?php include_once('sub_manu.php'); ?>
    </div>
     <div class="col-sm-8">
          <?php
	      $data = mysqli_query($conn,"select * from local  ORDER BY l_id ASC limit 12 ");
	      
		
       ?>
	    	 <div id='own_posts'>
			  <h1 class="text-center bg-success text-white" >Local Train Schedule</h1>
			 <?php
				      foreach($data as $value){
				  ?>
				   <?php
						 if($value['l_id'] > 0){
					?>
			             <div class='post'>
						 <br>
						 <div class='row'>
						 
						  <div class='col-sm-2'> </div>
						  <div class='col-sm-1'>
						  <p><img src='img/trainlogo.png' class=' img-circle' width='60px' height='60px'></p>
						 </div>
						 <div class='col-sm-5'>
						<h3><?php echo '<strong>&nbsp;</strong>' .$value['train_name'] ;?></h3>
						 </div>
						  
						 
						 </div>
						 <div class='row'>
						  <div class='col-sm-6'></div>
						  <div class='col-sm-6'></div>
						 </div>
						 <div class='row'>
						 <div class='col-sm-1'></div>
						  <div class='col-sm-4'><h6><?php echo '<strong>Starting Station :&nbsp;</strong>' .$value['s_from'] ;?></h6> </div>
						  <div class='col-sm-1'></div>
						  <div class='col-sm-3'><h6><?php echo '<strong>Departure :&nbsp;</strong>' .$value['f_time'] ;?></h6></div>
						 </div>
						
						 <div class='row'>
						  <div class='col-sm-1'></div>
						  <div class='col-sm-4'><h6><?php echo '<strong>Arival Station :&nbsp;</strong>' .$value['a_to'] ;?></h6> </div>
						  <div class='col-sm-1'></div>
						  <div class='col-sm-3'><h6><?php echo '<strong>Arival Time :&nbsp;</strong>' .$value['t_time'] ;?></h6></div>
						 </div>
						 <div class='row'>
						 <div class='col-sm-1'></div>
						  <div class='col-sm-4'><h6></h6> </div>
						  <div class='col-sm-3'><h6></h6></div>
						  <div class='col-sm-4'></div>
						 </div>
						 
						 
						 <div class='row'>
						  <div class='col-sm-4'><h6></h6> </div>
						  <div class='col-sm-4'><h6><?php echo '<strong>OffDay :&nbsp;</strong>' .$value['offday'] ;?></h6></div>
						  <div class='col-sm-4'></div>
						 </div>
						 </div>
						 
						 
						  <?php
					  }
					 }
				  ?>
						 </div>
	 </div>
   </div>
</div>
 <?php include_once('footer.php'); ?>

