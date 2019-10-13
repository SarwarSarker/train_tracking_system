<?php  
session_start();
 ?>  
 

<!DOCTYPE html>
<html lang="en">
<head>
  <title>TrainTracer BD</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">

  <link rel="stylesheet" href="css/bootstrap.min.css">
   
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">   
  <link rel="stylesheet" href="css/styl.css">
    <link rel="stylesheet" href="css/loginstyle.css">
   <link rel="stylesheet" href="js/jquery-ui.css">
    
  <link rel="stylesheet" type="text/css" href="css/sweetalert2.css">


</head>
<body>
<div class="container-fluid">
<nav class="navbar navbar-expand-sm  navbar-dark">
 <!--<button type="button" id="sidebarCollapse" class="btn ">
   			<i class="fa fa-align-justify"></i> <span></span></button> -->
			
 <a class="navbar-brand" href="index.php"></h3 class="last">BD TrainTracer</h3></a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
    <span class="navbar-toggler-icon"></span>
  </button>
  <div class="collapse navbar-collapse" id="collapsibleNavbar">

	<ul class="navbar-nav ">
      <li class="nav-item active">
        <a class="nav-link " href="index.php">Home</a>
      </li>
      <li class="nav-item active">
        <a class="nav-link" href="#contact">Contact</a>
      </li>
	  
      
	  </ul>
	  
	 <ul class="navbar-nav ml-auto"> 
	 <li class="nav-item active">
        <a class="nav-link" href="login.php">Login</a>
      </li>
	   <li class="nav-item active">
        <a class="nav-link" href="signup.php">Register</a>
      </li>
	</ul>
		

  </div>  
</nav>
</div> 


<style>
html {
  background-color: ;
}
 
body {
  font-family: "Poppins", sans-serif;
  height: 100vh;
}
 
a {
  color: #92badd;
  display:inline-block;
  text-decoration: none;
  font-weight: 200;
}
 
h2 {
  text-align: center;
  font-size: 16px;
  font-weight: 600;
  text-transform: uppercase;
  display:inline-block;
  margin: 40px 8px 10px 8px; 
  color: #cccccc;
}
 
.wrapper {
 display: flex;
  align-items: center;
  flex-direction: column; 
  justify-content: center;
  width: 100%;
  min-height: 100%;
  padding: 20px;
}
 
#formContent {
 -webkit-border-radius: 10px 10px 10px 10px;
  border-radius: 10px 10px 10px 10px;
  background: #c26767;
  padding: 30px;
  width: 70%;
  max-width: 450px;
  position: relative;
  padding: 0px;
  -webkit-box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  box-shadow: 0 30px 60px 0 rgba(0,0,0,0.3);
  text-align: center;
}
 
#formFooter {
  background-color: #322;
  border-top: 1px solid #dce8f1;
  padding: 20px;
  text-align: center;
  -webkit-border-radius: 0 0 10px 10px;
  border-radius: 0 0 10px 10px;
}
 
h2.inactive {
   color: #cccccc;
}
 
h2.active {
 color: #0d0d0d;
 border-bottom: 2px solid #5fbae9;
}
 
input[type=button], input[type=submit], input[type=reset]  {
  background-color: #56baed;
  border: none;
  color: white;
  padding: 10px 60px;
  text-align: center;
  text-decoration: none;
  display: inline-block;
  text-transform: uppercase;
  font-size: 13px;
  -webkit-box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  box-shadow: 0 10px 30px 0 rgba(95,186,233,0.4);
  -webkit-border-radius: 5px 5px 5px 5px;
  border-radius: 5px 5px 5px 5px;
  margin: 5px 20px 40px 20px;
 -webkit-transition: all 0.3s ease-in-out;
 -moz-transition: all 0.3s ease-in-out;
  -ms-transition: all 0.3s ease-in-out;
  -o-transition: all 0.3s ease-in-out;
 transition: all 0.3s ease-in-out;
}
 
