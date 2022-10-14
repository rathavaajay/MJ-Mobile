<?php
session_start();
if($_SESSION['user'])
{
    unset($_SESSION['user']);
}
echo "<script>window.location='login.php'</script>";
?>