<?php

// REGISTER USER


session_start(); 
if(isset($_POST['name']) && isset($_POST['pass'])) 
  if($_POST['name']=="Ahmed" && $_POST['pass']=="1234")  
  {
    echo 'Bonjour ';
    echo  $_POST['name'] ; 
    $_SESSION['acces']="oui";  
    $_SESSION['nom']=$_POST['name'];  
    header("Location:Espace_Admin.php"); 
  }

?>


<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Login</title>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/meyer-reset/2.0/reset.min.css">
<link rel='stylesheet' href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,500,700,900|RobotoDraft:400,100,300,500,700,900'>
<link rel='stylesheet' href='https://maxcdn.bootstrapcdn.com/font-awesome/4.3.0/css/font-awesome.min.css'><link rel="stylesheet" href="css/style.css">

</head>
<body>
<!-- partial:index.partial.html -->
<!-- Form Mixin-->
<!-- Input Mixin-->
<!-- Button Mixin-->
<!-- Pen Title-->
<div class="pen-title">
  <span>
    
    
  </span>
</div>
<!-- Form Module-->
<div class="module form-module">
  <div class="toggle"><i class="fa fa-times fa-pencil"></i>
    <div class="tooltip">To Register</div>
  </div>
   
  <div class="form">
    <h2>Login to your account</h2>
    <!--<form action="" methode="post">-->
    <!--  <input name ="name" type="text" placeholder="name"/>-->
    <!--  <input name="pass" type="password" placeholder="pass"/>-->
    <!--  -->
    <!--</form>-->
    <form action = "" method = "post">
                  <input name ="name" type="text" placeholder="name"/>
                 <input name="pass" type="password" placeholder="pass"/>
                  <button type="submit"  name="log_in">Login</button>
                  <!--<input name="log_in" type = "submit" value = " Submit "/><br />-->
               </form>
  </div>
  <form method="post" action="">
  <div class="form">
    <h2>Create an account</h2>
  
  	
  
  	  <input  type="text" name="username" placeholder="Username" value="" required>
  	<input type="password" name="password" placeholder="Password"required>
  	  
  	  <input type="email" name="email" placeholder="Email" value="" required>
  
  
  	  
  
  	<div class="input-group">
  	  <button type="submit" class="btn" name="reg_user">Register</button>
  	</div>
  	<!--<p>-->
  	<!--	Already a member? <a href="login.php">Sign in</a>-->
  	<!--</p>-->
  </form>
  </div>
  <div class="cta"></div>
</div>
<!-- partial -->
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
<script src='https://codepen.io/andytran/pen/vLmRVp.js'></script><script  src="JS/script.js"></script>

</body>
</html>





<!--<!DOCTYPE html>-->
<!--<html>-->
<!--<head>-->
<!--  <title>Registration system PHP and MySQL</title>-->
<!--  <link rel="stylesheet" type="text/css" href="style.css">-->
<!--</head>-->
<!--<body>-->
<!--  <div >-->
<!--  	<h2>Register</h2>-->
<!--  </div>-->
	
<!--  <form method="post" action="index.php">-->
  	
<!--  	<div class="input-group">-->
<!--  	  <label>Username</label>-->
<!--  	  <input type="text" name="username" value="">-->
<!--  	</div>-->
<!--  	<div class="input-group">-->
<!--  	  <label>Email</label>-->
<!--  	  <input type="email" name="email" value="">-->
<!--  	</div>-->
<!--  	<div class="input-group">-->
<!--  	  <label>Password</label>-->
<!--  	  <input type="password" name="password">-->
<!--  	</div>-->
  	
<!--  	<div class="input-group">-->
<!--  	  <button type="submit" class="btn" name="reg_user">Register</button>-->
<!--  	</div>-->
<!--  	<p>-->
<!--  		Already a member? <a href="login.php">Sign in</a>-->
<!--  	</p>-->
<!--  </form>-->
<!--</body>-->
<!--</html>-->