input[type=button]:hover, input[type=submit]:hover, input[type=reset]:hover  {
 
    background-color: #39ace7;
 
}
 
input[type=button]:active, input[type=submit]:active, input[type=reset]:active  {
 
    -moz-transform: scale(0.95);
 
    -webkit-transform: scale(0.95);
 
    -o-transform: scale(0.95);
 
    -ms-transform: scale(0.95);
 
    transform: scale(0.95);
 
}
 
input[type=text] {
 
    background-color: #f6f6f6;
 
    border: none;
 
    color: #0d0d0d;
 
    padding: 8px 20px;
 
    text-align: center;
 
    text-decoration: none;
 
    display: inline-block;
 
    font-size: 16px;
 
    margin: 5px;
 
    width: 85%;
 
    border: 2px solid #f6f6f6;
 
    -webkit-transition: all 0.5s ease-in-out;
 
    -moz-transition: all 0.5s ease-in-out;
 
    -ms-transition: all 0.5s ease-in-out;
 
    -o-transition: all 0.5s ease-in-out;
 
    transition: all 0.5s ease-in-out;
 
    -webkit-border-radius: 5px 5px 5px 5px;
 
    border-radius: 5px 5px 5px 5px;
 
}
 
input[type=text]:focus {
 
    background-color: #fff;
 
    border-bottom: 2px solid #5fbae9;
 
}
 
input[type=text]:placeholder {
 
    color: #cccccc;
 
}
input[type=email] {
 
    background-color: #f6f6f6;
 
    border: none;
 
    color: #0d0d0d;
 
    padding: 8px 20px;
 
    text-align: center;
 
    text-decoration: none;
 
    display: inline-block;
 
    font-size: 16px;
 
    margin: 5px;
 
    width: 85%;
 
    border: 2px solid #f6f6f6;
 
    -webkit-transition: all 0.5s ease-in-out;
 
    -moz-transition: all 0.5s ease-in-out;
 
    -ms-transition: all 0.5s ease-in-out;
 
    -o-transition: all 0.5s ease-in-out;
 
    transition: all 0.5s ease-in-out;
 
    -webkit-border-radius: 5px 5px 5px 5px;
 
    border-radius: 5px 5px 5px 5px;
 
}
 
input[type=email]:focus {
 
    background-color: #fff;
 
    border-bottom: 2px solid #5fbae9;
 
}
 
input[type=email]:placeholder {
 
    color: #cccccc;
 
}
input[type=password] {
 
    background-color: #f6f6f6;
 
    border: none;
 
    color: #0d0d0d;
 
    padding: 8px 20px;
 
    text-align: center;
 
    text-decoration: none;
 
    display: inline-block;
 
    font-size: 16px;
 
    margin: 5px;
 
    width: 85%;
 
    border: 2px solid #f6f6f6;
 
    -webkit-transition: all 0.5s ease-in-out;
 
    -moz-transition: all 0.5s ease-in-out;
 
    -ms-transition: all 0.5s ease-in-out;
 
    -o-transition: all 0.5s ease-in-out;
 
    transition: all 0.5s ease-in-out;
 
    -webkit-border-radius: 5px 5px 5px 5px;
 
    border-radius: 5px 5px 5px 5px;
 
}
 
input[type=password]:focus {
 
    background-color: #fff;
 
    border-bottom: 2px solid #5fbae9;
 
}
 
input[type=password]:placeholder {
 
    color: #cccccc;
 
}
 
.fadeInDown {
 
    -webkit-animation-name: fadeInDown;
 
    animation-name: fadeInDown;
 
    -webkit-animation-duration: 1s;
 
    animation-duration: 1s;
 
    -webkit-animation-fill-mode: both;
 
    animation-fill-mode: both;
 
}
 
@-webkit-keyframes fadeInDown {
 
    0% {
 
        opacity: 0;
 
        -webkit-transform: translate3d(0, -100%, 0);
 
        transform: translate3d(0, -100%, 0);
 
    }
 
    100% {
 
        opacity: 1;
 
        -webkit-transform: none;
 
        transform: none;
 
    }
 
}
 
