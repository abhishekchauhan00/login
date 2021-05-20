<!DOCTYPE html>
<html>
<head>
	<title>Login RKI </title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
	<link href="https://fonts.googleapis.com/css?family=Poppins:600&display=swap" rel="stylesheet">
	<script src="https://kit.fontawesome.com/a81368914c.js"></script>
	<meta name="viewport" content="width=device-width, initial-scale=1">
</head>
<body>
	<img class="wave" src="img/wave.png">
	<div class="container">
		<div class="img">
			<img src="img/bg.svg">
		</div>
		<div class="login-content">
			<form action="login.php" method="post">
				<img src="img/logo.png">
				<h1 class="title">WELCOME TO<br>R.K. INTERNATIONAL SCHOOL</h1>
                 <?php 
		 session_start();
if(isset($_SESSION['msg']) && $_SESSION['msg'] !=''){
  echo '<p style="color: black; font-size: 20px;">'.$_SESSION['msg'].'</p><br>';
  unset($_SESSION['msg']);
}?>
           		<div class="input-div one">
           		   <div class="i">
           		   		<i class="fas fa-user"></i>
           		   </div>
           		   <div class="div">
           		   		<h5>User Id</h5>
           		   		<input type="text" name="userid" class="input">
           		   </div>
           		</div>
           		<div class="input-div pass">
           		   <div class="i"> 
           		    	<i class="fas fa-lock"></i>
           		   </div>
           		   <div class="div">
           		    	<h5>Password</h5>
           		    	<input type="password" name="password" class="input">
            	   </div>
            	</div>
            	
            	<input type="submit" name="login" class="btn" value="Login">

            </form>
        </div>
    </div>
    <script type="text/javascript" src="js/main.js"></script>
</body>
</html>
