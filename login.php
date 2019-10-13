   <?php   
	   include('header.php');  
 ?>

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
 
    
    <script src="css/bootstrap.min.js"></script>
 
    <title>Hello, world!</title>
  </head>
  <style>
  body,
 
  html {
 
    margin: 0;
 
    padding: 0;
 
    height: 100%;
 
    background: #60a3bc !important;
 
  }
 
  .user_card {
 
    height: 400px;
 
    width: 350px;
 
    margin-top: auto;
 
    margin-bottom: auto;
 
    background: #c8c3bb;
 
    position: relative;
 
    display: flex;
 
    justify-content: center;
 
    flex-direction: column;
 
    padding: 10px;
 
    box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 
    -webkit-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 
    -moz-box-shadow: 0 4px 8px 0 rgba(0, 0, 0, 0.2), 0 6px 20px 0 rgba(0, 0, 0, 0.19);
 
    border-radius: 5px;
 
 
 
  }
 
  .brand_logo_container {
 
    position: absolute;
 
    height: 170px;
 
    width: 170px;
 
    top: -75px;
 
    border-radius: 50%;
 
    background: #60a3bc;
 
    padding: 10px;
 
    text-align: center;
 
  }
 
  .brand_logo {
 
    height: 150px;
 
    width: 150px;
 
    border-radius: 50%;
 
    border: 2px solid white;
 
  }
 
  .form_container {
 
    margin-top: 100px;
 
  }
 
  .login_btn {
 
    width: 100%;
 
    background: #c0392b !important;
 
    color: white !important;
 
  }
 
  .login_btn:focus {
 
    box-shadow: none !important;
 
    outline: 0px !important;
 
  }
 
  .login_container {
 
    padding: 0 2rem;
 
  }
 
  .input-group-text {
 
    background: #c0392b !important;
 
    color: white !important;
 
    border: 0 !important;
 
    border-radius: 0.25rem 0 0 0.25rem !important;
 
  }
 
  .input_user,
 
  .input_pass:focus {
 
    box-shadow: none !important;
 
    outline: 0px !important;
 
  }
 
     .msg {
    margin: 30px auto; 
    padding: 10px; 
    border-radius: 5px; 
    color: #3c763d; 
    background: #dff0d8; 
    border: 1px solid #3c763d;
    width: 50%;
    text-align: center;
}
 
  </style>  
  <body>
     
 
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
	<script src="js/bootstrap.min.css"></script>
    <script src="js/jquery-3.3.1.slim.min.js"></script>
    <script src="js/popper.min.js" "></script>
   
 
 <?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
 
<div class="container h-100">
 
  <div class="d-flex justify-content-center h-100">
 
    <div class="user_card">
 
      <div class="d-flex justify-content-center">
 
        <div class="brand_logo_container">
 
          <img src="img/1.png" class="brand_logo" alt="Logo">
 
        </div>
 
      </div>
         
      <div class="d-flex justify-content-center form_container">
            
        <form action="dblogin.inc.php" method="post">
              
          <div class="input-group mb-3">
 
            <div class="input-group-append">
 
              <span class="input-group-text"><i class="fas fa-user"></i></span>
 
            </div>
           <input type="email" class="form-control" id="email" placeholder="Enter Email" name="email" required>
 
          </div>
 
          <div class="input-group mb-2">
 
            <div class="input-group-append">
 
              <span class="input-group-text"><i class="fas fa-key"></i></span>
 
            </div>
            
     
       <input type="password" class="form-control" id="pass" placeholder="Enter password" name="pass" required>
          </div>
 
          <div class="form-group">
 
            <div class="custom-control custom-checkbox">
 
              <input type="checkbox" class="custom-control-input" id="customControlInline">
 
              
 
            </div>
 
          </div>
		  <div class="d-flex justify-content-center mt-3 login_container">
        <button type="submit" class="btn login_btn" name="Login">LOG IN</button>
       
        
      </div>
        
        </form>
 
      </div>
 
      
 
      <div class="mt-4">
 
        <div class="d-flex justify-content-center links">
 
          Don't have an account? <a href="signup.php" class="ml-2">Sign Up</a>
 
        </div>
 
       
 
      </div>
 
    </div>
 
  </div>
 
</div>
 
 
 
  </body>
</html>