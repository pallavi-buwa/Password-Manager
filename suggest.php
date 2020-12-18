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
        
        <title>Password Suggester</title>
        
        <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" >
        
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
         
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        
        <link rel="stylesheet" href="css/style.css">
    </head>
    <body>
    <br><br><br><center>
        <h1>Password Suggester</h1>
        <br><br>
        <div class="container">
            <div class="row">
                <div class="col-xs-4 col-xs-offset-4">
                    <div class="panel panel-info" >
                        <div class="panel-heading">
                            <h4>Enter a password to get suggestions</h4>
                        </div>
                        <div class="panel-body">
                    <form method="post" action="suggest_script.php">
                        
                        
                        <div class="form-group">
                        <input type="password" class="form-control" placeholder="Password" name="password" required = "true">
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


