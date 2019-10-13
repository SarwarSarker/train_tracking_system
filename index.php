
  <?php
   include('includes/connection.php'); 
  include_once('header.php');
  
  ?>
   <?php  
	    
		 if(isset($_SESSION['user_id'])){
		   		   header("Location: profile.php");
	   }?>
   <!--  <div class="background_b mr-ten"> 
   <img src="img/disused-railway-line-3401954_960_720.png" class="img-responsive " >  
     </div>-->
	  <div class="background_b mr-ten">
  <div class="bg_item">
    <div class="center_item">
          <h1 class="som">Be a part of BD TrainTracer Community</h1>
          <p class="no"></p>
    </div>

  </div>
  
   <div class="bg_item">
     <div class="align-btn">
             <a href="signup.php" class="ui primary button" style="background: #3AC0FF;margin-left: 230px;padding: 12px;">
         Create A New Account </a>
            </div>
    </div>
</div>

	<div class="container-fluid">
     <div class="row">
    <div class="col-sm-3">
      
	  <?php include_once('sidemanu.php'); ?>
    
    </div>
     <div class="col-sm-8">
	 
          <?php
 
       include('includes/connection.php');
      if(isset($_GET['page'])){
	   $page = $_GET['page'];
       }else{
	    $page = 1;
     }
       $per_page = 5;
       $start_from = ($page-1)*5;
	      $data = mysqli_query($conn,"select * from post  INNER JOIN users ON post.user_id=users.user_id ORDER BY p_id DESC  limit $start_from,5");
	      // $count = mysqli_num_rows($data);
		
       ?>
	    	 <div id='own_posts'>
			 <h1 class="text-center bg-dark text-white" >Running Train Status</h1>
			 <br>
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
					<br>
						
						<?php  
						 
						   $query = "select *from post ";
                           $result = mysqli_query($conn,$query);
   
                             $total_post  = mysqli_num_rows($result);
                           $total_page = ceil($total_post / $per_page);
						  echo"
	                       <center>
		                <div class='classification'>
		                  <a href='index.php?page=1' class='btn btn-success'>First Page</a>
	                          ";

                    for($i=1;$i <= $total_page ; $i++){
		            echo" <a href='index.php?page=$i' class='btn btn-success'>$i</a>";
	                }

                      echo"<a href='index.php?page=$total_page' class='btn btn-success'>Last Page</a></div></center>";
                           ?>
						 
	 </div>
   </div>
</div>


 <?php include_once('footer.php'); ?>

