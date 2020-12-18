<?php

require 'includes/common.php';

if (isset($_SESSION['email'])) {
    header('location:passwords.php'); 
    
} 
?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        <!--jQuery library--> 
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
        <!--Latest compiled and minified JavaScript--> 
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <meta name="viewport" content="width=device-width, initial-scale=1">
        <link rel="stylesheet" href="css/style.css">
        <title>Log In</title>
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
    <center>
        <br>
        <br>
        <br>
        <br>
        <br>
        <div class="container">
            
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>LOGIN</h4>
                        </div>
                        
                        <div class="panel-body">
                            
                            <form method="POST" action="login_script.php">
                                <div class="form-group">
                                    <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                                    <?php if(isset($_GET['email_error']))
                                        {?>
                            
                                    <div>
                                <?php echo $_GET['email_error'];
                            unset($_GET['email_error']);
                            ?></div>
                                    <?php } 
                                    
                                    if(isset($_GET['error']))
                                        {?>
                            
                                    <div>
                                <?php echo $_GET['error'];
                            unset($_GET['error']);
                            ?></div>
                                    <?php } ?>
                                </div>
                                
                                
                                <div class="form-group">
                                    <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
                                    <?php if(isset($_GET['perror']))
                                        {?>
                            
                                    
                                <?php echo $_GET['perror'];
                            unset($_GET['perror']);
                            ?>
                                    
                            <?php } ?>
                                </div>
                                <button type="submit" name="submit" class="btn btn-primary">Login</button><br><br>
                            </form><br>
                        </div>
                        <div class="panel-footer"><p>Don't have an account? <a href="register.php">Register</a></p></div>
                        
                    </div>
                </div>
            </div>
            
        </div>
        
    </center>
         
    </body>
</html>



