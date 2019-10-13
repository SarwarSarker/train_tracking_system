    
  <?php 
   
  include_once('homehead.php'); ?>

  <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>

    <div class="wrapper" id="sideManu">	
  
     
    
	 <div class="container-fluid " id="qw">
	 <div class="row"> 
	 <div  class="col-sm-4">
	 </div>
	 <div id="insert_post" class="col-sm-4">
  <h1><center><strong>Add  post</strong></center></h1>
  <form action="post.inc.php?id=<?php echo $_SESSION['user_id'] ;?>" method="post">

  <div class="form-group">
      <label for="train">Train Name:</label>
      <select class="form-control" id="train"  name="train" required>
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
    </div>
   <div class="form-group">
      <label for="place">Posting Place:</label>
      <select class="form-control" id="place"  name="place" required >
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
    </div>
     <div class="form-group">
      <label for="t_from">From:</label>
      <input type="text" class="form-control" id="t_from" placeholder="From" name="t_from" required>
    </div>
	 <div class="form-group">
      <label for="t_to">To :</label>
      <input type="text" class="form-control" id="t_to" placeholder="to" name="t_to" required>
    </div>
	 
		 
    <center><button type="submit" class="btn btn-primary ok" name="post">Submit</button></center>
  </form>
</div>
	
	</div>
	</div>
	</div>
	<br>
	<br>
 <?php include_once('footer.php'); ?>


