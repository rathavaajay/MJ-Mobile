<?php
  session_start();
    if ($_SESSION['user']) 
  {
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel</title>
<meta name="keywords" content="Red Blog Theme, Free CSS Templates" />
<meta name="description" content="Red Blog Theme - Free CSS Templates by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel='icon' href="images/isoft logo.jpg">
</head>
<body>

<div id="templatemo_top_wrapper">
	<div id="templatemo_top">
    
        <div id="templatemo_menu">
                    
            <ul>
                <li><a href="addproduct.php">Add Product</a></li>
                <li><a href= "displayproduct.php">View Product</a></li>
			 <li><a href= "viewprofile.php">View profile</a></li>
            
               <li><a href="logout.php">Logout</a></li>
            </ul>    	
        
        </div> 
       
        
  </div>
</div>

<br /><br /><br />
<center>
    <font color="red" size="20">
<?php echo $_SESSION['user'] 
   
?>

</font>


</center>



<br /><br /><br />
<br /><br /><br />

<div id="templatemo_footer">

 	</div>

</body>
</html>
<?php
      
    }
    else {
        echo "<script>window.location='index.php'</script>";
    }
?>