
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
                <li><a href="addproduct.php">Add Product</a></li>
                <li><a href= "displayproduct.php">View Product</a></li>
                 <li><a href= "ConfirmOrder.php">Confirm Order</a></li>
			 <li><a href= "changepassword.php">Change password</a></li>
               <li><a href="logout.php">Logout</a></li>
            </ul>     	
        
        </div> <!-- end of templatemo_menu -->
       
        
  </div>
</div>


<br /><br /><br />

<center>
<form name="f1" method="post" style="font-size: medium;color: black;">
<table align="center" border="1" cellpadding="10" cellspacing="10">
						
			<tr>

				<td><font size="+1" color="black">Product Id</font></td>
				<td><font size="+1" color="black">Product Name</font></td>
				<td><font size="+1" color="black">Product Price</font></td>
				<td><font size="+1" color="black">Email</font></td>
				<td><font size="+1" color="black">Phone Number</font></td>
				<td><font size="+1" color="black">Address</font></td>
				<td><font size="+1" color="black">City</font></td>
				<td><font size="+1" color="black">Pincode</font></td>	

	  		</tr>
	  		<?php		
						include('connection.php');
						$query = "select * from confirm_order";
						$res = mysqli_query($con,$query);
						while($row=mysqli_fetch_array($res))
						{
							echo "<tr>";
							echo "<td>".$row['Id']."</td>";
							echo "<td>".$row['Iphone_name']."</td>";
							echo "<td>".$row['Price']."</td>";
							echo "<td>".$row['Email']."</td>";
							echo "<td>".$row['Phone_number']."</td>";
							echo "<td>".$row['Address']."</td>";
							echo "<td>".$row['City']."</td>";
							echo "<td>".$row['Pincode']."</td>";
							echo "</tr>";
						}
				?>			
		</table>
</table>
</form>
</center>







<br /><br /><br />
<br /><br /><br />

</body>
</html>
