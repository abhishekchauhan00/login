<!DOCTYPE html>
<html lang="en" >
<head>
  <meta charset="UTF-8">
  <title>Sign Up</title>
  <link rel="stylesheet" href="./style.css">

</head>
<body>

<!DOCTYPE html>
<html>
<head>
<title>Sign Up</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
<!-- Custom Theme files -->
<link href="css/style.css" rel="stylesheet" type="text/css" media="all" />
<!-- //Custom Theme files -->
<!-- web font -->
<link href="//fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,700,700i" rel="stylesheet">
<!-- //web font -->
</head>
<body>
	<!-- main -->
	<div class="main-w3layouts wrapper">
		<h1>Sign Up<br><br>
		 <?php 
		 session_start();
if(isset($_SESSION['msg']) && $_SESSION['msg'] !=''){
  echo '<p style="color: black; font-size: 20px;">'.$_SESSION['msg'].'</p><br>';
  unset($_SESSION['msg']);
}?></h1>
		<div class="main-agileinfo">
			<div class="agileits-top">
				<form action="sign.php" method="post">
					<input class="text" type="text" name="name" placeholder=" Student Name" required=""><br>
					<input class="text" type="text" name="fname" placeholder="Father Name" required=""><br>
					<input class="text" type="text" name="class" placeholder="Class" required="">
					<input class="text email" type="email" name="email" placeholder="Email" data-validate = "Valid email is required: ex@abc.xyz" required="">
                    <input class="text" type="text" name="userid" placeholder="User Id" required=""><br>
					<input class="text" type="password" name="password" placeholder="Password" required="">
					<input class="text w3lpass" type="password" name="cpassword" placeholder="Confirm Password" required="">
					
					<input type="submit" name="signup" value="SIGNUP">
				</form>
				
			</div>
		</div>
		
		<!-- //copyright -->
		<ul class="colorlib-bubbles">
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
			<li></li>
		</ul>
	</div>
	<!-- //main -->
</body>
</html>
<!-- partial -->
  
</body>
</html>
