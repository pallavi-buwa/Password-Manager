<?php

require 'includes/common.php';


$des=mysqli_real_escape_string($con,$_POST['description']);
$p=mysqli_real_escape_string($con,$_POST['password']);

$hash = openssl_encrypt($p, "AES-128-ECB", KEY);

$q="INSERT INTO ".$_SESSION['u']." (description,password)values('$des','$hash')"; 
$r= mysqli_query($con, $q) or die(mysqli_error($con));

$_SESSION['new']="success";

header('location: passwords.php');
?>