@keyframes fadeInDown {
 
    0% {
 
        opacity: 0;
 
        -webkit-transform: translate3d(0, -100%, 0);
 
        transform: translate3d(0, -100%, 0);
 
    }
 
    100% {
 
        opacity: 1;
 
        -webkit-transform: none;
 
        transform: none;
 
    }
 
}
 
@-webkit-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
  
 @-moz-keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
   
  @keyframes fadeIn { from { opacity:0; } to { opacity:1; } }
   
   .fadeIn {
 
    opacity:0;
 
    -webkit-animation:fadeIn ease-in 1;
 
    -moz-animation:fadeIn ease-in 1;
 
    animation:fadeIn ease-in 1;
 
    -webkit-animation-fill-mode:forwards;
 
    -moz-animation-fill-mode:forwards;
 
    animation-fill-mode:forwards;
 
    -webkit-animation-duration:1s;
 
    -moz-animation-duration:1s;
 
    animation-duration:1s;
 
   }
 
   .fadeIn.first {
 
    -webkit-animation-delay: 0.4s;
 
    -moz-animation-delay: 0.4s;
 
    animation-delay: 0.4s;
 
   }
 
   .fadeIn.second {
 
    -webkit-animation-delay: 0.6s;
 
    -moz-animation-delay: 0.6s;
 
    animation-delay: 0.6s;
 
   }
 
   .fadeIn.third {
 
    -webkit-animation-delay: 0.8s;
 
    -moz-animation-delay: 0.8s;
 
    animation-delay: 0.8s;
 
   }
 
   .fadeIn.fourth {
 
    -webkit-animation-delay: 1s;
 
    -moz-animation-delay: 1s;
 
    animation-delay: 1s;
 
   }
 
   .underlineHover:after {
 
    display: block;
 
    left: 0;
 
    bottom: -10px;
 
    width: 0;
 
    height: 2px;
 
    background-color: #56baed;
 
    content: "";
 
    transition: width 0.2s;
 
   }
 
   .underlineHover:hover {
 
    color: #0d0d0d;
 
   }
 
   .underlineHover:hover:after{
 
    width: 100%;
 
   }
 
   *:focus {
 
    outline: none;
 
   } 
 
   #icon {
    height:100px;
	weight:100px;
    border-radius:40%;
	border: 2px solid white;
 
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
<?php if (isset($_SESSION['message'])): ?>
	<div class="msg">
		<?php 
			echo $_SESSION['message']; 
			unset($_SESSION['message']);
		?>
	</div>
<?php endif ?>
<div class="wrapper fadeInDown">
 
    <div id="formContent">
 
        <!-- Tabs Titles -->
      
        <!-- Icon -->
 
        <div class="fadeIn first">
 
            <img src="img/logolog.png" id="icon" alt="User Icon" />
              <h1>SIGN UP</h1>
			  <P> </P>
        </div>
 
        <!-- Login Form -->
 
        <form action="dbsignup.inc.php" method="post">
 
            <input type="text" class="fadeIn second" id="uname" placeholder="Enter Username" name="uname" required>
			<input type="text" class="fadeIn second" id="phone" placeholder="Enter phone" name="phone" required>
			<input type="email" class="fadeIn second" id="email" placeholder="Enter Email" name="email" required>
			<input type="password" class="fadeIn second" id="pass" placeholder="Enter password" name="pass" required>
 
            
              
            <input type="submit" class="fadeIn fourth" name="Sign_up" value="SIGN UP">
 
        </form>
		    
 
        <!-- Remind Passowrd -->
 
        <div id="formFooter">
 
            <a class="underlineHover" href="login.php">Already have an Account?</a>
       </div>
 
    </div>

</div>
 
<script>

</script>
<script src="js/sweetalert2.min.js"></script>











