<?php
    $con=mysqli_connect("localhost","root","","stockmanagementsystem");
    $q="insert into register(Id,Name,Email,Password,Rpassword)values('NULL','".$_POST['name']."','".$_POST['email']."','".$_POST['pass']."','".$_POST['re_pass']."')";
        $result=mysqli_query($con,$q);
        if($result)
    {
        echo"<script>alert('You are successfully registered....')</script>";

    }
    else {
        echo"<script>alert('something going wrong.....')</script>";
    }
    echo "<script>window.location='login.php'</script>";
?>