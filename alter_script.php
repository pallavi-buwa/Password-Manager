<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) 
    {
    header('location: index.php');
} 

$new_des=mysqli_real_escape_string($con,$_POST['n_description']);

$new_password=mysqli_real_escape_string($con,$_POST['n_password']);

$re_new_password=mysqli_real_escape_string($con,$_POST['r_n_password']);

$v=strcmp($re_new_password, $new_password);

if($v==0)
{
        $id=$_SESSION['id'];
        $hash = openssl_encrypt($new_password, "AES-128-ECB", KEY);
        $up_q="UPDATE ".$_SESSION['u']." SET password='$hash' WHERE pid='$id'";
        $up_q_r= mysqli_query($con, $up_q) or die(mysqli_error($con));
        
        $up_q="UPDATE ".$_SESSION['u']." SET description='$new_des' WHERE pid='$id'";
        $up_q_r= mysqli_query($con, $up_q) or die(mysqli_error($con));
        
        $_SESSION['change']="success";
        
        header('location: passwords.php');
        
    
    
}
else
{
    header('location: alter.php?mismatch=The passwords do not match');
}
?>





