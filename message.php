    
  <?php  include_once('homehead.php'); ?>
<div class="row">
  <?php


   if(isset($_GET['user_id'])){
   	global $conn;
   	$get_id = $_GET['user_id'];
   	$get_user = "select * from users where user_id = '$get_id' ";

   	$run_user = mysqli_query($conn,$get_user);
   	$row_user = mysqli_fetch_array($run_user);

   	$user_to_msg = $row_user['user_id'];
   	$user_to_name = $row_user['uname'];
   } 
    $user = $_SESSION['user_id'];
	$query = mysqli_query($conn,"select * from users where user_id = '$user' ");
	$row = mysqli_fetch_array($query);
	
	//$id = $row['user_id'];
	
	$user_from_msg = $row['user_id'];
   	$user_from_name = $row['uname'];
	
	
  ?>
</div>
<div class="col-sm-3" id ='select_user'></div>
<div class="col-sm-6" >
	<div class="load_msg" id='scroll_messages'>
		<?php
          $sel_msg  = "select * from message where (user_to='$user_to_msg' AND user_from='$user_to_name')
          OR (user_from='$user_from_msg' AND user_to='$user_from_name') ORDER by 1 ASC";
          $run_msg = mysqli_query($conn,$sel_msg);

          while ($row_msg = mysqli_fetch_array($run_msg)){
          	$user_to = $row_msg['user_to'];
          	$user_from = $row_msg['user_from'];
          	$msg_body = $row_msg['msg_body'];
          	$msg_date = $row_msg['date'];
          ?>
	
	<div>
		<p><?php if($user_to == $user_to_msg AND $user_from == $user_to_msg){
			echo "<div class='message' id='blue' data-toggle='tooltip' title='$msg_date'>$msg_body</div><br><br><br>";}
			else if($user_from == $user_from_msg AND $user_to == $user_from_msg){
				echo "<div class='message' id='green' data-toggle='tooltip' title='$msg_date'>$msg_body</div><br><br><br>";}?></p>

	</div>
	<?php
	 }
	 ?>

</div>
     <?php

           if(isset($_GET['user_id'])){
           	$u_id = $_GET['user_id'];
           	if($u_id == "new"){
           		echo"
           		<form>
                   <center><h3>select someone to start conversation</h3></center>
                   <textarea disabled class='form-control' placeholder='Enter Your message'></textarea>
                   <input type='submit' class='btn btn-default' disabled value='Send'>
           		</form><br><br>

           		";
           	}else{
           		echo"
           		<form action='' method='POST'>
                   <center><h3>select someone to start conversation</h3></center>
                   <textarea  class='form-control' placeholder='Enter Your message'
                   name='msg_box' id='message_textarea'></textarea>
                   <input type='submit' name='send_msg' id='btn_msg' value='Send'>
           		</form><br><br>
           		";
           	}

           }

     ?>
     <?php
        if(isset($_POST['send_msg'])){
        	$msg = $_POST['msg_box'];

        	if($msg == ""){
        		echo"
        		<h4 style='color:red;text-align:center;'>Message unable to send!</h4>";
        	}else if(strlen($msg)>37){
        		echo"
        		<h4 style='color:red;text-align:center;'>Message is too long!</h4>";
        	}else{
        		$insert="insert into message (user-to,user_from,msg_body,date) values ('$user_to_msg','$user_from_msg','$msg',NOW())";
        		$run_insert = mysqli_query($conn,$insert);
        	}
        }
     ?>
</div>