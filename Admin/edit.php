<?php
	session_start();
    if ($_SESSION['user']) 
	{
		error_reporting(0);
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin Panel
</title>
<meta name="keywords" content="Red Blog Theme, Free CSS Templates" />
<meta name="description" content="Red Blog Theme - Free CSS Templates by templatemo.com" />
<link href="templatemo_style.css" rel="stylesheet" type="text/css" />
<link rel='icon' href="images/favicon.png">
</head>
<body>

<div id="templatemo_top_wrapper">
	<div id="templatemo_top">
    
        <div id="templatemo_menu">
           <ul>
                <li><a href="addproduct.php">Add Record</a></li>
                <li><a href= "displayproduct.php">View Product</a></li>
               <li><a href= "changepassword.php">Change Password</a></li>
               <li><a href="logout.php">Logout</a></li>
            </ul>     	
        
        </div> <!-- end of templatemo_menu -->
       
        
  </div>
</div>


<br /><br /><br />

<center>
<form name="f1" enctype="multipart/form-data" method="post" >
<?php
$id=$_REQUEST['id'];
  if(isset($_POST["ok"]))
			   {
							$con=mysqli_connect("localhost","root","","stockmanagementsystem");
					if($con)
					{
						echo "<script>alert('Connected')</script>";
					}
						$a=$_FILES["photo"]["name"];
						if (file_exists("Admin/upload/".$_FILES["photo"]["name"]))
						{	
							$r = md5(time());
							$r=rand(0,999999999);
							$p=$r;
							$p="Admin/uploads/".$r.$_FILES["photo"]["name"];
								move_uploaded_file($_FILES['photo']['tmp_name'],$p);
						}
						else
						{
						$p="Admin/uploads/".$_FILES["photo"]["name"];		
						move_uploaded_file($_FILES['photo']['tmp_name'],$p);
						}
						$q="update Product set pro_name='".$_POST['productname']."',pro_price='".$_POST['price']."',Company='".$_POST['company']."',Quantity='".$_POST['Quantity']."',Product_status='".$_POST['Product_status']."',photo='$p' where id='$id'";
					$result = mysqli_query($con,$q);
						if($result)
					{
					
						echo "<script>alert('Product Added')</script>";
					}
					else{
						echo "<script>alert('Something Went Wrong')</script>";
					}
			   }
	?>

               <?php
         $con=mysqli_connect("localhost","root","","stockmanagementsystem");
         $query="select * from product";
         $r=mysqli_query($con,$query);
         while($row = mysqli_fetch_array($r))
         {



   ?>
       
<table align="center" border="1" cellpadding="10" cellspacing="10">
		
			<tr>
				<td align="left" valign="top">
					<font size="+1" color="black">Product name:-</font>
				</td>
				<td align="center" valign="top">
					<input type="text" name="productname" placeholder="Product name" size="50" value="<?php echo $row['pro_name'];?>" />
				</td>
			          
            	</td>
	  </tr>
	  <tr>
				<td align="left" valign="top">
					<font size="+1" color="black">Price</font>
				</td>
				<td align="center" valign="top">
				<input type="text" name="price" placeholder="Price"  size="50" value="<?php echo $row['pro_price'];?>" />
				</td>
			
            
            	</td>
	  </tr>
	  <tr>
				<td align="left" valign="top">
					<font size="+1" color="black">Company:-</font>
				</td>
				<td align="center" valign="top">
             	<input type="text" name="company" placeholder="company"  size="50" value="<?php echo $row['Company'];?>" />
				</td>
            
            	</td>
	  </tr>
	  <tr>
				<td align="left" valign="top">
					<font size="+1" color="black">Quantity:-</font>
				</td>
				<td align="center" valign="top">
						<input type="text" name="Quantity" placeholder="Quantity"  size="50" value="<?php echo $row['Quantity'];?>" />
				</td>
            
            	</td>
	  </tr>

	  <tr>
				<td align="left" valign="top">
					<font size="+1" color="black">Product status:-</font>
				</td>
				<td align="center" valign="top">
					<select name="Product_status" value="<?php echo $row['Product_status'];?>">
						<option>Order placed</option>
						<option>Order shipped</option>
						<option>Order delivered</option>
					</select>
				</td>
			          
            	</td>
	  </tr>
	  <tr>
				<td align="left" valign="top">
					<font size="+1" color="black">Photo:-</font>
				</td>
				<td align="center" valign="top">
						<input type="file" name="photo" placeholder="photo"value="<?php echo $row['photo'];?>" />
				</td>
            
            	</td>
	  </tr>
	  <tr>
				<td align="center" valign="top">
				<input type="reset" name="rst" value="RESET">
				</td>
				<td align="center" valign="top">
				<input type="submit" name="ok" value="UPDATE">
				</td>
			</tr>
		</table>
</table>
<?php
               }

            ?>

</form>
</center>






<br /><br /><br />
<br /><br /><br />

</body>
</html>
<?php
			
    }
    else {
        echo "<script>window.location='index.php'</script>";
    }
?>
