
<!DOCTYPE html>
<html>
<head>
	<title>MJ Mobile Shop</title>
	<link rel="stylesheet" href="css_pirobox/style1.css">
	<link href='//fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300,200' rel='stylesheet' type='text/css'>
	<link href='//fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'>
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<meta name="keywords" content="Dark Sign In Form Widget Responsive, Login Form Web Template, Flat Pricing Tables, Flat Drop-Downs, Sign-Up Web Templates, Flat Web Templates, Login Sign-up Responsive Web Template, Smartphone Compatible Web Template, Free Web Designs for Nokia, Samsung, LG, Sony Ericsson, Motorola Web Design" />
		<script type="application/x-javascript"> addEventListener("load", function() { setTimeout(hideURLbar, 0); }, false); function hideURLbar(){ window.scrollTo(0,1); } </script>
	<!-- //For-Mobile-Apps-and-Meta-Tags -->

</head>

<body>
    <h1>Admin Panel</h1>
    <div class="container">
        <h2>Sign In</h2>
		<form name="f" method="post">
			<?php
				session_start();
				 if(isset($_POST['ok']))
 				{
    
   					include('connection.php');
   						$us=$_POST['uname'];
						$ps=$_POST['pass'];
						$q="select * from admin_details where username='$us' and password='$ps'";
    					$r = mysqli_query($con,$q);
    					$count = mysqli_num_rows($r);
    				if($count==1)
   					{
   						$_SESSION['user'] = $_POST['uname'];
     
							if(!empty($_POST["remember"])) 
							{

								setcookie ("login",$_POST["uname"],time()+ (10 * 365 * 24 * 60 * 60));

								setcookie ("password",$_POST["pass"],time()+ (10 * 365 * 24 * 60 * 60));
							}
							else 
							{

								if(isset($_COOKIE["login"])) 
								{
									setcookie ("login","");
								}

								if(isset($_COOKIE["password"])) 
								{
									setcookie ("password","");
								}
							}
							echo "<script>alert('Login Succesfull')</script>";
							echo "<script>window.location='home.php'</script>"; 
						
   					
   					}
    				else
    				{
     					echo "<script>alert('Invalid username or password')</script>";
   					}
  				}
			?>
			<input type="text" name="uname" class="name" placeholder="Enter Username" value="<?php if(isset($_COOKIE["login"])) { echo $_COOKIE["login"]; } ?>""  required>
			<input type="password" name="pass" class="password" placeholder="Enter Password" value="<?php if(isset($_COOKIE["password"])) { echo $_COOKIE["password"]; } ?>" required>
			<br>
			<input type="checkbox" name="remember" id="remember" <?php if(isset($_COOKIE["login"])) { ?> checked <?php } ?> ><font color="white">Remember me</font>
			<div class="clear"></div>
			<input type="submit" value="SIGN IN" name="ok">
		</form>
	
	</div>
	
</body>
</html>

