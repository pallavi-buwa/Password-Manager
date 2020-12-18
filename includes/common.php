<?php
$con= mysqli_connect("localhost", "root", "", "password");
if(!isset($_SESSION['email']))
{
session_start();
}
define ("KEY", "PasswordManager1234")
?>

