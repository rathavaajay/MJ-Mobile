<?php
	session_start();
    if ($_SESSION['user']) 
	{
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Admin panel
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
               <li><a href= "changepassword.php">Change Password</a></li>
               <li><a href="logout.php">Logout</a></li>
            </ul>     	
        
        </div> <!-- end of templatemo_menu -->
       
        
  </div>
</div>


<br /><br /><br />

<center>
<form name="f1" method="post" >
	<?php
					
					include('connection.php');
					if(isset($_POST["ok"]))
					{
						$new=$_POST['newpass'];
						$cn=$_POST['confirmpass'];
						if($new==$cn)
						{
							$q = "update admin_details set password='".$_POST['confirmpass']."' where username='".$_SESSION['user']."'";
							$res = mysqli_query($con,$q);
							if($res)
							{
								echo "<scirpt>alert('Updated')</script>";
								echo "<script>window.location='index.php'</script>";
							}
							else
							{
							echo "<script>alert('something went wrong')</script>";
							}
						}
						else
						{
							echo "<script>alert('new & confirm password does not match')</script>";
						}
					
					}
					
					
					
					$q="select * from admin_details where username='".$_SESSION['user']."'";
					$re = mysqli_query($con,$q);
					$row=mysqli_fetch_array($re);
				?>
<table align="center" border="1" cellpadding="10" cellspacing="10">
			<tr>
				<td align="left" valign="top" colspan="2">
					<center>
					<font size="+1" color="black">Welcome , <?php echo $_SESSION['user'] ?></font>
					
				</center>
				</td>
			</tr>
			
	  <tr>
				<td align="left" valign="top">
					<font size="+1" color="black">New password</font>
				</td>
				<td align="center" valign="top">
					<input type="password" name="newpass" placeholder="New Password" size="50" />
				</td>
			          
            	</td>
	  </tr>
	 <tr>
				<td align="left" valign="top">
					<font size="+1" color="black">Confirm password</font>
				</td>
				<td align="center" valign="top">
					<input type="password" name="confirmpass" placeholder="Current Password" size="50" />
				</td>
			          
            	</td>
	  </tr>
	
	  
	  <tr>
				<td align="center" valign="top">
				<input type="reset" name="rst" value="RESET">
				</td>
				<td align="center" valign="top">
				<input type="submit" name="ok" value="Change Password">
				</td>
			</tr>
		</table>
</table>
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