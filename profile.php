    
  <?php
   include('includes/connection.php'); 
  include('homehead.php'); ?>

  	  <div class="background_c mr-ten">
  <div class="bg_item">
    <div class="center_item">
          <h1 class="mon">Share Location of Train!</h1>
         <!-- <p class="yes">You are on Train!!! Give a post location of train</p> -->
    </div>

  </div>
  
   <div class="bg_item">
     <div class="align-btn">
             <a href="post.php" class="ui primary button" style="background: #3AC0FF;margin-left: 230px;padding: 12px;">
         Give A post </a>
            </div>
    </div>
</div>
  
      <div class="container-fluid">
     <div class="row">
    <div class="col-sm-3">
      <?php include_once('sub_manu.php'); ?>
    </div>
    <div class="col-sm-8">
	
	
          <?php
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
			 <h1 class="text-center bg-dark text-white">Running Train Status</h1>
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
						  <div class='col-sm-1'><button class="btn-success btn"><a href="new_message.php?id=<?php echo $value['uname']; ?>">Message</a></button></div>
						  <div class='col-sm-1'><button type="button" class="btn-info btn" data-toggle="modal" data-target="#s<?php if(isset($_SESSION['user_id'])){
						  echo $value['p_id']; }
						  else{ header("Location: login.php");}
							  
							  ?>">Contact</button></div>
						  <div class='col-sm-3'></div>
						  <div class="modal fade" id="s<?php echo $value['p_id'];?>">
                                         <div class="modal-dialog modal-sm">
				                            <div class="modal-content">
                                                 <!-- Modal Header -->
                                                   <div class="modal-header">
                                                      <h4 class="modal-title">Contact Number</h4>
                                                 <button type="button" class="close" data-dismiss="modal">&times;</button>
                                                     </div>
                                                       <!-- Modal body -->
                                                      <div class="modal-body">
                                                  <?php echo $value['phone'] ; ?>
                                                   </div> 
							                     </div>
							                     </div>
							                  </div>
						  
						               
						  
						 
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
		                  <a href='profile.php?page=1' class='btn btn-success'>First Page</a>
	                          ";

                    for($i=1;$i <= $total_page ; $i++){
		            echo" <a href='profile.php?page=$i' class='btn btn-success'>$i</a>";
	                }

                      echo"<a href='profile.php?page=$total_page' class='btn btn-success'>Last Page</a></div></center>";
                           ?>				
		  </div>
	 </div>
 
     
	  
	</div>
	
    </div>
    
  
 <?php include_once('footer.php'); ?>




