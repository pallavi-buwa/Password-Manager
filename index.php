<?php
require 'includes/common.php';
if (isset($_SESSION['email'])) 
    {   
        header('location: passwords.php');
    }
    
?>
<!DOCTYPE html>

<html>
    <head>
        
        <title>Home</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
        <div class="navbar navbar-default navbar-fixed-top"> 
           <div class="container">       
               <div class="navbar-header">    
                   <button type="button" class="navbar-toggle" data-toggle="collapse" datatarget="#myNavbar">         
                       <span class="icon-bar"></span>            
                       <span class="icon-bar"></span>           
                       <span class="icon-bar"></span>       
                   </button>           
                   <a class="navbar-brand" href="index.php">Password Manager</a>       
               </div>     
               <div class="collapse navbar-collapse" id="myNavbar">    
                   <ul class="nav navbar-nav navbar-right"> 
                       <li><a href="register.php"><span class="glyphicon glyphicon-user"></span> Sign Up</a></li>        
                       <li><a href="login.php"><span class="glyphicon glyphicon-log-in"></span> Login</a></li>        
                       </ul>     
               </div>   
           </div>
            </div>
            <div class="banner_image">

            <div class="container">

                <div class="banner_content">
                     <h1>Password Manager</h1>
                                <p>
                                    A secure way to store all your passwords 
                                </p>
                    
                                <a class="btn btn-danger" href="register.php" role="button">Sign Up</a>
                </div>

            </div>
        </div>
       
    </body>
</html>
