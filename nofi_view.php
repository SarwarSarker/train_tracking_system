    
  <?php
   include('includes/connection.php'); 
  include('homehead.php'); ?>

      <div class="container-fluid">
     <div class="row">
    <div class="col-sm-3">
      <?php include_once('sidemanu.php'); ?>
    </div>
    <div class="col-sm-8">
	
	
          <?php
	      $data = mysqli_query($conn,"select * from post  INNER JOIN users ON post.user_id=users.user_id ORDER BY p_id DESC LIMIT 6 ");
	      // $count = mysqli_num_rows($data);
		
       ?>
	    	 <div id='own_posts'>
			<!-- <h1 align="center">Running Train Status</h1>-->
			 <?php
				      foreach($data as $value){
				  ?>
				   <?php
						 if($value['p_id'] > 0){
					?>
			             <div class='post'>
						 <div class='row'>
						 <div class='col-sm-1'></div>
						  <div class='col-sm-2'>
						  <p><img src='img/1.png' class=' img-circle' width='70px' height='70px'></p>
						 </div>
						 <div class='col-sm-7'>
						<h2><?php echo $value['uname'] ;?></h2>
						<p><?php echo '.Update  post on &nbsp;'. $value['pdate'] ;?></p>
						 </div>
						 
						 </div>
						 
						 <div class='row'>
						 <div class='col-sm-1'></div>
						  <div class='col-sm-8'><h5><?php echo '<strong>Train Name :&nbsp;</strong>' .$value['train'] ;?></h5></div>
						  <div class='col-sm-3'></div>
						 </div>
						 
						
						 <div class='row'>
						  <div class='col-sm-1'></div>
						  <div class='col-sm-6'><h5><?php echo '<strong>Posting Place :&nbsp;</strong>' .$value['place'] ;?></h5></div>
						  <div class='col-sm-5'></div>
						 </div>
						 
						 
						 <div class='row'>
						  <div class='col-sm-1'></div>
						  <div class='col-sm-4'><h6><?php echo '<strong>From :&nbsp;</strong>' .$value['t_from'] ;?></h6> </div>
						  <div class='col-sm-4'><h6><?php echo '<strong>To :&nbsp;</strong>' .$value['t_to'] ;?></h6></div>
						  <div class='col-sm-3'></div>
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




