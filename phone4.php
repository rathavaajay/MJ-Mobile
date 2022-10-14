<?php
	session_start();
    if ($_SESSION['users']) 
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
   <body class="main-layout position_head">
      <!-- loader  -->
      <div class="loader_bg">
         <div class="loader"><img src="images/loading.gif" alt="#" /></div>
      </div>
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
                              <li class="nav-item active">
                                 <a class="nav-link" href="index.php">Home</a>
                              </li>
                              <li class="nav-item">
                                 <a class="nav-link" href="about.php">About</a>
                              </li>
                            
                              <li class="nav-item">
                                 <a class="nav-link" href="order.php">Confirm Order</a>
                              </li>
                              <li class="nav-item">
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
      <!-- end header inner -->
      <!-- end header -->
      <!-- clients section -->
      <div class="clients">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  </div>
               </div>
            </div>
            <div class="row">
               <div class="col-md-12">
                  <div id="myCarousel" class="carousel slide clients_Carousel " data-ride="carousel">
                     <ol class="carousel-indicators">
                        <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                        <li data-target="#myCarousel" data-slide-to="1"></li>
                        <li data-target="#myCarousel" data-slide-to="2"></li>
                     </ol>
                     <div class="carousel-inner">
                        <div class="carousel-item active">
                           <div class="container">
                              <div class="carousel-caption ">
                                 <div class="row">
                                    <div class="col-md-12">
                                          <figure><img src="images/img22.png" alt="#" width="500px"/></figure>
                                          
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                          <figure><img src="images/img22.png" alt="#"width="500px"/></figure>
                           
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        <div class="carousel-item">
                           <div class="container">
                              <div class="carousel-caption">
                                 <div class="row">
                                    <div class="col-md-12">
                                          <figure><img src="images/img22.png" alt="#"width="500px"/></figure>
                                    
                                    </div>
                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
                     <i class='fa fa-angle-left'></i>
                     </a>
                     <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
                     <i class='fa fa-angle-right'></i>
                     </a>
                  </div>
               </div>
            </div>
         </div>
      </div>
      <!-- end clients section -->
      <!-- Our  Glasses section -->
      <div class="glasses">
         <div class="container">
         <div class="row">

            </div>
         </div>
         <div class="container-fluid">
         <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                 <div class="glasses_box">
                    <a href="Phones.php"> <figure><img src="images/img22.png" alt="#"/></figure></a>
                     <p>Apple iPhone 13 (128GB, Purple)</p>
                    <h3><span class="blu"></span>65,000.00 <h7>65,000.00</h7></h3>
                  </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                 <div class="glasses_box">
                    <a href="Phones.php"> <figure></figure></a>
                     <p>Model. Which is best for you?</p>
                     <div class="col-md-12">
               <a class="read_more" href="#">iPhone 13
  15.4 cm (6.1-inch) display1
From ₹9404.00/mo.Per MonthFootnote**
or ₹79900.00Footnote‡</a>
               </div>
               <div class="col-md-12">
               <a class="read_more" href="#">iPhone 13 Plus
17.0 cm (6.7-inch) display1
From ₹10581.00/mo.Per MonthFootnote**
or ₹89900.00Footnote‡</a>
               </div>
                    <h3><span class="blu"></span><h7> </h7></h3>
                  </div>
            </div>
            <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                 <div class="glasses_box">
                    <a href="Phones.php"> <figure></figure></a>
                     <p>Storage. How much space do you need?</p>
                    <h3><span class="blu"></span><h7></h7></h3>
                    <div class="col-md-12">
               <a class="read_more" href="#">128GBFootnote²
From ₹9404.00/mo.Per MonthFootnote**
or MRP ₹79900.00Footnote‡
(Incl. of all taxes)</a>
               </div>
               <div class="col-md-12">
               <a class="read_more" href="#">256GBFootnote²
From ₹10581.00/mo.Per MonthFootnote**
or MRP ₹89900.00Footnote‡
(Incl. of all taxes)</a>
               </div>
               <div class="col-md-12">
               <a class="read_more" href="#">512GBFootnote²
From ₹12934.00/mo.Per MonthFootnote**
or MRP ₹109900.00Footnote‡
(Incl. of all taxes)</a>
               </div>
                  </div>
            </div>
           
            </div>
         </div>
      </div>


      
      <?php
   $con=mysqli_connect("localhost","root","","stockmanagementsystem");
   $q="select * from product";
   $res = mysqli_query($con,$q);
   $row = mysqli_fetch_array($res)
?> 
      <!--contant section -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form" method="post">
                     <?php
                        if (isset($_POST["ok"])) {
                           $con=mysqli_connect("localhost","root","","stockmanagementsystem");
                           $q="insert into confirm_order(Id,Iphone_name,Price,Email,Phone_number,Address,City,Pincode)values
                           ('NULL','".$_POST['Iphone_name']."','".$_POST['Price']."','".$_POST['Email']."',
                           '".$_POST['Phone_number']."','".$_POST['Address']."','".$_POST['City']."',
                           '".$_POST['Pincode']."')";
                               $result=mysqli_query($con,$q);
                               if($result)
                           {
                               echo"<script>alert('Your order is Confirm')</script>";
                               echo "<script>window.location='Order.php'</script>";
                           }
                           else {
                               echo"<script>alert('something going wrong.....')</script>";
                           }
                    }
                            ?>
                     <div class="row">
                        <div class="col-md-12 ">
                           <h3>Order Now</h3>
                        </div>
                        <div class="col-md-12 ">
                          Product Name:- <input class="contactus" type="type" name="Iphone_name"value="Apple iPhone 13 (128GB, Purple)"> 
                        </div>
                        <div class="col-md-12">
                           Product Price:-<input class="contactus" type="type" name="Price" value="65,000"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactusmess" placeholder="Phone Number" type="type" Message="Name" name="Phone_number">
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Address" type="type" name="Address">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="City" type="type" name="City">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Pincode" type="type" name="Pincode">                          
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn" type="submit" name="ok">Comfirm</button>
                        </div>
                       <center> <a class="read_more" href="index.php">Back To Home</a></center>
                     </div>
                  </form>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="map_section">
               <div id="map">
               </div>
            </div>
         </div>
      </div>
      </div>
      <!-- end contact section -->
      
      
      <!-- end Our  Glasses section -->
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
        echo "<script>window.location='login.php'</script>";
    }
?>

