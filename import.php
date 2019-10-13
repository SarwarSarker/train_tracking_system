
  <?php
   include('includes/connection.php'); 
  include_once('header.php');
  
  ?>
   
      
    	

	<div class="container-fluid">
     <div class="row">
    <div class="col-sm-3">
      
	  <?php include_once('sidemanu.php'); ?>
    
    </div>
	<div class="col-sm-1"></div>
     <div class="col-sm-6">
	        <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center">
                 <h1 class="text-center bg-dark text-white">Bangladesh Railway Station Important Number</h1>
                 <p class="lead"> </p>
             </div>
          
	    	  <?php
	      $data = mysqli_query($conn,"select * from important  ORDER BY id ASC LIMIT 15 ");
	      
		
       ?>
	    	 <div id='new'>
			     <?php
				      foreach($data as $value){
				  ?>
				   <?php
						 if($value['id'] > 0){
					?>
			             <div class='new_post'>
						 <div class='row' id="jam">
						 <div class='col-sm-4'></div>
						  <div class='col-sm-4'  >
						  <h5>Station Name: <?php echo "". $value['station_name'] ;?></h5> 
						  <h6>Number: <?php echo $value['number'] ;?></h6>
						  </div>
						
						 <div class='col-sm-4'>
						<h2></h2>
						<p></p>
						 </div>
						 
						 </div>
						 
						  
						
						 </div>
	              <?php
					  }
					 }
				  ?>
			
			 </div>
			 <br>
			<h2>For more information :    <span style="color:red"> <a href="http://www.railway.gov.bd/">Click Here</a> </span> </h2>
			<br>
		</div>
						 
						 
						 
	 </div>
	 
  

 <?php include_once('footer.php'); ?>

