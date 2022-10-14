
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
   <body class="main-layout">

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
                              <li class="nav-item d_none login_btn">
                                 <a class="nav-link" href="logout.php">logout</a>
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
      <!-- banner -->
      <section class="banner_main">
         <div id="banner1" class="carousel slide" data-ride="carousel">
            <ol class="carousel-indicators">
               <li data-target="#banner1" data-slide-to="0" class="active"></li>
               <li data-target="#banner1" data-slide-to="1"></li>
               <li data-target="#banner1" data-slide-to="2"></li>
            </ol>
            <div class="carousel-inner">
               <div class="carousel-item active">
                  <div class="container">
                     <div class="carousel-caption">
                        <div class="text-bg">
                           <div class="row">
                           <h1><span class="blu">WELCOME </h1>
                              <h1><br></span>TO OUR MJ MOBILE SHOP</h1>

                              </div>         
            <form name="f1" method="post" >
         <?php
         $con=mysqli_connect("localhost","root","","stockmanagementsystem");
         $query="select * from product";
         $r=mysqli_query($con,$query);
         while($row = mysqli_fetch_array($r))
         {



   ?>
   <center>
            <?php echo "<img src='".$row['photo']."'/>"; ?>
            <table style="width: 50%;" background color="pink" border="3" >

            <tr>
               <td> <font size="+1" color="black">Product Name:-</font></td>
                  <td><font size="+1" color="black"><?php echo $row['pro_name'];?></font></td>
            </tr>
            <tr>
                  <td> <font size="+1" color="black">Product Price:-</font></td>
                  <td><font size="+1" color="black"><?php echo $row['pro_price'];?></font></td>
            </tr>
            <tr>
                  <td> <font size="+1" color="black">Product Company:-</font></td>
                  <td><font size="+1" color="black"><?php echo $row['Company'];?></font></td>
            </tr>
            </table>
</form>
                           <a class="read_more" href="Phone1.php">More Details</a>
                        </div>
                     </div>
                  </div>
               </div>
            </center>
            <?php
               }

            ?>
           <!-- <a class="carousel-control-prev" href="#banner1" role="button" data-slide="prev">
            <i class="fa fa-arrow-left" aria-hidden="true"></i>
            </a>
            <a class="carousel-control-next" href="#banner1" role="button" data-slide="next">
            <i class="fa fa-arrow-right" aria-hidden="true"></i>
            </a>-->
         </div>
      </section>
      <!-- end banner -->
      <!-- about section -->
     <!-- <div class="about">
         <div class="container">
            <div class="row d_flex">
               <div class="col-md-5">
                  <div class="about_img">
                     <figure><img src="images/img3.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7">
                  <div class="titlepage">
                     <h2>About Our Shop</h2>
                     <p></p>
                  </div>
                  <a class="read_more" href="#">Read More</a>
               </div>
            </div>
         </div>
      </div>-->
      <!-- about section -->
      <!-- Our  Glasses section -->
     		
      <div class="glasses">
         <div class="container">
            <div class="row">
               <div class="col-md-10 offset-md-1">
                  <div class="titlepage">
                     <h2>Our Collections</h2>
                     <p>
                     </p>
                  </div>
               </div>
            </div>
         </div>
         <div class="container-fluid">
            <div class="row">
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                    <a href="Phones.php"> <figure><img src="images/img11.png" alt="#"/></figure></a>
                     <p>Apple iPhone 11 Mini (64GB, Red)</p>
                    <h3><span class="blu"></span>35,900.00 <h7>49,900.00</h7></h3>
                    <a class="read_more" href="Phone1.php">More Details</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <a href="Phones.php"> <figure><img src="images/img7.png" alt="#"/></figure></a>
                     
                     <p>Apple iPhone 11 Mini (64GB, Black)</p>
                     <h3><span class="blu"></span>35,000.00 <h7>49,900.00</h7></h3>
                     <a class="read_more" href="Phone2.php">More Details</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                    <a href="Phones.php">  <figure><img src="images/img8.png" alt="#"/></figure></a>
                     
                     <p>Apple iPhone 11 Mini (64GB, Blue)</p>
                     <h3><span class="blu"></span>35,900.00 <h7>49,900.00</h7></h3>
                     <a class="read_more" href="Phone1.php">More Details</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                      <a href="Phones.php"><figure><img src="images/img15.png" alt="#"/></figure></a>
                    
                     <p>Apple iPhone 11 Mini(64GB,White)</p>
                      <h3><span class="blu"></span>35,500.00 <h7>49,900.00</h7></h3>
                      <a class="read_more" href="Phone1.php">More Details</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <a href="Phones.php"> <figure><img src="images/img16.png" alt="#"/></figure></a>
                     <p> Apple iPhone 12 ( 128GB, Blue )</p>
                     <h3><span class="blu"></span>45,000.00 <h7>45,000.00</h7></h3>
                     <a class="read_more" href="Phone1.php">More Details</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                      <a href="Phones.php"><figure><img src="images/img17.png" alt="#"/></figure></a>
                     <p>Apple iPhone 12 (128GB,Midnight,Black)</p>
                     <h3><span class="blu"></span>45,000.00 <h7>45,800.00</h7></h3>
                     <a class="read_more" href="Phone1.php">More Details</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <a href="Phones.php"> <figure><img src="images/img18.png" alt="#"/></figure></a>
                     <p>Apple iPhone 12 (128GB, Starlight White)</p>
                   <h3><span class="blu"></span>45,000.00 <h7>45,900.00</h7></h3>
                   <a class="read_more" href="Phone3.php">More Details</a>
                  </div>
               </div>
               <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                    <a href="Phones.php">  <figure><img src="images/img19.png" alt="#"/></figure></a>
                     <p>Apple iPhone 12 (128GB, Red)</p>
                      <h3><span class="blu"></span>45,000.00 <h7>45,900.00</h7></h3>
                      <a class="read_more" href="Phone1.php">More Details</a>
                  </div>
               </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <a href="Phones.php"> <figure><img src="images/img20.png" alt="#"/></figure></a>
                     <p>Apple iPhone 13 (128GB, Midnight)</p>
                      <h3><span class="blu"></span>65,000.00 <h7>67,900.00</h7></h3>
                      <a class="read_more" href="Phone1.php">More Details</a>
                  </div>
               </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <a href="Phones.php"> <figure><img src="images/img21.png" alt="#"/></figure></a>
                     <p>Apple iPhone 13 (128GB, Starlight)</p>
                      <h3><span class="blu"></span>65,000.00 <h7>67,900.00</h7></h3>
                      <a class="read_more" href="Phone1.php">More Details</a>
                  </div>
               </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                     <a href="Phones.php"> <figure><img src="images/img22.png" alt="#"/></figure></a>
                     <p>Apple iPhone 13 (128GB, Purple)</p>
                      <h3><span class="blu"></span>65,00.00 <h7>67,900.00</h7></h3>
                      <a class="read_more" href="Phone4.php">More Details</a>
                  </div>
               </div>
                <div class="col-xl-3 col-lg-3 col-md-6 col-sm-6">
                  <div class="glasses_box">
                    <a href="Phones.php">  <figure><img src="images/img23.png" alt="#"/></figure></a>
                     <p>Apple iPhone 13 (128GB, Red)</p>
                      <h3><span class="blu"></span>65,000.00 <h7>67,900.00</h7></h3>
                      <a class="read_more" href="Phone1.php">More Details</a>
                  </div>
               </div>
               <div class="col-md-12">
                  <a class="read_more" href="Phones.php">MORE</a>
               </div>
            </div>
         </div>
      </div>
      <!-- end Our  Glasses section -->
      <!-- Our shop section -->
      <!--<div id="about" class="shop">
         <div class="container-fluid">
            <div class="row">
               <div class="col-md-5">
                  <div  class="shop_img">
                     <figure><img src="images/img24.png" alt="#"/></figure>
                  </div>
               </div>
               <div class="col-md-7 padding_right0">
                  <div class="max_width">
                     <div class="titlepage">
                        <h2>Best iPhones At Our shop</h2>
                        <p></p>
                        <a class="read_more" href="Phones.php">Shop Now</a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>-->
      <!-- end Our shop section -->
      <!-- clients section -->
      <div class="clients">
         <div class="container">
            <div class="row">
               <div class="col-md-12">
                  <div class="titlepage">
                     <h2>Founders</h2>
                     <p></p>
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
                                       <div class="clients_box">
                                          <figure><img src="images/img4.png" alt="#"/></figure>
                                          <h3>Steven Paul Jobs</h3>
                                          <p>Steven Paul Jobs (February 24, 1955 – October 5, 2011) was an American entrepreneur, industrial designer, business magnate, media proprietor, and investor. He was the co-founder, chairman, and CEO of Apple; the chairman and majority shareholder of Pixar; a member of The Walt Disney Company's board of directors following its acquisition of Pixar; and the founder, chairman, and CEO of NeXT. He is widely recognized as a pioneer of the personal computer revolution of the 1970s and 1980s, along with his early business partner and fellow Apple co-founder Steve Wozniak.</p>
                                       </div>
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
                                       <div class="clients_box">
                                          <figure><img src="images/img5.png" alt="#"/></figure>
                                          <h3>Stephen Gary Wozniak</h3>
                                          <p>Stephen Gary Wozniak (born August 11, 1950), also known by his nickname "Woz", is an American electronics engineer, computer programmer, philanthropist, inventor, and technology entrepreneur. In 1976, with business partner Steve Jobs, he co-founded Apple Inc., which later became the world's largest technology company by revenue and the largest company in the world by market capitalization. Through his work at Apple in the 1970s and 1980s, he is widely recognized as one of the most prominent pioneers of the Information Age.</p>
                                       </div>
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
                                       <div class="clients_box">
                                          <figure><img src="images/img6.png" alt="#"/></figure>
                                          <h3>Ronald Gerald Wayne</h3>
                                          <p>Ronald Gerald Wayne (born May 17, 1934) is a retired American electronics industry businessman. He co-founded Apple Computer Company (now Apple Inc.) as a partnership with Steve Wozniak and Steve Jobs on April 1, 1976, providing administrative oversight and documentation for the new venture. Twelve days later, he sold his 10% share of the new company back to Jobs and Wozniak for US$800 (equivalent to $3,810 in 2021), and one year later accepted a final US$1,500 (equivalent to $7,143 in 2021) to forfeit any potential future claims against the newly incorporated Apple.</p>
                                       </div>
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
      <!-- contact section -->
      <div id="contact" class="contact">
         <div class="container">
            <div class="row">
               <div class="col-md-6">
                  <form id="request" class="main_form">
                     <div class="row">
                        <div class="col-md-12 ">
                           <h3>Contact Us</h3>
                        </div>
                        <div class="col-md-12 ">
                           <input class="contactus" placeholder="Name" type="type" name="Name"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Phone Number" type="type" name="Phone Number"> 
                        </div>
                        <div class="col-md-12">
                           <input class="contactus" placeholder="Email" type="type" name="Email">                          
                        </div>
                        <div class="col-md-12">
                           <input class="contactusmess" placeholder="Message" type="type" Message="Name">
                        </div>
                        <div class="col-md-12">
                           <button class="send_btn">Send</button>
                        </div>
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
      <script>
         // This example adds a marker to indicate the position of Bondi Beach in Sydney,
         // Australia.
         function initMap() {
           var map = new google.maps.Map(document.getElementById('map'), {
             zoom: 11,
             center: {lat: 40.645037, lng: -73.880224},
             });
         
         var image = 'images/maps-and-flags.png';
         var beachMarker = new google.maps.Marker({
             position: {lat: 40.645037, lng: -73.880224},
             map: map,
             icon: image
           });
         }
      </script>
      <!-- google map js -->
      <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyA8eaHt9Dh5H57Zh0xVTqxVdBFCvFMqFjQ&callback=initMap"></script>
      <!-- end google map js --> 
   </body>
</html>


