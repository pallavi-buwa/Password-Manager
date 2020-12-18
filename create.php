<?php
require 'includes/common.php';
if (!isset($_SESSION['email'])) 
    {   
        header('location: index.php');
    }
?>
<!DOCTYPE html>

<html>
    <head>
        
        <title>Create Passwords</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <br><br><br><center>
        <h1>Save a new Password</h1>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-primary" >
                        <div class="panel-heading">
                            <h4>Enter the details</h4>
                        </div>
                        <div class="panel-body">
                    <form method="post" action="create_script.php">
                        <div class="form-group">
                            <textarea name="description" placeholder="Enter description" required = "true" rows="4" col="100"></textarea>
                        </div>
                        
                        <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true" pattern="^(?=.*\d)(?=.*[a-z])(?=.*[A-Z])(?!.*\s).*$">
                        </div>
                         <button type="submit" name="submit" class="btn btn-primary">Done</button><br><br>
                            </form>
                            <br>
                        </div>
                            
                    
                </div>
                    <a class="btn btn-danger" href="passwords.php" role="button">Back to Dashboard</a>
            </div>
        </div>
        </div>
    </center>
</body> 
</html>


