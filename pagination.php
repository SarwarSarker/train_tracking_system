<style>
.pagination a{
	color: red;
	float:left;
	padding:18px 32px;
	text-decoration:none;
	tansition: backqround-color .3s;
}
.pagination a:hover:not(.active){ backqround-color: #ddd;}


</style>

<?php
 
 include('includes/connection.php');
   if(isset($_GET['page'])){
	   $page = $_GET['page'];
   }else{
	   $page = 1;
   }
   $per_page = 5;
   $start_from = ($page-1)*5;
   
   $query = "select *from post limit $start_from, $per_page";
   $result = mysqli_query($conn,$query);
   
   $total_post  = mysqli_num_rows($result);
   $total_page = ceil($total_post / $per_page);
   
   
    echo"
	      <center>
		  <div class='classification'>
		  <a href='index.php?page=1'>First Page</a>
	
	";

     for($i=1;$i <= $total_page ; $i++){
		echo" <a href='index.php?page=$i'>$i</a>";
	 }

  echo"<a href='index.php?page=$total_page'>Last Page</a></div></center>";


?>