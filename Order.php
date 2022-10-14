<?php
session_start();
if($_SESSION['users'])
{
   error_reporting(0);
?>
<!DOCTYPE html>
<html lang="en">
   <head>
      <!-- basic -->
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <!-- mobile metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <meta name="viewport" content="initial-scale=1, maximum-scale=1">
      <!-- site metas -->
      <title>MJ Mobile Shop</title>
      <link rel="icon" href="images/img12.png" type="image/gif/png">

      <meta name="keywords" content="">
      <meta name="description" content="">
      <meta name="author" content="">
      <!-- bootstrap css -->
      <link rel="stylesheet" href="css/bootstrap.min.css">
      <!-- style css -->
      <link rel="stylesheet" href="css/style.css">
      <!-- Responsive-->
      <link rel="stylesheet" href="css/responsive.css">
      <!-- fevicon -->
      <link rel="icon" href="images/fevicon.png" type="image/gif" />
      <!-- Scrollbar Custom CSS -->
      <link rel="stylesheet" href="css/jquery.mCustomScrollbar.min.css">
      <!-- Tweaks for older IEs-->
      <link rel="stylesheet" href="https://netdna.bootstrapcdn.com/font-awesome/4.0.3/css/font-awesome.css">
      <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
      <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->
   </head>
   <!-- body -->
   <body class="main-layout position_head" style="color: gray;background-color: papayawhip;">
      <!-- loader  -->
     
      <!-- end loader -->
      <!-- header -->
      <header>
         <!-- header inner -->
         <div class="header">
            <div class="container-fluid">
               <div class="row">
                  <div class="col-xl-3 col-lg-3 col-md-3 col-sm-3 col logo_section">
                     <div class="full">
                        <div class="center-desk">
                           <div class="logo">
                              <a href="index.php"><img src="images/img12.png" alt="Smiley face" width="100" height="100" /></a>
                           </div>
                        </div>
                     </div>
                  </div>
                  <div class="col-xl-9 col-lg-9 col-md-9 col-sm-9">
                     <nav class="navigation navbar navbar-expand-md navbar-dark ">
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarsExample04" aria-controls="navbarsExample04" aria-expanded="false" aria-label="Toggle navigation">
                        <span class="navbar-toggler-icon"></span>
                        </button>
                        <div class="collapse navbar-collapse" id="navbarsExample04">
                           <ul class="navbar-nav mr-auto">
                              <li class="nav-item ">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                             
                              <li class="nav-item">
                                 <a class="nav-link" href="order.php">Confirm Order</a>
                              </li>
                              <li class="nav-item active">
                                 <a class="nav-link" href="contact.php">Feedback</a>
                              </li>
                              <li class="nav-item d_none login_btn">
                                 <a class="nav-link" href="login.php">Login</a>
                              </li>
                              <li class="nav-item d_none">
                                 <a class="nav-link" href="signin.php">SIGNIN</a>
                              </li>
                              <li class="nav-item d_none sea_icon">
                                 <a class="nav-link" href="#"><i class="fa fa-shopping-bag" aria-hidden="true"></i><i class="fa fa-search" aria-hidden="true"></i></a>
                              </li>
                           </ul>
                        </div>
                     </nav>
                  </div>
               </div>
            </div>
         </div>
      </header>
      <!-- end header inner -->
      <!-- end header -->
    
      <!-- end contact section -->
      <center>
      <div class="col-md-12 ">
                           <h3>Your Order : <?php echo $_SESSION['users'];?></h3>
                        </div>
   <center>
   <form name="f1" method="post" style="background-color: pink;">
<?php
	$con=mysqli_connect("localhost","root","","stockmanagementsystem");
   $q="select * from confirm_order";
	$res = mysqli_query($con,$q);
   $row = mysqli_fetch_array($res)


?>	
<table align="center" border="1" cellpadding="10" cellspacing="10">
            <tr>
               <td align="left" valign="top" colspan="2">
                  <center>
                  <font size="+1" color="black">
                  </font>
                  
               </center>
               </td>
            </tr>
            <tr>
                  <td><font size="+1" color="black">Iphone Name</font></td>
                  <td><font size="+1" color="black"><?php echo $row['Iphone_name'];?></font></td>
            </tr>
            <tr>
                  <td><font size="+1" color="black">Price</font></td>
                  <td><font size="+1" color="black"><?php echo $row['Price'];?></font></td>
            </tr>
            <tr>
                  <td><font size="+1" color="black">Email</font></td>
                  <td><font size="+1" color="black"><?php echo $row['Email'];?></font></td>
            </tr>
            <tr>
                  <td><font size="+1" color="black">Phone Number</font></td>
                  <td><font size="+1" color="black"><?php echo $row['Phone_number'];?></font></td>
            </tr>
            <tr>
                  <td><font size="+1" color="black">Address</font></td>
                  <td><font size="+1" color="black"><?php echo $row['Address'];?></font></td>
            </tr>
            <tr>
                  <td><font size="+1" color="black">City</font></td>
                  <td><font size="+1" color="black"><?php echo $row['City'];?></font></td>
            </tr>
         
          <tr>
                  <td><font size="+1" color="black">Pincode</font></td>
                  <td><font size="+1" color="black"><?php echo $row['Pincode'];?></font></td>
            </tr>
   </table>
   <center>
   <form name="f1" method="post" >
<?php
   $con=mysqli_connect("localhost","root","","stockmanagementsystem");
   $q="select * from product";
   $res = mysqli_query($con,$q);
   $row = mysqli_fetch_array($res)
?> 
<table align="center" border="1" cellpadding="10" cellspacing="10">
            <tr>
               <td align="left" valign="top" colspan="2">
                  <center>
                  <font size="+1" color="black">
                  </font>
                  
               </center>
               </td>
            </tr>
             <tr>
                  <td><font size="+1" color="black">Product status</font></td>
                  <td><font size="+1" color="black"><?php echo $row['Product_status'];?></font></td>
            </tr>
</form>
</center>
      <!--  footer -->
     
      <!-- end footer -->
      <!-- Javascript files-->
      <script src="js/jquery.min.js"></script>
      <script src="js/popper.min.js"></script>
      <script src="js/bootstrap.bundle.min.js"></script>
      <script src="js/jquery-3.0.0.min.js"></script>
      <!-- sidebar -->
      <script src="js/jquery.mCustomScrollbar.concat.min.js"></script>
      <script src="js/custom.js"></script>
   </body>
</html>
<?php
         
    }
    else {
        echo "<script>window.location='index.php'</script>";
    }
?>