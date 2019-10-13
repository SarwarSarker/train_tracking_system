 
 <?php 
 session_start();
 include('includes/connection.php');
 ?>




<!DOCTYPE html>
<html lang="en">
<head>
  <title>TrainTracer BD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
   <link rel="stylesheet" href="css/styl.css">
   <link rel="stylesheet" href="css/loginstyle.css">
   <link rel="stylesheet" href="js/jquery-ui.css">

</head>
<body>
<div class="container-fluid" id="qw">
<nav class="navbar navbar-expand-md  navbar-dark">
 <a class="navbar-brand" href="#"><h3>BD TrainTracker</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">

	<ul class="navbar-nav ">
       
		<li class="nav-item ">
            <a class="nav-link" href="index.php">Home</a>
          </li>
      
      
	  </ul>
	  
	
	  
				     

  </div>  
</nav>
</div> 
<style >
	*{
		margin: 0px,padding:0px;
	}
#main{
	
	width: 800px;
	height: 600px;
	border: 5px solid white;
	
	background-color: #dbe9d8;
	
	margin:30px;
}
#msg{
	border: 5px solid white;
	width: 795px;
	height: 460px;
	overflow-y:scroll; 
	background-color: lightgreen;
	
}
.container1 {
  border: 2px solid #dedede;
  background-color: #f1f1f1;
  border-radius: 5px;
  padding: 10px;
  margin: 10px 0;
}

.darker {
  border-color: #ccc;
  background-color: #f1f1f1;
}

.container1::after {
  content: "";
  clear: both;
  display: table;
}
.container1 img.right {
  float: right;
  margin-left: 20px;
  margin-right:0;
}

.time-right {
  float: right;
  color: #aaa;
}

.time-left {
  float: left;
  color: #999;
}
</style>
<div class="container">
<div class ="row">
<div class="col-sm-1"></div>
<div class="col-sm-10" >

<div id="main">
<center><h2>Chat Messages</h2></center>	
<div id="msg">
  <?php
    $query="select * from message  order by date ";
    $res=mysqli_query($conn,$query);
    while($data=mysqli_fetch_array($res)){
      $user=$data['uname'];
      $chatbot=$data['message'];
      $date=$data['date'];
        echo'<div class="container1" style="margin-right: 400px;">
    <h1 style="color:red"> '.$user.' </h1>
    <p id="message"> '.$chatbot.'</p>
    <span class="time-right"> '.$date.'</span>
  </div>';
   } 
    
 ?>

<?php
/*if(isset($_GET['id'])){
//   	global $conn;
   	
    $user = $_GET['id'];
	$query = mysqli_query($conn,"select * from users where uname = '$user' ");
	$row = mysqli_fetch_array($query);
	$id = $row['uname'];
}*/
$user = $_SESSION['user_name'];
	$query = mysqli_query($conn,"select * from users where uname = '$user' ");
	$row = mysqli_fetch_array($query);
	$id = $row['uname'];

 if(isset($_POST['submit'])){
   $message = $_POST['message'];
    
    $query="select * from message  order by date ";
    $res=mysqli_query($conn,$query);
    while($data=mysqli_fetch_array($res)){
      $user=$data['uname'];
      $chatbot=$data['message'];
      $date=$data['date'];
        echo'<div class="container1" style="margin-right: 400px;">
    <h1 style="color:red"> '.$user.' </h1>
    <p id="message"> '.$chatbot.'</p>
    <span class="time-right"> '.$date.'</span>
  </div>';
   }

    $sql = "insert into message (uname,message,date) values('$id','$message',NOW())";
    if(mysqli_query($conn,$sql)){
          //   echo'<h4 style="color:red">'.$id.'</h4> ';
           //  echo '<p>'.$message.'</p>';
            echo ' <div class="container1 darker" style="margin-left: 400px;">
             <h1 style="color:red">'.$id.'</h1>
              <p>'.$message.'</p>
              <span class="time-left"> '.$date.'</span>
              </div>';
            

      } 

 }

?>
</div>

   <form method="post">
   	 <input type="text" name="message" placeholder="type your message" style="width: 660px; height: 75px;" />
   	 <input type="submit" name="submit" value="send" style="width: 100px; height: 75px; background-color:#5F9EA0;" />
   </form>
</div>
</div>
<div class="col-sm-1"></div>
</div>
</div>