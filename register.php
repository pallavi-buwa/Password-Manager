<?php

require 'includes/common.php';

if (isset($_SESSION['email'])) {
    header('location: passwords.php'); 
    
} 
?>

<!DOCTYPE html>

<html>
    <head>
        <title>Register</title>
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
        <br><br><br><br>
        
    <center>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                    <div class="panel-heading">
                            <h4>Sign Up</h4>
                        </div>
                    <div class="panel-body">
                    <form method ="POST" action="register_script.php">
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="name" placeholder="Name" required = "true">
                            <?php if(isset($_GET['n_error']))
                            {?>
                            <div><?php echo $_GET['n_error'];
                            unset($_GET['n_error']);
                            ?></div>
                            <?php } ?>
                        </div>
                        
                        <div class="form-group">
                            <input type="email" class="form-control"  placeholder="Email" name="email" required = "true">
                            <?php if(isset($_GET['e_error']))
                            {?>
                            <div><?php echo $_GET['e_error'];
                            unset($_GET['e_error']);
                            ?></div>
                            <?php }
                            if(isset($_GET['email_error']))
                            {?>
                            <div><?php echo $_GET['email_error'];
                            unset($_GET['email_error']);
                            ?></div>
                            <?php } ?>
                           
                        </div>
                        
                        <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
                        <p>Please enter a password with min. 8 characters. It must include all of the following:<br><ul><li>capital letters</li><li>small letters</li><li>numbers</li><li>special characters</li></ul></p>

                        </div>
                        
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="contact" placeholder="Contact" required = "true">                            <p>Please enter the contact without indentation</p>  
                             <?php if(isset($_GET['c_error']))
                            {?>
                            <div><?php echo $_GET['c_error'];
                            unset($_GET['c_error']);
                            ?></div>
                            <?php } ?>
                        </div>
                        
                        
                        <div class="form-group">
                            <input type="text" class="form-control" name="address" placeholder="Address" required = "true" >
                            <p>Please enter an address without special characters</p> 
                            <?php if(isset($_GET['a_error']))
                            {?>
                            <div><?php echo $_GET['a_error'];
                            unset($_GET['a_error']);
                            ?></div>
                            <?php } ?>
                            
                        </div>
                        
                        <center> <button type="submit" name="submit" class="btn btn-primary">Submit</button></center><br><br>
                        
                    </form>
                    </div>
                    <div class="panel-footer"><p>Already have an account? <a href="login.php">Log In</a></p></div>
                </div>
                </div>
            </div>
        </div>
    </center>
    </body>
</html>


